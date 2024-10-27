<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #6a1b9a;
        }
        .header .nav-links {
            display: flex;
            gap: 15px;
        }
        .header .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }
        .header .buttons {
            display: flex;
            gap: 10px;
        }
        .header .buttons a {
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
        }
        .header .login {
            background-color: transparent;
            color: #6a1b9a;
            border: 1px solid #6a1b9a;
        }
        .header .try-free {
            background-color: #6a1b9a;
            color: #fff;
        }

        /* Contact Form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
            margin-top: -50px; /* Adjust to keep form centered after adding header */
        }
        .contact-section {
            display: flex;
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .contact-info {
            flex: 1;
            padding-right: 20px;
        }
        .contact-form {
            flex: 1;
            padding-left: 20px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .contact-form button {
            width: 100%;
            padding: 10px;
            background-color: #6a1b9a;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #5c0d88;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<div class="header">
    <div class="logo">Byte Care</div>
    <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
    <div class="buttons">
        <a href="/login" class="login">Login</a>
        <a href="#" class="try-free">Try Free</a>
    </div>
</div>

<!-- Contact Section -->
<div class="container">
    <div class="contact-section">
        <div class="contact-info">
            <h2>Contact us</h2>
            <p>Need to get in touch with us? Fill out the form with your inquiry or feel free to reach out via email.</p>
        </div>
        <div class="contact-form">
            <form>
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="What can we help you with?" rows="4" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
