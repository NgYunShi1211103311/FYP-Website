<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
    <script>
        function validateSignupForm(event) {
            // Get form field values
            const name = document.getElementById('name').value.trim();
            const studentID = document.getElementById('studentID').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirm_password').value.trim();

            // Check if all fields are filled
            if (!name || !studentID || !email || !password || !confirmPassword) {
                alert('All fields are required. Please fill them in.');
                event.preventDefault(); // Stop form submission
                return;
            }

            // Check if passwords match
            if (password !== confirmPassword) {
                alert('Passwords do not match. Please try again.');
                event.preventDefault(); // Stop form submission
            }
        }
    </script>
</head>
<body>
    <div class="signup_container">
        <div class="signup_box">
            <h1>Sign Up</h1>
            <p>Access your account</p>

            <form action="login.html" method="GET" onsubmit="validateSignupForm(event)">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
                <label for="studentID">Student ID:</label>
                <input type="text" id="studentID" name="studentID" placeholder="Enter Your Student ID" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
                <label for="confirm_password">Confirm Your Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Your Password" required>
                <button type="submit">Confirm</button>
            </form>
        </div>
    </div>
</body>
</html>
