<?php
     
    
if(isset($_GET['details'])){
  echo "";

  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];
  $email = $_GET['email'];
  $phone = $_GET['phone'];
  $organization = $_GET['organization'];
  $address = $_GET['address'];
  $url = $_GET['url'];
  $city = $_GET['city'];
  $zip = $_GET['zip'];
  $paymentmode = $_GET['paymentmode'];
  $paymenttotal = $_GET['payment-total'];
  $startdate = $_GET['date'];
  $favcolor = $_GET['color'];


  

}
?>

<body>
 <article>
   <header>User Details</header>
   <section>
     <?php 
          echo "<br/> Firstname:".$firstname."<br/>".$lastname."<br/>".$email."<br/>".$phone."<br/>".$organization."<br/>".$address."<br/>".$url."<br/>".$city."<br/>".$zip."<br/>".$paymentmode."<br/>".$paymenttotal."<br/>".$startdate."<br/>".$favcolor;

      ?>
   </section>
   <footer>End of file</footer>
 </article>
</body>

<?php

// $inp = $_GET[];




//       //define variables and set to empty values
// $firstnameErr = $lastnameErr = $emailErr = $phoneErr = $organizationnameErr = $addressErr = $urlErr = $cityErr = $zipcodeErr = $paymentmodeErr = $totaltopayErr = $dateErr = $favoritecolorErr = "";
// $firstname = $lastname = $email = $phone = $organizationname = $address =  $url = $city = $zipcode = $paymentmode = $totaltopay = $dsate = $favoritecolor = "";
  
       // $url = $_SERVER["QUERY_STRING"];


       // $myarray = parse_url($url);

       // parse_str($url,$myarray);

       // $keys = array_keys($myarray);
       // $i = 0;


       // while ($i < sizeof($myarray))
       // {
       //   if(strlen($_GET[$keys[$i]])!=0)
       //   {
            
       //     echo $_GET[$keys[$i]];
       //   }
       //   $i++;

       // }
     


         
         
        


?>