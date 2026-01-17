<?php
   include('header.php');
   include('footer.php');
   include('connection.php');
   if(isset($_POST["submit"])){
      $email_input = $_POST["email_input"];

      $sql = "INSERT INTO customers_email(email) VALUES('$email_input')";

      mysqli_query($conn, $sql);

   }else{
      
   }
   mysqli_close($conn);
  
   $newsletter = "
      <div id='container'>
         <div id='newsletter_container'>
            <div style='color: white;'> 
               <h1>Newsletter </h1>
               <p>Sign up to receive the best of<br> TOLOnews daily </p>
               <form action='Newsletter.php' method='post'> 
                  <div style='width: 30%;
                  height: 25px; border-radius: 3px;'>
                  <input id='email' type='text' name='email_input' required placeholder='Your email address'>
                  <input id='btn' type='submit' name='submit' value='OK'>
                </div>
               </form> 
            </div>
            <div> 
               <h5>FOLLOW US </h5>
               <div id='cell_container'>
                  <div><h3>Join Us on Social Media </h3></div>
                     <div id='social_media_design'>
                        <div id='incell'>
                           <a href=''><img id='img' src='logo/fb.png'> </a>
                        </div>
                        <div id='incell'> 
                           <a href=''><img id='img' src='logo/twitter.png'> </a>
                        </div>
                        <div id='incell'>
                           <a href=''><img id='img' src='logo/youtube.png'> </a>
                        </div>
                        <div id='incell'>
                           <a href=''><img id='img' src='logo/instagram.png'> </a>
                        </div>
                     </div>
                     <div style='height: 100px; padding-bottom: 20px; margin-top: 10px; border-top: 1px solid grey;'>
                        <h3 style='margin-top: 5px;margin-left: 6px; color: white;'>Newsletter</h3>
                        <p style='margin-left: 5px; margin-top: 5px;
                        color: white; margin-bottom: 10px; margin-left: 5px;'>Sign up to receive the best of Tolo News daily</p>
                        <input style='height: 30px; border: 1px solid white; margin-left: 5px; width: 70%;  background-color: rgb(61, 61, 61);' type='text' placeholder='Your email address'> 
                        <button id='btn' style='width: 15%; height: 33px;'>OK</button>
                     </div>
               </div>
            </div>
         </div>
      <div>
   ";
   echo $newsletter;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tolonews/Newsletter</title>
   <link rel='stylesheet' href='style/newsletter_style.css'>
</head>
<body>

</body>
</html>
