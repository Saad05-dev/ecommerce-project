<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='../assets/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Log in</title>
</head>
<body>
    <div class="form-container">
    <form action="login_process.php" method="post">
        <div class="form-group">
            <h2>Login</h2>
            <label for="email">
                <span>email:</span>
                <div class="input-wrapper">
                    <input id="email" type="email" placeholder="enter email" required name="email">
                    <i class='bx bxs-user'></i>
                </div>
            </label>
            <label for="password">
                <span>password:</span>
                <div class="input-wrapper">
                    <input id="password" type="password" placeholder="enter password" required name="password">
                    <i class='bx bxs-lock'></i>
                </div>
            </label>
            <button type="submit" id="submit-btn" class="btn">Login</button>
        </div>
    </form>
</div>
</body>
</html>