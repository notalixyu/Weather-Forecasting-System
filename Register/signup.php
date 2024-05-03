<html>
    <head>
    <title>Signup</title>
    </head>

    <body>
    <h2>Signup</h2>
    <form method="post" action="insertUser.php">
        <fieldset>
            <legend>Signup</legend>
            <label for="userEmail">Email:</label> <br />
            <input type="email" name="txtUserEmail"> <br />

            <label for="userName">Username:</label> <br />
            <input type="text" name="txtUserName" > <br />

            <label for="userPass">Password:</label> <br />
            <input type="password" name="txtUserPass"> <br />
            
            <input type="submit" value="Submit" name="detailsSubmit" />

            <input type="reset" value="Clear" />
        </fieldset>
    </form>
    <footer>
        <small><a href="../Login/login.php">Login</a></small>
    </footer>
    </body>
</html>