<html>
    <head>
        <link rel="stylesheet" type="text/css" href="design/css/style.css">
        <title>
           Register
        </title>
    </head>
    <body>
        <div class="gambar">
            <img src="design/images/login.png">
        </div>

        <div class="login">
            <h1>Register</h1>
            <br><br>

            <form action="backend/pregister.php" method="post"><!--jangan lupa diisi tujuan link nya----------------------------------------------->
                <table >
                    <tr><td ><h2>New Email</h2></td></tr>
                    <tr><td ><input type="email" placeholder="Enter Email" name="Email"></td></tr>
                    <tr><td ><h2>password</h2></td></tr>
                    <tr><td ><input maxlength="20" minlength="7" type="password" placeholder="Enter Password" name="Password"></td></tr>
                    <tr><td ><h2>Confirm password</h2></td></tr>
                    <tr><td ><input maxlength="20" minlength="7" type="password" placeholder="Enter Same Password" name="Validpass"></td></tr>
                    <tr> <td style=" text-align: right;"><button type="submit" value="Register" name="register" class="button"> Sign Up</button></td></tr>
                </table>
            </form>
        </div>
    </body>
</html>
