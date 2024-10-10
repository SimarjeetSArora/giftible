<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .contact-header {
            background-color: #343a40;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .contact-form {
            margin-top: 40px;
        }
        .contact-form input,
        .contact-form textarea {
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 40px;
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 5px;
        }
        .contact-info h5 {
            margin-bottom: 20px;
        }
        .social-icons a {
            margin: 0 10px;
            color: #343a40;
            font-size: 24px;
        }
        .map-container {
            margin-top: 40px;
            height: 400px;
        }
    </style>
</head>
<body>

<header class="contact-header">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you! Please fill out the form below and we'll get in touch with you shortly.</p>
</header>

<div class="container contact-form">
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <div class="col-md-6 contact-info">
            <h5>Contact Information</h5>
            <p><strong>Address:</strong> 123 E-commerce St, Shopping City, SC 12345</p>
            <p><strong>Phone:</strong> (123) 456-7890</p>
            <p><strong>Email:</strong> support@ecommerce.com</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container map-container">
    <h5>Our Location</h5>
    <!-- Google Map Embed -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019546377333!2d-122.419415484681!3d37.77492927975916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808581e4dd5a6369%3A0xf0c7f4bfa96e1e76!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1621963185784!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font Awesome for social icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
