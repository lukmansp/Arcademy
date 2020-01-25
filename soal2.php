<?php
$pass="paswdasa.6da";
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);
$char		= preg_match('@[.&&_]@', $pass);

if(!$char || !$lowercase || !$number || strlen($pass)<=8 ||strlen($pass>=12)){
    echo "Minimal password 8 karakter maksimal 12, hanaya huruf kecil dan angka dan char hanya . (titik) dan _ (underscore)";
}else{
    echo "password memenuhi kriteria";
}