

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
        
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        

        if (isset(submit)){

            $file1 = fopen("file.txt","w") or die("Unable to open file!");
            $text1 = "name: ".$name ."lastname: ".$lastname;
            
            fwrite($file1, $text1);
            fclose($file1);

        }
    ?>

    <section>
        <div class="box">
            <div class="form">
                <h2>LOGIN</h2>
                <form name="Formular" method="POST" action="">			
                    <div class="inputBox">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="lastname" placeholder="Lastname">
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" placeholder="email@email">
                    </div>
                    <div class="inputBox">
                        <input type="tel" name="tel" placeholder="09xx xxx xxx" pattern="[0-9]{4} [0-9]{3} [0-9]{3}">
                    </div>
                    <div class="inputBox">
                        <input type="number" name="number" placeholder="Favorite number" min="0" max="100">
                    </div>
                    
                    <label class="remember"><input type="checkbox">Remember me</label>
                    <div class="inputBox">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                    <p>Go to <a href="https://ipaiotbk.azurewebsites.net/file.txt">file</a></p>
                </form>
            </div>
        </div>
    </section>

</body>
</html>
