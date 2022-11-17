<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>LOGIN</h1>
    <?php
        //pre_r($_POST);
        if (isset($_POST['submit'])){
            echo "Username: ".$_POST['username'].'<br/>';
        }
    ?>
    <form name="Formular" method="POST" action="">			
        
        <label for="meno">Username:</label>
        <input type="text" name="username" value="">
        
        <br><br>
        <label for="meno">Password:</label>
        <input type="password" name="password" value="">
        
        <br><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>

</body>
</html>

<?php
    function pre_r( $array ){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>