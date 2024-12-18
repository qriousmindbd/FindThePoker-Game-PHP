<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poker Game Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="index.php">
    <header>
        <img src="images/icon-joker-hat-48.png"/>
        <h1>Find The Poker</h1>
    </header>
    </a>

    <div class="container">
        <h1>Welcome to Poker Game!</h1>
        <p>Sign up to start playing.</p>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="non-binary">Non-Binary</option>
                </select>
            </div>
            <div class="form-group">
                <label for="birthDate">Birth Date:</label>
                <input type="date" name="birthDate" id="birthDate" required>
            </div>
            <div class="form-group">
                <label for="profilePicture">Profile Picture:</label>
                <input type="file" name="profilePicture" id="profilePicture" accept="image/*">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Register" class="btn">
            </div>
        </form>
    </div>

    <div class="footer">
        &copy; 2024 Find The Poker. All rights reserved.
    </div>

</body>
</html>