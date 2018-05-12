<?php
     
include 'header.php';
     
     






      //define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $organizationnameErr = $addressErr = $urlErr = $cityErr = $zipcodeErr = $paymentmodeErr = $totaltopayErr = $dateErr = $favoritecolorErr = "";
$firstname = $lastname = $email = $phone = $organizationname = $address =  $url = $city = $zipcode = $paymentmode = $totaltopay = $dsate = $favoritecolor = "";
  
       $url = $_SERVER["QUERY_STRING"];
       $myarray =parse_url($url);
       parse_str($url,$myarray);
       $keys = array_keys($myarray);
       $i = 0;
       while ($i < sizeof($myarray))
       {
         if(strlen($_GET[$keys[$i]])!=0)
         {
            
           echo $_GET[$keys[$i]];
         }
         $i++;

       }
     


         
         
        

    
include 'footer.php';
?>