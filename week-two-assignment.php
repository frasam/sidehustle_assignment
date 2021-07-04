

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Authentication</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo 'enter a valid email'; echo '<br>';

    }
    
    if(!preg_match('/^[A-Za-z]+([\ A-Za-z]+)*/' , $_POST['Fname'])){
        echo 'enter your first name correctly'; echo '<br>';
    }
    if(!preg_match('/^[A-Za-z]+([\ A-Za-z]+)*/' , $_POST['Lname'])){
        echo 'enter your last name correctly'; echo '<br>';
    }
    if(!preg_match('/^[A-Za-z]+([\ A-Za-z]+)*/' , $_POST['gender'])){
        echo 'enter your correct gender'; echo '<br>';
    }
}


?>
    
    <form action="process.php" method="post">
    First Name: <input type="text" name="Fname" value=""> <br>
    Email: <input type="text" name="email" value=""> <br>
    Last Name: <input type="text" name="Lname" value=""> <br>
    Gender: <input type="text" name="gender"> <br>
    <input type="submit" value="submit" name="submit">

    
    
    
    </form>
</body>
</html>