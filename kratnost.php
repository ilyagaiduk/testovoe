       <?php
       $arr = array(1, 3, 5, 7, 10, 9, 12, 15, 23, 11, 6, 2, 8);
       $kr3 = 0;
       $kr5 = 0;
       foreach($arr as $key) {
           if ($key%3 == 0) $kr3++;
           if ($key%5 == 0) $kr5++;
       }
       echo $kr3."<br>";
       echo $kr5."<br>";
       ?>
