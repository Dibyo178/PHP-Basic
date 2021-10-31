<?php
  
  $marks=90;

  

  if($marks >= 80 && $marks <=100){
      echo ' A+';
  }
  else if($marks >=70 && $marks <=79){
      echo 'A';
  }
  else if($marks >=60 && $marks <=69){
      echo 'A-';
  }
  else{
      echo 'B';
  }

?>