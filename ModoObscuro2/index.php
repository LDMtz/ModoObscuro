<?php
include 'change-primary-color.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Portfolio</title>
</head>
<body <?php echo isset($_COOKIE["theme"]) && $_COOKIE["theme"] === "dark" ? ' class="dark"' : ''; ?>>
    <header class="header">
        <div class="switches">
            <form action="change_mode.php" method="post">
                <div id="toggle-theme" class="toggle-theme">
                    <button type="submit" name="theme" value="dark" class="btn-theme">
                    <?php
                        if (isset($_COOKIE["theme"]) && $_COOKIE["theme"] === "dark") {
                            echo '<img id="toggle-icon" src="assets/icons/moon.svg" alt="icon theme" class="toggle-theme__icon">';
                            //echo '<p id="toggle-text" class="toggle-theme__text">Dark mode</p>';
                        } else {
                            echo '<img id="toggle-icon" src="assets/icons/sun.svg" alt="icon theme" class="toggle-theme__icon">';
                            //echo '<p id="toggle-text" class="toggle-theme__text">Light mode</p>';
                        }
                    ?>
                    </button>
                </div>
            </form>
        </div>

        <div id="toggle-colors" class="colors">
            <form action="change-primary-color.php" method="post">
                <button type="submit" name="color" value="hsl(214,84%,56%)" class="colors__item colors__item--blue"></button>
                <button type="submit" name="color" value="hsl(150,84%,56%)" class="colors__item colors__item--green"></button>
                <button type="submit" name="color" value="hsl(276,84%,56%)" class="colors__item colors__item--purple"></button>
                <button type="submit" name="color" value="hsl(46,84%,56%)" class="colors__item colors__item--orange"></button>
            </form>
        </div>
    </header>

    <h1 class="prueba">Mi portfolio</h1>
</body>
</html>
