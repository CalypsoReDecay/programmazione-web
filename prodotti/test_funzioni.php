<?php

include ("funzioni.php");

echo ("<br>");

if(getPagine(100,100) == [1,98,99,100]){
    print ('100,100 ok');
} else {
    print ('100,100 ko');
}

echo ("<br>");

if(getPagine(0,100) == []){
    print ('0,100 ok');
} else {
    print ('0,100 ko');
}

echo ("<br>");

if(getPagine(1,100) == [1,2,3,100]){
    print ('1,100 ok');
} else {
    print ('1,100 ko');
}

echo ("<br>");

if(getPagine(2,100) == [1,2,3,100]){
    print ('2,100 ok');
} else {
    print ('2,100 ko');
}

echo ("<br>");

if(getPagine(58,100) == [1,57,58,59,100]){
    print ('58,100 ok');
} else {
    print ('58,100 ko');
}

echo ("<br>");

if(getPagine(99,100) == [1,98,99,100]){
    print ('99,100 ok');
} else {
    print ('99,100 ko');
}

echo ("<br>");

if(getPagine(101,100) == []){
    print ('101,100 ok');
} else {
    print ('101,100 ko');
}

echo ("<br>");

if(getPagine(1,40) == [1,2,3,40]){
    print ('1,40 ok');
} else {
    print ('1,40 ko');
}

echo ("<br>");

if(getPagine(0,0) == []){
    print ('0,0 ok');
} else {
    print ('0,0 ko');
}

echo ("<br>");

if(getPagine(1,1) == []){
    print ('1,1 ok');
} else {
    print ('1,1 ko');
}

echo ("<br>");

if(getPagine(1,2) == [1,2]){
    print ('1,2 ok');
} else {
    print ('1,2 ko');
}

echo ("<br>");

if(getPagine(1,3) == [1,2,3]){
    print ('1,3 ok');
} else {
    print ('1,3 ko');
    var_dump (getPagine(1,3));
}

echo ("<br>");

if(getPagine(1,4) == [1,2,3,4]){
    print ('1,4 ok');
} else {
    print ('1,4 ko');
}

echo ("<br>");

if(getPagine(1,5) == [1,2,3,4,5]){
    print ('1,5 ok');
} else {
    print ('1,5 ko');
}

echo ("<br>");

if(getPagine(1,6) == [1,2,3,6]){
    print ('1,6 ok');
} else {
    print ('1,6 ko');
}

?>