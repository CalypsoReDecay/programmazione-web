<?php

include ('funzioni.php');

if (getPagine( 1,100) == [1,2,3,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ('<br>');

if (getPagine( 100,100) == [1,98,99,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ('<br>');

if (getPagine( 58,100) == [1,57,58,59,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ('<br>');

if (getPagine( 42,100) == [1,41,42,43,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ('<br>');

if (getPagine( 99,100) == [1,98,99,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ('<br>');

if (getPagine( 0,100) == []){
    print ('ok');
} else {
    print ('ko');
}

echo ('<br>');

if (getPagine( 101,100) == []){
    print ('ok');
} else {
    print ('ko');
}

echo ('<br>');

if (getPagine( 1,40) == [1,2,3,40]){
    print ('ok');
} else {
    print ('ko');
}

?>
