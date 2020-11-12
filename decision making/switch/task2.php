<?php

//Generate the month number from 1 to 12 and use switch statement to print thier corresponding month name
$number = rand(1 , 12);
switch ($number){
    case 1:
        print "janaury";
    break;
    case 2:
        print "Febraury";
    break;
    case 3:
        print "March";
    break;
    case 4:
        print "April";
    break;
    case 5:
        print "May";
    break;
    case 6:
        print "june";
    break;
    case 7:
        print "july";
    break;
    case 8:
        print "August";
    break;
    case 9:
        print "September";
    break;
    case 10:
        print "october";
    break;
    case 11:
        print "November";
    break;
    default:
        print "December";
    break;


}

