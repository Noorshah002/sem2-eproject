<?php
$conn = new mysqli("localhost", "root", "", "contactpage");

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Static customer ID (Ye login system ke sath dynamic hoga)
$customer_id = 1;

$result = $conn->query("SELECT * FROM contact_table WHERE Customer_Id = $customer_id ORDER BY Contact_Id DESC");

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Messages</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h2 {
            color: #222;
            font-size:3rem;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #000;
            color: #fff;
        }
        tr:hover {
            background: rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .no-reply {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>User Messages</h2>

<table>
    <tr>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Admin Reply</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row["E_Mail"]); ?></td>
            <td><?php echo htmlspecialchars($row["Subject"]); ?></td>
            <td><?php echo htmlspecialchars($row["Message"]); ?></td>
            <td>
                <?php echo $row["Reply"] ? htmlspecialchars($row["Reply"]) : "<span class='no-reply'>No Reply Yet</span>"; ?>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
