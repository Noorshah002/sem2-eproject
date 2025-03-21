<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $conn = new mysqli("localhost", "root", "", "contactpage");

        if ($conn->connect_error) {
            die("Database Connection Failed: " . $conn->connect_error);
        }

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO contact_table (Customer_Id, E_Mail, Subject, Message) VALUES (?, ?, ?, ?)");
        $customer_id = 1; // 
        $subject = "Contact Form Submission";
        $stmt->bind_param("isss", $customer_id, $email, $subject, $message);

        if ($stmt->execute()) {
            echo "<script>alert('Message sent successfully!'); window.location.href='contect.php';</script>";
        } else {
            echo "<script>alert('Error! Please try again.');</script>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<script>alert('All fields are required!');</script>";
    }
}
?>




<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>



<style>

.row {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
}

/* Column for form */
.col-lg-7 {
  flex: 1 1 60%; 
}

/* Column for image */
.col-lg-5 {
  flex: 1 1 35%; 
}

/* Image wrapper */
.img-wrap {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.img-wrap img {
  max-width: 100%;
  height: 70%;
  border-radius: 1rem;
}

/* Form container */
.form-container1 {
    width:1300px;
  background: white;
  padding: 5rem 5rem;
  margin-left:7.5rem;
  border-radius: 1rem;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.28);
  font-family: system-ui, -apple-system, sans-serif;
}

h1 {
  font-size: 2rem;
  text-align: center;
  margin-top: 1.5rem;
  color: #111827;
}

.form-group {
  margin-bottom: 1.5rem;
  position: relative;
}

label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 500;
}

input,
textarea {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #d1d5db;
  border-radius: 0.5rem;
  font-size: 1rem;
  transition: all 0.15s ease;
}

input:focus,
textarea:focus {
  outline: none;
  border-color: var(--primary);
  box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

.error-message {
  color: red;
  font-size: 0.875rem;
  margin-top: 0.25rem;
  display: none;
}

.checkbox-group {
  display: flex;
  align-items: start;
  gap: 0.75rem;
  margin-top: 1rem;
}

.checkbox-group input[type="checkbox"] {
  width: auto;
  margin-top: 0.25rem;
}

.checkbox-group label {
  font-size: 0.875rem;
  color: var(--gray);
}

button {
  background: black;
  color: white;
  padding: 0.75rem 1.5rem;
  border: none;
  border-radius: 0.5rem;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.15s ease;
}

button:hover {
  background: rgb(110, 110, 110);
}

.privacy-notice {
  font-size: 0.875rem;
  color: var(--gray);
  margin-top: 2rem;
  padding-top: 1rem;
  border-top: 1px solid #e5e7eb;
}
    /* Centering the map */
	#map {
            height: 500px;
            width: 800px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.49);
        }
        .map-container {
            position: relative;
			top:5rem;
            display: flex;
            justify-content: center;
            align-items: center;
			margin:auto;
			width:90vw;
            height: 80vh;
        }

        .we-help-section {
  padding: 7rem 0; }
  .we-help-section .imgs-grid {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: (1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr);
    grid-template-columns: repeat(27, 1fr);
    position: relative;
}

    .we-help-section .imgs-grid:before {
      position: absolute;
      content: "";
      width: 255px;
      height: 217px;
      background-image: url("../images/dots-green.svg");
      background-size: contain;
      background-repeat: no-repeat;
      -webkit-transform: translate(-40%, -40%);
      -ms-transform: translate(-40%, -40%);
      transform: translate(-40%, -40%);
      z-index: -1; }
    .we-help-section .imgs-grid .grid {
      position: relative; }
      .we-help-section .imgs-grid .grid img {
        border-radius: 20px;
        max-width: 100%; }
      .we-help-section .imgs-grid .grid.grid-1 {
        -ms-grid-column: 1;
        -ms-grid-column-span: 18;
        grid-column: 1 / span 18;
        -ms-grid-row: 1;
        -ms-grid-row-span: 27;
        grid-row: 1 / span 27; }
      .we-help-section .imgs-grid .grid.grid-2 {
        -ms-grid-column: 19;
        -ms-grid-column-span: 27;
        grid-column: 19 / span 27;
        -ms-grid-row: 1;
        -ms-grid-row-span: 5;
        grid-row: 1 / span 5;
        padding-left: 20px; }
      .we-help-section .imgs-grid .grid.grid-3 {
        -ms-grid-column: 14;
        -ms-grid-column-span: 16;
        grid-column: 14 / span 16;
        -ms-grid-row: 6;
        -ms-grid-row-span: 27;
        grid-row: 6 / span 27;
        padding-top: 20px; }

.custom-list {
  width: 100%; }
  .custom-list li {
    display: inline-block;
    width: calc(50% - 20px);
    margin-bottom: 12px;
    line-height: 1.5;
    position: relative;
    padding-left: 20px; }
    .custom-list li:before {
      content: "";
      width: 8px;
      height: 8px;
      border-radius: 50%;
      border: 2px solid #3b5d50;
      position: absolute;
      left: 0;
      top: 8px; }



    </style>

</head>

<body>

	<!-- Start Contact Us Hero Section -->
	<div class="hero"
		style="background: linear-gradient(to right, rgba(0, 0, 0, 0.37), rgba(0, 0, 0, 0.5)), url('images/contect2.webp'); background-size: cover; background-position: center; color: white; padding: 150px 0; min-height: 80vh;" >
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-6">
				<div class="intro-excerpt" style="margin-top: 50px; text-align: center;">
    <p class="mb-4" style="font-size: 3rem; color: white; position: absolute; top: 20rem; width: 80%; left: 10%; font-family: 'Poppins', sans-serif; word-wrap: break-word; line-height: 2;">
        <span id="animated-text"></span>
    </p>
</div>

<script>
 const text = `Need help? We're here to assist you!`;  

    let i = 0;
    function typeEffect() {
        if (i < text.length) {
            let char = text.charAt(i) === "\n" ? "<br>" : text.charAt(i);
            document.getElementById("animated-text").innerHTML += char;
            i++;
            setTimeout(typeEffect, 50);
        }
    }
    window.onload = typeEffect;
</script>

				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Us Hero Section -->

<!-- Start We Help Section -->
<div class="we-help-section" style=" position: relative;
			top:5rem;">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-7 mb-5 mb-lg-0">
								<div class="imgs-grid" data-aos="fade-up"
								data-aos-duration="3000">
									<div class="grid grid-1"><img src="images/greeting card2.jpg" alt="Untree.co"></div>
									<div class="grid grid-2"><img src="images/doll3.webp" alt="Untree.co"></div>
									<div class="grid grid-3"><img src="images/beauty.jpg" alt="Untree.co"></div>
								</div>
							</div>
							<div class="col-lg-5 ps-lg-5">
								<h2 class="section-title mb-4" style="color: #3b5d50 ;">We Help You Create a Modern &
									Stylish Interior</h2>
								<p>Transform your space with artistic elegance and timeless charm. Whether you're
									decorating your home or workspace, our handpicked collection adds a touch of
									creativity and sophistication.</p>

								<ul class="list-unstyled custom-list my-4">
									<li><strong style="color: black;">✔ Premium Craftsmanship </strong>– Each piece is
										designed to blend seamlessly with modern interiors.</li>
									<li><strong style="color: black;">✔ Versatile & Aesthetic</strong> – From wall art
										to décor essentials, find products that suit every style.</li>
							

								</ul>
								<a href="shop.html">
									<button class="btn">
										Shop Now
									</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End We Help Section -->



<!-- contect-form-start-->

<div class=" form-container1">
  <div class="row">
    <div class="col-lg-7">
      <h1>Contact Form</h1>
      <form id="contactForm" action="contect.php" method="POST">
        <div class="form-group">
          <label for="name">Full Name *</label>
          <input type="text" id="name" name="name">
          <div id="nameError" class="error-message">Please enter your full name</div>
        </div>

        <div class="form-group">
          <label for="email">Email Address *</label>
          <input type="email" id="email" name="email">
          <div id="emailError" class="error-message">Please enter a valid email address</div>
        </div>

        <div class="form-group">
          <label for="message">Message *</label>
          <textarea id="message" name="message"></textarea>
          <div id="messageError" class="error-message">Please enter your message</div>
        </div>

        <div class="checkbox-group">
          <input type="checkbox" id="marketing" name="marketing">
          <label for="marketing">
            I would like to receive marketing communications about your products and services
          </label>
        </div>

        <button type="submit">Submit Form</button>
      </form>
    </div>

    <div class="col-lg-5">
      <div class="img-wrap">
        <img src="images/shop.jpg" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<!-- End Contact Form -->
 <script>
document.getElementById("contactForm").addEventListener("submit", function (e) {
  let hasErrors = false;

  function validateField(field, errorId, minLength) {
    const value = field.value.trim();
    const errorMessage = document.getElementById(errorId);

    if (value.length < minLength) {
      field.style.border = "1px solid red";
      errorMessage.style.display = "block";
      hasErrors = true;
    } else {
      field.style.border = "1px solid green";
      errorMessage.style.display = "none";
    }
  }

  validateField(document.getElementById("name"), "nameError", 2);
  validateField(document.getElementById("email"), "emailError", 5);
  validateField(document.getElementById("message"), "messageError", 6);

  if (hasErrors) {
    e.preventDefault(); // Form submit hone se rokna agar errors hain
  }
});
</script>
<!-- End Contact Form -->


<!-- Google Map -->
<div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26466167.642274346!2d60.8729730150764!3d30.375321060377687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d359db9c05%3A0x1d01a3e4c79cba9d!2sPakistan!5e0!3m2!1sen!2s!4v1710480000000" 
        width="800" 
        height="500" 
        style="border:0; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>
<!-- Google Map End -->



	



	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>