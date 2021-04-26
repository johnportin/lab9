<?php
function product($x, $y) {
        $z = $x * $y;
        return $z;
}

echo "<html>";
echo "<head> <link rel='stylesheet' href='style.css'> </head>";
echo "<body>";

echo "<table>";
        for($x = 1; $x <= 100; $x++) {
                echo "<tr>";
                for($y = 1; $y <= 100; $y++) {
                    if ($x == 1 || $y == 1) {
                        echo "<th>" . product($x, $y) . "</th>";
                    } else {
                        echo "<td>" . product($x, $y) . "</td>";
                    }
                }
                echo "</tr>";
        }
echo "</table>";
echo "</body>";
?>

