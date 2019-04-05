<?php

include_once 'includes/header.php';
include_once 'includes/myfunctions.php';

// Declare Variables
        $fullname = '';
        $email = '';
        $mobile = '';
        $dob = '';
       
        //Error Array
        $errors = [];
        
if(isset($_POST['submit'])){
    
    //If they have, validation and assign variables.
    if(isset($_POST['fullname'])){
        $fullname = trim($_POST['fullname']);
        if (strlen($fullname) == 0){
            $errors['fullname'] = 'Please enter your name!' ;
        }else {
            $temp = str_replace(" ", "", $fullname);
            
            if (!ctype_alpha($temp)) {
                $errors['fullname'] = 'Please enter a valid name!' ; 
        }
    }
}
    if(isset($_POST['email'])){
        $email = trim($_POST['email']);
        if (strlen($email) == 0){
            $errors['email'] = 'Please enter your email!' ;
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email!' ;
            
        }
    }
    if(isset($_POST['mobile'])){
        $mobile = trim($_POST['mobile']);
        if (strlen($mobile) == 0){
            $errors['mobile'] = 'Please enter your mobile!' ;
        }elseif (strlen($mobile) < 10 ) {
            $errors['mobile'] = 'Please enter at least 10 digits!' ;
            
        }elseif (!ctype_digit($mobile)) {
            $errors['mobile'] = 'Please enter a valid mobile!' ;
            
        }
    }
    if(isset($_POST['dob'])){
        $dob = trim($_POST['dob']);
        if (strlen($dob) == 0){
            $errors['dob'] = 'Please enter your Date of Birth!' ;
        }elseif (!validateDOB($dob)) {
            $errors['dob'] = 'Please enter a valid Date of Birth!' ;
            
        }
    }
    
    //If no errors, display data page
    if(count($errors) == 0){
        include 'includes/display_data.php';
        
    } else {
    //TO DO: Show previous data.
    include 'includes/display_form.php';

    }
  
}else{
    include 'includes/display_form.php';
}

include_once 'includes/footer.php';