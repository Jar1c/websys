<?php 
include 'server.php';

   if(!isset($_COOKIE [ 'Username'])) {
    header("Location: login.php");
   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <br>
    <table class="table table-striped container table-dark">
    <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Name</th>
    <th>Password</th>
    </tr>
    <?php 
	while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['Username']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Password']; ?></td>
    </tr>
    <?php } ?>
    </table>

    <div class="container">
        <form action="server.php" method="POST">
            <label>Username: </label>
            <label><?php echo $_COOKIE['Username'];?></label>
            <input type="submit" class="btn btn-outline-danger" value="Logout" name="Logout">
        </form>
    </div>

 
</body>
</html>