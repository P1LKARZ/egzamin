<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title></title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div id="baner">
        <h2>MÓJ ORGANIZER</h2>
    </div>
    <div id="baner1">
        <form action="organizer.php" method="post">
           <p> Wpis wydarzenia:</p><input type="text" name="przycisk" >
           <input type="submit" value="ZAPISZ">
        </form>
    </div>
    <div id="baner2">
        <img src="logo2.png" alt="Mój organizer">
    </div>
    <div id="glowny">
    <?php
    
    $serwer="localhost";
    $baza="egzaminy6";
    $user="root";
    $pass="";
    $conn=mysqli_connect($serwer,$user,$pass,$baza);
    $pytanie ="SELECT dataZadania, miesiąc, wpis FROM zadania WHERE miesiąc='sierpień'";

            $rezultat = mysqli_query($conn, $pytanie)
            or die("Problem z bazą danych");

            while($row = mysqli_fetch_array($rezultat)){
                echo"
                    <div id='dzien'>
                        <H6>$row[0], $row[1]</H6>
                        <p>$row[2]</p>
                    </div>
                ";
            }
    
    
    ?>
    </div>
    <footer>
Strone wykonał:00000000000
    </footer>
</body>
</html>