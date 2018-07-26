<?php
//Create a program that displays a multiplication table.

$columns = 10;
$rows = 10;

echo "<table border=\"2\">";

        for ($row = 1; $row <= $rows; $row++)
        {
            echo'<tr>';

            for ($column = 1; $column <= $columns; $column++)
            {
                echo '<td>' . $column*$row .'</td>';
            }
                
            echo '</tr>'; 

        }

  echo"</table>";

?>