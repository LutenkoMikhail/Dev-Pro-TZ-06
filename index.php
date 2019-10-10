<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$initialValuesArray = [-1, 0, 1, -2, 3, 4, -5, 6, -7, 88, 9, -10, 50, 1, 88,-100];

echo "<h1>Dev-Pro.net</h1>";
echo "<h3>ТЗ.№ 6  </h3>";
echo "<h3>Сортировка массива по убыванию . </h3>";

/**
 * This function sorts the array in ascending order of numbers
 * @param array $array
 * @return sort array
 */
function sortArrayUp(array $array): array
{
    $resultArray = [];
    $tempArray = [];
    if (count($array) !== 0) {
        foreach ($array as $elementArray) {
            $tempFlag = false;
            if (count($resultArray) === 0) {
                $resultArray[] = $elementArray;
                continue;
            }
            foreach ($resultArray as $tempElementArray) {
                if ($tempElementArray > $elementArray && $tempFlag === false) {
                    $tempArray[] = $elementArray;
                    $tempArray[] = $tempElementArray;
                    $tempFlag = true;
                    continue;
                }
                $tempArray[] = $tempElementArray;
            }
            if ($tempFlag === false) {
                $tempArray[] = $elementArray;
            }
            $resultArray = $tempArray;
            $tempArray = [];
        }
    }
    return $resultArray;
}


$sortArray = sortArrayUp($initialValuesArray);
echo "Массив отсортирован по возрастанию чисел:<br>";
foreach ($sortArray as $elementArray) {
    echo $elementArray . "<br>";
}



