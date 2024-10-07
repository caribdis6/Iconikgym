<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Método POST recibido correctamente.";
} else {
    echo "Este script solo acepta POST.";
}
?>
