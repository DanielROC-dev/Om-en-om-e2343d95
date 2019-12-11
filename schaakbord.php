<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet">
<title>Bruhe</title>
</head>
    <body>   
        <table class="box">
            <?php
                for($count = 1;$count <= 8; $count++){
                    echo "<tr>";
                        for($count2 = 1;$count2 <= 4; $count2++){
                            if(($count % 2) == 0) {
                                echo "<td></td>";
                                echo "<th></th>";
                            } else{
                                echo "<th></th>";
                                echo "<td></td>";
                            }
                        }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>