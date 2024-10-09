<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <header>
    <h1>Biblioteka w Książkowicach Wielkich</h1>
    </header>
    <main>
   <div id="lewy">
<h3>dzieła autorów:</h3>
<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "biblioteka";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
    }
    $sql = "SELECT imie, nazwisko FROM autorzy"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<ol>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row["imie"]) . " " . htmlspecialchars($row["nazwisko"]) . "</li>";
        }
     echo "</ol>"; 
    } else {
        echo "Brak wyników.";
    }
    $conn->close();
    ?>
   </div>
   <div id="srodek">
 <h3>ul. Czytelnicza 25, Książkowice&nbsp;Wielkie</h3>
 <a href="mailto:sekretarka@biblioteka.pl"></a><p>Napisz do nas</p></a>
 <img src=" biblioteka.png" alt="ksiazki">
   </div>
   <div id="prawy">
    <div class="gora">
       <h3>Dodaj czytelnika</h3>
       <form action="biblioteka.php" method='post'>
   <label for="FirstName">Imie</label><br>
   <input type="text" name="FirstName" id="FirstName"><br>
   <label for="LastName">Nazwisko</label><br>
   <input type="text" name="LastName" id="LastName"><br>
   <label for="symbol">symbol</label><br>
   <input type="number" name="symbol" id="symbol">
    <input type="submit" value="Wyslij">

       </form>
    </div>
    <div class="dol">
    </div>
   </div>
    </main>
    <footer>
<p>Projekt strony: 0000000000000</p>
    </footer>
</body>
</html>