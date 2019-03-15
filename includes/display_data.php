<?php

/*
Author: Jack Boddeke
Date: 10/03/2019
Purpose: Lab 4.3
Version: 0.1 
Contact: jackboddeke1@outlook.com 
*/
?>

<table>
    <tr>
        <th>Card Type</th>
        <th>Transaction Date</th>
        <th>Country</th>
        <th>Card Holder Name</th>
        <th>Card Number</th>
        <th>Expiry Date</th>
        <th>CVC</th>
        <th>Amount</th>
        <th>Email</th>
    </tr>
    
    <tr>
        <td><?=$card_type ?></td>
        <td><?=$transaction_date ?></td>
        <td><?=$country ?></td>
        <td><?=$name ?></td>
        <td><?=$card_number ?></td>
        <td><?=$expiry_date ?></td>
        <td><?=$cvc ?></td>
        <td><?=$amount ?></td>
        <td><?=$email ?></td>
    </tr>
    
</table>
