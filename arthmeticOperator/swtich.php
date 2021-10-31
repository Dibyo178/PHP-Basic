<?php
  $marks=10;

  switch ($marks){
      case ($marks >=80 && $marks <=100):
        echo 'A+';
        break;

        case ($marks >=70 && $marks <=79):
            echo 'A';
            break;

            case ($marks >=60 && $marks <=69):
                echo  'A-';
                break;

            default:
            echo 'Invalid number';
  }

?>