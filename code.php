<?php
if (isset($_POST['selection']))
{
  $input = $_POST['selection'];
}


  $min = 0;
  switch ($input) {
    case 1:
    $max = 10;
    break;
    case 2:
    $max = 20;
    break;
    case 3:
    $max = 30;
    break;
    case 4:
    $max = 40;
    break;
    default:
    break;
  }
  $get = rand($min, $max);

  if($get<=10)
  {
    $r = 1;
    $c = $get;
  }
  elseif ($get >= 11 && $get <= 20)
    {
      $r = 2;
      $c = $get -= 10;
    }
  elseif ($get >= 21 && $get <= 30)
    {
      $r = 3;
      $c = $get -= 20;
    }
  else
    {
      $r = 4;
      $c = $get -= 30;
    }
  ?>
