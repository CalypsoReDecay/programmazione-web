<?php

include ("funzioni.php");

echo ("<br>");

if(getPagine(100,100) == [1,98,99,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(0,100) == []){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(1,100) == [1,2,3,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(2,100) == [1,2,3,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(58,100) == [1,57,58,59,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(99,100) == [1,98,99,100]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(101,100) == []){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(1,40) == [1,2,3,40]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(0,0) == []){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(1,1) == []){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(1,2) == [1,2]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(1,3) == [1,2,3]){
    print ('ok');
} else {
    print ('ko');
    var_dump (getPagine(1,3));
}

echo ("<br>");

if(getPagine(1,4) == [1,2,3,4]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(1,5) == [1,2,3,4,5]){
    print ('ok');
} else {
    print ('ko');
}

echo ("<br>");

if(getPagine(1,6) == [1,2,3,6]){
    print ('ok');
} else {
    print ('ko');
}

?>