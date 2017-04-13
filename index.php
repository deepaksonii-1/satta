<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>



<link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="content">
    <header>
      <h1>Welcome to SaTTa Club </h1>
      <p>CHOOSE YOUR PROBABILITY</p>
      <div class="center">
        <form class="" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
          <input type="radio" name="selection" id="" value="1">0-10
          <input type="radio" name="selection" id="" value="2">0-20
          <input type="radio" name="selection" id="" value="3">0-30
          <input type="radio" name="selection" id="" value="4">0-40
          <input type="submit" value="Click..." class="btn2">
        </form>
      </div>
    </header>
    <div class="left">
        <table>
        <?php
        $n = 1;
        for($i=1; $i<=10; $i++)
        {
          echo "<tr>";

          for($j=1; $j<=10; $j++)
          {

            echo "<td>".$n."</td>";
            $n++;

          }
          echo "</tr>";
        }
         ?>
        </table>
    </div>
    <div class="right">
      <table>
        <tr>
          <th>INPUT</th>
          <th>AMOUNT</th>
          <th>EARNING</th>
        </tr>
        <tr>
          <td>0-10</td>
          <td>1</td>
          <td>2</td>
        </tr>
        <tr>
          <td>0-20</td>
          <td>1</td>
          <td>3</td>
        </tr>
        <tr>
          <td>0-30</td>
          <td>1</td>
          <td>4</td>
        </tr>
        <tr>
          <td>0-40</td>
          <td>1</td>
          <td>5</td>
        </tr>

      </table>
    </div>

  </div>

  <?php require_once('code.php'); ?>
  <style>
  .left table tr:nth-child(<?php echo $r; ?>) td:nth-child(<?php echo $c; ?>){
    background-color: green;
  }
  </style>
</body>
</html>
