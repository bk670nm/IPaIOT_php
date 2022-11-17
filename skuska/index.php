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
    
    <?php
        
        $sn1 = $_POST["name"];
        $sn2 = $_POST["lastname"];
        //pre_r($sn1, $sn2);
        //abc($sn1, $sn2);
        if (isset($_POST['submit'])){
            //echo "Name: ".$sn1.'<br/>';
            //echo "Lastname: ".$sn2.'<br/>';

            $file1 = fopen("file.txt","w") or die("Unable to open file!");
            $text1 = "a=" . $sn1 . " b=" . $sn2;
            
            fwrite($file1, $text1);
            fclose($file1);

        }
    ?>

    <section>
        <div class="box">
            <div class="form">
                <h1>LOGIN</h1>
                <form name="Formular" method="POST" action="">			
                    <div class="inputBox">
                        <input type="text" name="name" value="" placeholder="Name">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="lastname" value="" placeholder="Lastname">
                    </div>
                    
                    <label class="remember"><input type="checkbox">Remember me</label>
                    <div class="inputBox">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                    <p>Go to <a href="#">file</a></p>
                </form>
            </div>
        </div>
    </section>

</body>
</html>

<?php
    function pre_r( $sn1, $sn2 ){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

?>