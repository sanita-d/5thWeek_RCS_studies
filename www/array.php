<?php
$arr = [1,6,7,4,0,7];

var_dump ($arr);
echo "<hr>";
echo$arr[3];

//foreach loop
echo "<ul>";
foreach($arr as $key => $value) {
    echo "<li> My item with index $key is $value</li>";
}

echo"</ul>";
