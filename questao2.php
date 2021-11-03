<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title> Inicio </title> 

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="solarSystem.css">
   <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<?php 
   session_start();
   $_SESSION["q1"]=$_POST["questao1"];

   $answers = '';

    if($_SESSION["q1"]=="A") {
        $answer = '<span id="level1" class="correct"></span>';
    }
    else {
        $answer = '<span id="level1" class="wrong"></span>';
    }

    $answers .= $answer;

   setcookie("respostas", $answers);

   ?>
 
    <body>
    
      <form action="questao3.php" method="post">

		<div class="header"> 

            <div class="titulo"> 
                <h1>  Qual é o planeta mais Longe do Sol no Sistema solar? </h1>
             </div>

             <div class="acertos" id="listaAcertos">
             <?php
                echo $answers;
            ?>
            </div>

        </div>

		<div class="content" id="content"> 
            
		</div>

        <div class="nav">
        <div class="botoes">

        <div class="botao">
            
           <input type="radio" id="radio1" name="questao2" value="A">
           <label for="radio1" onclick="selectPlanet('mercury')"><div></div><p>Mercúrio</p></label>
        </div>

        <div class="botao">
           <input type="radio" id="radio2" name="questao2" value="B">
           <label for="radio2" onclick="selectPlanet('venus')"><div></div><p>Vénus</p></label>
        </div>

        <div class="botao">
           <input type="radio" id="radio3" name="questao2" value="C">
           <label for="radio3" onclick="selectPlanet('earth')"><div></div><p>Terra</p></label>
        </div>

        <div class="botao">
           <input type="radio" id="radio4" name="questao2" value="D">
           <label for="radio4" onclick="selectPlanet('mars')"><div></div><p>Marte</p></label>
        </div>

        <div class="botao">
            
        <input type="radio" id="radio5" name="questao2" value="E">
        <label for="radio5" onclick="selectPlanet('jupiter')"><div></div><p>Júpiter</p></label>
     </div>

     <div class="botao">
        <input type="radio" id="radio6" name="questao2" value="F">
        <label for="radio6" onclick="selectPlanet('saturn')"><div></div><p>Saturno</p></label>
     </div>

     <div class="botao">
        <input type="radio" id="radio7" name="questao2" value="G">
        <label for="radio7" onclick="selectPlanet('uranus')"><div></div><p>Urano</p></label>
     </div>

     <div class="botao">
        <input type="radio" id="radio8" name="questao2" value="H">
        <label for="radio8" onclick="selectPlanet('neptune')"><div></div><p>Netuno</p></label>
     </div>

        </div>

            <button type="submit">
                Continuar
            </button>
        </div>

    </form>
    
    <script>
        
    function selectPlanet(id) {
        let planets = document.getElementsByClassName("planet")

        planets = [...planets]

        console.log(planets)

        planets.forEach(element => {
           element.classList.remove("selected");
        });

        const planet = document.getElementById(id)
        planet.classList.add("selected")
    }

        const content = document.getElementById("content")

        fetch("universe.html")
            .then(resp => resp.text())
            .then(resp => content.innerHTML = resp)
    </script>
    
  </body>
</html>