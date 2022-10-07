<?php

//DATABASE CONNECTION
$servername = "localhost";
$username = "root";
$password_db = "asdf";
$myDB = "mydb";
$conn = new mysqli($servername,$username,$password_db, $myDB);

// if($conn->connect_error){
//     echo "error ".$conn->connect_error;
// }

$email = "";
$password = "";
$emailerr = "";
$passworderr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty($_POST['email'])){
        $emailerr = " Cannot be empty";
    }
    
}

?>

<html>
<body>
    <H1>CREATE LOGIN PAGE</H1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        EMAIL: <input type="email" name="email"required>
        <span>*<?php echo $emailerr;?></span>
        PASSWORD: <input type="password" name="password" required>
        <span>*<?php echo $passworderr;?></span>
        <button type="submit">LOGIN</button>
    </form>

</body>
</html>

