<?php
    session_start();
    $bladLogin = ''; // Zmienna dla błędu logowania
    $bladHaslo = ''; // Zmienna dla błędu hasła

    // Obsługa błędów, jeśli przekierowano po błędnym logowaniu
    if (isset($_SESSION['bladLogin'])) {
        $bladLogin = $_SESSION['bladLogin'];
        unset($_SESSION['bladLogin']); // Usunięcie błędu z sesji po jego wyświetleniu
    }

    if (isset($_SESSION['bladHaslo'])) {
        $bladHaslo = $_SESSION['bladHaslo'];
        unset($_SESSION['bladHaslo']); // Usunięcie błędu z sesji po jego wyświetleniu
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <link rel="stylesheet" href="../../Style/StylGlobalny.css">
    <script src="../../Skrypty/walidacja.js"></script>
</head>
<body>
    <header>
        <h2 class="tytul">PANEL ADMINISTRACYJNY</h2>
    </header>
    <main>
        <center>
            <div class="formularz">
                <form action="../../Skrypty/dostep.php" method="post">
                    login<br>
                    <input type="text" name="login" required><br>
                    <p class="informacjaBledu" id="bladLogin"><?php echo $bladLogin;?></p>
                    hasło<br>
                    <input type="password" name="haslo" required><br>
                    <p class="informacjaBledu" id="bladHaslo"><?php echo $bladHaslo;?></p>
                    <input type="submit" value="Zaloguj się" class="button">
                </form>
            </div>
        </center>
    </main>
</body>
</html>