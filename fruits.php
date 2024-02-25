<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    <title>Fruits</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
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
        .col-sm {
            display: flex;
            justify-content: space-around;
            align-items: center;
            align-content: center;
        }
        .row {
            border-radius: 30px;
            margin-bottom: 10px;
            border: 2px solid black;
            width: 100%;
        }
        .fruit-name {
            display: flex;
            flex-direction: column;
        }
        .description {
            display: flex;
            flex-direction: column;
        }
        p {
            font-weight: 600;
            font-size: 20px;
            text-align: left;
            margin-left: 10px;
            text-shadow: 0 0 8px white;
        }
        .dropdown-menu {
            text-align: left;
            border-radius: 5px;
            width: 350px;
            background-color: rgba(255, 255, 0, 0.822);
            color: black;
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
        .common {
            margin: 3px 3px;
            border-radius: 30px;
            color: black;
            background: linear-gradient(to bottom, #666699 70%, #ffffff 100%);
        }
        .uncommon {
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
        .rarity {
            font-size: 25px;
            background-color: pink;
            border: none;
        }
        a {
            text-decoration: none !important;
            color: black;
        }
        a:hover {
            color: #cc00ff !important;
        }
        img {
            transition: transform .5s;
            }
        img:hover {
            transform: scale(1.3);
        }
        h1 {
            font-size: 40px;
        }
        #common_btn {
            text-decoration: none;
            background-color: pink;
            border: none;
        }
        #uncommon_btn {
            text-decoration: none;
            background-color: pink;
            border: none;
        }
        #rare_btn {
            text-decoration: none;
            background-color: pink;
            border: none;
        }
        #legendary_btn {
            text-decoration: none;
            background-color: pink;
            border: none;
        }
        #mythical_btn {
            text-decoration: none;
            background-color: pink;
            border: none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#common_btn").click(function(){
                var common = $("#common");
                common.queue(function(){
                    common.animate({fontSize: 50}, 100);
                    common.dequeue();
                }); 
                    common.animate({fontSize: 40}, 100);
            });
            $("#uncommon_btn").click(function(){
                var uncommon = $("#uncommon");
                uncommon.queue(function(){
                    uncommon.animate({fontSize: 50}, 250);
                    uncommon.dequeue();
                }); 
                    uncommon.animate({fontSize: 40}, 250);
            });
            $("#rare_btn").click(function(){
                var rare = $("#rare");
                rare.queue(function(){
                    rare.animate({fontSize: 50}, 400);
                    rare.dequeue();
                }); 
                    rare.animate({fontSize: 40}, 400);
            });
            $("#legendary_btn").click(function(){
                var legendary = $("#legendary");
                legendary.queue(function(){
                    legendary.animate({fontSize: 50}, 500);
                    legendary.dequeue();
                }); 
                    legendary.animate({fontSize: 40}, 500);
            });
            $("#mythical_btn").click(function(){
                var mythical = $("#mythical");
                mythical.queue(function(){
                    mythical.animate({fontSize: 50}, 500);
                    mythical.dequeue();
                }); 
                    mythical.animate({fontSize: 40}, 500);
            });
        });
    </script>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="container">
        <div class="header">
            <h1 style="text-align: center"> <a href="main.php" id="back">Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h1>
            <h1 style="font-size: 70px; position: relative; text-shadow: 3px 5px 8px gray">FRUITS</h1>
            <div class="dropdown" style="margin-top: 20px; padding: 0; top: 0">
                        <button class="btn btn-secondary dropdown-toggle rarity" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rarity
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 250px; text-align: center; background-color:pink">
                            <h3><button id="common_btn"> <a href="#common">Common</a> </button></h3>
                            <h3><button id="uncommon_btn"> <a href="#uncommon">Uncommon</a> </button></h3>
                            <h3><button id="rare_btn"> <a href="#rare">Rare</a> </button></h3>
                            <h3><button id="legendary_btn"> <a href="#legendary">Legendary</a> </button></h3>
                            <h3><button id="mythical_btn"> <a href="#mythical">Mythical</a> </button></h3>
                        </div>
                        <br><br>
                    </div>
        </div>
    <!-- 1st row -->
    <h1 id="common">COMMON</h1>
        <div class="row">
            <div class="col-sm common">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/d/d4/RocketFruit.png" width="100px">
                    <font style="font-size: 25px"><b>ROCKET</b></font>
                </div>
                    <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Common
                        <br>
                        Value: $5,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Missile Fist</p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Air Strike</p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Rocket Crash</p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Blast Off</p>
                        </div>
                        <br><br>
                    </div>
                </div>    
            </div>
            
            <div class="col-sm common" id="common">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/d/dc/SpinFruit.png" width="100px">
                    <font style="font-size: 25px"><b>SPIN</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Common
                        <br>
                        Value: $7,500
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Razor Wind </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Tornado Assault </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Air Slasher </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Helicopter Flight </p>
                        </div>
                        <br><br>
                    </div>
                </div>    
            </div>
            <div class="col-sm common" id="common">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://fruityblox.s3.us-east-2.amazonaws.com/chop-fruit-v2.webp" width="100px">
                    <font style="font-size: 25px"><b>CHOP</b></font>
                </div>        
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Common
                        <br>
                        Value: $30,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="Similarly to an Elemental, Chop users will have complete immunity to all swords, even those with Aura."> Body Seperation</abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Tackle </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Dance </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Party </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Helicopter </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        
        </div>
    <!-- 2nd row -->
        <div class="row">
            <div class="col-sm common" id="common">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Spring-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>SPRING</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Common
                        <br>
                        Value: $60,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Knock </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Spring Snipe </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Spring Cannon </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Spring Emperor </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Spring Leap </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm common" id="common">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/7d/BombFruit.png" width="100px">
                    <font style="font-size: 25px"><b>BOMB</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Common
                        <br>
                        Value: $80,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Targeted Bomb </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Bomb Grab </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Land Mines </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Self Destruct </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Explosive Jump </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm common" id="common">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Smoke-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>SMOKE</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Common
                        <br>
                        Value: $100,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, are higher level. This will only work on non-boss enemies with some exceptions.">Elemental Reflex </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Smoke Slam </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Smoke Blast </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Smoke Liberation </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Smoke Bomber </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 3rd row -->
        <div class="row" style="width: 35%">
            <div class="col-sm common" id="common">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://fruityblox.s3.us-east-2.amazonaws.com/spike-fruit-v2.webp" width="100px">
                    <font style="font-size: 25px"><b>SPIKE</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Common
                        <br>
                        Value: $180,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Spike Summon </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Whirlwind </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Spiky Ball </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Spike Barage </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 4th row -->
    <h1 id="uncommon">UNCOMMON</h1>
         <div class="row">
         <div class="col-sm uncommon">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Flame-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>FLAME</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Uncommon
                        <br>
                        Value: $250,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 14,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                (V1)
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, are higher level."> Elemental Reflex </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Fire Bullets </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Burning Blast </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Fire Column </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Flame Destroyer </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Fire Flight </p>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                (V2)
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, are higher level."> Elemental Reflex </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Blue Fire Bullets </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Prominence Burst </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Flaming Vortex </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Hell's Core </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Rocket Flight </p>
                            </div>
                            <br><br>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-sm uncommon" id="uncommon">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Falcon-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>FALCON</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Beast
                        <br>
                        Rarity: Uncommon
                        <br>
                        Value: $300,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="While transformed, the user gains a jump boost, making them jump slightly higher."> Jump Boost </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Plumage </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Wind Burst </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Bone Crusher </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Soaring Talon </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Flight </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm uncommon">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Ice-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>ICE</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Uncommon
                        <br>
                        Value: $350,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 14,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="The wielder is immune to all physical attacks (fighting style, sword, and gun) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr><br>
                                            <abbr title="Similar to Light, if Ice is selected, the user is able to slash with a trident made of ice by clicking LMB. This can hit Chop users as it is a fruit attack. Also just like Light spear, adding stat points to the (Sword) In the stat will not Increase the damage since the trident counts as a fruit attack.">Ice Trident</abbr><br>
                                            <abbr title="The user can walk on Water by freezing it underneath them, similar to Magma V2, It will also drain a small amount of energy. It takes 4 energy for every ice block created. The faster you move the more energy it will drain.">Forst Walker</abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Ice Spears </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Ice Surge </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Ice Bird </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Glacial Epoch </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="The wielder is immune to all physical attacks (fighting style, sword, and gun) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr><br>
                                            <abbr title="Similar to Light, if Ice is selected, the user is able to slash with a trident made of ice by clicking LMB. This can hit Chop users as it is a fruit attack. Also just like Light spear, adding stat points to the (Sword) In the stat will not Increase the damage since the trident counts as a fruit attack.">Ice Trident</abbr><br>
                                            <abbr title="The user can walk on Water by freezing it underneath them, similar to Magma V2, It will also drain a small amount of energy. It takes 4 energy for every ice block created. The faster you move the more energy it will drain.">Forst Walker</abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Cold Storm </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Glacial Surge </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Frozen Dragon </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Absolute Zero </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Ice Skating </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm uncommon">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Sand-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>SAND</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Uncommon
                        <br>
                        Value: $420,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 14,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly;">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<br><abbr title="The wielder is immune to all physical attacks (fighting style, sword, and gun) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr><br>
                                        <abbr title="Sand users will take twice as much damage in Water, unless they are a Shark V2, V3, or V4 user.">Sand Dissolve</abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Desert Sword </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Desert Funeral </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Sand Tornado </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Heavy Sand </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Sand Flight </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<br><abbr title="The wielder is immune to all physical attacks (fighting style, sword, and gun) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr><br>
                                        <abbr title="Sand users will take twice as much damage in Water, unless they are a Shark V2, V3, or V4 user.">Sand Dissolve</abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Desert Sword </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Desert Funeral </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Sand Tornado </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Heavy Sand </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Sand Flight </p>
                            </div>
                            <br><br>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-sm uncommon">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Dark-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>DARK</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Uncommon
                        <br>
                        Value: $500,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 14,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="The user is immune to all types physical attacks if the user is a certain amount of levels above the certain NPC or if the target does not have Aura enabled."> Elemental Reflex </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Dark Rocks </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Black Spiral </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Black Hole </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Dark Bomb </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="The user is immune to all types physical attacks if the user is a certain amount of levels above the certain NPC or if the target does not have Aura enabled."> Elemental Reflex </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Dimensional Slash </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Abyssal Darkness </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Endless Hole </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> World of Darkness </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Ghastly Step </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm uncommon">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Diamond-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>DIAMOND</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Uncommon
                        <br>
                        Value: $600,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="While Encrusted, the user gets a 25% defense buff that stacks with Aura. Diamond's moves cannot be used without the user being Encrusted."> Encrustation </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Encrust </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Beaming Tackle </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Diamond Hail </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Solar Flare </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 5th row -->
    <h1 id="rare">RARE</h1>
    <div class="row">
            <div class="col-sm rare">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Light-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>LIGHT</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Rare
                        <br>
                        Value: $650,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 14,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr><br>
                                <abbr title="The wielder gains a Spear made of light to use as their M1 attack like the Ice Trident. This can hit Chop users as it is a fruit attack. Note that you do not need to put stats in sword to make the spear more powerful, increasing the fruit stat makes the fruit do more damage, including the M1 light spear."> Light Spear </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Light Ray </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Barrage of Light </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Reflection Kick </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Sky Beam Barrage</p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Light Flight </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr><br>
                                <abbr title="The wielder gains a Spear made of light to use as their M1 attack like the Ice Trident. This can hit Chop users as it is a fruit attack. Note that you do not need to put stats in sword to make the spear more powerful, increasing the fruit stat makes the fruit do more damage, including the M1 light spear."> Light Spear </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Divine Arrow </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Hand of the Emperor </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Lightspeed Destroyer </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Wrath of God</p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Shining Flight </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm rare">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Rubber-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>RUBBER</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Rare
                        <br>
                        Value: $750,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: column;">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                NORMAL
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="Immunity to Rumble, Electric, and all Guns, even with Aura but not enemy NPCs (like Mythological Pirates)."> Rubber Man </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> Pistol </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Cannon </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Smash </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Rush </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Slingshot </p>
                            </div>
                            
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                TRANSFORMED
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="Immunity to Rumble, Electric, and all Guns, even with Aura but not enemy NPCs (like Mythological Pirates)."> Rubber Man </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> Pistol </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Cannon </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Smash </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Rush </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Slingshot </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm rare">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Barrier-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>BARRIER</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Rare
                        <br>
                        Value: $800,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Barrier Wall </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Surprise Attack </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Barrier Prison </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Barrrier Towers </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Stairs </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 6th row -->
         <div class="row">
            
            <div class="col-sm rare">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Revive-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>GHOST</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Rare
                        <br>
                        Value: $940,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="Once you die you will resurrect with 50% HP. When you are resurrected,
You will receive a message saying (Beware, you are on your last life!)
Your physical in-game avatar will change into a see-through greenish ghost.
You will become translucent with a green glow (similar to when you use Ghost V or Ghost F)."> Resurrection </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Shivering Possession </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Spectral Release </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Cries of the Underworld </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Ghost Busters </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Wandering Soul </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm rare">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Magma-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>MAGMA</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Rare
                        <br>
                        Value: $960,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 14,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, they are a higher elemental level."> Elemental Reflex </abbr><br>
                                <abbr title="The user is immune to the Lava puddles found on the Hot and Cold and Magma Village islands, as well as in Flame and Magma raids."> Lava Immunity </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Magma Clap </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Magma Eruption </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Magma Fist </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Magma Meteors </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Magma Floor </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, they are a higher elemental level."> Elemental Reflex </abbr><br>
                                <abbr title="The user is immune to the Lava puddles found on the Hot and Cold and Magma Village islands, as well as in Flame and Magma raids."> Lava Immunity </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Magma Shower </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Volcanic Assault </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Great Magma Hound </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Volcanic Storm </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Beast Ride </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 7th row -->
    <h1 id="legendary">LEGENDARY</h1>
         <div class="row">
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Quake-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>QUAKE</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Legendary
                        <br>
                        Value:$1,000,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px">17,000
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Quake Punch </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Quake Wave </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Quake Erupt </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Dual Tsunami </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Fatal Demolisher </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Air Crusher </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Spatial Shockwave </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Seaquake </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Buddha-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>BUDDHA</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Beast
                        <br>
                        Rarity: Legendary
                        <br>
                        Value: $1,200,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 14,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Transform </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Impact </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Buddha Leap </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Buddha Explosion </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Shift </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Heavenly Impact </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Light of Annihilation </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Twilight of the Gods </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Retribution Dash </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Love-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>LOVE</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Legendary
                        <br>
                        Value: $1,300,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="Each attack on an enemy makes the enemy (fall in love) with the user, temporarily decreasing their 
damage against the user. This decreases the damage dealt by roughly 30%.
At the same time, it makes the screen pop with hearts and distorts the screen with a beating effect."> Lovestruck </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Heart Shot </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Cupid Zone </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Irresistible Attraction </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Besto Friendo </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Flamingo Ride </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 8th row -->
         <div class="row">
            <div class="col-sm legendary">
                <div class="fruit-name">
                <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Spider-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>SPIDER</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Legendary
                        <br>
                        Value: $1,500,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 17,300
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Spider Wraith </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Multi-string Attack </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Over-heated Sniper </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Ultimate Thread </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Spider Path </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Thermal Laceration </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Silk Prison </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Eternal White </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Heavenly Punishment </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Spider Highway </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Sound-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>SOUND</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Legendary
                        <br>
                        Value: $1,700,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="All moves that are used while in the golden mode, turn gold, deal more damage, and have lower cooldown.
The Tempo Meter can be filled by either holding [F] Tempo: Prestissimo or hitting an enemy with this fruit's abilities. The Tempo Meter runs out after 10 seconds.
When the meter is maxed, the user and nearby allies gain a shield that reduces incoming damage by 20%, their speed is increased by 50%, and moves will do 10% more damage.
It is recommended using Rabbit v3 for even more speed, this method can be used as an alternative of Leopard V."> Tempo Aura </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Rhapsody Notes </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Fortissimo </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Symphonic Radiance </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Glorious Harmony </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Tempo: Prestissimo </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Phoenix-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>PHOENIX</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Beast
                        <br>
                        Rarity: Legendary
                        <br>
                        Value:$1,800,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px">18,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="While transformed, the user gains 15% damage reduction from all attacks and able to fly."> Feathers Immortality </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Cannon </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Regeneration Flames </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Fast Kick </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Full Transformation </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Hybrid Flight </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<br><abbr title="While transformed, the user gains 15% damage reduction from all attacks and able to fly."> Feathers Immortality </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> Tap </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Cremation Cannon </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Blue Flames </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Flame Exodus </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Blazing Plumage </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Swift Flight </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 9th row -->
         <div class="row">
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Portal-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>PORTAL</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Legendary
                        <br>
                        Value: $1,900,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> Portal Jump </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Portal Dash </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Parallel Escape </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> World Warp </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Dimensional Rift </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Quantum Leap </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Rumble-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>RUMBLE</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Legendary
                        <br>
                        Value: $2,100,000
                        <br>
                        Awakening:<img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c2/FragmentIcon.png" width="13px"> 14,500
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="The wielder is immune to all physical attacks (Fighting Styles, Swords, and Guns) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Rumble Dragon </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Sky Thunder </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Sky Beam </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Thunder Bomb </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Lightning Dash </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="The wielder is immune to all physical attacks (Fighting Styles, Swords, and Guns) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Lightning Beast </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Thunderstorm </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Sky Judgement </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Thunderball Destruction </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Electric Flash </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Pain-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>PAIN</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Legendary
                        <br>
                        Value: $2,300,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Heavy Pain </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Pain Barrage </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Pain Nuke </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Torture </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Self Repel </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 10th row -->
         <div class="row" style="width: 35%">
            <div class="col-sm legendary">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Blizzard-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>BLIZZARD</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Legendary
                        <br>
                        Value:$2,400,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="The wielder is immune to all physical attacks (Fighting Styles, Swords, and Guns) unless they are imbued with Aura or, in the case of an NPC, they are higher level."> Elemental Reflex </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Snowflake Shuriken </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> White Out </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Howling Wind </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Blizzard Domain </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Tornado Flight </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 11th row -->
    <h1 id="mythical">MYTHICAL</h1>
         <div class="row">
         <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Gravity-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>GRAVITY</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$2,500,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Gravity Push </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Gravity Obeisance </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Meteor Pitch </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Meteors Rain </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Boulder Flight </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Mammoth-Fruit-Blox-Fruits-150x150.webp" width="100px">
                    <font style="font-size: 23px"><b>MAMMOTH</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Beast
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$2,700,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            NORMAL
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="While transformed, the user gains a 60.5% damage reduction."> Ancient Armor </abbr> </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Ancient Cutter </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> True Prehistoric Punt </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Colossal Crusher </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Stampede </p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TRANSFORMED
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="While transformed, the user gains a 60.5% damage reduction."> Ancient Armor </abbr> </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> Normal Attack </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Ancient Cutter </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> True Prehistoric Punt </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Colossal Crusher </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Stampede </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/ea/T-RexFruit.png" width="100px">
                    <font style="font-size: 25px"><b>T-REX</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Beast
                        <br>
                        Rarity: Mythical
                        <br>
                        Value: $2,700,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="After transformation, your attacks will apply a prey mark to the hit opponents, the farther they are from you, the higher the tick damage. If C move hit, it will cause them to suffer continuous bleeding and screen distortion in 4,5 seconds."> Prey Mark </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> M1 </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Tail Swipe </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Predatory Screech </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Hunter's Rage </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Reptilian Scales </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Gigantic Leap </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 12th row -->
         <div class="row">
         <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Dough-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>DOUGH</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Elemental
                        <br>
                        Rarity: Mythical
                        <br>
                        Value: $2,800,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V1
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, are higher level. This will only work on non-boss enemies with some exceptions."> Elemental Reflex </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Fried Dough </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Sticky Dough </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Carved Dough </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Restless Dough Barrage </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Roller Donut </p>
                            </div>
                            <br><br>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100px">
                                V2
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p>(PASSIVE)<abbr title="The wielder is immune to all physical attacks (Fighting Style, Sword, and Gun) unless they are imbued with Aura or, in the case of an NPC, are higher level. This will only work on non-boss enemies with some exceptions."> Elemental Reflex </abbr></p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> TAP </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Missile Jab </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Pastry River </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Piercing Clothesline </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Dough Fist Fusillade </p>
                                <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Scorching Donut </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Shadow-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>SHADOW</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$2,900,000
                        <br>
                        Awakening: None
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="The user will always have an Umbra Meter bar on their screen. The meter fills up by dealing damage with Shadow abilities to enemies, and fills up automatically during night.
The Umbra Meter can only be drained by using [V] Corvus Torment.
The user will also get a shadow aura surrounding themselves that will be bigger and darker, depending on the amount of Umbra Meter they have.
(Note: the Shadow aura does not deal damage to anyone, and is just for cosmetic purposes)"> Umbra Meter </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px">  </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px">  </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px">  </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px">  </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px">  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Venom-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>VENOM</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$3,000,000
                        <br>
                        Awakening: None
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE) <br>
                            <abbr title="Every NPC or player within the radius of certain attacks of Venom (X, C, and F explosion) will be inflicted with a poisonous miasma, which deals a hefty amount of damage. Also causes the screen to turn dark purple and wobble."> Deadly Venom </abbr>
                        <br><abbr title="The user can make poisonous puddles by certain attacks (Z, X and Transformed C). Upon standing on it, the puddles deals damage to enemies, but they won't be affected by miasma and will not be damaged if they walk out from the Puddles."> Puddles of Poison </abbr>   
                        <br><abbr title="While transformed, Air Jumping two or more times or going up to a good height and then falling to the ground will cause a small explosion and leaves poison puddles. It is worthy to note that the longer you fall does not affect the spread of the puddles."> Venom Drop </abbr>   
                            </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Poison Daggers </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Noxious Shot </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Toxic Fog </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Serpent’s Wrath </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 13th row -->
         <div class="row">
         <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Control-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>CONTROL</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$3,200,000
                        <br>
                        Awakening: None
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<abbr title="Control's abilities are confined within the Area it establishes, which remains active for approximately 55 seconds."> Area-Bound </abbr></p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Control Area </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Levitate </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Echo Knife </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Gamma Rush </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Teleport </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Spirit-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>SPIRIT</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Natural
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$3,400,000
                        <br>
                        Awakening: None
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<br>
                            <abbr title="The user always has a Spirit counter above a constantly moving bar. Spirits are collected over time after the bar goes to the end, and get used when you summon a buddy. The buddy summoned depends on the color the bar is in."> Spirit Bar </abbr>
                        <br><abbr title="The user will always have 2 certain Buddies around them, the Angel (Shu) and Demon (Ra)."> Heaven and Hell </abbr>
                        <br><abbr title="Spirits can be used by the user by clicking on the ground which will randomly summon unique and random buddies. The (Heaven) zone buddies supports the player, and the (Hell) zone buddies offend enemies."> Buddies </abbr>
                            </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> Tap </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Frostfire Grasp </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Wrath of Ra </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Wrath of Shu </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> End of Times </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Sky Ruler </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Dragon-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>DRAGON</b></font>
                </div>  
                <div class="description">
                    <br>
                    <p>
                        Type: Beast
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$3,500,000
                        <br>
                        Awakening: None
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE)<br>
                            <abbr title="The user starts off with 50% of the (Fury Meter) bar when spawned. The user's Fury Meter needs to be full to be able to transform into a dragon. Fury is regained over time while not transformed and drains while transformed. Using moves while transformed decreases the user's Fury Meter. When taking damage while transformed, the Fury Meter will increase. The fury meter takes 1m 30s to fill to full from 0% to 100%."> Fury Meter </abbr><br>
                            <abbr title="In Dragon form, the user gains a 62.5% damage resistance to all attacks and able to fly."> Dragon Armor </abbr><br>
                            <abbr title="The user can change the color of their wings and Dragon form by flying through colored hoops. However, various mastery levels are needed."> Multicolored </abbr>
                            </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Heatwave Beam </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Dragonic Claw </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Fire Shower </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Dragon Flight </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Leopard-Fruit-Blox-Fruits.webp" width="100px">
                    <font style="font-size: 25px"><b>LEOPARD</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Beast
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$5,000,000
                        <br>
                        Awakening: None
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            NORMAL
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">   
                            <p>(PASSIVE)<br>
                                <abbr title="The wielder of this fruit is able to transform into a Leopard-Human hybrid. This form will disable their sword, gun and fighting style moveset. However, it allows them to gain unbelievable strength and allows them to have the ability to melee attack. The M1 consists of two immense punches, one swift kick, and one furious roar which breaks Instinct and deals AoE damage."> Half-Leopard Half-Human </abbr><br>
                                <abbr title="While transformed, the user gains a jump boost, making them jumps slightly higher."> Jump Boost </abbr><br>
                                <abbr title="When transformed, the user is (immune) to all environment lava puddles, such as those found in Raids or on the island Hot and Cold. However, you are not immune to the lava at all, when you touch the lava with your body center it will cause damage. Note that this does not provide resistance to the moves of the Magma Fruit."> Persistent Lava </abbr>
                            </p> 
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Finger Revolver </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Spiraling Kick </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Afterimage Assault </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Body Flicker </p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TRANSFORMED
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">   
                            <p>(PASSIVE)<br>
                                <abbr title="The wielder of this fruit is able to transform into a Leopard-Human hybrid. This form will disable their sword, gun and fighting style moveset. However, it allows them to gain unbelievable strength and allows them to have the ability to melee attack. The M1 consists of two immense punches, one swift kick, and one furious roar which breaks Instinct and deals AoE damage."> Half-Leopard Half-Human </abbr><br>
                                <abbr title="While transformed, the user gains a jump boost, making them jumps slightly higher."> Jump Boost </abbr><br>
                                <abbr title="When transformed, the user is (immune) to all environment lava puddles, such as those found in Raids or on the island Hot and Cold. However, you are not immune to the lava at all, when you touch the lava with your body center it will cause damage. Note that this does not provide resistance to the moves of the Magma Fruit."> Persistent Lava </abbr>
                            </p> 
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> Tap </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Finger Revolver </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Spiraling Kick </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Afterimage Assault </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Body Flicker </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm mythical">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c3/KitsuneFruit.png" width="100px">
                    <font style="font-size: 25px"><b>KISTUNE</b></font>
                </div>
                <div class="description">
                    <br>
                    <p>
                        Type: Beast
                        <br>
                        Rarity: Mythical
                        <br>
                        Value:$8,000,000
                        <br>
                        Awakening: None
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(PASSIVE) <br>
                                <abbr title="The user passively gains tails, as well as by dealing damage. The user can transform when the tail meter reaches maxed 3. While transformed your tail meter does not passively drain unless you have taken damage within the past couple of seconds, however if you are using a move (including Kitsune M1s) it decreases the tail meter, you also gain tails while dealing damage to a player/NPC and if you are transformed you do not gain tails unless you deal damage. With one tail the user gets no benefits, With two tails the user gets a speed boost(+100% [2x]) and a dash boost and now walks on all fours. With the third tail, the user gets three glowing orbs that hit an enemy entity and deal tick damage if the user uses a move. With the tails meter maxed out the user can transform which gives the user insane boosts and special abilities.
Much similar to a Fury Meter"> Kitsune Tails </abbr> <br>
                                <abbr title="All moves in transformed give a small trail of fire after using the move. For example, if X move misses, it will create a small trail that can break instinct to the enemy (similar to X Rengoku)."> Wispful Flames </abbr><br>
                                <abbr title="While transformed, the user gains a 20% damage reduction from all sources, increase speed, and gain jump boost."> Ancient Strength </abbr><br>
                                <abbr title="When transformed, the user gains the ability to run on Water, but you are not able to idle on it."> Spirit Beast of the Sea </abbr><br>
                                <abbr title="When transformed, the user can be mounted by another allied player, riding its saddle."> Kitsune Mount </abbr>
                            </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/0a/LMB.png" width="30px"> Normal Attack </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/51/Z-Key.png" width="30px"> Accursed Enchantment </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/X-Key.png" width="30px"> Tails of Burning Agony </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/81/C-Key.png" width="30px"> Fox Fire Disruption </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/V-Key.png" width="30px"> Transformation </p>
                            <p><img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/F-Key.png" width="30px"> Wild Assault </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <br>
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