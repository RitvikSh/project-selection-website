<!DOCTYPE html>

<html>

<head>
    <title>Project register page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="College, Graphic era University, project">
    <meta name="author" content="Ritvik Sharma">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="images\logo.jpg" />
    <script src="javascript/js.js"></script>
    <script src="javascript/validatename.js"></script>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

# Establishing connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die(">> ERROR CONNECTING TO THE SERVER: " . mysqli_connect_error());
}

$msg = "<br><br>";

if (isset($_POST["submit"])) {
    $studid = $_POST["studid"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $create_datetime = date("Y-m-d H:i:s");

    # Insert query
    $query = "insert into stud values('$studid', '$username','" . md5($password) . "','$create_datetime' )";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Registered successfully")</script>';
    } else {
        echo '<script>alert("Registration process unsuccessful")</script>';
    }
}

# Terminating the connection
mysqli_close($conn);
?>


<body>
    <header class="mainheader">
        <img src="images/logo.png">
        <content id="search">
            <form>
            </form>
        </content>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>



    <div class="container">
        <div class="main">
            <form method="post" action="" autocomplete="off">
                <h1 class="login-title">Registration:</h1>
                <input type="text" name="studid" size="25" placeholder="Student_id" autofocus required />
                <input type="text" name="username" size="25" placeholder="Username" required />
                <input type="password" name="password" size="25" placeholder="Password" required />
                <input type="submit" name="submit" value="Register" />
                <p>Already have an account?<br><a href="login.php">Click to Login</a></p>
            </form>
        </div>
    </div>

    <footer class="mainFooter">
        <p>Copyright &copy<a href="https://www.geu.ac.in/content/geu/en.html">GEU</a> </p>
        <center>
            <a href="http://csitgeu.in/wp/">CSIT GEU</a>
        </center>
    </footer>

    <script type="text/javascript">
        document.title = "Register";
    </script>

</body>

</html>