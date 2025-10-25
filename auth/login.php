<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Log in</title>
</head>
<body>
    <div class="form-container">
        <form action="login_process.php" method="post" class="auth-form">
            <div class="form-group">
                <h2>Log-in</h2>
                <label for="email">
                    <span>email:</span> <input type="email" placeholder="enter email" required name="email">
                </label>
                <label for="password">
                    <span>password:</span> <input type="password" placeholder="enter password" required name="password">
                </label>
                <button type="submit" id="submit-btn" class="btn">Log-in</button>
            </div>
        </form>
    </div>
</body>
</html>