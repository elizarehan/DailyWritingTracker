<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Account</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <h1>Create an account</h1>
    <form id="registerForm" action="../database/insertUser.php" method="POST">
        <label for="email">Email: </label>
        <input
            name="email"
            type="email"
            required
        />
        <label for="password">Password: </label>
        <input
            name="password"
            type="password"
            required
        />
            
</body>

</html>
