<?php 

echo characterCount('epsum lkroejn ajsdnkajsnd asdjnkajsnd mcrypt_module_get_algo_key_size' , 'o');

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

    return "Jumlah profit '".$char."' dari perusahaan'".$text."' Adalah ".$jumlah;

}


?>
