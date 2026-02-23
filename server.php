<?php
include 'config.php';

// sql query select all
$result = mysqli_query($db, "SELECT * FROM tbl_calderon");

// Submit Button
if(isset ($_POST['Submit'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    if(empty($username) || empty($password) )
    {
        echo 'Please input Username and Password';
    }

    else
    {
        $sql = "INSERT INTO tbl_calderon (Username, Name, Password) VALUES ('$username', '$name', '$password')";
        mysqli_query($db, $sql);
        header("Location: index.php");
    }   
}




if(isset($_POST['Login'])){
    extract($_POST);
    $sql = mysqli_query($db, "SELECT * FROM tbl_calderon where Username = '$username' and Password = '$password' ");
    $row = mysqli_fetch_array($sql);
    if(is_array($row)){
        $COOKIE['username'] = $row['Username'];
        setcookie('Username', $username, time () + (86400 * 30));
        header("Location: index.php");
    } else {
        echo "Invalid Username and Password!";
    }
}

if (isset($_POST['Register'])) {
    header("Location: register.php");
}



?>

<!-- $sql = mysqli_query($db, "SELECT * FROM tbl_calderon where Username = '$username' and Password = '$password' ");
$row = mysqli_fetch_array($sql); -->