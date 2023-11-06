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
    <script src="javascript/login.js"></script>
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
session_start();

if (isset($_POST["submit"])) {
    $studid = $_POST["studid"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $create_datetime = date("Y-m-d H:i:s");

    # Insert query
    $query = "select * from `stud` where stud_id='$studid'
            and password='" . md5($password) . "'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['studid'] = $studid;
        // Redirect to user projects page
        header("Location:project.php");
    } else {
        echo '<script>alert("Login unsuccessful")</script>';
    }
} else {
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
                <li><a href="registration.php">Register</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>



    <div class="container">
        <div class="main">
            <form method="post" action="" autocomplete="off">
                <h1 class="login-title">Login:</h1>
                <input type="text" name="studid" size="25" placeholder="Student_id" autofocus required />
                <input type="password" name="password" size="25" placeholder="Password" required />
                <input type="submit" name="submit" value="Login" />
                <p>Don't have an account?<br><a href="registration.php">Register</a></p>
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
        document.title = "Login";
    </script>

</body>

</html>