<?php
include 'config.php';

// sql query select all
$result = mysqli_query($db, "SELECT * FROM tbl_users");

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
        $sql = "INSERT INTO tbl_users (Username, Name, Password) VALUES ('$username', '$name', '$password')";
        mysqli_query($db, $sql);
        header("Location: index.php");
    }   
}




if(isset($_POST['Login'])){
    extract($_POST);
    $sql = mysqli_query($db, "SELECT * FROM tbl_users where Username = '$username' and Password = '$password' ");
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

//cancel edit

if(isset($_POST['cancel-edit'])) {
    header('Location: index.php');
}
//edit
$update = false;
if(isset($_GET['edit'])) {
    $ID = $_GET['edit'];
    $update = true;
    $sql = mysqli_query($db, "SELECT * FROM tbl_users WHERE ID ='$ID'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row)) {
        $ID = $row['ID'];
        $username = $row['Username'];
        $name = $row['Name'];
    }
}

//update

if(isset($_POST['update'])) {
    $ID = $_POST['ID'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $sql = "UPDATE tbl_users SET Username= '$username', Name = '$name' WHERE ID = '$ID'";
    mysqli_query($db, $sql);
    header ('Location: index.php');
}

//delete

if(isset($_GET['del'])) {
    $ID = $_GET['del'];
$sql = "DELETE FROM tbl_users WHERE ID = '$ID'";
mysqli_query($db, $sql);
header('Location: index.php');
}



?>

<!-- $sql = mysqli_query($db, "SELECT * FROM tbl_calderon where Username = '$username' and Password = '$password' ");
$row = mysqli_fetch_array($sql); -->