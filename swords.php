<!DOCTYPE html>
<html lang="en">
<head>
    <title> SWORDS </title>
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
        .sword-name {
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
            <h2 style="font-size: 70px; position: relative; text-shadow: 3px 5px 8px gray">SWORDS</h2>
            <div class="dropdown" style="margin-top: 20px; padding: 0; top: 0">
                        <button class="btn btn-secondary dropdown-toggle rarity" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SEA
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 250px; text-align: center; background-color:pink;">
                        <center>
                            <h3> <a href="#first-sea">First Sea</a> </h3>
                            <ul>
                                
                            </ul>
                            <h3> <a href="#second-sea">Second Sea</a> </h3>
                            <ul>
                                
                            </ul>
                            <h3> <a href="#third-sea">Third Sea</a> </h3>
                            <ul>
                                
                            </ul>
                        <h3><a href="#exclusive">Exclusive</a></h3>
                            <ul>
                                
                            </ul>
                        </center>
                        </div>
                    <br>
            </div>
        </div>
        <h1 id="first-sea">FIRST SEA</h1>
        <div class="row">
            <div class="col-sm common" id="cutlass">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/1e/Cutlass.png" width="200px">
                    <font style="font-size: 45px;"><b>Cutlass</b></font>
                </div>
            </div>
            <div class="col-sm common" id="katana">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/e9/Katana.png" width="200px">
                    <font style="font-size: 45px"><b>Katana</b></font>
                </div>
            </div>
            <div class="col-sm common" id="dual_katana">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/90/Dual_Katana.png" width="200px">
                    <font style="font-size: 45px"><b>Dual&nbsp;Katana</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm uncommon" id="iron_mace">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/ee/Iron_Mace.png" width="200px">
                    <font style="font-size: 45px;"><b>Iron&nbsp;Mace</b></font>
                </div>
            </div>
            <div class="col-sm uncommon" id="shark_saw">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/ea/Shark_Saw.png" width="200px">
                    <font style="font-size: 45px"><b>Shark&nbsp;Saw</b></font>
                </div>
            </div>
            <div class="col-sm uncommon" id="triple_katana">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/34/Triple_Katana.png" width="200px">
                    <font style="font-size: 45px"><b>Triple&nbsp;Katana</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="dual-headed_blade">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/69/Dual-Headed_Blade.png" width="200px">
                    <font style="font-size: 45px;"><b>Dual&nbsp;-&nbsp;Headed Blade</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="pipe">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/b/b9/Pipe.png" width="200px">
                    <font style="font-size: 45px"><b>Pipe</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="soul_cane">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/40/Soul_Cane.png" width="200px">
                    <font style="font-size: 45px"><b>Soul&nbsp;Cane</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="trident">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/9a/Trident.png" width="200px">
                    <font style="font-size: 45px;"><b>Trident</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="wardens_sword">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/09/Wardens_Sword.png" width="200px">
                    <font style="font-size: 45px"><b>Wardens&nbsp;Sword</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="bisento">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/31/Bisento.png" width="200px">
                    <font style="font-size: 45px"><b>Bisento</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="pole(1st form)">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/b/b0/Pole_%281st_Form%29.png" width="200px">
                    <font style="font-size: 45px;"><b>Pole(1st&nbsp;form)</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="saber">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/23/Saber.png" width="200px">
                    <font style="font-size: 45px"><b>Saber</b></font>
                </div>
            </div>
        </div>
        <h1 id="second-sea">SECOND SEA</h1>
        <div class="row">
            <div class="col-sm rare" id="dragon_trident">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/09/Dragon_Trident.png" width="200px">
                    <font style="font-size: 45px;"><b>Dragon&nbsp;Trident</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="gravity_cane">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/94/Gravity_Cane.png" width="200px">
                    <font style="font-size: 45px"><b>Gravity&nbsp;Cane</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="jitte">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/61/Jitte.png" width="200px">
                    <font style="font-size: 45px"><b>Jitte</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="long_sword">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/34/Longsword.png" width="200px">
                    <font style="font-size: 45px;"><b>Long&nbsp;Sword</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="koko">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/f/f0/Koko.png" width="200px">
                    <font style="font-size: 45px"><b>Koko</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="midnight_blade">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/b/bf/Midnight_Blade.png" width="200px">
                    <font style="font-size: 45px"><b>Midnight&nbsp;Blade</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="pole(2nd form)">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/66/Pole_%282nd_Form%29.png" width="200px">
                    <font style="font-size: 45px;"><b>Pole(2nd&nbsp;form)</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="rengoku">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/7d/Rengoku.png" width="200px">
                    <font style="font-size: 45px"><b>Rengoku</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="saddi">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/99/Saddi.png" width="200px">
                    <font style="font-size: 45px"><b>Saddi</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="shisui">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/6f/Shisui.png" width="200px">
                    <font style="font-size: 45px;"><b>Shisui</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="wando">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/7d/Wando.png" width="200px">
                    <font style="font-size: 45px"><b>Wando</b></font>
                </div>
            </div>
            <div class="col-sm mythical" id="true_triple_katana">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/b/b2/True_Triple_Katana.png" width="200px">
                    <font style="font-size: 45px"><b>True&nbsp;Triple Katana</b></font>
                </div>
            </div>
        </div>
        <h1 id="third-sea">THIRD SEA</h1>
        <div class="row">
            <div class="col-sm uncommon" id="twin_hooks">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/1d/Twin_Hooks.png" width="200px">
                    <font style="font-size: 45px;"><b>Twin&nbsp;Hooks</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="buddy_sword">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/62/Buddy_Sword.png" width="200px">
                    <font style="font-size: 45px"><b>Buddy&nbsp;Sword</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="cavander">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/1c/Canvander.png" width="200px">
                    <font style="font-size: 45px"><b>Cavander</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="dark_dagger">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/f/f8/Dark_Dagger.png" width="200px">
                    <font style="font-size: 45px;"><b>Dark&nbsp;Dagger</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="fox_lamp">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/f/ff/Fox_Lamp.png" width="200px">
                    <font style="font-size: 45px"><b>Fox&nbsp;Lamp</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="shark_anchor">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/ee/Shark_Anchor.png" width="200px">
                    <font style="font-size: 45px"><b>Shark&nbsp;Anchor</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="spikey_trident">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/3f/Spikey_Trident.png" width="200px">
                    <font style="font-size: 45px;"><b>Spikey&nbsp;Trident</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="tushita">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0e/Tushita.png" width="200px">
                    <font style="font-size: 45px"><b>Tushita</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="yama">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/b/ba/Yama.png" width="200px">
                    <font style="font-size: 45px"><b>Yama</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm mythical" id="cursed_dual_katana">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/74/Cursed_Dual_Katana.png" width="200px">
                    <font style="font-size: 45px;"><b>Cursed&nbsp;Dual&nbsp;Katana</b></font>
                </div>
            </div>
            <div class="col-sm mythical" id="hollow_scythe">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c5/Hallow_Scythe.png" width="200px">
                    <font style="font-size: 45px"><b>Hollow&nbsp;Scythe</b></font>
                </div>
            </div>
        </div>
        <h1 id="exclusive">GAMEPASS/EXCLUSIVE</h1>
        <div class="row">
            <div class="col-sm mythical" id="dark_blade">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a0/Dark_Blade.png" width="200px">
                    <font style="font-size: 45px;"><b>Dark&nbsp;Blade</b></font>
                </div>
            </div>
            <div class="col-sm mythical" id="triple_dark_blade">
                <div class="sword-name">
                    <img id="sword-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/17/Triple_Dark_Blade.png" width="200px">
                    <font style="font-size: 45px"><b>Triple&nbsp;Dark&nbsp;Blade</b></font>
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