<?php
    echo 'this is my first php code';//displaying a string
    print 'br';//using tfhe html break  line ta
    print "today is <span style = çolor:'>tuesday</span>";//using css in a setence
    print '<br>';

    print "45644";//this is a string

    print 'br';//using the HTML break linr tag

    print 4 + 8;//this is an operation using integer

    print '<br>';//using the HTML break line tag

    print '<br>';

    print "8+6";//this is a string

    print '<br>;';//using HTML brak line tags

    print date ('1');

    print '<br>';//using HTML break line tag

    print date ('1',strtotime('tommorrow'));//writting a php line to tell us the day after today

    print date ('1, d-M-Y',strtotime ('+5months'));


    print date ('h:i:s');//code for getting time

    $fname = "alex";//declaration of a string 

    print $fname ;//printing out the string 

    $yob = 1999;//declaration of an integer or digit(or a digit)

    print $yob;//using the HTML break line tag

    $current_year = date('y');//declaring the current year

    print $current_year;

    $age = $current_year - $yob;
    print $fname ."is" . $age . "years old";

    $user_dob = "2005-05-24";
    print $user_dob;

    $birthday = new DateTime($user_dob);

    $today = new DateTime('today');

    print '<br>';

    //print '<pre>';
    //print_r($interval);
    //print'</pre>';

    print $fname . "is" . $interval ->y ."years,";
    


?>