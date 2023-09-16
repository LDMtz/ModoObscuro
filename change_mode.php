<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["theme"])) {
        $theme = $_POST["theme"];

        // Verifica si la cookie "theme" está establecida como "dark"
        if (isset($_COOKIE["theme"]) && $_COOKIE["theme"] === "dark") {
            // Elimina la cookie para cambiar al modo claro
            setcookie("theme", "", time() - 3600, "/");
        } else {
            // Establece la cookie como "dark" para cambiar al modo oscuro
            setcookie("theme", "dark", time() + 3600, "/");
        }
    }
}

// Redirige de vuelta a la página principal o a donde sea necesario
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>