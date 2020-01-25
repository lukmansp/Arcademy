<?php 

echo characterCount('Bootcamp arcademy' , 'o');

function characterCount($text , $char)
{
    $jumlah = 0;
    $split = str_split($text);
    $split_limit = count($split);

    for ($i=0; $i < $split_limit; $i++) { 
        if ($split[$i] == $char) {
            $jumlah += 1;
        }
    }

    return "Jumlah Huruf '".$char."' Dari Kata '".$text."' Adalah ".$jumlah;

}


?>
