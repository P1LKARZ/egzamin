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
        <div on id="glowny">
  
  <?php
    
    $serwer = "localhost";
    $baza = "egzaminy6";
    $user = "root";
    $pass = "";
    $conn = mysqli_connect($serwer, $user, $pass, $baza);
    $wydarzenie = $_POST['przycisk'];
    $pytanie = "UPDATE zadania SET wpis='$wydarzenie' WHERE dataZadania='2020-08-27'";
    $sql = mysqli_query($conn, $pytanie);
        $pytanie ="SELECT dataZadania, miesiąc, wpis FROM zadania WHERE miesiąc='sierpień'";

            $rezultat = mysqli_query($conn, $pytanie)
            or die("Problem z bazą danych");

            while($kolumna= mysqli_fetch_array($rezultat)){
                echo"
                    <div id='dzien'>
                        <h6 id='naglowek'>$kolumna[0], $kolumna[1]</h6>
                        <p>$kolumna[2]</p>
                    </div>
                ";
            }
            
   
   
   
   
            mysqli_close($conn);
        ?>
    </div>
        <footer>
            <?php
             $serwer = "localhost";
             $baza = "egzaminy6";
             $user = "root";
             $pass = "";
             $conn = mysqli_connect($serwer, $user, $pass, $baza);
                $pytanie='SELECT miesiąc,rok FROM zadania WHERE datazadania="2020-08-27"LIMIT 1';
                $sql=mysqli_query($conn,$pytanie);

                while($kolumna=mysqli_fetch_array($sql))
                {
                    echo"<h1>miesiąc: $kolumna[0],rok: $kolumna[1]</h1><br>";
                }
            


             mysqli_close($conn);
            ?>
Strone wykonał:00000000000
    </footer>
</body>
</html>