<?php

 
$input = 123;

echo 'SELECT * FROM table WHERE id = . $input';


    // echo "hello";

    function ExecuteSQL($input){
        $sql = 'SELECT * FROM table WHERE id = '. $input;
    } 

    

    // function WriteInFile(){


    //     $f = fopen("file.txt", "w"); 
    //     $today =  date('d.m.Y H:i:s');       
    //     fwrite($f, $today);          
    //     fclose($f);    
    // }

    // function ReadFile(){    
        
        

    //     $text = readfile("myfile.txt");
    //     echo strripos($text, "Hello");



    // }

    // function ReadAllLinesInFile(){

    //     $file_array = file("file.txt");
    //     count($file_array);       


    // }
    // function ExistsFile(){
    //     if (file_exists("myfile.txt")) 
    //         echo "Размер файла: ".filesize("myfile.txt").' байт';
    //     else echo "Файл не существует";         
    // }

    // function CreateTmpFile(){
    //     $f = tmpfile();
    //     fwrite($f, "I temporary file");
    //     fseek($f, 0);           // Устанавливаем указатель файла
    //     echo fread($f, 1024);   // выводим содержимое файла
    // }

    // function CheckFileInfo(){
    //     $f = stat("file.txt");
    //     print_r($f);
    // }

    // function SeekControl(){



    //     $f = fopen("file.txt", 'a');
    //     ftruncate($fp, 0);


    //     $f = fopen("file.txt", 'w+') or die("не удалось открыть файл");
    //     $str = "Привет!";           // строка для записи
    //     fwrite($f, $str);           // запишем строку в начало
    //     fseek($f, 0);               // поместим указатель файла в начало
    //     fwrite($f, "Наш Текст");    // запишем в начало строку
    //     fseek($f, 0, SEEK_END);     // поместим указатель в конец
    //     fwrite($f, $str);           // запишем в конце ещё одну строку
    //     fclose($f);
    // }

    
    
?>
