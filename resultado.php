<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php
       session_start();
       $_SESSION["q8"]=$_POST["questao8"];
    
       $acertos=0;
       if ($_SESSION["q1"]=="A") {
           $acertos++;
         }
       if ($_SESSION["q2"]=="H") {
           $acertos++;
         }
       if ($_SESSION["q3"]=="E") {
           $acertos++;
         }
      if ($_SESSION["q4"]=="A") {
          $acertos++;
      }
      if ($_SESSION["q5"]=="F") {
        $acertos++;
      }
    if ($_SESSION["q6"]=="B") {
        $acertos++;
      }
    if ($_SESSION["q7"]=="F") {
        $acertos++;
      }
   if ($_SESSION["q8"]=="C") {
       $acertos++;
   }
   ?>
    <div class='end'>
        <button onclick="location.href='index.php'">
        <?php
        echo"Total de acertos: $acertos";
        ?>   
        </button>
    </div>
        
    
</body>
</html>