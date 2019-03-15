<?php

/*
Author: Jack Boddeke
Date: 15/03/2019
Purpose: Lab 4.4
Version: 0.1 
Contact: jackboddeke1@outlook.com 
*/
?>

<form action="" method="post">
    <h1>Login Form</h1>
    
    <!--Username -->
    <fieldset>
        <legend><span class="number">&nbsp;</span>Login Form 2</legend>
        
        <label>
            Card Type:
            <span class="error">
                * <?=isset($errors['username'])? $errors['username']:"" ?>
            </span>
        </label>
        <input type="text" name="username" value="" >
    
    <!--password -->
        <label>
            Password:
            <span class="error">
                * <?=isset($errors['password'])? $errors['password']:"" ?>
            </span>
        </label>
        <input type="password" name="password" value="" >
    
    <!--Terms and Conditions -->
        <input type="checkbox" name="terms" value="" >
        <label>
            Accept our Terms & Conditions
            <span class="error">
                * <?=isset($errors['terms'])? $errors['terms']:"" ?>
            </span>
        </label>
        
    </fieldset>
    
    <!--Submit-->
    <button type="submit" name="submit" value="">Submit</button>
    
</form>