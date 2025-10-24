<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/register.css">
    <title>Registration</title>
</head>
<body>
    <div class="form-container">
        <form action="register_process.php" method="post" class="auth-form">
            <div class="form-group">
                <h2>Creating Account</h2>
                <label for="first_name">
                    <span>first name:</span> <input placeholder="enter first_name" type="text" name="first_name" id="first_name" required>
                </label>
                <label for="last_name">
                    <span>last name:</span> <input placeholder="enter last_name" type="text" name="last_name" id="last_name" required>
                </label>
                <label for="email">
                    <span>email:</span> <input type="email" name="email" placeholder="enter email" id="email" required>
                </label>
                <label for="password">
                    <span>password:</span> <input type="password" name="password" id="password" placeholder="enter password" required>
                </label>
                <label for="phone">
                    <span>phone:</span> <select name="country-code" id="country-code">
                        <option value="+1">🇺🇸 +1</option>
                        <option value="+44">🇬🇧 +44</option>
                        <option value="+91">🇮🇳 +91</option>
                        <option value="+49">🇩🇪 +49</option>
                        <option value="+33">🇫🇷 +33</option>
                        <option value="+61">🇦🇺 +61</option>
                        <option value="+86">🇨🇳 +86</option>
                        <option value="+81">🇯🇵 +81</option>
                        <option value="+55">🇧🇷 +55</option>
                        <option value="+7">🇷🇺 +7</option>
                        <option value="+212">🇲🇦 +212</option>
                    </select> 
                    <input type="tel" placeholder="enter phone number" name="phone" id="phone">
                </label>
                <button type="submit" id="submit-btn" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
