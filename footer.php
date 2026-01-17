<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/footer.css">
   <title>ToloNews</title>
   <style> 
      #link{
         margin-right: 3px;
         transition: 0.5s;
      }
      #link:hover{
         background-color: lightgrey;
      }
      #logo_pic {
         height: 50%;
         width: 50%;
         border-radius: 50%;
         margin-left: 12px;
         background-color: transparent;
      }
      #button {
      display: inline-block;
      height: 38px;
      background-color: red;
      color: white;
      font-size: 12px;
      border: none;
      width: 40px;
      border-radius: 2px;
   }
   #button:hover{
      background-color:brown;
      color: white;
   }
   </style>

</head>
<body>
   <div class="footer_content">
         <div class='footer_container'>
            <div>
               <div id="logo_container">
                  <img style="height: 100%; width: 100%;" src="logo/tolonews.png">
               </div>
               <div id="link_cell">
                  <a id="link" href="" >
                     <img id="logo_pic" src="logo/facebook_logo.png">
                  </a>
                  <a id="link" href="" >
                     <img id="logo_pic" src="logo/twitter.png">
                  </a>
                  <a id="link" href="" >
                     <img id="logo_pic" src="logo/instagram.png">
                  </a>
                  <a id="link" href="" >
                     <img id="logo_pic" src="logo/youtube.png">
                  </a>
                  
               
               </div>
            </div>
            <div style="display: flex;">
               <div id="center_cell">
                  <div style="margin-bottom: 5px;"><h4>ToloNews</h4></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link" id="link_item" href="">Home</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">Afghanistan</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link" id="link_item" href="">World</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">Business</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">Video</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link" id="link_item" href="">Sport</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">Arts & Culture</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link" id="link_item" href="">Elections</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link" id="link_item" href="">Opinion</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">Health</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link" id="link_item" href="">Science and Technology</a></div>
               </div>
               <div id="center_cell">
                  <h4>Elections</h4>
                  <div style="margin-bottom: 5px;"><a id="footer_link" id="link_item" href="">Home</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">News</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="footer_link"id="link_item" href="">Candidates</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">Debates & Analysis</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">Provincial</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link"id="link_item" href="">Videos</a></div>
                  <div style="margin-bottom: 5px;"><a id="footer_link" id="link_item" href="">FAQ</a></div>
               </div>
            </div>
            <div id="right_cell">
               <div style="margin-bottom: 5px;"><h4>Newsletter</h4></div>
               <div style="margin-bottom: 5px;"><p id="signText">Sign up to receive the best of Tolo news daily</p></div>
               <input type="text" id="input" placeholder="Your email address">
               <button id="button">OK</button>

            </div>
         </div>
   </div>
     
</body>
</html>