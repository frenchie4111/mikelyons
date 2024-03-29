<html>
<head>
	<title>Mike Lyons - Software Engineer</title>

	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shanti' rel='stylesheet' type='text/css'>
	
	<link href='reset.css' rel='stylesheet' type='text/css'>
	<link href='main.css' rel='stylesheet' type='text/css'>
	<link href='projects.css' rel='stylesheet' type='text/css'>
	<link href='side_contentbox.css' rel='stylesheet' type='text/css'>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>

	<script src="projects_script.js"></script>
</head>
<body>
	<div id="body">
		<div id="menu_area">
			<div class="title" id="name">
				M<a id="i">i</a>ke Lyons  
			</div>
			<div id="menu">
				<a class="nav_link" id="aboutme" href="index.php">
					About Me
				</a>
				<a class="nav_link nav_link_selected color2" id="projects">
					Projects
				</a>
				<a class="nav_link" id="contact" href="construction.php">
					Contact
				</a>
			</div>
		</div>

		<div id="content_area">
			<div class="content" id="main_content">
				The projects on this page are all projects that I have played a major roll in completing.
			</div>
			<div id="more_info">
				<div id="menu1">
					<div class="left_content_menu" id="menu1">
						<div class="content_menu_item content_menu_item_selected color2" id="ss">
							<div class="content_menu_item_text">
								
							</div>
						</div>
						<div class="content_menu_item color2" id="sts">
							<div class="content_menu_item_text">
								Shake To Shuffle
							</div>
						</div>
						<div class="content_menu_item color2" id="ttc">
							<div class="content_menu_item_text">
								Texts To Computer
							</div>
						</div>
						<div class="content_menu_item color2" id="mag">
							<div class="content_menu_item_text">
								Magnetic Card Reader
							</div>
						</div>
						<div class="content_menu_item color2" id="quor">
							<div class="content_menu_item_text">
								Quoridor
							</div>
						</div>
						<div class="content_menu_item color2" id="rdoc">
							<div class="content_menu_item_text">
								Reverse Javadoc
							</div>
						</div>
					</div>
					<div class="right_content_menu" id="menu1">
						<div class="content_menu_item color2" id="mgmt">
							<div class="content_menu_item_text">
								MGMT System
							</div>
						</div>
						<div class="content_menu_item color2" id="cominghome">
							<div class="content_menu_item_text">
								Coming Home
							</div>
						</div>
						<div class="content_menu_item color2" id="powerhawks">
							<div class="content_menu_item_text">
								Power Hawks Website
							</div>
						</div>
						<div class="content_menu_item color2" id="mlin">
							<div class="content_menu_item_text">
								My Life Is Nerdy
							</div>
						</div>
					</div>
				</div>

				<div class="content_box color2" id="menu1_box">
					<div class="content content_box_item content_box_item_selected" id="ss_box">
						<center><b>Sassy Seven iPhone application</b></center><br/>
						<img width="150px"src="images/ss_home.png" class="content_image_right" />
						I created the Sassy Seven ball iPhone application along with the Serpent Software team during the iOS Hackathon at RIT hosted by the SSE. Unfortunately the app did not win the competition but during the process I learned a lot about developing for iOS devices as well as the Objective C programming language. <br/>
						<br/>
						<img width="150px"src="images/ss_back.png" class="content_image_left" />
						The app is a spin off of the popular Magic Eight ball toy. When the user shakes the phone they are presented with a sassy response, voiced by a sassy man. The app uses the Core Motion API to detect if the phone is being shook, and sell as the current orientation of the phone. There is other effects that make the experience more pleasant for the user such as custom menu animations and a bubble that floats to the top of the eight ball.<br/>
						<br/>
						Some of my responsibilities while working on Sassy Seven were leading the project by setting deadlines in order to make sure we could get the app finished by the end of the week, programming a majority of the code and working with the desig team to improve the app's user experience.<br/>
						<br/>
						Sassy Seven Ball is currently available on the iOS App Store for $1
					</div>

					<div class="content content_box_item" id="sts_box">
						<center><b>Shake to Shuffle Android application</b></center><br/>
						<br/>
						<img width="150px"src="images/sts_1.png" class="content_image_right" />
						Shake to shuffle was created by myself and 2 other members of the Serpent Software team for our high school senior capstone project. During the process of creating the application I learned a lot about what it takes to produce a full piece of software under a very strict timeline. I also learned a lot about programming Java for the Android device, as well as mobile development in general.<br/>
						<br/>
						<img width="150px"src="images/sts_2.png" class="content_image_left" />
						This app is a port of the well known functionality of iOS devices to Android. It allows the user to shake the phone in order to skip their music player to the next song. <br/>
						<br/>
						We faced many challenges while trying to create this app. Mainly the fact that every music player application has it's own way of skipping music, and because we wanted this to be a universal application we had to come up with a way that most music applications would accept. Our solution was, we found a way to imitate the hardware button on some commercial headphones that skip the song by sending a certain broadcast to the system. The major problem we ran into was keeping the app active while the phone was asleep.<br/>
						<img width="150px"src="images/sts_qr.png" class="content_image_right" />
						<br/>
						My major responsibilities in the creation of this app was keeping the team on task because we had a very strict deadline, as well as documenting every twist and turn we encountered during the development of this app.<br/>
						<br/>
						Shake to Shuffle is currently available on the Android Play Store for free
					</div>

					<div class="content content_box_item" id="ttc_box">
						<center><b>Texts to Computer Android application</b></center><br/>
						<center><img src="images/ttc_diagram.png" /></center><br/>
						<br/>
						Texts to Computer is an Android application that was developed to make texting easier for people who spend a lot of time at the computer. TTC takes all of the text messages that you recieve and sends them to a XAMPP server (Hosted using Openfire) which then sends that to your computer also logged on to the server. <br/>
						<br/>
						Unfortunatelly because it would be to costly to host an openfire server for every user of the phone, this is an application that I use personally but will never be able to distribute.
					</div>

					<div class="content content_box_item" id="mag_box">
						<center><b>Magstripe Card Reader</b></center><br/>
						<center><iframe width="480" height="360" src="http://www.youtube.com/embed/TZFEuNIuSyY" frameborder="0" allowfullscreen></iframe></center><br/>
						<br/>
						This project was done using an Arduino Microcontroller hooked up to a magnetic stripe reader that I took out of an old hotel phone. When someone swipes a card in the reader it reads the stripe and outputs the results to the LCD screen.
					</div>

					<div class="content content_box_item" id="quor_box">
						<center><b>Quoridor</b></center><br/>
						<img width="250px" src="images/quor_real.jpg" class="content_image_right" />
						Quoridor is a project that I completed in RIT CS2 Data structures as a part of a two man team. Our objective was to program a computer to play the board game quoridor and be able to beat the given opponents 9 times out of 10. This project involved the analysis of time complexities and search algorithms because we were required to choose our next move under a time limit. <br/>
						<br/>
						<img width="350px" src="images/quor_board.png" class="content_image_left" /><br/><br/>
						The major challenge of this project was figuring out an intelligent way to choose our next move while keeping the amount of time the choosing process takes to a minimum. We used a breadth first search in order to find the pawns shortest path to the goal, and then chose our move based on that.
					</div>

					<div class="content content_box_item" id="mgmt_box">
						<center><b>MGMT System</b></center><br/>
						The MGMT system is a personal project that I have been working on for a while. The main objective is to make a program that I can run on any display that will show current useful information. The program is written in C++ using the SDL graphics libraries. The system will eventually also have a php backend that will allow the user to modify what is being shown on the screen at any given time.<br/>
						<br/>
						The system shows current information such as the time, the current weather, the user’s calendar data, the current song that is playing from their home computer and other important information. Each of these different pieces of information are handled by a separate module and all of the modules are handled by a master module handler. This allows for easy adding and removing of modules as well as allowing others to easily make custom modules for the display.<br/>
						<br/>
						This project’s code is available on github at: https://github.com/frenchie4111/mgmt
					</div>

					<div class="content content_box_item" id="cominghome_box">
						<center><b>Coming Home</b></center><br/>
						<img src="images/ch_xnalogo.PNG" class="content_image_right" />
						Coming home is a game that is currently in development being programmed in C# with the Microsoft XNA framework. The premise of the game is a 2 player game in which two siblings must work together in order to find their way home. The game is a basic platformer with 2 interacting players and a great environment to explore.<br/>
					</div>

					<div class="content content_box_item" id="powerhawks_box">
						<center><b>Power Hawks Robotics Website</b><br/>
						<img src="images/ph_logo.png" /></center>
						<br/>
						During my time on the FIRST Robotics team 1111, the Powerhawks I developed the website http://www.Powerhawks.org/ with one other person on the website team. The website is designed in HTML and Javascript (using jquery). The backend of the website is a custom CMS programmed in PHP and mySQL that allows other users to easily edit different parts of the website.<br/>
						<br/>
						The backend CMS allowed for non-technical users to edit pages with a what you see is what you get editor, and easily publish content to the site. The site features heavy javascript styling, and won the 2011 FIRST Robotics Website excellence award.
					</div>

					<div class="content content_box_item" id="mlin_box">
						<center><b>My Life Is Nerdy</b></center><br/>
							My Life Is Nerdy is a website that was designed by me and one other person. The website is unfortunately no longer being hosted because the free hosting service we were using went down. The website premise was allowing users to post short nerdy stories about their life that were then read by others. The stories would go through an initial vetting process that would ensure they were worthy of getting on the site. After a submission was vetted it was then available for all users to read and vote on. This site had over 2000 registered members before it went down in 2012.<br/>
							<br/>
							The site was designed in HTML and Javascript using jQuery and had a backed of PHP using MySQL.<br/>
					</div>

					<div class="content content_box_item" id="rdoc_box">
						<center><b>Reverse Javadoc</b></center><br/>					
						This is a project that I completed for myself and other RIT CS3 Object oriented programming students to use. In CS3 most of our weekly assignments were given to us in the form of a JavaDoc (Java's documentation files) which my script then goes in and gives you a .java file with stubs for all of the methods.<br/>
						<br/>
						This project is hosted here: http://MikeLyons.org/ReverseDoc<br/>
						<br/>
						This project's code is available on github at: https://github.com/frenchie4111/Reverse-Javadoc
					</div>
				</div>
			</div>
			<div id="footer">
					Website created by and for Mike Lyons<br/>
					Adiminstration
			</div>
		</div>

		<div id="ibox" class="content">
			Renee is awesome
		</div>
	</div>
</body>
</html>