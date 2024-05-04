<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
    </head>
    <body>

    <h2>Login</h2>
    <form method="post" action="checkUser.php">
        <fieldset>
            <legend>Signup</legend>

            <label for="userName">Username:</label> <br />
            <input type="text" name="txtUserName" > <br />

            <label for="userPass">Password:</label> <br />
            <input type="password" name="txtUserPass"> <br />
            
            <input type="submit" value="Submit" name="detailsSubmit" />

            <input type="reset" value="Clear" /> <br />
            <span><?php if(isset($_SESSION['message'])) {echo $_SESSION['message'];}?></span>
        </fieldset>
    </form>
    <footer>
        <small><a href="../Register/signup.php">Create an account</a></small>
    </footer>
    </body>
</html>