<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Opinie klientów</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
<body>
    <header>
    <h1>Hurtownia spożywcza</h1>
    </header>
    <section> 
        <h2> Opinie naszych klientów</h2>
        <?php 
        // skrypt 1
        $db = new mysqli('localhost','root','','hurtownia');
        $query = $db->prepare('select klienci.zdjecie, klienci.imie, opinie.opinia from klienci join opinie on klienci.id=opinie.Klienci_id where klienci.id IN(2,3);');
        $query->execute();
        $res = $query->get_result();
        while($row=$res->fetch_assoc()) {
            $obraz = $row['zdjecie'];
            $opinia = $row['opinia'];
            $imie = $row['imie'];
            echo "<div class='opinie'>";
            echo "<img src='$obraz' alt='klient'>";
            echo "<q>$opinia</q>";
            echo "<h4>$imie</h4>";
            echo "</div>";

        }
        ?>
    </section>
    <footer>
        <div>
            <h3>Współpracują z nami</h3>
            <a href="http://sklep.pl">Sklep 1</a>
        </div>
        <div>
            <h3>Nasi top klienci</h3>
            <ol type="1">
                <?php 
                //skrypt 2
                $query=$db->prepare('select imie, nazwisko, punkty from klienci ORDER BY punkty DESC LIMIT 3;');
                $query->execute();
                $res=$query->get_result();
                while($row=$res->fetch_assoc()) {
                       $i = $row['imie'];
                       $n = $row['nazwisko'];
                       $p = $row['punkty'];
                       echo "<li>$i,$n,$p pkt. </li>";
                }
                $db->close();
                ?>
            </ol>
        </div>
        <div>
            <h3>Skontaktuj się</h3>
            <p> telefon: 111222333</p>
        </div>
        <div>
            <h3>Autor: PESEL</h3>
        </div>
    </footer>
</body>
</html>