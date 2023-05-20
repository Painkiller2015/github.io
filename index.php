


<form action="action.php" method="post">
    <p>Ваше имя: <input type="text" name="name" /></p>
    <p>Ваш возраст: <input type="text" name="age" /></p>
    <p><input type="submit" /></p>
</form>


   
 























<!-- 


 <form>

    <label for="username">
        Enter your username:
    </label>   
    <input id="username">    

    <br/>

    <label for="birthday">
        Enter your birthday:          
    </label>   
    <input type=date min="1900-01-01" max="2020-01-01" step="1" id="birthday">    
    <br/>

    <button type="submit">Отправить</button>
    
        button - кликабельная кнопка
        submit - отправка данных
        reset - сброс данных 
    

    <select name="unittype" required>
        <option value="">Select unit type</option>
        <option value="1">Worker</option>
        <option value="2">Customer</option>
        <option value="3">Admin</option>
    </select>

    <label>
        <input name="animal" list="animals">
        <datalist id="animals">
            <option value="Cat">
            <option value="Dog">
        </datalist>
    </label>

    <br><br><br><br>

    <form action="courseselector.dll" method="get">
        <label> choose your fighter:
            <select name="c">
                <optgroup label="worker">
                    <option value=worker.1"> first
                    <option value=worker.2"> second
                <optgroup label="customer">
                    <option value="customer.1"> first
                    <option value="customer.2"> second
            </select>
        </label>
        <input type="submit" value="Go!"
    </form>


    <br><br><br><br>


    <textarea cols="80" name="comments" maxlength="200"></textarea>

    <br><br><br><br>


    <form onsubmit="return false" oninput="o.value = a + b">
        <input id="a" type="number" step="any"> +
        <input id="b" type="number" step="any"> =
        <output id="o" for="a b"></output>
        <br>
        <button type="submit">Отправить</button>
        <label for="o">
    </form>   
  

  </form> 



<form action="action.php" method="post">
 <p>Ваше имя: <input type="text" name="name" /></p>
 <p>Ваш возраст: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>


Здравствуйте, <?php echo htmlspecialchars($_POST['name']); ?>.
Вам <?php echo (int)$_POST['age']; ?> лет.

-->

























<!-- 
<?php


// $inputDateString = '2023-03-15 06:21:53.365061';
// echo ChangeDateFormat($inputDateString);

// function ChangeDateFormat($string)
// {
//     $timestamp = strtotime($string);
//     $new_date_format = date('d.m.Y H:i', $timestamp);
    
//     return $new_date_format;
// }



// function ChangeDateFormat($string)
// {
//     $date = new DateTime($string);
//     return date_format($date, "d.m.Y H:i");            //день.месяц.год час:минута
// }



// $inputDateString = date_default_timezone_get();
// echo ChangeDateFormat($inputDateString);

// function ChangeDateFormat2($string)
// {
//     $date = new DateTime($string);
//     return date_format($date, "d.m.Y H:i");            //день.месяц.год час:минута
// }

// function StringToDate($string)
// {

// }
// function DateToString($string)
// {

// }










// echo reverseString('Hello') . '<br>';

// $inputString = 'Hello';
// echo reverseEz($inputString);

// function reverseEz($str)
// {
//     $arr = str_split($str);
//     $arr = array_reverse($arr);
//     return implode($arr);
// }


// function reverseString($str)
// {
//     $reversedString = '';
//     $i = strlen($str) - 1;
//     while($i >= 0) {
//         $reversedString .= $str[$i];
//         $i--;
//     }
//     return $reversedString;
// }















// sqrFunction(10,5);

// function sqrFunction($a,$b,$c = 0)
// {
//     $x1 = 0;
//     $x2 = 0;
//     $d = CalcDiscriminant($a,$b,$c); 
//     if($d > 0){
//         $x1 = ((-$b) - sqrt($d))/2*$a;
//         $x2 = ((-$b) + sqrt($d))/2*$a;
//         echo 'X1 = '. $x1 . '<br>';
//         echo 'X2 = '.$x2 . '<br>';
//     }
//     elseif($d == 0) {
//         $x2 = ((-$b) + sqrt($d))/2*$a;
//         echo 'X1 = '.$x2 . '<br>';
//     }else {
//         echo "D = $d < 0, уравнение не имеет действительных корней";
//     }
// }

// function CalcDiscriminant($a,$b,$c){
//     return ($b*$b) - (4*$a*$c);
// }








// $result = SummInt(20,20);
// echo $result;

// function SummInt($int1, $int2)
// {
//     $result = $int1 + $int2;
//     return $result;
// }

// $result2 = SumManyArg(20,20,12,23,3,0,-1);
// echo $result2;
// function SumManyArg(...$numbers)
// {
//     $result = 0;
//     foreach($numbers as $int)
//     {
//         $result += $int;
//     }
//     return $result;
// }









// // // $fact = 5;
// // // echo 'Нахождение факториала через цикл ' . $fact . ': ' .factorial($fact) . '<br>';


// // // function factorial($int) 
// // // {
// // //     $result = 1; 
// // //     for ($i = 1; $i <= $int; $i++) { 
// // //     $result *= $i; 
// // //     } 
// // //     return $result; 
// // // } 
 

// // // $fact = 5;
// // // echo 'Нахождение факториала через рекурсию ' . $fact . ': ' .factorialRec($fact);

// // // function factorialRec($n) 
// // // {
// // //     if ($n <= 1) return 1; 
// // //     return $n * factorialRec($n - 1); // вызов функции самой себя
// // // } 










//echo factorial(5); 















// // // // // // function MyLogger($message)
// // // // // // {
// // // // // //     echo "{$message}<br>";
// // // // // // }




// $result = RecurSumm(100, 200);
// echo $result;
















// $string = 'Удачи';

// AddString($string);

// echo($string);




// function AddString (&$inputText){
//     $inputText = 'всем спасибо!';
// }





















// $param0 = '1';
// $param1= '2';
// $paramN= '3';

// FuncName($param0, $param1, $paramN);

// echo($param0);


// // MyLogger('Warning!');
// // MyLogger('Error!');
// // MyLogger('Message');
// // function MyLogger($message)
// // {
// //     echo "{$message}<br>";
// // }


// // $randomInt = rand(0, 9999);
// // echo ($randomInt);


// // $subInt = 2 - 2;
// // echo ($subInt);


// // $someText = 'Hello World';
// // $someText = substr($someText, 0, -6);
// // echo ($someText);



// function FuncName(&$param0, &$param1, &$paramN)
// {
//     $param0 += '1';
//     $param1 += '2';
//     $paramN += '3';
// }




// function GetHelloWorld()
// {
//     return "Hello World";
// }













?> --> 

