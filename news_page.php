<?php 
   include("header.php");
   include("footer.php");
   include("connection.php");

   $news = array(
      'Progress Made in Easing Banking Restrictions:Central Bank',
      'The Central Bank said that banking restrictions in the country have decreased over the past three years.',
      'He further stated that efforts to modernize the banking system in the country are ongoing',
      'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!',
      'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!',
      'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!',
      'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!',
      'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!',
      'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!',
      'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!',
      'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur hic est iusto excepturi fugit officiis quo, dolor odit aliquid voluptatem! Est non praesentium vitae debitis dicta!'
   );
   $news_content = "
      <br>
      <div id='top_heading'>
         <div>
            <img id='img' src='pictures/tolo_black_logo.png'>
          </div>
            <p id='heading_text'>By <span style='color: black;'>Tolonews</span>, TV Networks<br>
               Today: 12:15 PM 
            </p>
      </div>
         <br>
      <div style='width: 900px; margin: auto;margin-bottom: 10px;'> 
         <a href='' id='link_business'>BUSINESS </a>
      </div>
      
   <div class='news_content'>
         <div>
               <h1 id='TitleNews'>"."{$news[0]}"."</h1>
               <div id='social_media'> 
                  <div>
                  <p id='smediaName'> 6 Comments </p>
                  </div>
                  <div>
                     <img id='picSize' src='pictures/facebook03.png'>
                     <a href='www.facebook.com' target='_' id='smediaName'>Facebook</a>
                  </div>
                  <div> 
                     <img id='picSize' src='pictures/twitter_t.png'>
                     <a href='www.twitter.com' target='_' id='smediaName'>Twitter</a>
                  </div>
                  <div> 
                     <img id='picSize' src='pictures/email.png'>
                        <a href='' id='smediaName'>Email</a>
                  </div>
                  <div> 
                     <img id='picSize' src='pictures/comment_logo.png'>
                        <a id='smediaName'>Comment</a>
                  </div>
                  <div> 
                     <a href='' id='smediaName'>More Socials</a>
                  </div>
               </div>
               <div style='margin-top: 20px; padding-bottom: 5px;'>  
                 <div id='section_news' style=''> 
                     <div>
                        <h4>"."{$news[1]}"."</h4>
                        <h5 id='related_n'>RELATED NEWS</h5>
                        <a id='linkToN' href=''>US-Afghan Trade Chamber Praises Currency Stability </a>
                        <br>
                        <p style='margin-bottom: 5px;'></p>
                        <a id='linkToN' href=''>US-Afghan Trade Chamber Praises Currency Stability </a> 
                     </div>
                     <div style='height: 250px;'>
                        <img id='imgSize' src='pictures/bank_teller.png'>
                     </div>
               </div>
               <div id='text_content'>
                <h5>$news[2] </h5>
                  <p>$news[3]</p>
                  <br> 
                  <p>$news[4]</p>
                  <br> 
                  <p>$news[5]</p>
                  <br> 
                  <p>$news[6]</p>
                  <br> 
                  <p>$news[7]</p>
                  <br> 
                  <p>"."{$news[8]}"."</p>
                  <br> 
                  <p>"."{$news[9]}"."</p>
                  <br> 
                  <p>"."{$news[10]}"."</p>
                  <br> 
                  <h3>SHARE THIS POST</h3>
               <div style='border-top: 1px solid grey;  padding-top: 10px;' id='social_media'> 
                     <div>
                     <p id='smediaName'> 6 Comments </p>
                     </div>
                     <div>
                        <img id='picSize' src='pictures/facebook03.png'>
                        <a href='' id='smediaName'>Facebook</a>
                     </div>
                     <div> 
                        <img id='picSize' src='pictures/twitter_t.png'>
                        <a href='' id='smediaName'>Twitter</a>
                     </div>
                     <div> 
                        <img id='picSize' src='pictures/email.png'>
                        <a href='' id='smediaName'>Email</a>
                     </div>
                     <div> 
                        <img id='picSize' src='pictures/comment_logo.png'>
                        <a href='' id='smediaName'>Comment</a>
                     </div>
                     <div> 
                        <a href='' id='smediaName'>Comment</a>
                     </div>
                  </div>
               </div>
               <div style='
                  margin-top: 10px;
                  padding-bottom: 20px;
               '>
                  <div style='margin-bottom: 5px; border-bottom: 1px solid grey; padding-bottom: 5px; color: red;'>
                     <h4>RELATED STORIES</h4>
                  </div>
                  <div id='newslinks_container'>
                     <div>
                        <div style='height: 85px; width: 45%;'>
                        <img id='imgSize' src='pictures/wricked_house.png'></div>
                        <a href='' id='link_news' id=''>US-Afghan Trade Chamber praises currency stability</a>
                        <p id='news_time'>Wednseday: 3:30 PM</p>
                     </div>
                     <div>
                        <div style='height: 85px; width: 45%;'>
                        <img id='imgSize' src='pictures/wricked_house.png'></div>
                        <a href='' id='link_news' id=''>US-Afghan Trade Chamber praises currency stability</a>
                        <p id='news_time'>Wednseday: 3:30 PM</p>
                     </div>
                     <div>
                        <div style='height: 85px; width: 45%;'>
                        <img id='imgSize' src='pictures/wricked_house.png'></div>
                        <a href='' id='link_news' id=''>US-Afghan Trade Chamber praises currency stability</a>
                        <p id='news_time'>Wednseday: 3:30 PM</p>
                     </div>
                     <div>
                        <div style='height: 85px; width: 45%;'>
                        <img id='imgSize' src='pictures/wricked_house.png'></div>
                        <a href='' id='link_news' id=''>US-Afghan Trade Chamber praises currency stability</a>
                        <p id='news_time'>Wednseday: 3:30 PM</p>
                     </div>
                     <div>
                        <div style='height: 85px; width: 45%;'>
                        <img id='imgSize' src='pictures/wricked_house.png'></div>
                        <a href='' id='link_news' id=''>US-Afghan Trade Chamber praises currency stability</a>
                        <p id='news_time'>Wednseday: 3:30 PM</p>
                     </div>
                     <div>
                        <div style='height: 85px; width: 45%;'>
                        <img id='imgSize' src='pictures/wricked_house.png'></div>
                        <a href='' id='link_news' id=''>US-Afghan Trade Chamber praises currency stability</a>
                        <p id='news_time'>Wednseday: 3:30 PM</p>
                     </div>
                     <div>
                        <div style='height: 85px; width: 45%;'>
                        <img id='imgSize' src='pictures/wricked_house.png'></div>
                        <a href='' id='link_news' id=''>US-Afghan Trade Chamber praises currency stability</a>
                        <p id='news_time'>Wednseday: 3:30 PM</p>
                     </div>
                     <div>
                        <div style='height: 85px; width: 45%;'>
                        <img id='imgSize' src='pictures/wricked_house.png'></div>
                        <a href='' id='link_news' id=''>US-Afghan Trade Chamber praises currency stability</a>
                        <p id='news_time'>Wednseday: 3:30 PM</p>
                     </div>
                  </div>
               </div>
            </div>
            <div id='Container_news'>
            <div style='height: 40px; align-content: center;'>
               <h3>ALSO IN THE NEWS</h3>
            </div>
            <div id='news_items'> 
               <div> 
                  <div style='height: 170px; margin-bottom: 10px;'> 
                     <img id='imgSize' src='pictures/zaferan.png'>
                  </div>
                  <a id='Newslink' href=''>Safferon Production Rises in Afghanistan </a>
                  <p id='news_detail'>The chamber of Commerce stated that Safferon production has raised in Afghanistan over the the past years... </p>
                  <p id='news_time'>Wednseday: 3:30 PM</p>
               </div>
                  <div> 
                  <div style='height: 170px; margin-bottom: 10px;'> 
                     <img id='imgSize' src='pictures/zaferan.png'>
                  </div>
                  <a id='Newslink' href=''>Safferon Production Rises in Afghanistan </a>
                  <p id='news_detail'>The chamber of Commerce stated that Safferon production has raised in Afghanistan over the the past years... </p>
                  <p id='news_time'>Wednseday: 3:30 PM</p>
               </div>
                  <div> 
                  <div style='height: 170px; margin-bottom: 10px;'> 
                     <img id='imgSize' src='pictures/zaferan.png'>
                  </div>
                  <a id='Newslink' href=''>Safferon Production Rises in Afghanistan </a>
                  <p id='news_detail'>The chamber of Commerce stated that Safferon production has raised in Afghanistan over the the past years... </p>
                  <p id='news_time'>Wednseday: 3:30 PM</p>
               </div>
   
            </div>
         </div>
      </div>
      <div>
            <div class='right_section'>
                  <div id='top_stories'>
                     <h4>TOP STORIES </h4> 
                  </div>
               <div style=' background-color:  rgb(237, 237, 237); display: grid; grid-template-columns: 20% 1fr; column-gap: 2px; height: 400px; padding-top: 10px;'> 
                  <div id='cell'> 1 </div>
                  <div>
                     <a id='nlink' href='a'>Islamic Emirate UNSC meetings without Afghan representative 'ineffective'</a>
                  </div>
                  <div id='cell'> 2 </div>
                  <div>
                     <a id='nlink' href='a'>Islamic Emirate UNSC meetings without Afghan representative 'ineffective'</a>
                  </div>
                  <div id='cell'> 3 </div>
                  <div>
                     <a id='nlink' href='a'>Islamic Emirate UNSC meetings without Afghan representative 'ineffective'</a>
                  </div>
                  <div id='cell'> 4 </div>
                  <div>
                     <a id='nlink' href='a'>Islamic Emirate UNSC meetings without Afghan representative 'ineffective'</a>
                  </div>
                  <div id='cell'> 5 </div>
                  <div>
                     <a id='nlink' href='a'>Islamic Emirate UNSC meetings without Afghan representative 'ineffective'</a>
                  </div>
            </div>

            <div class='right_section'>
                     <div id='top_stories'>
                        <h4>TOP BUSINESS STORIES </h4> 
                     </div>
                  <div style=' background-color:  rgb(237, 237, 237); display: grid;      grid-template-columns: 20% 1fr; column-gap: 2px; height: 260px; padding-top: 10px;'> 
                  <div id='cell'> 1 </div>
                  <div>
                     <a id='nlink' href='a'>Islamic Emirate UNSC meetings without Afghan representative 'ineffective'</a>
                  </div>
                  <div id='cell'> 2 </div>
                  <div>
                     <a id='nlink' href='a'>Islamic Emirate UNSC meetings without Afghan representative 'ineffective'</a>
                  </div>
                  <div id='cell'> 3 </div>
                  <div>
                     <a id='nlink' href='a'>Islamic Emirate UNSC meetings without Afghan representative 'ineffective'</a>
                  </div>
               
               </div>
               <div id='socialNetwork'>
                  <div style=' margin-top: 30px;'>
                     <h5 style=' margin-left: 5px;'>FOLLOW US</h5> 
                  </div>
                  <div id='cell'>
                     <div id='innerCell'>
                        <h3 style='margin-top: 20px; margin-left: 5px; color: white;'>Join us on social networks</h3>
                     </div>
                     <div id='innerCell'>
                        <a href=''><img src='logo/facebook_logo.png'></a>
                        <a href=''>
                        <img src='logo/twitter.png'>
                        </a>
                        <a href=''><img src='logo/youtube.png'></a>
                        <a href=''><img src='logo/instagram.png'></a>
                     </div>
                     <div id='signInput'>
                        <h3 style='margin-top: 5px;margin-left: 6px; color: white;'>Newsletter</h3>
                        <p style='margin-left: 5px; margin-top: 5px;
                        color: white; margin-bottom: 10px; margin-left: 5px;'>Sign up to receive the best of Tolo News daily</p>
                        <input style='height: 30px; border: 1px solid white; margin-left: 5px; width: 70%;  background-color: rgb(61, 61, 61);' type='text' placeholder='Your email address'> 
                        <button style='width: 40px; background-color: red; height: 38px; color: white;'>OK</button>
                     </div>
                  </div>
            </div>
         </div>
       </div> 
     </div>
   </div>

 <div id='more_news' style='max-width: 900px;'> 
   <div style='height: 50px; align-content: center; '>
       <h3 style='display: inline-block; margin-right: 40%;'>ALSO IN THE NEWS</h3>
       <a href='' id='news_link' style='color: grey; text-decoration: none;'></a>
   </div>
   <div id='moreNews_container'>
      <div> 
         <div style='height: 150px;'>
            <img id='imgSize' src='pictures/carter.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>Former President and Nobel Prize  winner Jimmy Carter has died </a>
            <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div> 
          <div style='height: 150px;'>
            <img id='imgSize' src='pictures/german.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>German President dissolves parliament for Feb 15- 2025 </a>
            <p id='news_links' >German President dissolves parliament for Feb 15- 2025 </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div>
          <div style='height: 150px;'>
            <img id='imgSize' src='pictures/Ghaza.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>World Television Day: Tv's Impact on Afghanistan </a>
            <p id='news_links' >At least 13 killed in Ghaza in result of Israel air strikes</p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div>
          <div style='height: 150px;'>
            <img id='imgSize' src='pictures/nutrition.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>Attack on Journalists has increased </a>
            <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
   </div>
</div>

";
echo $news_content;


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>NewsPage</title>
   <link rel='stylesheet' href='style/home_page.css'>
   <link rel='stylesheet' href='style/contact_page_style.css'>
   <link rel='stylesheet' href='style/news_page.css'>
   
 <style> 
 #section_news{
   display: grid; 
   grid-template-columns: 35% 1fr;
   column-gap: 1%; margin-bottom: 10px;
 }
   
   </style>
</head>
<body>

   
</body>
</html>

