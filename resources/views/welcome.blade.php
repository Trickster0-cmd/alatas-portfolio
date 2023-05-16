<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio</title>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>
		*{
padding: 0;
margin: 0;
font-family: 'Josefin Sans' , sans-serif;
box-sizing: border-box;
}
header{
 position: fixed;
width: 100%;
background-image: url("https://i.ibb.co/hXW07dd/picture.jpg");
	background-position: center;
	height: 85px;

}
body{
	width: auto;
}

.buttons{
	
	
	
}
.img{
	height: 100vh;
	width: 100%;
	background-image: url("https://i.ibb.co/hXW07dd/picture.jpg");
	background-position: center;
}
nav{
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding-top: 45px;
	padding-left: 3%;
	padding-right: 20%;
}
.title{
	color: white;
	font-size: 35px;
	letter-spacing: 1px;
	cursor: pointer;
}
span{
	color: #f9004d;
}
nav ul li{
	list-style-type: none;
	display: inline-block;
	padding: 10px 25px;
}
nav ul li a{
	color: white;
	text-decoration: none;
	font-weight: bold;
	text-transform: capitalize;
}
nav ul li a:hover{
	color: #f9004d;
	transition: .4s;
}
.intro{
	position: absolute;
	top: 50%;
	left: 8%;
	transform: translateY(-50%);
}
h1{
	color: white;
	margin: 20px 0px 20px;
	font-size: 75px;
}
h3{
	color: white;
	font-size: 25px;
	margin-bottom: 50px;
}
h4{
	color: #ef7210;
	letter-spacing: 2px;
	font-size: 20px;
}
.person{
	width: 100%;
	padding: 100px 0px;
	background-color: #191919;
	
}
.person img{
	height: auto;
	width: 430px;
}
.person-text{
	width: 550px;
}
.main{
	width: 1130px;
	max-width: 95%;
	margin: 10px 400px 50px 400px;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.person-text h2{
	color: white;
	font-size: 54px;
	text-transform: capitalize;
	margin-bottom: 20 px;
	margin-top: 0px;
	line-height: 3;
}
.person-text h5{
	color:white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}
#pi{ 
	color: #fcfc;
	letter-spacing: 1px;
	line-height: 28px;
	font-size: 18px;
	margin-bottom: 45px;
}
.objective{
	background: #101010;
	width: 100%;
	padding: 100px 0px;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.objective-text{
	color:white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}
.objective h2{
	color: white;
	text-align: center;
	line-height: 3;
	font-size: 54px;
}
.objective p{
	margin-left: 50px;
	margin-right: 50px;
	text-align: center;
}
.education{
	background: #101020;
	width: 100%;
	padding: 100px 0px;
	display: flex;
	text-align: center;
	align-items: center;
	justify-content: space-around;
}
.education-text{
	color:white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}
.education h2{
	color: #bf40bf;
	text-align: center;
	font-size: 54px;
}
.education i{
	font-size: 40px;
	display: block;
	text-align: center;
	margin: 25px 0 px;
	color: #f9004d;
}
.education ul li{
	list-style-type: none;
	padding: 10px 25px;
	font-size: 25px;
	color: #559aaa;
	line-height: 1.25;
}
#schools {
	color: #9daf50;
	line-height: 1.25;
}
#def{
	list-style-type: circle;
	color: #ed7212;
}
.skill{
	background: #101001;
	width: 100%;
	padding: 100px 0px;
	display: flex;
	justify-content: space-around;
}
.skill-text{
	color:white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}
.skill i{
	font-size: 40px;
	display: block;
	text-align: center;
	margin: 25px 0 px;
	color: #f9004d;
}
.skill h2{
	color: #28c6d7;
	text-align: center;
	font-size: 54px;
	line-height: 2;
}
.skill ul li{
	list-style-type: circle;
	padding: 10px 25px;
	font-size: 25px;
	color: #be417f;
	line-height: 1.25;
}
.hai{
	background: #101020;
	width: 100%;
	padding: 100px 0px;
	display: flex;
	text-align: center;
	align-items: center;
	justify-content: space-around;
}

.hai-text{
	color:white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}
.hai i{
	font-size: 40px;
	display: block;
	text-align: center;
	margin: 25px 0 px;
	color: #f9004d;
}
.hai h2{
	color: #bf40bf;
	text-align: center;
	font-size: 54px;
}

.hai ul li{
	list-style-type: square;
	padding: 10px 25px;
	font-size: 25px;
	color: #be417f;
	text-align: left;
	line-height: 1.25;
}
.reference{
	width: 100%;
	padding: 100px 0px;
	background-color: #191919;
}
.reference img{
	height: auto;
	width: 430px;
}
.reference-text{
	width: 550px;
}
.reference1{
	width: 1130px;
	max-width: 95%;
	margin:0 auto;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.reference-text h2{
	color: white;
	font-size: 54px;
	text-transform: capitalize;
	margin-bottom: 20px;
}
.reference-text h5{
	color: white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}

.reference-text p{
	color: #fcfc;
	letter-spacing: 1px;
	line-height: 28px;
	font-size: 18px;
	margin-bottom: 45px;
}
.reference h2{
	color: white;
	font-size: 54px;
	text-transform: capitalize;
	margin-bottom: 20px;
	text-align:center;
	color: #a309f6;
}
.reference i{
	font-size: 40px;
	display: block;
	text-align: center;
	margin: 25px 0 px;
	color: #f9004d;
}
.person i{
	font-size: 40px;
	display: block;
	text-align: center;
	margin: 25px 0 px;
	color: #f9004d;
}
.buttons i{
	font-size: 25px;
	display: block;
	text-align: center;
	margin: -5px 0px;
	color: #f9004d;
	float: left;
}
.object i{
	font-size: 40px;
	display: block;
	text-align: center;
	margin: 25px 0 px;
	color: #f9004d;
}
img {
  display: inline-block;
  width: 50px;
  height: 50px;
  margin-right: 10px;
  vertical-align: middle;
}


	</style>
</head>
<body>
	<!---Intro--->
	
	<header>
	<div class="buttons">
		<nav>
			<h5 class="title">Porfolio</h5>
			<ul>
				<li><i class="fa-solid fa-person"></i><a href="#person">Personal Information</a></li>
				<li><i class="fa-solid fa-lightbulb"></i></i><a href="#object">Objective</a></li>
				<li><i class="fa-solid fa-school"></i><a href="#educ">Education</a></li>
				<li><i class="fa-solid fa-person-chalkboard"></i><a href="#skill">Skills</a></li>
				<li><i class="fa-brands fa-playstation"></i><a href="#hai">Hobbies and Interest</a></li>
				<li><i class="fa-solid fa-book-bookmark"></i><a href="#ref">References</a></li>
			</ul>
		</nav>
		</div>
		</header>
		<div class="img">
		<div class="intro">
			<h4>Hello, my name is</h4>
			<h1>Teodor Alatas</h1>
			<h3>I'm a <span>Web Developer and a Programmer</span></h3> 
            <h3>I'm proficient in <span>Php</span>, <span>Ajax</span>, <span>Html</span>, <span>CSS</span>, <span>Java</span> and more...</h3>
            <h3>You can reach me here</h3> 
            <img src="https://media.discordapp.net/attachments/996769342077280347/1106629153656152094/facebook.png" alt="Icon 1">
            <img src="https://media.discordapp.net/attachments/996769342077280347/1106629133083103262/linkedin.png" alt="Icon 2">
            <img src="https://media.discordapp.net/attachments/996769342077280347/1106629144160260216/phone-call.png" alt="Icon 3">
		</div>
	</div>
	
	
	<!---Personal Information--->
	<section id="person" class="person">
		<div class="main">
			<img src="https://media.discordapp.net/attachments/996769342077280347/1106629103542620331/picture1.jpg?width=701&height=701">
			<div class="person-text">
				<i class="fa-solid fa-person"></i>
				<h2>Personal <span>Information </span></h2>
				<h5>Name		 : <span id="pi">Teodor Henri Ali A. Alatas</span></h5>
				<h5>Address		 : <span id="pi">St. Therese Subdivision, City of San Fernando, La Union</span></h5>
				<h5>Phone Number : <span id="pi">09773212142</span></h5>
				<h5>Email		 : <span id="pi">teodoralatas07@gmail.com</span></h5>
			</div>
		</div>
	</section>
	<!---objective--->
	<section id="object" class="person">
	<div class="objective">
		<div class="objective-text">
		<i class="fa-solid fa-lightbulb"></i>
			<h2><span>Object</span>ive</h2>
			<p id="pi">My aim is to create a website wherein everyone can freely interact with what they want no matter where they are and what devices they are using. I can easily adapt in all kinds of environments and I am always eager to learn something new, if you would give me a chance I'll even try to surpass your expectation and be a better version of myself. <p>
		</div>
	</div>
	<!---education--->
	<section id="educ" class="person">
	<div class="education">
		<div class="education-text">
			<i class="fa-solid fa-school"></i>
			<h2>Education</h2>
			<ul>
				<li>*COLLEGE*</li>
					<ul>
						<li id="schools">-Saint Louis College-</li>
						<li id="def">Dean's Lister</li>
					</ul>
				<li>*SENIOR HIGH SCHOOL*</li>
					<ul>
						<li id="schools">-Saint Louis College-</li>
							<li id="def">N/A</li>
					</ul>
				<li>*JUNIOR HIGH SCHOOL*</li>
					<ul>
						<li id="schools">-La Union National High School-</li>
						<li id="def">Lakandula</li>
						<li id="def">Mr. Science</li>
						<li id="def">Most Dependable</li>
					</ul>
				<li>*ELEMENTARY*</li>
					<ul>
						<li id="schools">-Catbangen Central School-</li>
						<li id="def">Best In Class</li>
						<li id="def">Most Dependable</li>
					</ul>
			</ul>
		</div>
	</div>
	</section>
	<!---skill--->
	<section id="skill" class="person">
	<div class="skill">
		<div class="skill-text">
			<i class="fa-solid fa-person-chalkboard"></i>
			<h2>Skills</h2>
				<ul>
					<li>Willing to learn from others</li>
					<li>Willing to teach others</li>
					<li>Can adapt quite easily in a new environment</li>
					<li>Can perform well under pressure</li>
					<li>Multi-tasking</li>
				</ul>
		</div>
	</div>
	</section>
	<!---hobby and interests--->
	<section id="hai" class="person">
	<div class="hai">
		<div class="hai-text">
			<i class="fa-brands fa-playstation"></i>
			<h2>Hobbies <span>a</span>nd <span>Interests</span></h2>
				<ul>
					<li>Playing Games</li>	
					<li >Typing</li>
					<li>Playing Guitar</li>
					<li>Anything about Science</li>
					<li>Reading Books</li>
					<li>Unexplained Phenomenons</li>
					<li>Watching Anime</li>
					<li>Girls to simp for</li>
					<li>Anything about Technology</li>
					<li>Listening to Music</li>
				</ul>
		</div>
	</div>
	</section>
	<!---references--->
	<section id="ref" class="reference">
		<i class="fa-solid fa-book-bookmark"></i>
		<h2>Reference</h2>
		<div class="reference1">
			<img src="https://media.discordapp.net/attachments/996769342077280347/1106629089336512572/arren.jpg?width=458&height=701">
			<div class="reference-text">
			
			
			<h5>Name		 : <span>Marc Arren Frianeza</span></h5>
			<h5><span>Future Programmer</span></h5>
			<p> - He is also a programmer/web developer. He can provide clean code and pixel perfect desgin. He also make 
			the website much more interactive with animations. He is also my classmate in BSIT 3-A currently, so far he is the example 
			of a diligent student.</p>
			<p> Contact No. 09773212142</p>
			</div>
		</div>
	</section>
	
</body>
</html>