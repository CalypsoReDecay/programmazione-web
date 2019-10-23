<?php

include ('funzioni.php');

echo ("<br>");

if (getInizioFor(3,10,15) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");

if (getInizioFor(3,10,25) == 20) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");

if (getInizioFor(3,10,35) == 20) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getInizioFor(2,15,0) == 15) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getInizioFor(0,10,0) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getInizioFor(3,0,0) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getInizioFor(-1,10,0) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getInizioFor(3,-1,0) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");

if (getFineFor(3,10,15) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");

if (getFineFor(3,10,25) == 24) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");

if (getFineFor(3,10,35) == 29) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getFineFor(2,15,0) == 29) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getFineFor(0,10,0) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getFineFor(3,0,0) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getFineFor(-1,10,0) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}

echo ("<br>");
if (getFineFor(3,-1,0) == 0) {
    print ('ok');
} else {
    print ('ko'); 
}