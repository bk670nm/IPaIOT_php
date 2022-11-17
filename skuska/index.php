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
        if (isset($_GET['submit'])){
            echo "Name: ".$_GET['name'].'<br/>';
            echo "Lastname: ".$_GET['lastname'].'<br/>';
            //pre_r($_GET);
            abc($_GET);
        }
    ?>
    <form name="Formular" method="GET" action="">			
        
        <label for="meno">Name:</label>
        <input type="text" name="name" value="" placeholder="Name">
        
        <br><br>
        <label for="meno">Last name:</label>
        <input type="text" name="lastname" value="" placeholder="Lastname">
        
        <br><br>
        <input type="submit" name="submit" value="Submit">
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
<?php
    function abc($array){

        //echo "<h1>Files</h1>";
        #dopytujeme sa txt pomocou webovej adresy a nazvu txt suboru
        # https://ipaiotbk.azurewebsites.net/sensors.txt

        $sn1 = $_GET["name"];
        $sn2 = $_GET["lastname"];
        
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
        //echo $text3;
        fclose($file3);
    }
    
?>