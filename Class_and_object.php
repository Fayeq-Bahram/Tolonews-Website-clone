<?php 
   class game{
      var $name;
      var $picture;
      var $price;
     
   

      public function display_game(){
        echo " 
        <div id='container'>
         <h1>{$this -> name}</h1>
         <img id='picSize' src='{$this-> picture}'>
         <h4> Price:{$this -> price}$</h4>
        </div>";
      }
   }
   $game = new game;
   $game -> name = 'Sherlock Holms';
   $game -> picture = "Pictures/game.png";
   $game -> price = "3499";

   echo $game -> display_game();

   $game -> name = 'Sherlock Holms';
   $game -> picture = "Pictures/game.png";
   $game -> price = "3499";

   echo $game -> display_game();
   
   $game -> name = 'Sherlock Holms';
   $game -> picture = "Pictures/game.png";
   $game -> price = "3499";

   echo $game -> display_game();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style> 
      #container{
         border: 1px solid grey;
         width: 250px;
         justify-items: center;
         margin-right: 20px;
         float: left;
      }
      #picSize{
         width: 100%;
      }

   </style>
</head>
<body>

   
</body>
</html>
