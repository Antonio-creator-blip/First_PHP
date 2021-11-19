<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3> Buongiorno <?php if ($_POST["sesso"] == "Uomo"){
                                echo "sig. ";
                                echo  $_POST["cognome"];
                                echo " ";
                                echo $_POST["nome"];
                            }else{
                                echo "sig.ra ";
                                echo $_POST["cognome"];
                                echo " ";
                                echo $_POST["nome"];
                            }
        ?></h3>
</body>
</html>