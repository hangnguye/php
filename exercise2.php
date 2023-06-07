
<?php
echo '1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.'.'<br>';
function checkEven($number){
    if($number%2==0) echo $number. ' là số chẵn';
    else echo $number .'là số lẻ';
    echo '<br>';
}

$checkEven= checkEven(4);
?>
<?php
echo '2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.'.'<br>';
function countt($n){
    $total=0;
    for($number=0;$number<=$n;$number++){
        $total+=$number;
    };
    echo 'Tổng các số từ 1 đến'.$n .' là '. $total .'<br>';
}
$count= countt(4);
?>

<table border="1">
    <thead> 3. Bảng cửu chương từ 1 đến 10</thead>
    <tr>
        <?php
        for($i=1;$i<=10;$i++){
            echo '<td>';
            for($j=1;$j<=10;$j++){
        
                echo $i .' x ' .$j .'=' .$i*$j;
                echo '<br>';
            }
            echo '</td>';
        }
        ?>
    </tr>
</table>
<?php
echo '4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. '.'<br>';
function findWord($string, $word) {
    $stringLength = 0;
    $wordLength = 0;
    while (isset($string[$stringLength])) {
      $stringLength++;
    }
    while (isset($word[$wordLength])) {
      $wordLength++;
    }
    for ($i = 0; $i <= $stringLength - $wordLength; $i++) {

        $j = 0;

        while ($j < $wordLength && $string[$i + $j] == $word[$j]) {

            $j++;
        }

        if ($j == $wordLength) {

            return true;
        }
    }

    return false;
}

$string = " Thuong Mai";
$word = "Mai";
$findWord = findWord($string,$word);
echo  ($findWord  ? "Chuỗi chứa từ" : "Chuỗi không chứa từ ") .$word .'<br>';
?>

<?php
echo '5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.'.'<br>';
function findMaxMin($array) {
    $min = $array[0];
    $max = $array[0];
    foreach ($array as $value){
        if ($value < $min) {
            $min = $value;
        }
    
    if ($value > $max){
        $max = $value;
    }}
    echo "Giá trị nhỏ nhất là: ".$min .'<br>';
    echo "Giá trị lớn nhất là: ".$max .'<br>';
}
$array = [5, 2, 20, 100];
$findMaxMin = findMaxMin($array);
?>

<?php
echo '6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.';

function bubbleSort($arr) {
    $count = 0;
    foreach($arr as $value)
    $count ++;
    for ($i=0; $i<$count-1; $i++) {
        for ($j=0; $j < $count - $i - 1; $j++){
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
$number = [5,3,8,2,1];
$sortNumbers = bubbleSort($number);
echo "Mảng sau khi đã sắp xếp: ";
foreach ($sortNumbers as $element) {
    echo $element . " ";
}
?>

<?php
echo '7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.'.'<br>';
function factorial($n){
    $t=1;
   if($n!==0)
    for($i=1;$i<=$n;$i++){
        $t*=$i;
    }
    echo 'Giai thừa của ' .$n .' là: '.$t;
    echo '<br>';
};
$factorial=factorial(3);
?>
<?php
echo "8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước <br>";
function primeNumber($min, $max){
    for($i=$min+1; $i<$max; $i++){
        $count = 0;
        for($j=1; $j<=$i; $j++){
            if($i%$j == 0)  $count++;
        }
        if($count == 1 || $count == 2) echo $i . " ";
    }
}
$min = -5;
$max = 100;
echo "Khoảng nhập vào: (" . $min . ";" . $max . ")<br>";
echo "Kết quả: ";
echo primeNumber($min, $max);

echo "<br><br>9. Viết chương trình PHP để tính tổng của các số trong một mảng.<br>";
function sumArray($arrs){
    $sum = 0;
    foreach($arrs as $arr)
        $sum += $arr;
    return $sum;
}
$arrs=[0,2,3,6];
echo "<br>Tổng các số trong mảng: " . sumArray($arrs);

echo "<br><br>10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.<br>";
function printFibonacci($min, $max){
    for($i=2; $i<=$max; $i++){
        $arr[0] = 0;
        $arr[1] = 1;
        $arr[$i] = $arr[$i-1] + $arr[$i-2];
    }
    foreach($arr as $value)
        if($value>$min && $value<$max)
            echo $value . " ";
}
echo "Khoảng: (" . $min . ";" . $max . ") <br>";
echo "Dãy Fibonacci: ";
echo printFibonacci($min, $max);

echo "<br><br>11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.<br>";
function checkAmstrong($number){
    $temp = $number;
    $sum = 0;
    if(!is_integer($number) || $number <= 0)
        echo "Số Amstrong phải là số nguyên. Nhập lại số đi há";
    else if($number>3 && $number<10){
        echo "Số " . $number . " không phải số Amstrong";
    }
    else{
        while($temp!=0){
            $x = $temp % 10;
            $sum += pow($x,strlen($number));
            $temp = $temp / 10;
        }
        if($number == $sum)
            echo "Số " . $number . " là số Amstrong";
        else 
            echo "Số " . $number . " không phải số Amstrong";
    }
}
$number = 3;
echo "Số cần xét: " . $number . "<br>";
echo "Kết quả: ";
echo checkAmstrong($number);

echo "<br><br>12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.<br>";
function insertToArray($arrs, $value, $index){
    $count = count($arrs);
    $newArrs = [];
    for($i = $index; $i <= $count; $i++)
        $newArrs[$i - $index] = $arrs[$i - 1];
    $arrs[$index-1] = $value;
    for($i = $index; $i <= $count; $i++)
        $arrs[$i] = $newArrs[$i-$index];
    return $arrs;
}
$cars = array("Volvo", "BMW", "Toyota");
echo "Mảng nhập vào: ";
foreach($cars as $car)
    echo $car . " ";
echo "<br>";
$insertCar = "Mec";
$pos = 1;
echo "Phần tử muốn thêm: " . $insertCar . "<br> Vị trí muốn thêm: " . $pos . "<br>";
$cars = insertToArray($cars, $insertCar, $pos);
echo "Kết quả: ";
foreach($cars as $value)
    echo $value . " ";

echo "<br><br>13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.<br>";
function deleteDuplicateArr($array){
    $newArray = []; 
        for ($i = 0; $i < count($array); $i++){
            for($j = 0; $j < count($newArray) + 1; $j++){
                if($j == count($newArray)){
                    $newArray[$j] = $array[$i];
                    break;
                    }
                if($newArray[$j] == $array[$i]){
                    break;
                    }
                }
        }
        return $newArray;
}
$array = array(1, 2, 3, 4, 2, 3, 5);
echo "Mảng ban đầu: ";
foreach($array as $value)
    echo $value . " ";

echo "<br>Mảng sau khi loại bỏ các phần tử trùng lặp: ";
$array = deleteDuplicateArr($array);
foreach($array as $value)
    echo $value . " ";

echo "<br><br>14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.<br>";
function findPosition($value, $arrs){
    $count = count($arrs);
    for($i = 0; $i < $count; $i++)
        if($value == $arrs[$i])
            return $i+1;
}
echo "Mảng nhập vào: ";
foreach($cars as $car)
    echo $car . " ";
echo "<br>";
$car = "BMW";
echo "Phần tử muốn tìm: " . $car . "<br>";
echo "Vị trí: " . findPosition($car, $cars);

echo "<br><br>15. Viết chương trình PHP để đảo ngược một chuỗi.<br>";
function revString($string){
    $newStr = "";
    for($i = strlen($string)-1; $i >= 0; $i--)
        $newStr .= $string[$i];
    return $newStr;
}
$string = "Ask me why I'm so happy";
echo "Chuỗi ban đầu: " . $string . "<br>";
$reversedString = revString($string);
echo "Chuỗi đảo ngược: " . $reversedString;

echo "<br><br>16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.<br>";
// Cách 1
function calcNumberOfElements($arrs){
    $count = 0;
    foreach($arrs as $arr)
        if(isset($arr))
            $count++;
    return $count;
}
//Cách 2
function calcNumberOfElements2($arrs){
    $count = count($arrs);
    return $count;
}
echo "Mảng nhập vào: ";
foreach($cars as $car)
    echo $car . " ";
echo "<br>";
echo "Số lượng phần tử là: " . calcNumberOfElements2($cars);


echo "<br><br>17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.<br>";
function checkPalindrome($string){
    $revString = revString($string);
    if($string == $revString)
        return true;
}
$string = "MiMi";
echo "Chuỗi nhập vào: " . $string ."<br>Kết quả: ";
if(checkPalindrome($string))
    echo "Chuỗi " . $string . " là chuỗi Palindrome";
else 
    echo "Chuỗi " . $string . " không phải là chuỗi Palindrome";

echo "<br><br>18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.<br>";
function countElements($arrs, $element){
    $countElement = count($arrs);
    $count = 0;
    for($i=0; $i<$countElement; $i++){
        if($arrs[$i] == $element)
            $count++;
    }
    return $count;
}
$stringArrays = ["a", "b", "c", "a", "b"];
$element = "b";
echo "Mảng nhập vào: ";
foreach($stringArrays as $value)
    echo $value . " ";
echo "<br>";
echo "Kết quả: Số lần xuất hiện của phần tử [$element] là " . countElements($stringArrays,$element);

echo "<br><br>19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.<br>";
function sortDescArray($arrs){
    $count = count($arrs);
    for($i=0; $i<$count; $i++)
        for($j=$i+1; $j<$count; $j++)
            if($arrs[$i]<$arrs[$j]){
                $temp = $arrs[$i];
                $arrs[$i] = $arrs[$j];
                $arrs[$j] = $temp;
            }
    return $arrs;
}
echo "Mảng nhập vào: ";
foreach($array as $value)
    echo $value . " ";
echo "<br>";
$array = sortDescArray($array);
echo "Mảng giảm dần: ";
foreach($array as $value)
    echo $value . " ";
    
echo "<br><br>20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.<br>";
function insertFirstOrEndArray($arrs, $value, $index){
    $count = count($arrs);
    $newArrs = [];
    if($index>$count){

    }
    for($i = $index; $i <= $count; $i++)
        $newArrs[$i - $index] = $arrs[$i - 1];
    $arrs[$index-1] = $value;
    for($i = $index; $i <= $count; $i++)
        $arrs[$i] = $newArrs[$i-$index];
    return $arrs;
}
$cars = array("Volvo", "BMW", "Toyota");
echo "Mảng nhập vào: ";
foreach($cars as $car)
    echo $car . " ";
echo "<br>";
$insertCar = "Mec";
$pos = 1;
echo "Phần tử muốn thêm: " . $insertCar . "<br> Vị trí muốn thêm: " . $pos . "<br>";
$cars = insertFirstOrEndArray($cars, $insertCar, $pos);
echo "Kết quả: ";
foreach($cars as $value)
    echo $value . " ";

echo "<br><br>21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.<br>";
function findSecondNumber($array){
    $max = $array[0];
    $secondMax = $array[0];
    foreach($array as $value){
        if($max <= $value){
            $secondMax = $max;
            $max = $value;
        } 
        else if($secondMax <= $value){
            $secondMax = $value;
        }
    }
    return $secondMax;
}
$numberArrays = ["-4", "-1", "5", "3", "6","4"];
echo "Mảng ban đầu: ";
foreach($numberArrays as $arr)
    echo $arr . " ";
echo "<br>";
echo "Số lớn thứ hai là: " . findSecondNumber($numberArrays);

echo "<br><br>22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.<br>";
function findGCDAndLCM($num1, $num2){
    // GCD = Greatest Common Diviser UCLN
    // LCM = Least Common Multiple BCNN
    $GCD = $LCM = 1;
    if($num1>=$num2) $max = $num1;
    else $max = $num2;
    for($i=1; $i<=$max; $i++){
        if($num1%$i==0 && $num2%$i==0){
            $GCD = $i;
        }
    }
    $LCM = $num1*$num2/$GCD;
    return [$GCD, $LCM];
}
$num1 = 4;
$num2 = 9;
echo "Hai số nguyên là: $num1 và $num2 <br>";
echo "UCLN là: " . findGCDAndLCM($num1,$num2)[0] . "<br>BCNN là: " . findGCDAndLCM($num1,$num2)[1];
echo "<br><br>23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.<br>";
function checkPerfectNumber($number){
    if($number<1)
        return false;
    $sum = 0;
    for($i=1; $i<$number; $i++)
        if($number % $i == 0)   $sum += $i;
    if($number == $sum)
        return true;
}
$number = 6;
if(checkPerfectNumber($number))
    echo "Số $number là số hoàn hảo";
else 
    echo "Số $number không phải là số hoàn hảo";

echo "<br><br>24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.<br>";
function findOddNumber($arrays){
    $max = $arrays[0];
    foreach($arrays as $array){
        if($array % 2 != 0){
            if($max < $array)
                $max = $array;
        }
    }
    return $max;
}
foreach($numberArrays as $value)
    echo $value . " ";
echo "<br>Số lẻ lớn nhất trong mảng là: " . findOddNumber($numberArrays);

echo "<br><br>25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.<br>";
function findPrimeNumber($number){
    if($number <= 1)
        return false;
    $count = 0;
    for($i=1; $i<=$number; $i++)
        if($number % $i == 0)
            $count++;
    if($count == 2) 
        return true;
}
$number = 2;
if(findPrimeNumber($number))
    echo "Số $number là số nguyên tố";
else 
echo "Số $number không phải là số nguyên tố";

echo "<br><br>26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.<br>";
function findMaxPositiveNumber($array){
    $max = $array[0];
    foreach($array as $value){
        if($value<0)
            continue;
        else if ($max < $value) $max = $value;
    }
    return $max;
}
foreach($numberArrays as $value)
    echo $value . " ";
echo "<br>Số dương lớn nhất trong mảng là: " . findMaxPositiveNumber($numberArrays);

echo "<br><br>27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.<br>";
function findMaxNegativeNumber($array){
    $max = $array[0];
    foreach($array as $value){
        if($value>0)
            continue;
        else if ($max < $value) $max = $value;
    }
    return $max;
}
foreach($numberArrays as $value)
    echo $value . " ";

echo "<br>Số âm lớn nhất trong mảng là: " . findMaxNegativeNumber($numberArrays);

echo "<br><br>28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.<br>";
function calcSumOddNumbers($n){
    $sum = 0;
    $n = intval($n);
    if($n<0)    
        echo "Số nhập vào phải là số dương";
    else{
        for($i=1; $i<=$n; $i++)
        if($i%2!=0)
            $sum += $i;
        return $sum;
    }
}
$n = 5;
echo "Tính tổng các số lẻ từ 1 đến $n <br>";
echo "Kết quả: " . calcSumOddNumbers($n);

echo "<br><br>29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.<br>";
function findPerfectSquare($number){
    if($number>0 && $number == sqrt($number)*sqrt($number))
        return true;
}
$number = 5;
if(findPerfectSquare($number))
    echo "Số $number là số chính phương";
else
    echo "Số $number không phải là số chính phương";

echo "<br><br>30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.<br>";
function checkString($string1, $string2){
    $len1 = strlen($string1);
    $len2 = strlen($string2);
    if($len2 > $len1)
        return false;
    for($i = 0; $i <= $len1-$len2; $i++){
        $result = true;
        for($j = 0; $j < $len2; $j++)
            if($string1[$i+$j] != $string2[$j]){
                $result = false;
                break;
            }
        if($result)
            return true;
    }
}
$string1 = "Ask me why I'm so happy";
$string2 = "I'm so happy";
echo "Chuỗi 1: $string1 <br>Chuỗi 2: $string2 <br>";
if(checkString($string1,$string2))
    echo 'KQ: Chuỗi "'.$string2.'" là chuỗi con của chuỗi "'.$string1.'"';
else 
    echo 'KQ: Chuỗi "'.$string2.'" không phải là chuỗi con của chuỗi "'.$string1.'"';
?>
