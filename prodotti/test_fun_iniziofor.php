<?php

include ("funzioni.php");

if(getInizioFor(3,10,15) == 0){
    print ('3,10 ok');
} else {
    print ('3,10 ko');
}

echo ("<br>");

if(getInizioFor(3,10,25) == 20){
    print ('3,10 ok');
} else {
    print ('3,10 ko');
}

echo ("<br>");

if(getInizioFor(3,10,35) == 20){
    print ('3,10 ok');
} else {
    print ('3,10 ko');
}

echo ("<br>");

if(getInizioFor(0,10,0) == 0){
    print ('0,10 ok');
} else {
    print ('0,10 ko');
}

echo ("<br>");

if(getInizioFor(3,0,0) == 0){
    print ('3,0 ok');
} else {
    print ('3,0 ko');
}

echo ("<br>");

if(getInizioFor(-1,10,0) == 0){
    print ('-1,10 ok');
} else {
    print ('-1,10 ko');
}

echo ("<br>");

if(getInizioFor(3,-1,0) == 0){
    print ('3,-1 ok');
} else {
    print ('3,-1 ko');
}

echo ("<hr>");

if(getFineFor(3,10,15) == 0){
    print ('3,10 ok');
} else {
    print ('3,10 ko');
}

echo ("<br>"); 

if(getFineFor(3,10,25) == 24){
    print ('3,10 ok');
} else {
    print ('3,10 ko');
}

echo ("<br>"); 

if(getFineFor(3,10,35) == 29){
    print ('3,10 ok');
} else {
    print ('3,10 ko');
}

echo ("<br>"); 

if(getFineFor(2,15,0) == 29){
    print ('2,15 ok');
} else {
    print ('2,15 ko');
}

echo ("<br>");

if(getFineFor(0,10,0) == 0){
    print ('0,10 ok');
} else {
    print ('0,10 ko');
}

echo ("<br>");

if(getFineFor(3,0,0) == 0){
    print ('3,10 ok');
} else {
    print ('3,0 ko');
}

echo ("<br>");

if(getFineFor(-1,10,0) == 0){
    print ('-1,10 ok');
} else {
    print ('-1,10 ko');
}

echo ("<br>");

if(getFineFor(3,-1,0) == 0){
    print ('3,-1 ok');
} else {
    print ('3,-1 ko');
}

?>