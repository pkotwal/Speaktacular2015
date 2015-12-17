<?php

error_reporting(0);
/*change*/
$mysql_host='mysql.serversfree.com';
$mysql_user='u570142327_user';
$mysql_pass='popo1234';
$mysql_db='u570142327_speak';

/*$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='speaktacular';*/

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db))
{
	die('Could not connect to server. Please try again later.');
}


if(isset($_POST['name_p1']) && isset($_POST['surname_p1']) && isset($_POST['phone_p1']) && isset($_POST['email_p1']) && isset($_POST['college']) && isset($_POST['city']) && isset($_POST['exp']) && isset($_POST['view']))
{
	if(!empty($_POST['name_p1']) && !empty($_POST['surname_p1']) && !empty($_POST['phone_p1']) && !empty($_POST['email_p1']) && !empty($_POST['college']) && !empty($_POST['exp']) && !empty($_POST['city']) && !empty($_POST['view']))
	{
		$name_p1=htmlentities(($_POST['name_p1']));
		$surname_p1=htmlentities(($_POST['surname_p1']));
		$phone_p1=htmlentities(($_POST['phone_p1']));
		$coll=htmlentities(($_POST['college']));
		$city=htmlentities(($_POST['city']));
		$exp=htmlentities(($_POST['exp']));
		$view=htmlentities(($_POST['view']));
		$email_p1=htmlentities(($_POST['email_p1']));
		
		$subject="$name_p1 $surname_p1";
		$header='From: Speaktaular2015 <support@speaktacular2015.in>';
		$message="Participant 1 \n Name: $name_p1 $surname_p1 \n Phone: $phone_p1\n Email: $email_p1\n";
		
		$sendMessage="Hello $name_p1, \n Thank you for registering for Speaktacular 2015. We look forward to having you at our debate. \n We will get in touch with you regarding the same. \n For any queries please feel free to get in touch with us at support@speaktacular2015.in or by replying to this E-mail. ";
		$sendSubject="Speaktacular 2015";
		
		if(isset($_POST['name_p2']) && isset($_POST['surname_p2']) && isset($_POST['phone_p2']) && isset($_POST['email_p2']))
		{
			if(!empty($_POST['name_p2']) && !empty($_POST['surname_p2']) && !empty($_POST['phone_p2']) && !empty($_POST['email_p2']))
			{
				$name_p2=htmlentities(($_POST['name_p2']));
				$surname_p2=htmlentities(($_POST['surname_p2']));
				$phone_p2=htmlentities(($_POST['phone_p2']));
				$email_p2=htmlentities(($_POST['email_p2']));
				
				$sendMessage="Hello $name_p2, \n Thank you for registering for Speaktacular 2015. We look forward to having you at our debate. \n We will get in touch with you regarding the same. \n For any queries please feel free to get in touch with us at support@speaktacular2015.in or by replying to this E-mail. ";
				$message.="\n Participant 2 \n Name: $name_p2 $surname_p2 \n Phone: $phone_p2\n Email: $email_p2\n";
				mail($email_p2,$sendSubject,$sendMessage,$header);
			}
		}
		
		$reg_query="INSERT INTO `participants` VALUES('','$name_p1 $surname_p1','$phone_p1','$email_p1','$name_p2 $surname_p2','$phone_p2','$email_p2','$coll','$city','$exp','$view')";
		mysql_query($reg_query);
		
		$message.="\n College: $coll \n City: $city \n Experience: $exp \n Views: $view";
		//$message = wordwrap($message,70);
		mail("pkotwal16@gmail.com,responses@speaktacular2015.in",$subject,$message,$header);
/*mail("responses@speaktacular2015.in",$subject,$message,$header);*/
		mail($email_p1,$sendSubject,$sendMessage,$header);
		 echo '<script type="text/javascript">alert("Thank You, \n your form has been submitted. \n Please check your E-mail for further details. Contact us at support@speaktacular2015.in if you require further assistance. ");</script>';
	}
}
?>
<html lang="en-US">
  <head>
    
    <title>Speaktacular 2015</title>
	
<meta name="keywords" content="speaktacular2015, speaktacular 2015, speaktacular, 2015, bandra,Mumbai,Bombay, Management society, Debate, competition, MS, Thadomal Shahani, Engineering College, national level, TSEC"/>
<meta name="description" content="A classic panel-style debate, the event hosts the elite of the nation’s debaters over the course of 2 days at the Thadomal Shahani Engineering College (TSEC), Mumbai."/>
	  <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="TimeCircles.js"></script>
    <link href="TimeCircles.css" rel="stylesheet">
  </head>

  <body>
    <div id="preloader">
      <img id="preloaderImg" src="preloader.gif">
    </div>
	  
	  <div id="cover">
	  </div>
	  <img id="close" src="close.png">

	  
	  <div id="register-form">
		   
	  	<form action="https://docs.google.com/forms/d/1n0S7e1kTqbXxujHFWM_NtcEVS1lRGcV7c1EXsDGUy_o/formResponse" method="POST" id="ss-form" target="_self" onsubmit=""><ol role="list" class="ss-question-list" style="padding-left: 0">
			<h2>Registration Form</h2>
			<h3>Participant:1 </h3>

<input type="text" name="entry.1513553932" value="" class="ss-q-short" placeholder="Name" id="entry_1513553932" dir="auto" aria-label="Name  " aria-required="true" required="" title="">
 

<input type="text" name="entry.541773223" value="" class="ss-q-short" placeholder="Surname" id="entry_541773223" dir="auto" aria-label="Surname  " title="" required>


<input type="email" name="entry.1915203260" value="" class="ss-q-short" placeholder="E-mail" id="entry_1915203260" dir="auto" aria-label="E-mail  " title="" required>

<input type="text" name="entry.1094547" value="" class="ss-q-short" placeholder="Phone number" id="entry_1094547" dir="auto" aria-label="Phone Number  " title="" required>

			<h3>Participant:2 </h3>
 

<input type="text" name="entry.345830279" value="" class="ss-q-short" placeholder="Name"id="entry_345830279" dir="auto" aria-label="Name  " title="" required>

<input type="text" name="entry.1078266936" value="" class="ss-q-short" placeholder="Surname"id="entry_1078266936" dir="auto" aria-label="Surname  " title="" required>


<input type="email" name="entry.904698984" value="" class="ss-q-short" placeholder="E-mail" id="entry_904698984" dir="auto" aria-label="Email  " title="" required>

<input type="text" name="entry.1941543988" value="" class="ss-q-short" placeholder="Phone "  id="entry_1941543988" dir="auto" aria-label="Phone number  " title="" required>

<h3>Team Details </h3>
<input type="text" name="entry.915206749" value="" class="ss-q-short" placeholder="College" id="entry_915206749" dir="auto" aria-label="College  " title="" required>

<input type="text" name="entry.1239374493" value="" class="ss-q-short" placeholder="City"id="entry_1239374493" dir="auto" aria-label="City  " title="" required>

 
<textarea name="entry.131377898" rows="8" cols="0" class="ss-q-long" id="entry_131377898" placeholder="Past Debating experience" dir="auto" aria-label="Past Debating experience  " required></textarea>

 
<textarea name="entry.63619930" rows="8" cols="0" class="ss-q-long" id="entry_63619930" placeholder="Your views on India being a permanent member of UNSC (150 word" dir="auto" aria-label="Your views on India being a permanent member of UNSC (150 words)  " required></textarea>
 
 <input type="submit" name="submit" value="Submit" id="ss-submit" class="btn">
</div></div></div>
<input type="hidden" name="draftResponse" value="[,,&quot;8519624841194299482&quot;]
">
<input type="hidden" name="pageHistory" value="0">


<input type="hidden" name="fbzx" value="8519624841194299482">


</ol>
			
			
		</form>
	  </div>

    <header>
      <img id="main-logo" src="Speaktacular%20Logo%20-%20White.png">		
		<a href="http://tsec.edu/"><img id="tsec"src="TSEC-LOGO-transparent-WHITE.png" class="logos"></a>
      <img class="logos" src="ms.png">
		<button id="register" class="btn">Register Now!</button>
    </header>

    <nav>
      
        <div  class="nav_div active_nav" id="nav1">
          <h3 class="nav-text">Home</h3>
          <img src="home.png" class="nav_icon">
        </div>
   
        <div class="nav_div" id="nav2">
          <h3 class="nav-text">Format</h3>
          <img src="about.png" class="nav_icon">
        </div>
      
        <div class="nav_div" id="nav3">
          <h3 class="nav-text">Rules</h3>
          <img src="topic.png" class="nav_icon">
        </div>
      
        <div class="nav_div" id="nav4">
          <h3 class="nav-text">History</h3>
          <img src="history.png" class="nav_icon">
        </div>
      
        <div class="nav_div" id="nav5">
          <h3 class="nav-text">Contact</h3>
          <img src="contact.png" class="nav_icon">
        </div>
     
       <!-- <div class="nav_div" id="nav6">
          <h3 class="nav-text">Contact Us</h3>
          <img src="contact.png" class="nav_icon">
        </div>-->
      
    </nav>

    <section>
		

       <div id="countdown" >
    <div id="timer" data-date="2015-03-12 12:00:00" style="padding: 0px; box-sizing: border-box;"></div>
    </div>
		<div>
		      <h1 id="content-title">Speaktacular 2015:</h1> 

     <!-- <div class="content" id="div1">
      </div>-->

      <div class="content" id="div2">
        <h3>For any further queries you can contact us</h3>
		  <p><b>Athira Nair: </b>+919892145552</p>
		  <p><b>Darshan Tina: </b>+919833013576</p>

		  <p><b>Drishti Gwalani: </b>+919930548246</p>
		  <p><b>Geetika Suroliya: </b>+917506274010</p>
		  <p><b>Karan Parsnani: </b>+919766680929</p>
		  <p><b>Pawan Chawla:</b>+919930067763</p></br>
		<p>Or drop us a mail at support@speaktacular2015.in</p>
      </div>

      <div class="content" id="div3">
		  	<img class="content-img" src="hist.jpg">
       <p> Originally conceived for the college’s students by the Management Society of TSEC (MS-TSEC) as an introduction to the rich world of debate, Speaktacular rapidly grew from its humble beginnings in 2010 to the national competition it is today under the guidance of the Society’s counsellor, Ms. Anjali Malviya. and TSEC’s principal, Dr. G. T. Thampi.</p>

<p>2014 saw an exemplary discussion on controversial subjects, with teams from around the nation bending and twisting the opinions of packed halls to polarise each mind to their favour. The rigorous screening procedure followed in selecting candidates ensured a competitive and fruitful discussion without a dull moment as the audience roared with laughter at the wit on display and was hushed into silence at flawless logic and passionate arguments as a diverse range of students across various fields of study, from law to engineering, went head-to-head over a carefully chosen series of topics designed to challenge the sharpest minds and tread the grey area between right and wrong, the ultimate judge, as always, being those in attendance.</p>
      </div>

      <div class="content" id="div4">
    
      <ol>

		  <li>	The proposition starts the debate while the opposition raises the first point in the refutation round.</li>
		  <li>	One speaker of the team make the opening speech while the other makes the closing speech.</li>
		  <li>Definition challenges are allowed only by the opening opposition speaker.</li>
		  <li>At no point during the refutation round can a speaker talk continuously for more than 45 seconds.</li>
		  <li>An extension to the refutation round can only be provided on the discretion of the Core Adjudicators. </li>
		  <li>Personal comments of any kind directed against the opposite team are strictly prohibited.</li>
		  <li>Participants cannot comment on the opposite team’s stance or statements made in previous debates of the competition.</li>
		  <li>Speakers will be marked down for exceeding the time limit.</li>
		  <li>The last minute of the refutation round at any stage of the competition is reserved for the concluding statement. It is a short and concise statement that sums up a team’s arguments.</li>
		  <li>No new points can be introduced during the closing speech. If a certain team does bring up a new point; the opposite team may request the moderator an opportunity to point out the new points at the end of the closing speech.</li>
		  <li>No form of unparliamentary language will be tolerated at any point during the debate.</li>
		  <li>No electronic gadgets such as mobile phones, laptops, etc. will be allowed during the time of the debate.</li>
		  <li>The speakers will be judged on the basis of their Content, Use of Quotations, Body Language, Diction, Vocal Delivery, Logical Illustration and Analysis, Decorum and Presentation.</li>
		  <li>Discrepancies of any sort during the debate will be resolved at the moderator’s discretion. The decision will be final and binding.</li>
		  </ol>
      </div>

      <div class="content" id="div5">


	<h3>Eliminations and Quarter Finals:</h3>
		  <span> <b>Opening Speech:</b>  2 minutes 30 seconds<br></span>
		  <span>  <b>Refutation:</b> 5 minutes<br></span>
		  <span><b>Closing Speech:</b> 2 minutes<br></span>
		  <span>(3 Hours of debate time if 4 debates conducted simultaneously, misc time 1 hr, ~4 hours for first round)<br><br></span>

		  <h3>Semi-Finals:</h3>
		  <span><b>Opening Speech:</b> 3 minutes<br></span>
		  <span><b>Refutation:</b> 10 minutes<br></span>
		  <span><b>Closing Speech:</b> 2.5 minutes<br><br></span>

		  <b>OR</b><br><br>

		  <span> <b>Opening Speech:</b> 2.5 Minutes<br></span>
			 <span> <b>Refutation:</b> 7 Minutes<br></span>
		  <span> <b>Closing Speech:</b> 2 minutes<br><br></span>

		  <h3>Finals:</h3>
		  <span><b>Opening Speech:</b> 4 minutes<br></span>
		  <span><b>Refutation: </b>15 minutes<br></span>
		  <span><b>Closing Speech:</b> 3 minutes<br></span>

		  <h3>Debate Format:</h3>
<ul>
	<li>	Proposition begins with the Opening Speech, following with a speech by the opposition</li>
	<li>	The Opposition initiates the refutation round by asking a questioon to the proposition. The question must be short and concise. The question must be relevant to the ongoing topic.</li>
	<li>	The proposition answers the question.</li>
	<li>	The opposition may revert with a comment to the answered question. The comment must be in accord with the answer provided by the proposition.</li>
	<li>	Following this, the same procedure is to be repeated with the roles of the proposition and opposition interchanged. </li>
	<li>	No speaker may exceed a speech more than 45 seconds at any point.</li>
	<li>Towards the end of the refutation round, a 30 second concluding statement can be made by any member of each team. </li>
	<li>	The closing speech must be made by the speaker who has not delivered the opening speech.</li>
	<li>The opposition team delivers the closing speech first.</li>
	<li>	No new points can be made during the closing speech, if made, can be highlighted by the opposing team. Teams making new points during the closing speech will be marked down.</li>
	<li>	A warning bell and a final bell will be rung to inform the participant that their time is about to elapse and has elapsed respectively. </li>
		  </ul>

      </div>
      <div class="Top content" id="div6">
       <img class="content-img" src="Speaktacular%20Logo%20-%20Bklack.png">
        <p>Speaktacular is one of India’s premier debates. A classic panel-style contestation, the event hosts the elite of the nation’s debaters over the course of 2 days at the Thadomal Shahani Engineering College (TSEC), an institution that ranks amongst the foremost in the city. The competition provides a platform for competitors to employ ethos, pathos and logos to argue, discuss and disagree their way to the title of Mumbai’s best debaters.</p>
      </div>
			
		</div>
    </section>

    <footer id="footer">
      <h6>&#169; The Management Society TSEC</h6>
      <h6>Developed by the Web Team (MS-TSEC)</h6>
		  <div id="social-icons">
			<a href="https://www.facebook.com/Debate.Speaktacular?ref=br_tf"><img src="fb_black.png" id="fb" class="logos social"></a>
			<a href="https://twitter.com/mstsec"><img src="t_black.png" id="tw" class="logos social"></a>
			<a href="https://www.youtube.com/user/MsTsec001"><img src="yt_black.png" id="yt" class="logos social"></a>
		</div>
    </footer>
    <script>
    $("#timer").TimeCircles();
	window.onresize = function(event) {
    $("#timer").TimeCircles().rebuild(); 
	};
    </script>
    <script src="jq.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59502337-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>