<?php
$pathCss = [
    "/css/header.css",
    "/css/tour.css",
];
foreach ($pathCss as $path) {
    echo "<link rel='stylesheet' href='$path'>";
}
?>