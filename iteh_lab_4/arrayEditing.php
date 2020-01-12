<?php 
    function duplicateCount($array){
        $duplicate = 0;
        foreach(array_count_values($array) as $item){
            if($item > 1){
                $duplicate = $duplicate + $item - 1;
            }
        }   
        if($duplicate != 0){
            echo $duplicate; 
        } else {
            echo "В массиве нету дублирующихся элементов";
        }
    
    }

    function reverseArray($array){
        $reverse = array ();
        foreach($array as $value){
            array_unshift($reverse, $value);
        }
        print_r ($reverse);
    }

    $first_array = array (1, 2, 3, 4, 4, 5, 1, 1); 
    $second_array = array (3, 4, 5, 6, 2, 3, 5, 1, 1);
    
    echo "Первый массив -->  ";
    print_r ($first_array);
    echo "<br>";
    echo "Кол-во элементов в первом массиве -->  ".count($first_array)."<br><br>"; 

    echo "Второй массив -->  ";
    print_r ($second_array);
    echo "<br>";
    echo "Кол-во элементов во втором массиве -->  ".count($second_array)."<br><br>"; 
    
    $first_task_1 = array_unique($first_array);
    $first_task_2 = array_unique($second_array);

    $third_task = array_unique(array_merge($first_array, $second_array));

   
    echo "Массивы без дублирующих элементов<br>";
    print_r ($first_task_1); 
    echo "<br>";

    print_r ($first_task_2);
    echo "<br><br>";

    echo "Количество дублирущих элементов первого массива -->  ";
    print_r (duplicateCount($first_array));
    echo "<br>Количество дублирущих элементов второго массива -->  ";
    print_r (duplicateCount($second_array));
    
    echo "<br><br>Слияние двух массивов в один и устранение дублирующихся значений -->  ";
    print_r ($third_task); 
    echo "<br><br>";

    echo "Смена мест значений массива -->  ";
    echo reverseArray($first_array);
?>