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
        
        $sn1 = $_POST["name"];
        $sn2 = $_POST["lastname"];
        pre_r($sn1, $sn2);
        //abc($sn1, $sn2);
        if (isset($_POST['submit'])){
            echo "Name: ".$sn1.'<br/>';
            echo "Lastname: ".$sn2.'<br/>';
        }
    ?>
    <form name="Formular" method="POST" action="">			
        
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
    function pre_r( $sn1, $sn2 ){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    function abc($sn1, $sn2){

        //echo "<h1>Files</h1>";
        #dopytujeme sa txt pomocou webovej adresy a nazvu txt suboru
        # https://ipaiotbk.azurewebsites.net/sensors.txt

        
        
        $file1 = fopen("file.txt","w") or die("Unable to open file!");
        $text1 = "a=" . $sn1 . " b=" . $sn2;
        
        fwrite($file1, $text1);
        fclose($file1);

    }
    
?>