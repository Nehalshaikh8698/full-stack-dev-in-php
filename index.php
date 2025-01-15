<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Assignment UI</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #4CAF50;
            padding: 10px 20px;
            color: white;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        section {
            margin: 20px auto;
            max-width: 800px;
        }

        #contactForm {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #contactForm label {
            text-align: left;
            font-weight: bold;
        }

        #contactForm input, #contactForm textarea, #contactForm button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }

        #contactForm button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #contactForm button:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            border-top: 1px solid #ddd;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');

            form.addEventListener('submit', function(event) {
                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const message = document.getElementById('message').value.trim();

                // Basic Validation
                if (!name) {
                    alert('Name is required!');
                    event.preventDefault();
                    return;
                }

                if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    alert('Please enter a valid email address!');
                    event.preventDefault();
                    return;
                }

                if (!message) {
                    alert('Message is required!');
                    event.preventDefault();
                    return;
                }

                alert('Form submitted successfully!');
            });

            // Example interactivity: Change header color on scroll
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 50) {
                    header.style.backgroundColor = '#367c39';
                } else {
                    header.style.backgroundColor = '#4CAF50';
                }
            });
        });
    </script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h1>Welcome to the Full Stack Assignment UI</h1>
            <p>Showcasing HTML, CSS, JavaScript, and PHP integration.</p>
        </section>

        <section id="about">
            <h2>About</h2>
            <p>This UI demonstrates responsive design and logical JavaScript programming elements.</p>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <form id="contactForm" method="POST" action="process.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Full Stack Assignment. All Rights Reserved.</p>
    </footer>
</body>
</html>
