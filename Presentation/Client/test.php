<?php
echo "=== TEST DE CONFIGURATION ===<br><br>";

echo "📂 Informations sur les dossiers :<br>";
echo "- Dossier courant : " . __DIR__ . "<br>";
echo "- Fichier courant : " . __FILE__ . "<br>";
echo "- Document root : " . $_SERVER['DOCUMENT_ROOT'] . "<br><br>";

echo "🌐 Informations serveur :<br>";
echo "- Server name : " . $_SERVER['SERVER_NAME'] . "<br>";
echo "- Request URI : " . $_SERVER['REQUEST_URI'] . "<br>";
echo "- Script name : " . $_SERVER['SCRIPT_NAME'] . "<br><br>";

echo "📋 Contenu du dossier courant :<br>";
$files = scandir(__DIR__);
foreach($files as $file) {
    if($file != '.' && $file != '..') {
        echo "- $file<br>";
    }
}

echo "<br>✅ PHP fonctionne correctement !<br>";
echo "📅 " . date('Y-m-d H:i:s');
?>