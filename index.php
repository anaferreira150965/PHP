
<?php
echo "<h1>Minhas aulas de PHP</h1>";

$pastas = scandir(__DIR__);

foreach ($pastas as $pasta) {
    if ($pasta != "." && $pasta != ".." && is_dir($pasta)) {
        echo "<p><a href='$pasta/'>$pasta</a></p>";
    }
}
?>
