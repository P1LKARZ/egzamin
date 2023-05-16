
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja wszystkich smaków</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>

    <div id="baner"><h1>Witamy w restauracji "Wszystkie Smaki"</h1></div>
    <div id="panel_lewy"><img src="menu.jpg" alt="Nasze danie"></div>
    <div id="panel_prawy">
        <h4>U nas dobrze zjesz</h4>
        <ol>
            <li>Obiady po 40zł</li>
            <li>Przekaski od 10 zł</li>
            <li>kolacje od 20zł</li>
        </ol>
    </div>
    <div id="dol">
    <?php
$user="root";
$serwer="localhost";
$haslo="";
$baza="marcel";
$conn=mysqli_connect($serwer,$user,$haslo,$baza);
if(mysqli_connect_errno())
        {
            echo "BŁĄD POŁĄCZENIA Z BAZĄ";
        }
        $data1=$_POST['datka'];
        $osoby=$_POST['osoby'];
        $telefon=$_POST['telefon']; 
        if(isset($data1))
{
        $pytanie="INSERT INTO rezerwacja(data1,osoby,telefon) VALUES($data1,$osoby,$telefon)";
 $sql=mysqli_query($conn,$pytanie);
echo"dodano rezerwacje do bazy";
}
else
{
    echo "nie dodano rekordu do bazy";
}

        ?>
    </div>
    <footer>
        Strone internetowa opracowal:00000000000
    </footer>

</body>
</html>