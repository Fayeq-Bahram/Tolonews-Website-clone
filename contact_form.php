<?php
   include("header.php");   
   include("connection.php");

   if(isset($_POST["submitbutton"])){
      $inputName = $_POST["inputName"];
      $inputEmail = $_POST["inputEmail"];
      $inputSubject = $_POST["inputSubject"];
      $inputMessage = $_POST["inputMessage"];
      $sql = "INSERT INTO customers(NAME, EMAIL, SUBJECT , MESSAGE) values('$inputName', '$inputEmail', '$inputSubject', '$inputMessage')";

      mysqli_query($conn, $sql);

   }else{
      echo "Data not sent";
   }
   mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ToloNews/Contact</title>
   <link rel="stylesheet" href="style/contact_page_style.css">
</head>
<body>
 
   <div class="container">
      <div>
         <h1>Contact</h1>
         <p>Tolonews</p>
         <P>Street # 12 Wazir Akbar Khan,</P>
         <p>Kabul - Afghanistan</p>
         <p style="margin-top: 10px; margin-bottom: 10px;">Phone: <span style="font-weight: bold; font-size: 14px; ">+93 780389182</span></p>

         <form id="form_section" action="contact_form.php" method="post">
            <label >Name:</label>
            <div><input type="text" name="inputName" required ></div>
            <label>Email:</label>
            <div><input type="text" name="inputEmail" required></div>
            <label>Subject:</label>
            <div><input type="text" name="inputSubject" required></div>
            <label>Message:</label>
            <div style="height: 200px;"><input  type="text" name="inputMessage" required></div>
            <input id="submit_Button" type="submit" name="submitbutton" value="SEND MESSAGE">
            
         </form>
      </div>

      <div id="socialNetwork">
            <div style=" margin-top: 30px;">
               <h5 style=" margin-left: 5px;">FOLLOW US</h5> 
            </div>
            <div id="cell">
               <div id="innerCell">
                  <h3 style="margin-top: 20px; margin-left: 5px; color: white;">Join us on social networks</h3>
               </div>
               <div id="innerCell">
                  <a href=""><img src="logo/facebook_logo.png"></a>
                  <a href="">
                  <img src="logo/twitter.png">
                  </a>
                  <a href=""><img src="logo/youtube.png"></a>
                  <a href=""><img src="logo/instagram.png"></a>
               </div>
               <div id="signInput">
                  <h3 style="margin-top: 5px;margin-left: 6px; color: white;">Newsletter</h3>
                  <p style="margin-left: 5px; margin-top: 5px;
                  color: white; margin-bottom: 10px; margin-left: 5px;">Sign up to receive the best of Tolo News daily</p>
                  <input style="height: 30px; border: 1px solid white; margin-left: 5px; width: 70%;  background-color: rgb(61, 61, 61);" type="text" placeholder="Your email address"> 
                  <button style="width: 40px; background-color: red; height: 38px; color: white;">OK</button>
               </div>
            </div>
      </div>
   </div>


</body>
</html>