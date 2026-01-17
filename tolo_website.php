<?php
include("header.php");
include("footer.php");

$link = 'Progress Made in Easing Banking Restrictions: Central Bank';
$picture = 'Pictures/bank_teller.png';
$outline = 'He further stated that efforts to moderate the banking system in the country are ongoing...';
$time = date("h:i:sa");
$linkToNews = array($link, $picture, $outline, $time);
#__________________________________________________________________________
$link1 = 'US-Afghan trade chamber established...';
$link2 = 'Central Bank enhances ATM services Amid Citizen fee concerns..';
#_______________________________________________________________
$tops1 = 'Islamic Emirate UNSC meetings without Afghan representative ';
$tops2 = 'Islamic Emirate UNSC meetings without Afghan representative';
$tops3 = 'Emirate UNSC meetings without Afghan representative';
$tops4 = 'Islamic Emirate UNSC meetings without Afghan representative';
$tops5 = 'Islamic Emirate UNSC meetings without Afghan representative';

echo "<div class='main_content'>
   <div class='left_section'>
      <div id='top'>
         <a id='newsTitle'  href='news_page.php'> 
            {$linkToNews[0]}
         </a>
      </div>
      <div id='bottom'> 
         <div>
            <p id='news_des' href='news_page.php'>
                {$linkToNews[2]}
            </p>
            <p id='time'>{$linkToNews[3]}</p>
            <h4 id='related_news'>RELATED NEWS </H4>
            <a id='news_link' href='a'>$link1</a>
            <br>
            <a id='news_link' href='a'>$link2</a>
         </div>
         <div><img id='picture_size' src='{$linkToNews[1]}'></div>
      </div>
   </div>
   <div class='right_section'>
      <div id='top_stories'>
         <h4>TOP STORIES </h4> 
      </div>
      <div style=' background-color:  rgb(237, 237, 237); display: grid; grid-template-columns: 20% 1fr;       column-gap: 2px; height: 400px; padding-top: 10px;'> 
         <div id='cell'> 1 </div>
         <div>
            <a id='nlink' href=''>$tops1</a>
         </div>
          <div id='cell'> 2 </div>
         <div>
            <a id='nlink' href=''>$tops2</a>
         </div>
          <div id='cell'> 3 </div>
         <div>
            <a id='nlink' href=''>$tops3</a>
         </div>
          <div id='cell'> 4 </div>
         <div>
            <a id='nlink' href=''>$tops4</a>
         </div>
          <div id='cell'> 5 </div>
         <div>
            <a id='nlink' href='a'>$tops5</a>
         </div>
      </div>
   </div>
   </div>
   <div class='news_content'> 
      <div id='cell_parent'> 
      <div id='top_cell'>
         <div><h4>LATEST NEWS</h4></div>
         <div><a href='a'>View More News </a></div>
      </div>
      <div id='bottom_cell'>
         <div>
            <div style='height: 180px; margin-bottom: 10px;'>
               <img id='img' src='pictures/carter.png'>
            </div>
            <a href='' class='news_title'>Former US President and Nobel Peace Prize Recipient Jimmy Carter Has Died </a>
            <p id='news_detail'>Carter, a Democrat, became president in January 1977 after defeating incumbent Republican President Gerald... </p>
            <p id='news_time'>Monday: 3:33 PM </p>
         </div>
         <div> 
            <div style='height: 180px; margin-bottom: 10px;>
               <img id='img' src='pictures/carter.png'>
            </div>
               <a href='' class='news_title'>Library books are not enaugh for peaple to read in Kabul... </a>
               <p id='news_detail'>Carter, a Democrat, became president in January 1977 after defeating incumbent Republican President Gerald... </p>
               <p id='news_time'>Monday: 3:33 PM </p>
         </div>
      </div>
      </div>
      <div id='vid_section'>
         <div style='border-bottom: 2px solid black;'><h4>6PM BULLETIN</h4></div>
         <div style='height: 250px; background-color: rgb(218, 217, 217); padding: 15px;'>
            <div style=' height: 170px; margin-bottom: 5px; border-radius: 5px;'>
               <video id='video_size' controls src='videos/parliament.mp4'>
            </div>
               <a class='news_title' href=''>TOLOnews - 6PM NEWS 29December 2024 </a>
               <p id='news_detail'>The Islamic Emirate took Control of Afghanistan...</p>
         </div>
      </div>
      <div id='news_content'> 
         <div style='height: 100px;'>
         <img id='img2' src='pictures/land.png'>
         <a id='nlink' href=''> Over One million Migrants returned in 9 Months: Ministry </a>
         <p id='news_time'>Today: 12:05 PM </p>
         </div>
         <div style='height: 100px;'>
         <img id='img2' src='pictures/zaferan.png'>
         <a id='nlink' href=''>Zaferan Product has increased in recent years..</a>
         <p id='news_time'>Friday: 03:30 PM </p>
         </div>
         <div style='height: 100px;'>
         <img id='img2' src='pictures/tent.png'>
         <a id='nlink' href=''>Pakistan Rocket attack killed 9 people in Paktia</a>
         <p id='news_time'>Thursday: 09:05 AM </p>
         </div>
         <div style='height: 100px;'>
         <img id='img2' src='pictures/russian_flag.png'>
         <a id='nlink' href=''> Russia Calls for restraint from Afghanistan - Pakistan amid tensions </a>
         <p id='news_time'>Today: 12:05 PM </p>
         </div>
      </div>
   </div>
   <div class='video_container'> 
      <div id='parent'>
         <div id='vid_header'> 
            <div>
               <h3>WATCH </h3>
            </div>
            <div>
               <a id='more_vid' href=''> View All Videos </a>
            </div>
         </div>
         <div id='vid_link_container'> 
            <div>
               <div style='height: 300px;'> 
                  <video id='video_size' controls src='videos/meeting.mp4'>
               </div>
               <div>
                  <h2 style='margin-top: 5px;
                  margin-bottom: 5px;'>TOLOnews - 6PM News - 29December 2022 </h2>
                  <p id='news_time'>Thursday: 6:00 PM </P>
               </div>
            </div>
            <div id='vid_list'>
               <div id='vl'>
                  <div> 
                     <video id='video_size' controls src='videos/video_scene.mp4'>
                  </div>
                  <div>
                     <a id='vid_link' href=''>Farakhabar - Islamic Emirates reaction on UNHCR meeting on AFghanistan </a>
                     <p id='news_time'> Yesterday: 6:40 PM </p>
                  </div>
               </div>
               <div id='vl'> 
               <div><video id='video_size' controls src='videos/parliament.mp4'> </div>
                  <div>
                     <a id='vid_link' href=''>Farakhabar - Islamic Emirates reaction on UNHCR meeting on AFghanistan </a>
                     <p id='news_time'> Yesterday: 6:40 PM </p>
                  </div>
               </div>
               <div id='vl'> 
                  <div><video id='video_size' controls src='videos/meeting.mp4'></div>
                  <div>
                     <a id='vid_link' href=''>Farakhabar - Islamic Emirates reaction on UNHCR meeting on AFghanistan </a>
                     <p id='news_time'> Yesterday: 6:40 PM </p>
                  </div>
               </div>
               <div id='vl'> 
                  <div><video id='video_size' controls src='videos/meeting.mp4'> </div>
                  <div>
                     <a id='vid_link' href=''>Farakhabar - Islamic Emirates reaction on UNHCR meeting on AFghanistan </a>
                     <p id='news_time'> Yesterday: 6:40 PM </p>
                  </div>
               </div>
            
            </div>
         </div>
      </div>
   </div>
   <div class='content_main'>
      <div id='cell_content' >
         <div>1</div>
         <div style='text-align: left;'>
            <a id='link_news' href=''style=''>10000 Licences Given to Woman entrepreneurs But challenges Remain</a>
         </div>
         <div>2 </div>
         <div  style='text-align: left;'> 
            <a id='link_news' href=''style=''>10000 Licences Given to Woman entrepreneurs But challenges Remain</a>
         </div>
         <div>3</div>
         <div  style='text-align: left;'> 
            <a id='link_news' href=''style=''>10000 Licences Given to Woman entrepreneurs But challenges Remain</a>
         </div>
         <div>4 </div>
         <div  style='text-align: left;'>
            <a id='link_news' href=''style=''>10000 Licences Given to Woman entrepreneurs But challenges Remain</a>
         </div>
         <div>5</div>
         <div  style='text-align: left;'> 
            <a id='link_news' href=''style=''>10000 Licences Given to Woman entrepreneurs But challenges Remain</a>
         </div>
      </div>
      <div id='right_cell_parent'>
         <div>
            <div style='height: 200px; margin-bottom: 10px;'>
               <img id='img'; src='pictures/zaferan.png'>
            </div>
            <a id='Newslink' href=''>Safferon Productions rises in Afghanistan </a>
            <p id='detailN'>The chamber of Commerce and Investment has called for greater facilitation for Safferon farmers.. </p>
            <p id='news_time'>Today: 3:30 PM </p>
         </div> 
         <div>
            <div style='height: 200px; margin-bottom: 10px;'>
               <img id='img'; src='pictures/bank_teller.png'>
               <a id='Newslink' href=''>Progress Made in Easing Banking System in Afghanistan</a>
               <p id='detailN'>Efforts are ongoing to ease banking system in Afghanistan banking system.. </p>
               <p id='news_time'>Today: 3:30 PM </p>
            </div>
         </div>
      </div>
   </div>
   <br>
   <div id='containerN'> 
      <div id='child_con'> 
      <div style='height: 25px;'> <h4 id='weather'>WEATHER</h4></div>
      <div style='height: 320px; position: relative;'> 
         <img id='img' src='pictures/weather_sky.png'>
            <div id='weather_detail'>
               <div style=' width: 90px;height: 90px; border-radius: 45px;'>
                  <img id='img'src='pictures/sun.png'>
               </div>
               <p style='font-size: 13px;'> Kabul, AF </p>
               <p style='font-size: 30px;'>14<span style='text-align: top; margin-left: 2px;vertical-align: super; font-size: 15px;'>o</span> </p>
               <p style='font-size: 11px;'>3:12 pm AFT (Today)</p>
               <p style='font-size: 12px;'>Mostly Sunny (Today)</p>
            </div>
      </div>
      </div>
      <div id='child_con2'>
         <div>
            <img id='img' style='width: 45%; float: left; margin-right: 7px;' src='pictures/cold_storage.png'>
            <a id='link_news' href=''>China To establish 3 cold storages in Afghanistan </a>
            <p id='news_time'>Yesterday: 2:40 PM </p>
         </div>
         <div>
            <img id='img' style='width: 45%; float: left; margin-right: 7px;' src='pictures/entry_point.png'>
            <a id='link_news' href=''>Afghanistan receives Oil Extraction equipments For Amu darya Basin</a>
            <p id='news_time'>Yesterday: 1:40 PM </p>
         </div>
         <div>
            <img id='img' style='width: 45%; float: left; margin-right: 7px;' src='pictures/rall_equipment.png'>
            <a id='link_news' href=''>China To establish 3 cold storages in Afghanistan </a>
            <p id='news_time'>Yesterday: 5:40 PM </p>
         </div>
         <div>
            <img id='img' style='width: 45%; float: left; margin-right: 7px;' src='pictures/trade.png'>
            <a id='link_news' href=''>China To establish 3 cold storages in Afghanistan </a>
            <p id='news_time'>Yesterday: 5:40 PM </p>
         </div>
      
      </div>
   </div>

   <div id='more_news'> 
      <div style='height: 50px; align-content: center; '>
         <h3 style='display: inline-block; margin-right: 40%;'>ATTACK ON MEDIA/JOURNALISTS </h3>
         <a href='' id='news_link' style='color: grey; text-decoration: none;'>View all Attack on Media/Journalist </a>
      </div>
      <div id='moreNews_container'>
         <div> 
            <div style='height: 150px;'>
               <img id='img' src='pictures/house.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>Ministry Comments on closing Arezo TV </a>
               <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div> 
            <div style='height: 150px;'>
               <img id='img' src='pictures/abbas.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>Abbas Stanikzai Calls for Unity Between Government and Media </a>
               <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div>
            <div style='height: 150px;'>
               <img id='img' src='pictures/tv.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>World Television Day: Tv's Impact on Afghanistan </a>
               <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div>
            <div style='height: 150px;'>
               <img id='img' src='pictures/crowd.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>Attack on Journalists has increased </a>
               <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
      </div>
   </div>
   <div id='more_news'> 
      <div style='height: 50px; align-content: center; '>
         <h3 style='display: inline-block; margin-right: 75%;'>HEALTH</h3>
         <a href='' id='news_link' style='color: grey; text-decoration: none;'>View all Health News </a>
      </div>
      <div id='moreNews_container'>
         <div> 
            <div style='height: 150px;'>
               <img id='img' src='pictures/nurses.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>Uzbekistan sends Doctors to treat Patiants in Balkh </a>
               <p id='news_links' >Uzbekistan sends Doctors to treat Patiants in Balkh</p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div> 
            <div style='height: 150px;'>
               <img id='img' src='pictures/medecine.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>More Medecine imported from outside of Afghanistan </a>
               <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div>
            <div style='height: 150px;'>
               <img id='img' src='pictures/minister.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>Ministery of Health: Building 318 Hospitals in districts </a>
               <p id='news_links' >Ministery of Health: Building 318 Hospitals in districts </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div>
            <div style='height: 150px;'>
               <img id='img' src='pictures/vaccine.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>Children Vaccination is ongoing.. </a>
               <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
      </div>
   </div>
   <br>
   <div id='sportNews_container'>
      <div>
         <div style='height: 40px; align-content: center;'>
            <h3 style='display: inline-block; margin-right: 67%;'>Sport</h3>
            <a href='' id='news_link' style='color: grey; text-decoration: none;'>View all Sport News </a>
         </div>
         <div id='spt_parent'>
            <div>
               <div style='height: 155px;'>
                  <img id='img' src='pictures/cricket.png'>
                  <a id='Newslink' style='font-size: 15px;' href=''>Jalswal: Indian Team Likely to Skip Pakistan for 2025 Champions Trophy </a>
                  <p id='news_links' >ICC has proposed a compromise, suggesting India play its matches in a neutral venue.</p>
                  <p id='news_time'>Yesterday: 2:40 PM </p>
               </div>
            </div>
            <div style='height: 155px;'>
                  <img id='img' src='pictures/cricket_team.png'>
                  <a id='Newslink' style='font-size: 15px;' href=''>Afghan Talent Shines: Seven members choses for 2025 IPL </a>
                  <p id='news_links' >ICC has proposed a compromise, suggesting India play its matches in a neutral venue.</p>
                  <p id='news_time'>Yesterday: 2:40 PM </p>
               </div>
         </div>
         <div id='news_cel' style='height: 230px;'> 
            <div style='height: 110px;'>
               <img id='img' style='width: 50%; margin-right: 5px; float: left;' src='pictures/trophy.png'>
               <a id='link_news' href=''>Champions Trophy Arrives in Kabul for Display </a>
               <p id='news_time'>Yesterday: 5:40 PM </p>
            </div>
            <div style='height: 110px;'>
               <img id='img' style='width: 50%; margin-right: 5px; float: left;' src='pictures/cricket.png'>
               <a id='link_news' href=''>Afghanistan Defeats Bangladish in 50-over series Finale </a>
               <p id='news_time'>Yesterday: 5:40 PM </p>
            </div>
            <div style='height: 110px;'>
               <img id='img' style='width: 50%; margin-right: 5px; float: left;' src='pictures/bodyBuilders.png'>
               <a id='link_news' href=''>Afghan Bodybuilders Shine with Seven Medals in Wold Championships </a>
               <p id='news_time'>Yesterday: 5:40 PM </p>
            </div>
            <div style='height: 110px;'>
               <img id='img' style='width: 50%; margin-right: 5px; float: left;' src='pictures/poolBall.png'>
               <a id='link_news' href=''>China To establish 3 cold storages in Afghanistan </a>
               <p id='news_time'>Yesterday: 5:40 PM </p>
            </div>
         
         
         </div>
      </div>
      <div> 
         <div id='curency_container'>
            <div style='height: 40px; align-content: center;'> 
               <h4 style='font-size: 14px;display: inline-block; color: brown;'>CURRENCY RATES </h4>
               <p style='color: grey;font-size: 12px; display: inline-block;'>LAST REPORT: 30:12 - 3024 </p>
            </div>
            <div id='cell_parent2'> 
               <div> 
                  <img id='img' style='width: 40%; float: left;' src='pictures/us_flag.png'>
                  <p id='amount'>1 USD </p>
               </div>
               <div>
                  <p id='AFN'>70.73 AFN </p>
               </div>
               <div> 
                  <img id='img' style='width: 40%; float: left;' src='pictures/iran_flag.png'>
                  <p id='amount'>1000 IRR</p>
               </div>
               <div>
                  <p id='AFN'>0.90 AFN </p>
               </div>
               <div> 
                  <img id='img' style='width: 40%; float: left;' src='pictures/UAE.png'>
                  <p id='amount'>1 UAE </p>
               </div>
               <div>
                  <p id='AFN'>19.50 AFN </p>
               </div>
               <div> 
                  <img id='img' style='width: 40%; float: left;' src='pictures/euro.png'>
                  <p id='amount'>1 EUR </p>
               </div>
               <div>
                  <p id='AFN'>73.60AFN</p>
               </div>
               <div> 
                  <img id='img' style='width: 40%; float: left;' src='pictures/indian_flag.png'>
                  <p id='amount'>1000 INR </p>
               </div>
               <div>
                  <p id='AFN'>760.00AFN </p>
               </div>
               <div> 
                  <img id='img' style='width: 40%; float: left;' src='pictures/pak_flag.png'>
                  <p id='amount'>1000 PKR </p>
               </div>
               <div>
                  <p id='AFN'>247.00AFN </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div id='more_news'> 
      <div style='height: 50px; align-content: center; '>
         <h3 style='display: inline-block; margin-right: 77%;'>WORLD</h3>
         <a href='' id='news_link' style='color: grey; text-decoration: none;'>View all World News</a>
      </div>
      <div id='moreNews_container'>
         <div> 
            <div style='height: 150px;'>
               <img id='img' src='pictures/carter.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>Former President and Nobel Prize  winner Jimmy Carter has died </a>
               <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div> 
            <div style='height: 150px;'>
               <img id='img' src='pictures/german.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>German President dissolves parliament for Feb 15- 2025 </a>
               <p id='news_links' >German President dissolves parliament for Feb 15- 2025 </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div>
            <div style='height: 150px;'>
               <img id='img' src='pictures/Ghaza.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>World Television Day: Tv's Impact on Afghanistan </a>
               <p id='news_links' >At least 13 killed in Ghaza in result of Israel air strikes</p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
         <div>
            <div style='height: 150px;'>
               <img id='img' src='pictures/nutrition.png'> 
               <a href='' style='font-size: 15px; ' id='Newslink'>Attack on Journalists has increased </a>
               <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
               <p id='news_time'>15 December-2024</p>
            </div>
         </div>
      </div>
   </div>
   <br>
<div id='sportNews_container'>
      <div style=''>
         <div style='height: 40px; align-content: center;'>
            <h3 style='display: inline-block; margin-right: 67%;'>OPINION</h3>
            <a href='' id='news_link' style='color: grey; text-decoration: none;'>View all Opinion</a>
         </div>
         <div id='opinion_list'>
            <div>
               <img id='img' style='width: 40%;float: left; margin-right: 10px; ' src='pictures/china_emirate_flag.png'>
               <a href=''style='font-size: 20px;' id='Newslink'>How do Afghanistan and China move ahead? </a>
               <p id='news_links' style='font-size: 14px;'>It can mover a good relationship for the futture  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur </p>
               <p id='news_time'>Tuesday: 9:00 AM </p>
            </div>
            <div> 
                <img id='img' style='width: 40%;float: left; margin-right: 10px; ' src='pictures/central-asia.png'>
               <a href=''style='font-size: 20px;' id='Newslink'>How do Afghanistan and China move ahead? </a>
               <p id='news_links' style='font-size: 14px;'>It can mover a good relationship for the futture  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur </p>
               <p id='news_time'>Tuesday: 9:00 AM </p>
            </div>
            <div>
                <img id='img' style='width: 40%;float: left; margin-right: 10px; ' src='pictures/media_meeting.png'>
               <a href=''style='font-size: 20px;' id='Newslink'>How do Afghanistan and China move ahead? </a>
               <p id='news_links' style='font-size: 14px;'>It can mover a good relationship for the futture  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ut unde harum pariatur </p>
               <p id='news_time'>Tuesday: 9:00 AM </p>
            </div>
      
         </div>
      </div>
      <div> 
         <div id='curency_container'>
            <div style='height: 40px; align-content: center;'> 
               <h4 style='font-size: 14px;display: inline-block; color: rgb(97, 223, 223);'>TWITTER FEED </h4>
               <p style='color: grey;font-size: 12px; display: inline-block; margin-left: 35%;'>@Tolonews</p>
            </div>
            <div style='padding-top: 3px; height: 440px; border-top: 2px solid aqua;'> 
               <img id='img' src='pictures/twitter.png'>
            </div>
         </div>
      </div>
</div>
<br>
<div id='social_media_container'>
   <div id='media'>
      <h4>FOLLOW US ON SOCIAL NETWORKS </h4>
      <div style='border-top: 1px solid white;'>
         <div>
            <a href='' style='height:49px; border: 1px solid grey; width: 50px; border-radius: 25px;'><img style='margin-top: 12px;' src='logo/fb.png'> </a>
            <h4 style='margin-left: 10px;'>Facebook</h4>
         </div>
         <div>
            <a href='' style='height:49px; border: 1px solid grey; width: 50px; border-radius: 25px;'><img style='margin-top: 14px;' src='logo/twitter.png'> </a>
            <h4 style='margin-left: 10px;'>Twitter</h4>
         </div>
         <div>
            <a href='' style='height:49px; border: 1px solid grey; width: 50px; border-radius: 25px;'><img style='margin-top: 15px;' src='logo/youtube.png'> </a>
            <h4 style='margin-left: 10px;'>Youtube</h4>
         </div>
         <div>
            <a href='' style='height:49px; border: 1px solid grey; width: 50px; border-radius: 25px;'><img style='margin-top: 14px;' src='logo/instagram.png'> </a>
            <h4 style='margin-left: 10px;'>Instagram</h4>
         </div>
      </div>
   </div>
</div>
<div id='more_news'> 
   <div style='height: 50px; align-content: center; '>
       <h3 style='display: inline-block; margin-right: 59%;'>ARTS AND CULTURE</h3>
       <a href='' id='news_link' style='color: grey; text-decoration: none;'>View all Arts&Culture News</a>
   </div>
   <div id='moreNews_container'>
      <div> 
         <div style='height: 150px;'>
            <img id='img' src='pictures/carter.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>Former President and Nobel Prize  winner Jimmy Carter has died </a>
            <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div> 
          <div style='height: 150px;'>
            <img id='img' src='pictures/german.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>German President dissolves parliament for Feb 15- 2025 </a>
            <p id='news_links' >German President dissolves parliament for Feb 15- 2025 </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div>
          <div style='height: 150px;'>
            <img id='img' src='pictures/Ghaza.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>World Television Day: Tv's Impact on Afghanistan </a>
            <p id='news_links' >At least 13 killed in Ghaza in result of Israel air strikes</p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div>
          <div style='height: 150px;'>
            <img id='img' src='pictures/nutrition.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>Attack on Journalists has increased </a>
            <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
   </div>
</div>
<div id='more_news'> 
   <div style='height: 50px; align-content: center; '>
       <h3 style='display: inline-block; margin-right: 40%;'>SCIENCE AND TECHNOLOGY</h3>
       <a href='' id='news_link' style='color: grey; text-decoration: none;'>View all Science and Technology News</a>
   </div>
   <div id='moreNews_container'>
      <div> 
         <div style='height: 150px;'>
            <img id='img' src='pictures/carter.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>Former President and Nobel Prize  winner Jimmy Carter has died </a>
            <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div> 
          <div style='height: 150px;'>
            <img id='img' src='pictures/german.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>German President dissolves parliament for Feb 15- 2025 </a>
            <p id='news_links' >German President dissolves parliament for Feb 15- 2025 </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div>
          <div style='height: 150px;'>
            <img id='img' src='pictures/Ghaza.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>World Television Day: Tv's Impact on Afghanistan </a>
            <p id='news_links' >At least 13 killed in Ghaza in result of Israel air strikes</p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
      <div>
          <div style='height: 150px;'>
            <img id='img' src='pictures/nutrition.png'> 
            <a href='' style='font-size: 15px; ' id='Newslink'>Attack on Journalists has increased </a>
            <p id='news_links' >This comes as media-ralated laws in the country have yet to ... </p>
            <p id='news_time'>15 December-2024</p>
         </div>
      </div>
   </div>
</div>
<br>
<div id='photo_container'>
   <div style='height: 40px; align-content: center;'>
      <h4> PHOTOS OF THE DAY <h4>
   </div>
   <div style='height: 350px; padding-top: 10px;border-top: 1px solid grey;'>
      <img id='img' src='pictures/picture01.png'>
   </div>
   <div style='height: 140px;margin-top: 5px; overflow-y:  scroll;'>
      <img id='img' style='width: 30%; margin-tight: 5px;' src='pictures/pic1.jpg'>
      <img id='img' style='width: 30%; margin-tight: 5px;' src='pictures/pic3 (5).jpg'>
      <img id='img' style='width: 30%; margin-tight: 5px;' src='pictures/pic3.jpg'>
      <img id='img' style='width: 30%; margin-tight: 5px;' src='pictures/pic4.jpg'>
      <img id='img' style='width: 30%; margin-tight: 5px;' src='pictures/pic5.jpg'>
      <img id='img' style='width: 30%; margin-tight: 5px;' src='pictures/road.png'>

   </div>
</div>
";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HomePage</title>
   <link rel="stylesheet" href="style/home_page.css">
  
</head>
<body>
   <script src='js/tolo_website.js'></script>
</body>
</html>