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
        pre_r($_GET);
        if (isset($_GET['submit'])){
            echo "Username: ".$_GET['username'].'<br/>';
            //file($_GET);
        }
    ?>
    <form name="Formular" method="GET" action="">			
        
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
    /*
    function file($array){

        echo "<h1>Files</h1>";
        #dopytujeme sa txt pomocou webovej adresy a nazvu txt suboru
        # https://ipaiotbk.azurewebsites.net/sensors.txt

        $sn1 = $_GET["username"];
        $sn2 = $_GET["password"];
        
        $file1 = fopen("./sensors.txt","w") or die("Unable to open file!");
        $text1 = "a=" . $sn1 . " b=" . $sn2;
        
        fwrite($file1, $text1);
        fclose($file1);
        
        $file2 = fopen("./actuator.txt","w") or die("Unable to open file!");
        $text2 = "Value from actuator. Save this value to actuator.txt";
        fwrite($file2, $text2);
        fclose($file2);
        
        $file3 = fopen("./actuator.txt","r") or die ("Subor neexistuje");
        $text3 = fread($file3,filesize("./actuator.txt"));
        echo $text3;
        fclose($file3);
    }
    */
?>