<!DOCTYPE html>
<html>

<head>

</head>
<title>Login</title>
<style>
    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;

    }

    .form {

        position: relative;
        z-index: 1;

        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }

    .form button:hover,
    .form button:active,
    .form button:focus {
        background: #43A047;
    }

    .form .message {
        margin: 15px 0 0;
        color: whitesmoke;
        font-size: 22px;
    }

    .form .message a {
        color: white;
        text-decoration: none;
    }

    .form .register-form {
        display: none;
    }

    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }

    .container:before,
    .container:after {
        content: "";
        display: block;
        clear: both;
    }

    .container .info {
        margin: 50px auto;
        text-align: center;
    }

    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }

    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }

    .container .info span a {
        color: #000000;
        text-decoration: none;
    }

    .container .info span .fa {
        color: #EF3B3A;
    }

    body {
        /* fallback for old browsers */
        background: -webkit-linear-gradient(right, #76b852, #8DC26F);
        background: -moz-linear-gradient(right, #76b852, #8DC26F);
        background: -o-linear-gradient(right, #76b852, #8DC26F);
        background: linear-gradient(to left, #76b852, #8DC26F);
        background: url("login_photo.jpg");
        width: 99%;
        height: auto;
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

</style>

<body>

    <div class="login-page">
        <div class="form">
            <form class="login-form" method="post">
                <input type="text" placeholder="username" name="UName" required>
                <input type="text" placeholder="First name" name="FName" required>
                <input type="text" placeholder="Last Name" name="LName" required>
                <input type="password" placeholder="password" name="password" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="text" placeholder="Contact No" name="contactno" required>
                <button type="submit" name="submit">Done!</button>
                <h5 style="color:white">Already Have an Account?</h5>
                <a href="arafat_login.php" style="color:white">Back To Login</a>
            </form>

        </div>
    </div>
    <?php
    $firstname="";
$lastname="";
$username="";
$password="";
$contactno="";
$email="";
$id=0;
// Create connection
$conn = mysqli_connect("localhost", "root", "", "webtech");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
if(isset($_POST["submit"]))
{ 
$firstname=$_POST['FName'];
$lastname=$_POST['LName'];
$username=$_POST['UName'];
$password=$_POST['password'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];

$sql = "INSERT INTO userinfo  VALUES ('','$firstname','$lastname','$username','$password','".$contactno."','$email')";

if (mysqli_query($conn, $sql)) 
{
    ?>
        <script type="text/javascript">
            alert('Account Created!');

        </script>
        <?php
} else {
    ?>
            <script type="text/javascript">
                alert('Not Created');

            </script>
            <?php
}

mysqli_close($conn);
}

?>
</body>

</html>
