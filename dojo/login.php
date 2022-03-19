<html>
    <head>
        <link rel="stylesheet" type="text/css" href="design/css/style.css">
        <title>
            sign in
        </title>
    </head>
    <body>
        <div class="gambar">
            <img src="design/images/login.png">
        </div>

        <div class="login">
            <h1>Sign In</h1>
            <br><br>

            <form action="backend/plogin.php" method="post">
                <table >
                    <tr><td colspan="2"><h2>Email</h2></td></tr>
                    <tr><td colspan="2"><input type="email" placeholder="Enter Email" name="Email"></td></tr>
                    <tr><td colspan="2"><h2>password</h2></td></tr>
                    <tr><td colspan="2"><input maxlength="20" minlength="7" type="password" placeholder="Enter Password" name="Password"></td></tr>
                    <tr><td><a href="#">forget password</a></td> <td style=" text-align: right;"><button type="submit" value="Login" name="login" class="button"> Sign In</button></td></tr>
                </table>
            </form>
        </div>
    </body>
</html>
