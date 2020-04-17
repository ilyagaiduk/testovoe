<?php
?>
        <form method="post">
            <input type="number" name="number">
            <button type="submit" name="button">Найти индекс элемента</button>
        </form>
       <?php
function binarySearch(Array $arr, $x)
{
     $low = 0;
    $high = count($arr) - 1;
    while ($low <= $high) {
        // вычисляем средний индекс
        $mid = floor(($low + $high) / 2);
        // элемент найден в середине
        if($arr[$mid] == $x) {
            return true;
        }
        if ($x < $arr[$mid]) {
            // ищем левую часть массива
            $high = $mid -1;
        }
        else {
            // ищем правую часть массива
            $low = $mid + 1;
        }
    }
    // Если мы достигнем здесь, элемент x не существует
    return false;
}

// Код драйвера
       $arr = array(1, 3, 5, 7, 9, 12, 15, 23, 11, 6, 2, 8);
echo "<h3>Элементы массива</h3>";
foreach($arr as $key) {
    echo "{$key}<br>";
}
//выводим элементы массива
       asort($arr);
$value = $_POST['number'];
if(binarySearch($arr, $value) == true) {
    $arrSearch = array_search($value, $arr);
    if($arrSearch) {
        echo "{$value} Найдено, индекс элемента {$arrSearch}";
    }

}

else {
    echo $value." не найдено.";

}
       ?>
 
