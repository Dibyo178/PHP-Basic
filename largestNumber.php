<?php
  $business = 23;

  $minister =34;

  $sochib=50;

   if($business > $minister){
       if($business > $sochib){
           echo 'business is bigger';
       }
       else{
           echo 'sochib is bigger';
       }
   }

   else{
       if($minister > $sochib){
           echo 'minister is bigger';
       }
       else{
           echo 'sochib is bigger';
       }
   }

?>