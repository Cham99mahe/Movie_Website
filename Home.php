<html>
	<head>
		<link rel="icon" type="image/x-icon" href="logo1.png">
		<link rel="stylesheet" type="text/css" href="Format.css"/>
		<title>Movie Mania</title>
		
		<style>
			.infoImage{
				position:absolute;
				top:28%;
				height:120%;
				width:98%;
				left:1%;
				right:1%;
				padding:0px;
			}
			
			.infoText{
				position:absolute;
				background:rgba(0,0,0,0.8);
				top:87%;
				height:auto;
				width:80%;
				left:15%;
				right:0;
				padding:2%;
			}
			
			.scrollDivTop{
				background-image:url("bg.jpg");
				overflow-x:scroll;
				position:absolute;
				top:150%;
				height:auto;
				width:95%;
				padding:20px;
				
			}
			
			.scrollDivUp{
				background-image:url("bg.jpg");
				overflow-x:scroll;
				white-space:nowrap;
				position:absolute;
				top:245%;
				height:auto;
				width:95%;
				padding:20px;
			}
			
			.t1{
				color:white;
				line-height:20px;
				font-family:Cambria Math;
			}
			
			.t1:hover{
				color:#FD052E;
			}
			
			.t2{
				color:white;
				line-height:20px
				font-family:Cambria Math;
				font-size:1.2em;
			}
			
			.t2:hover{
				color:#FD052E;
			}
			
			.t3{
				color:white;
				line-height:20px;
				font-size:6em;
				font-variant:small-caps;
				font-family:Cambria Math;
			}
			
			.t4{
				color:#FD052E;
				line-height:20px;
				font-size:4em;
				font-variant:small-caps;
				font-family:Cambria Math;
			}
			
			.t5{
				color:white;
				font-variant:small-caps;
				font-family:Cambria Math;
			}
			
			.filmTbl{
				width:20%;
				height:80%;
				padding:20px;
				border-radius:50px;
				text-align:center;
			}
			
			.poster{
				border-radius:15px;
				width:190px;
				height:300px;
			}
			
			.poster:hover{
				transform:scale(1.3);
			}
			
			.footer{
				top:350%;
				height:auto;
				right:0;
				left:0;
				position:absolute;
				background-color:#191E24;
				font-family:Cambria Math;
			}
						
			.footer1{
				float:left;
				margin-top:10px;
				margin-left:10px;
				position:absolute;
			}
						
			.footer2{
				float:right;
				margin-right:10px;
				margin-top:10px;
				margin-bottom:10px;
			}
		</style>
	</head>

	<body class="bg1">
		<div class="header">
			<div class="logoDiv">
				<img src="logo.png" width="120%" height="120%">
			</div>
			
			<div class="searchDiv">
				<input type="text" class="searchBox" placeholder="Search...">
				<button type="submit" class="searchBtn"><img src="icon1.png" width="100%" height="100%">
				</button>
			</div>
			
			<div class="signInDiv">
				<a href="Login.html"><button type="submit" class="signBtn">SIGN OUT</button></a>
			</div>
		</div>
		
		<div class="contact">
			<span title="Contact Us"><a href="Contact.html"><img src="icon6.png" class="icon"></a></span>
		</div>
		
		<div class="navDiv">
			<ul>
				<li><a href="About.html">ABOUT US</a></li>
				<li><a href="Upcoming.html">UPCOMING MOVIES</a></li>
				<li><a href="TopRated.html">TOP MOVIES</a></li>
				<li><a href="Home.html">HOME</a></li>
			</ul>
		</div>
		
		<div class="scrollDivTop">
			<a href="TopRated.html"><h1 class="t1">Top Rated Movies</h1></a>
			<hr class="hr1">
				<table width="100%">
					<tr>
						<td class="filmTbl"><a href="TopRated.html#T1"><img src="T1.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T2"><img src="T2.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T3"><img src="T3.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T4"><img src="T4.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T5"><img src="T5.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T6"><img src="T6.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T7"><img src="T7.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T8"><img src="T8.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T9"><img src="T9.jpg" class="poster"></a></td>
						<td class="filmTbl"><a href="TopRated.html#T10"><img src="T10.jpg" class="poster"></a></td>
					</tr>
					<tr>
						<td class="filmTbl"><p class="t2">Ant-Man and the Wasp: Quantumania</p></td>
						<td class="filmTbl"><p class="t2">SHAZAM! FURY OF THE GODS</p></td>
						<td class="filmTbl"><p class="t2">65</p></td>
						<td class="filmTbl"><p class="t2">John Wick: Chapter 4</p></td>
						<td class="filmTbl"><p class="t2">Operation Fortune: Ruse de Guerre</p></td>
						<td class="filmTbl"><p class="t2">Creed III</p></td>
						<td class="filmTbl"><p class="t2">Infinity Pool</p></td>
						<td class="filmTbl"><p class="t2">You People</p></td>
						<td class="filmTbl"><p class="t2">Bottoms</p></td>
						<td class="filmTbl"><p class="t2">House Party</p></td>
					</tr>
				</table>
		</div>
		
		<div class="infoImage">
			<img src="3.png" width="100%" height="100%">
		</div>
		
		<div class="infoText">
			<p class="t4">Movie Mania</p>
			<p class="t3">Best Movie Collection</p>
			<p class="t5">Action | Horror | Thriller | Romance | Science Fiction | Comedy | Adventure</p>
		</div>
		
		<div class="scrollDivUp">
			<h1 class="t1">Upcoming Movies</h1>
			<hr class="hr1">
				<table width="100%">
					<tr>
						<td class="filmTbl"><a href="#"><img src="U1.jpg" class="poster"></a></td>
						<td class="filmTbl"><img src="U2.jpg" class="poster"></td>
						<td class="filmTbl"><img src="U3.jpg" class="poster"></td>
						<td class="filmTbl"><img src="U4.jpg" class="poster"></td>
						<td class="filmTbl"><img src="U5.jpg" class="poster"></td>
						<td class="filmTbl"><img src="U6.jpg" class="poster"></td>
						<td class="filmTbl"><img src="U7.jpg" class="poster"></td>
						<td class="filmTbl"><img src="U8.jpg" class="poster"></td>
						<td class="filmTbl"><img src="U9.jpg" class="poster"></td>
						<td class="filmTbl"><img src="U10.jpg" class="poster"></td>
					</tr>
					<tr>
						<td class="filmTbl"><P class="t2">Transformers: Rise of the Beasts</h3></td>
						<td class="filmTbl"><p class="t2">Guardians of the Galaxy Vol. 3</h3></td>
						<td class="filmTbl"><p class="t2">Ant Man</p></td>
						<td class="filmTbl"><p class="t2">Ant Man</p></td>
						<td class="filmTbl"><p class="t2">Ant Man</p></td>
						<td class="filmTbl"><p class="t2">Ant Man</p></td>
						<td class="filmTbl"><p class="t2">Ant Man</p></td>
						<td class="filmTbl"><p class="t2">Ant Man</p></td>
						<td class="filmTbl"><p class="t2">Ant Man</p></td>
						<td class="filmTbl"><p class="t2">Ant Man</p></td>
					</tr>
				</table>
		</div>
		
		<div class="footer">
			<div class="footer1">
				<p class="footerTxt">&copy; 2023 Movie Mania. All Rights Reserved</p>
			</div>
			<div class="footer2">
				<table>
					<tr>
						<td><span title="Facebook"><a href="#"><img src="icon2.png" class="icon"></a></span></td>
						<td><span title="Twitter"><a href="#"><img src="icon3.png" class="icon"></a></td>
						<td><span title="Youtube"><a href="#"><img src="icon4.png" class="icon"></a></td>
						<td><span title="TikTok"><a href="#"><img src="icon5.png" class="icon"></a></td>
					</tr>
				</table>
			</div>
		</div>
		

		<?php
			$con = mysqli_connect("localhost","root","","movie_website");
			
			// Check connection_aborted
			if($con === false){
				die("ERROR: Could not connect. ".mysqli_connect_error());
			}
			
			$fname = $_REQUEST['fname'];
			$lname = $_REQUEST['lname'];
			$email = $_REQUEST['email'];
			$password= $_REQUEST['password'];
			
			$sql = "INSERT INTO register VALUES ('$fname','$lname','$email','password')";
			
			if(mysqli_query($con, $sql)){
				echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$fname\n $lname\n "
				. "$email\n $password");
			}	 	
			else{
				echo "ERROR: Hush! Sorry $sql. ". mysqli_error($con);
			}
			
			mysqli_close($con);
		?>



















		
		
	</body>
</html>