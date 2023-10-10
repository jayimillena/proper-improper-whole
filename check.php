<?php 

    if (($_POST['numerator'] / $_POST['denominator']) == 1) 
    {
      echo "This is a whole number";
    }
    if ($_POST['numerator'] < $_POST['denominator'])
    {
      echo "This is a proper fraction";
    } 
    else if ($_POST['numerator'] > $_POST['denominator'])
    {
      echo "This is an improper fraction";
    }