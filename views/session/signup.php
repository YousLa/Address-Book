<h1>Registration Form</h1>

<?php if (!empty($error_message)) echo $error_message;  ?>

<form action="?page=signup" method="POST">

    <label for="email">Email</label>
    <input type="text" name="email" id="email">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit" name="register">Register</button>
</form>