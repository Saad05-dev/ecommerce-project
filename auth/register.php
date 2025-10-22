<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Creating Account</h2>
    <form action="register_process.php" method="post">
        <label for="first_name">
            first name: <input type="text" name="first_name" id="first_name" required>
        </label>
        <label for="last_name">
            last name: <input type="text" name="last_name" id="last_name" required>
        </label>
        <label for="email">
            email: <input type="email" name="email" id="email" required>
        </label>
        <label for="password">
            password: <input type="password" name="password" id="password" required>
        </label>
        <label for="phone">
            phone: <select name="country-code" id="country-code">
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
            <input type="tel" name="phone" id="phone">
        </label>
    </form>
</body>
</html>
