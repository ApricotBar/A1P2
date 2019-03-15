<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
        Author: Jack Boddeke
        Date: 15/03/2019
        Purpose: A1P2
        Version: 0.1 
        Contact: jackboddeke1@outlook.com 
        */
        
        $first_name = '';
        $last_name = '';
        $email = '';
        $password = '';
        $mobile = '';
        
        $errors = [];
        
        include 'includes/header.php';
        
        if(isset($_POST['send'])){
            
            $first_name = ($_POST['first_name']) ;
            $last_name = ($_POST['last_name']);
            $email = ($_POST['email']);
            $password = ($_POST['password']);
            $mobile = ($_POST['mobile']);
            
            if(isset($_POST['first_name'])){
               
                if (strlen($first_name)== 0)
                $errors['first_name'] = 'Missing Input';
            
            }elseif (!ctype_alpha($first_name)) {
                $errors['first_name'] = 'Must be Alpha Characters';
                
            }
            
            if(isset($_POST['last_name'])){
               
                if (strlen($last_name)== 0)
                $errors['last_name'] = 'Missing Input';
            
            }elseif (!ctype_alpha($last_name)) {
                $errors['last_name'] = 'Must be Alpha Characters';
                
            }
            
            if(isset($_POST['email'])){
               
                if (strlen($email)== 0)
                $errors['email'] = 'Missing Input';
            
            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Enter a Valid Email Address';
                
            }
            
            if(isset($_POST['password'])){
               
                if (strlen($last_name)== 0)
                $errors['password'] = 'Missing Input';
            
            }elseif (!ctype_alnum($password)) {
                $errors['password'] = 'Must be Alpha or Numeric Characters';
                
            }
            
             if(isset($_POST['Mobile'])){
               
                if (strlen($mobile)== 0)
                $errors['mobile'] = 'Missing Input';
            
            }elseif (!ctype_digit($mobile)) {
                $errors['mobile'] = 'Must be Alpha or Numeric Characters';
                
            }
            
            if(count($errors) == 0){
            
                include 'includes/display_data.php'; 
                
            } else {
               echo 'BOB'; 
               include 'includes/signup_form.php';
               
            }
            
        }else {
            
            include 'includes/signup_form.php';
            
        }
               
        include 'includes/footer.php';
        ?>
