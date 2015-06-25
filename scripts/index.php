<?php

echo "<h1>Imanee DEMOS</h1>";
echo "<ul>";

foreach (glob(__DIR__ . '/*.php') as $demo) {
    echo '<li><a href="/' . basename($demo) . '">'. basename($demo)  .'</a></li>';
}

echo "</ul>";
