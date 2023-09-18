<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["color"])) {
        $selectedColor = $_POST["color"];
        
        $archivoCSS = "css\styles.css";
        $contenidoCSS = file_get_contents($archivoCSS);
        $patron = '/:root\s*{[^}]*--primary-color:\s*[^;]+;/i';
        $contenidoCSSModificado = preg_replace($patron, ":root { --primary-color: $selectedColor;", $contenidoCSS);
        file_put_contents($archivoCSS, $contenidoCSSModificado);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

?>