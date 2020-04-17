       <?php
function holidaysDate() {
    $datetime1 = new DateTime('2011-08-11');
    $datetime2 = new DateTime('2009-10-13');
    $interval = $datetime1->diff($datetime2);
    $intervalDate = $interval->format('%R%a');
    $datetime1 = $datetime1->format('Y-m-d');
    $datetime2 = $datetime2->format('Y-m-d');
    echo $intervalDate;
    $holidays = 0;
    //вычисляем разницу в днях между датами
    if($intervalDate > 0) {
        for($x=0; $x<=$intervalDate; $x++){
            $date = strtotime($x." days", strtotime($datetime1));
            $day = date("w", $date);
            if($day == 0 OR $day == 6) {
               $holidays++;
            }
        }
    }
    //считаем выходные, если диапазон дат положительный
    elseif($intervalDate < 0) {
        $intervalDate = -1 * $intervalDate;
        for($x=0; $x<=$intervalDate; $x++){
            $date = strtotime($x." days", strtotime($datetime2));
            $day = date("w", $date);
            if($day == 0 OR $day == 6) {
                $holidays++;
            }
        }
    }
    //считаем выходные, если диапазон дат отрицательный
    echo "<br>Всего выходных ".$holidays;
}
       holidaysDate();
       ?>
