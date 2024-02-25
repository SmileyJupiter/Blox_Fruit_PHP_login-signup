<!DOCTYPE html>
<html lang="en">
<head>
    <title> GUNS </title>
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
        .common {
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #666699 70%, #ffffff 100%);
        }
        .uncommon {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #0066ff 70%, #ffffff 100%);
        }
        .rare {
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #6600cc 70%, #ffffff 100%);
        }
        .legendary {
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #cc00ff 70%, #ffffff 100%);
        }
        .mythical {
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #ff0000 70%, #ffffff 100%);
        }
        @font-face {
            font-family: myFont1;
            src: url('https://www.dafont.com/hey-comic.font');
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
        .gun-name {
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
            <h2 style="font-size: 70px; position: relative; text-shadow: 3px 5px 8px gray">GUNS</h2>
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
            <div class="col-sm common" id="slingshot">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/3f/Slingshot.png" width="200px">
                    <font style="font-size: 45px;"><b>Slingshot</b></font>
                </div>
            </div>
            <div class="col-sm uncommon" id="flintlock">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/5b/Flintlock.png" width="200px">
                    <font style="font-size: 45px"><b>Flintlock</b></font>
                </div>
            </div>
            <div class="col-sm uncommon" id="musket">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/2b/Musket.png" width="200px">
                    <font style="font-size: 45px"><b>Musket</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="cannon">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a6/Cannon.png" width="200px">
                    <font style="font-size: 45px;"><b>Cannon</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="refined_flintlock">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/Refined_Flintlock.png" width="200px">
                    <font style="font-size: 45px"><b>Refined Flintlock</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="refined_musket">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/3f/Refined_Musket.png" width="200px">
                    <font style="font-size: 45px"><b>Refined Musket</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="refined_slingshot">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/8b/Refined_Slingshot.png" width="200px">
                    <font style="font-size: 45px;"><b>Refined&nbsp;Slingshot</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="bazooka">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/3f/Bazooka.png" width="200px">
                    <font style="font-size: 45px"><b>Bazooka</b></font>
                </div>
            </div>
        </div>
        <h1 id="second-sea">SECOND SEA</h1>
        <div class="row">
            <div class="col-sm rare" id="acidum_riffle">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/Acidum_Rifle.png" width="200px">
                    <font style="font-size: 45px;"><b>Acidum&nbsp;Riffle</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="bizarre_riffle">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/2b/Bizarre_Rifle.png" width="200px">
                    <font style="font-size: 45px"><b>Bizarre&nbsp;Riffle</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="kabucha">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/b/bb/Kabucha.png" width="200px">
                    <font style="font-size: 45px"><b>Kabucha</b></font>
                </div>
            </div>
        </div>
        <h1 id="third-sea">THIRD SEA</h1>
        <div class="row">
            <div class="col-sm legendary" id="serpent_bow">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/72/Serpent_Bow.png" width="200px">
                    <font style="font-size: 45px;"><b>Serpent&nbsp;Bow</b></font>
                </div>
            </div>
            <div class="col-sm mythical" id="soul_guitar">
                <div class="gun-name">
                    <img id="gun-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/97/Soul_Guitar.png" width="200px">
                    <font style="font-size: 45px"><b>Soul&nbsp;Guitar</b></font>
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