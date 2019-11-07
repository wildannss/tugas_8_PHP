<?php
echo "<table>";
echo "<tr>";

for($p=1;$p<=9;$p++){
echo "<td>";
    for($x=0;$x<2;$x++){
        for($a=10;$a>0;$a--){
            for($i=1; $i<=$a; $i++){
                echo "_";
            }
            for($a1=10;$a1>$a;$a1--){
                echo"x";
            }
            for($a2=10;$a2>$a;$a2--){
                echo"x";
            }
        echo"<br>";
        }
        
        for($b=1;$b<=10;$b++){
            for($b2=1;$b2<=$b;$b2++){
                echo"_";
            }
            for($j=10; $j>$b;$j--){
                echo "x";
            }
            for($b1=10;$b1>$b;$b1--){
                echo"x";
            }
        echo"<br>";
        }
    }
echo "</td>";
}

echo "</tr>";
?>