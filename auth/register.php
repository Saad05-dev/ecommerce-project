<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link href='../assets/css/boxicons.min.css' rel='stylesheet'>
    <title>Registration</title>
</head>
<body>
    
    <div class="form-container">
        <form action="register_process.php" method="post" class="auth-form">
            <div class="form-group">
                <!-- First Name 
<i class='bx bx-user'></i>

 Last Name 
<i class='bx bx-user'></i>
 OR 
<i class='bx bxs-user'></i>

 Email 
<i class='bx bx-envelope'></i>
 OR
<i class='bx bx-mail-send'></i>

 Password
<i class='bx bx-lock-alt'></i>
 OR 
<i class='bx bxs-lock'></i>

 Phone
<i class='bx bx-phone'></i>
 OR 
<i class='bx bxs-phone'></i>-->

                <h2>Creating Account</h2>
                <label for="first_name">
                    <span>first name:</span>
                    <div class="input-wrapper"> 
                    <input placeholder="enter first_name" type="text" name="first_name" id="first_name" required>
                    <i class='bx bxs-user'></i>
                    </div>
                </label>
                <label for="last_name">
                    <span>last name:</span> 
                    <div class="input-wrapper"> 
                        <input placeholder="enter last_name" type="text" name="last_name" id="last_name" required>
                        <i class='bx bxs-user'></i>
                    </div>
                </label>
                <label for="email">
                    <span>email:</span> 
                    <div class="input-wrapper">
                        <input type="email" name="email" placeholder="enter email" id="email" required>
                        <i class='bx bxs-envelope'></i>
                    </div>
                </label>
                <label for="password">
                    <span>password:</span> 
                    <div class="input-wrapper"> 
                        <input type="password" name="password" id="password" placeholder="enter password" required>
                        <i class='bx bxs-lock'></i>
                    </div>
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
                    <div class="input-wrapper">
                        <input type="tel" placeholder="enter phone number" name="phone" id="phone">
                        <i class='bx bxs-phone'></i>
                    </div>
                </label>
                <button type="submit" id="submit-btn" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
