<?php
$conn = new mysqli("localhost", "root", "", "hurtownia");
$result1 = $conn->query("SELECT zdjecie, imie, opinia FROM Klienci JOIN opinie ON klienci.id = opinie.Klienci_id WHERE typy_id IN (2, 3);");
$result2 = $conn->query("SELECT imie, nazwisko, punkty FROM klienci ORDER BY punkty DESC LIMIT 3;");
$conn->close();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl3.css">
    <title>Opinie klientów</title>
</head>
<body>
    <header>
        <h1>Hurtownia spożywcza</h1>
    </header>
    <main>
        <h2>Opinie naszych klientów</h2>
        <!-- skrypt 1 -->
        <?php
        while ($row = $result1->fetch_row()) {
            echo <<< CMT
            <section class="opinion">
                <img src="$row[0]" alt="klient">
                <blockquote>$row[2]</blockquote>
                <h4>$row[1]</h4>
            </section>
            CMT;
        }
        ?>
    </main>
    <footer>
        <section class="f1">
            <h3>Współpracują z nami</h3>
            <a href="http://sklep.pl/">Sklep 1</a>
        </section>
        <section class="f2">
            <h3>Nasi top klienci</h3>
            <ol>
                <!-- skrypt 2 -->
                <?php
                while ($row = $result2->fetch_row()) {
                    echo "<li>$row[0] $row[1], $row[2] pkt.</li>";
                }
                ?>
            </ol>
        </section>
        <section class="f3">
            <h3>Skontaktuj się</h3>
            <p>telefon: 111222333</p>
        </section>
        <section class="f4">
            <h3>Autor: lkata</h3>
        </section>
    </footer>
</body>
</html>