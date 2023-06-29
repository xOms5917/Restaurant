<!DOCTYPE html>
<html>
<head>
    <title>Contact - Restaurant Website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="contact">
        <h2>Contact Us</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>
            <input type="submit" value="Send Message">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];

    // Perform any additional processing or actions with the submitted data

    // Example: Send an email notification
                $to = "info@restaurant.com";
                $subject = "New Contact Form Submission";
                $body = "Name: $name\nEmail: $email\nMessage: $message";
                $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                echo "<p>Thank you, $name! Your message has been sent.</p>";
            } else {
                echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
            }
            }
        ?>

    </section>
    <footer>
        <p>&copy; 2023 Restaurant Name. All rights reserved.</p>
    </footer>
</body>
</html>
