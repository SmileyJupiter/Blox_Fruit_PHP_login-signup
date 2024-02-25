<!DOCTYPE html>
<html lang="en">
<head>
    <title> FIGHTING STYLES </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    <title>Fruits</title>
    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/wp9780350.jpg');
            background-size: 100%;
            background-attachment: fixed;
            scroll-behavior:smooth;
            background-repeat: no-repeat;
            font-family: myFont !important;
            letter-spacing: 5px;
            overflow-x: hidden;
        }
        @font-face {
            font-family: myFont;
            src: url(one_piece_font.ttf);
        }
        .container {
            text-align: center;
            background-color: #00000063;
            color: whitesmoke;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
        }
        
        .btn {
            background-color: yellow;
            color: black;
            width: 150px;
            letter-spacing: 3px;
        }
        abbr {
            text-decoration: none !important;
        }
        
        #back {
            color: white;
            text-decoration: none;
        }
        #back:hover {
            color: yellow
        }
        .header {
            display: flex;
            flex-direction: row;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            align-content: center;
        }
        #myBtn {
		    display: none;
			position: fixed;
		    bottom: 20px;
		    right: 10px;
		    z-index: 99;
		    font-size: 20px;
		    border: none;
		    outline: none;
		    background-color: yellow;
		    cursor: pointer;
	  	    padding: 15px;
		    border-radius: 4px;
            width: 80px
		}
		#myBtn:hover {
			background-color: violet;
		}
        .btn.rarity {
            font-size: 25px;
            background-color: pink;
            border: none;
            width: 150px;
            height: 50px;
        }
        a {
            text-decoration: none !important;
            color: black;
        }
        h3 a:hover {
            color: white !important;
        }
        .row {
            border-radius: 30px;
            margin-bottom: 10px;
            border: 2px solid black;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-content: center;
        }
        .col-sm {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            align-content: center;
        }
        .green {
            height: 250px;
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #00ff00 50%, #ffffff 100%);
        }
        .blue {
            height: 250px;
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #0066ff 50%, #ffffff 100%);
        }
        .red {
            height: 250px;
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #cc0000 50%, #ffffff 100%);
        }
        @font-face {
            font-family: myFont1;
            src: url('https://www.dafont.com/hey-comic.font');
        }
        p {
            font-family: myFont1 !important;
            font-weight: 600;
            text-align: left;
            font-size: 16px;
            text-align: center;
        }
        .dropdown-menu {
            text-align: left;
            border-radius: 5px;
            width: 350px;
            background-color: pink;
            color: black;
        }
        .btn {
            background-color: yellow;
            color: black;
            width: 250px;
            height: 50px;
            font-size: 30px;
            letter-spacing: 3px;
        }
        h1 {
            font-weight: 600;
            font-size: 45px;
            background-color: rgba(0, 0, 0, 0.35);
            width: 500px
        }
        ul li {
            font-size: 18px;
            text-align: left;
            font-weight: 600;
        }
        ul li a:hover {
            color: gray
        }
        .item_description {
            background: linear-gradient(rgba(128, 128, 128, 0.521), rgba(211, 211, 211, 0.466) 30%);
            border-radius: 5px;
            border: 5px inset rgba(255, 255, 255, 0.623);
        }
        .style-name {
            width: 25%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        img {
            transition: transform .5s;
            }
        img:hover {
            transform: scale(1.5);
        }
    </style>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="container">
        <div class="header">
            <h2 style="text-align: center"> <a href="main.php" id="back">Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h2>
            <h2 style="font-size: 70px; position: relative; text-shadow: 3px 5px 8px gray">FIGHTING STYLES</h2>
            <div class="dropdown" style="margin-top: 20px; padding: 0; top: 0">
                        <button class="btn btn-secondary dropdown-toggle rarity" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SEA
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 250px; text-align: center; background-color:pink;">
                        <center>
                            <h3> <a href="#first-sea">First Sea</a> </h3>

                            <h3> <a href="#second-sea">Second Sea</a> </h3>

                            <h3> <a href="#third-sea">Third Sea</a> </h3>
                        </center>
                        </div>
                    <br>
            </div>
        </div>
        <h1 id="first-sea">FIRST SEA</h1>
        <div class="row">
            <div class="col-sm green" id="dark_step">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/39/Dark_Step.png" width="150px">
                    <font style="font-size: 45px;"><b>Dark&nbsp;Step</b></font>
                </div>
            </div>
            <div class="col-sm green" id="electric">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/2f/Electric.png" width="150px">
                    <font style="font-size: 45px"><b>Electric</b></font>
                </div>
            </div>
            <div class="col-sm green" id="water_kung_fu">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/8f/Water_Kung_Fu.png" width="150px">
                    <font style="font-size: 45px"><b>Water&nbsp;Kung&nbsp;Fu</b></font>
                </div>
            </div>
        </div>
        <h1 id="second-sea">SECOND SEA</h1>
        <div class="row">
            <div class="col-sm blue" id="dragon_breath">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/32/Dragon_Breath.png" width="150px">
                    <font style="font-size: 45px;"><b>Dragon&nbsp;Breath</b></font>
                </div>
            </div>
            <div class="col-sm blue" id="superhuman">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/ad/Superhuman.png" width="150px">
                    <font style="font-size: 45px"><b>Spuerhuman</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm blue" id="death_step">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/89/Death_Step.png" width="150px">
                    <font style="font-size: 45px;"><b>Death&nbsp;Step</b></font>
                </div>
            </div>
            <div class="col-sm blue" id="sharkman_karate">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/b/b3/Sharkman_Karate.png" width="150px">
                    <font style="font-size: 45px"><b>Sharkman&nbsp;Karate</b></font>
                </div>
            </div>
        </div>
        <h1 id="third-sea">THIRD SEA</h1>
        <div class="row">
            <div class="col-sm red" id="electric_claw">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/00/Electric_Claw.png" width="150px">
                    <font style="font-size: 45px;"><b>Electric&nbsp;Claw</b></font>
                </div>
            </div>
            <div class="col-sm red" id="dragon_talon">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/e9/Dragon_Talon.png" width="150px">
                    <font style="font-size: 45px"><b>Dragon&nbsp;Talon</b></font>
                </div>
            </div>
        </div><div class="row">
            <div class="col-sm red" id="godhuman">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/41/Godhuman.png" width="150px">
                    <font style="font-size: 45px;"><b>Godhuman</b></font>
                </div>
            </div>
            <div class="col-sm red" id="sanguine_art">
                <div class="style-name">
                    <img id="style-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/83/Sanguine_Art.png" width="150px">
                    <font style="font-size: 45px"><b>Sanguine&nbsp;Art</b></font>
                </div>
            </div>
        </div>
    </div>
<script>
		// Get the button
		let mybutton = document.getElementById("myBtn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	</script>
</body>
</html>