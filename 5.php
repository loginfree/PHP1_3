<?php
function replace($str){
    return str_replace(' ', '_', $str);
}
echo replace("Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.")
?>