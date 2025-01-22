<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="resetpwd.css">
    <script>
        function validatePasswords(event) {
            const newPassword = document.getElementById('new_password').value.trim();
            const confirmPassword = document.getElementById('confirm_password').value.trim();

            if (newPassword !== confirmPassword) {
                alert('Confirm Passwords do not match with Password. Please try again.');
                event.preventDefault(); 
            }
        }
    </script>
</head>
<body>
    <div class="reset_password_container">
        <div class="reset_password_box">
            <h1>Reset Password</h1>
            <p>Set a new password for your account.</p>

            <form action="login.php" method="GET" onsubmit="validatePasswords(event)">
                <label for="email">Registered Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter registered email" required>

                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password" required>

                <button type="submit">Reset Password</button>
            </form>
        </div>
    </div>
</body>
</html>
