<!DOCTYPE html>
<html lang="en">
<head>
    <title> ACCESSORY </title>
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
        .accessory-name {
            width: 25%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .description {
            width: 35%;
            display: flex;
            justify-content: space-between;
            align-content: space-around;
            flex-direction: column;
            margin-left: 25px;
        }
        .obtainment {
            width: 40%;
            margin-left: 25px;
        }
        .description li {
            font-weight: 1000;
            list-style-type: disc;
            padding-left: 10px;
            font-size: 20px;
            font-family: myFont1 !important;
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
        h2 {
            font-weight: 600;
            font-size: 35px;
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
            <h1 style="text-align: center"> <a href="main.php" id="back">Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h1>
            <h1 style="font-size: 70px; position: relative; text-shadow: 3px 5px 8px gray">ACCESSORY</h1>
            <div class="dropdown" style="margin-top: 20px; padding: 0; top: 0">
                        <button class="btn btn-secondary dropdown-toggle rarity" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SEA
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 250px; text-align: center; background-color:pink;">
                        <center>
                            <h3> <a href="#first-sea">First Sea</a> </h3>
                            <ul>
                                <li><a href="#pink_coat"> Pink Coat </a></li>
                                <li><a href="#black_cape"> Black Cape </a></li>
                                <li><a href="#coat"> Coat </a></li>
                                <li><a href="#cool_shades"> Cool shades </a></li>
                                <li><a href="#marine_cap"> Marine Cap </a></li>
                                <li><a href="#swordsman_hat"> Swordsman Hat </a></li>
                                <li><a href="#tomoe_ring"> Tomoe Ring </a></li>
                                <li><a href="#usoap_hat"> Usoap's Hat </a></li>
                            </ul>
                            <h3> <a href="#second-sea">Second Sea</a> </h3>
                            <ul>
                                <li><a href="#black_spikey_coat">Black Spikey Coat</a></li>
                                <li><a href="#blue_spikey_coat">Blue Spikey Coat</a></li>
                                <li><a href="#choppa">Choppa</a></li>
                                <li><a href="#ghoul_mask">Ghoul Mask</a></li>
                                <li><a href="#red_spikey_coat">Red Spikey Coat</a></li>
                                <li><a href="#top_hat">Top Hat</a></li>
                                <li><a href="#warrior_helmet">Warrior Helmet</a></li>
                                <li><a href="#swan_glasses">Swan Glasses</a></li>
                                <li><a href="#zebra_cap">Zebra Cap</a></li>
                                <li><a href="#dark_coat">Dark Coat</a></li>
                            </ul>
                            <h3> <a href="#third-sea">Third Sea</a> </h3>
                            <ul>
                                <li><a href="#bandanna(balck)">Bandanna (black)</a></li>
                                <li><a href="#bandanna(green)">Bandanna (green)</a></li>
                                <li><a href="#bandanna(red)">Bandanna (red)</a></li>
                                <li><a href="#bear_ears">Bear Ears</a></li>
                                <li><a href="#choppa">Choppa</a></li>
                                <li><a href="#golden_sunhat">Golden Sunhat</a></li>
                                <li><a href="#hunter_cape(black)">Hunter Cape(black)</a></li>
                                <li><a href="#hunter_cape(green)">Hunter Cape(green)</a></li>
                                <li><a href="#hunter_cape(red)">Hunter Cape(red)</a></li>
                                <li><a href="#jaw_shield">Jaw Shield</a></li>
                                <li><a href="#lei">Lei</a></li>
                                <li><a href="#pilot_helmet">Pilot Helmet</a></li>
                                <li><a href="#pretty_helmet">Pretty Helmet</a></li>
                                <li><a href="#shark_tooth_necklace">Shark Tooth Necklace</a></li>
                                <li><a href="#top_hat">Top Hat</a></li>
                                <li><a href="#holy_crown">Holy Crown</a></li>
                                <li><a href="#kitsune_mask">Kitsune Mask</a></li>
                                <li><a href="#kitsune_ribbon">Kitsune Ribbon</a></li>
                                <li><a href="#leviathan_crown">Leviathan Crown</a></li>
                                <li><a href="#musketeer_hat">Musketeer Hat</a></li>
                                <li><a href="#pale_scarf">Pale Scarf</a></li>
                                <li><a href="#terror_jaw">Terror Jaw</a></li>
                                <li><a href="#valkyrie_helm">Valkyrie Helm</a></li>
                                <li><a href="#leviathan_shield">Leviathan Shield</a></li>
                            </ul>
                        <h3><a href="#events">Events</a></h3>
                            <ul>
                                <li><a href="#elf_hat">Elf Hat</a></li>
                                <li><a href="#santa_hat">Santa Hat</a></li>
                                <li><a href="#cupid_coat">Cupid's Coat</a></li>
                                <li><a href="#heart_shades">Heart Shades</a></li>
                                <li><a href="#holiday_cloak">Holiday Cloak</a></li>
                                <li><a href="#party_hat">Party Hat</a></li>
                            </ul>
                        </center>
                        </div>
                    <br>
            </div>
        </div>
        <h1 id="first-sea">FIRST SEA</h1>
        <div class="row">
            <div class="col-sm uncommon" id="pink_coat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/e6/PinkCoat.png" width="200px">
                    <font style="font-size: 45px"><b>Pink Coat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Seems to be made of real swan feathers."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +10% Gun Damage</li>
                                <li> +200 Health</li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Great for Gun mains on the First Sea or early Second Sea. </li>
                                <li> Easily obtainable. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>Only suitable for early-game Gun users, otherwise hardly useful.</li>
                                <li>Low health increase.</li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p>This accessory can be obtained after defeating the Swan Boss, who can be found in the Prison in the First Sea.</p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/16/New_Swan.png" width="150px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="black_cape">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/c8/BlackCape.png" width="200px">
                    <font style="font-size: 45px"><b>Black Cape</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"A regular cape, more grey than black. Strengthens the wearer."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +100 Energy </li>
                                <li> +100 Health </li>
                                <li> +5% damage </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Cheap. </li>
                                <li> Compatible with any build. </li>
                                <li> Energy and Health boosts.</li>
                                <li> Moderate universal damage increase.</li>
                                <li> Overall a great pick for new players.</li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Small boosts. </li>
                                <li> Only suitable for early-game players above level 50. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> This accessory can be bought from Parlus, who is located at the Marine Fortress in the First Sea. The accessory costs MoneyIcon 50,000 and requires you to be at least level 50 to purchase it. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/91/Capturar-0.PNG" width="80px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="coat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/79/Coat%28Pirate%29.png" width="200px">
                    <font style="font-size: 45px"><b>Coat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Quite comfy, woven with luxurious cloth from quality weavers."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +10% more damage on Melee Attacks </li>
                                <li> +200 Energy </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Decently increases Energy and Melee damage. </li>
                                <li> Generally great for players who primarily use Fighting Styles. </li>
                                <li> Useful throughout the entire First Sea and early Second Sea.</li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Not suited for players who mostly use Blox Fruits, Swords, or Guns. </li>
                                <li> Only provides a Melee damage boost and an Energy boost. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> This accessory can be obtained after defeating the Vice Admiral, who is located at Marine Fortress in the First Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/54/Vice_Admiral.png" width="150px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="cool_shades">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/c/cc/CoolShades.png" width="200px">
                    <font style="font-size: 45px"><b>Cool Shades</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"They're as cool as the name, while also preventing eyeburns."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> 17.5% faster running speed </li>
                                <li> 7.5% more damage on any attack </li>
                                <li> +100 Energy </li>
                                <li> +100 Health </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Great for any build. </li>
                                <li> Health and Energy boost. </li>
                                <li> Decent speed buff.</li>
                                <li> Decent damage boost.</li>
                                <li> So far the best accessory in the First Sea.</li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Low health and energy boost. </li>
                                <li> Very difficult to obtain. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> This accessory can be obtained after defeating the Cyborg, who can be found at the Fountain City in the First Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/9b/CyborgfRanky.png" width="150px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="marine_cap">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/5b/Marine_Cap.png" width="200px">
                    <font style="font-size: 45px"><b>Marine Cap</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Given to Marine newcomers as a reward for taking down a pirate."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +7.5% Sword/Gun damage </li>
                                <li> +10% Sword/Gun cooldown reduction </li>  
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Fairly easy to get as the large majority of players are Pirates. </li>
                                <li> Decent for Sword and Gun users in the First Sea. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Completely useless for Fruit and Fighting Style users. </li>
                                <li> Only provides boosts for Sword and Gun damage. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Marine Cap can be obtained by killing a Pirate as a Marine when the player's honor is over 250,000. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/f/fe/Pirates.png" width="100px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="swordsman_hat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/87/Swordsman_Hat.png" width="200px">
                    <font style="font-size: 45px"><b>Swordsman Hat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"A hat regularly worn by swordsmen around the sea."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +10% Sword damage </li> 
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Great for First Sea and perhaps early Second Sea Sword users. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Only a single effect. </li>
                                <li> Completely useless for Fruit, Fighting Style and Gun users. </li>
                                <li> Only buffs damage on Sword attacks. </li>
                                <li> Tough to obtain. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> This accessory can be bought at the cost of MoneyIcon 150,000 from Hasan, who is located at the Desert in the First Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/e1/Hasan.png" width="120px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="tomoe_ring">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/5b/Tomoe_Ring.png" width="200px">
                    <font style="font-size: 45px"><b>Tomoe Ring</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"A metal ring with tomoes which can be attached to the wearer's back. It increases their fruit's potential."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +10% Blox Fruit damage </li> 
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Great for beginner Fruit users. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Expensive compared to similar Accessories. </li>
                                <li> Only useful for Fruit users. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> This accessory can be bought for MoneyIcon 500,000 from Yoshi, who is located at the second island of the Skylands, in the First Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/48/Yoshi.png" width="150px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="usoap_hat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/21/Usoap%27s_Hat.png" width="200px">
                    <font style="font-size: 45px"><b>Usoap's Hat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Given to Pirate newcomers as a way to prove their worth."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +7.5% Gun damage </li>
                                <li> +15% Gun cooldown reduction </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Great pick for early-game and mid-game Gun mains. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Only useful for Gun users. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Usoap's Hat can be obtained after defeating 3 players near the user's level, if the user is a Pirate and has over 250,000 Bounty. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/f/fe/Pirates.png" width="100px">
                </div> 
            </div>
        </div>
        <h1 id="second-sea">SECOND SEA</h1>
        <div class="row">
            <div class="col-sm rare" id="black_spikey_coat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/09/BlackSpikeyCoat.png" width="200px">
                    <font style="font-size: 45px"><b>Black Spikey Coat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Seems really heavy to carry, but it actually isn't."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +7.5% damage </li>
                                <li> +200 Energy </li>
                                <li> +200 Health </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>Compatible with any build. </li>
                                <li>Increases Health and Energy. </li>
                                <li>Large universal damage increase, comparable to the Swan Glasses. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>Fairly difficult to obtain.</li>
                                <li>Small Health and Energy boost values for a Second Sea accessory.</li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Black Spikey Coat can be obtained after defeating the Jeremy Boss, who is located in the Kingdom of Rose in the Second Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/08/RobloxScreenShot20200924_123358341.png" width="120px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="blue_spikey_coat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a5/Blue_Spikey_Coat.png" width="200px">
                    <font style="font-size: 45px"><b>Blue Spikey Coat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Seems someone dropped it in blue paint."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +7.5% damage </li>
                                <li> +500 Energy </li>
                                <li> +250 Health </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> High energy, health, and damage increase. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>It is difficult to obtain.</li>
                                <li> Doesn't increase defense or speed.</li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Blue Spikey Coat can be obtained after defeating the Cursed Captain Boss, who has a 1/3 chance of spawning in the Cursed Ship in the Second Sea every in-game night. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a1/The_cursed_captain.jpg" width="170px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="choppa">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/96/Choppa.png" width="200px">
                    <font style="font-size: 45px"><b>Choppa</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"A strange helmet with antlers sticking out."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +3% Blox Fruit damage </li>
                                <li> 15% Blox Fruits cooldown reduction </li>
                                <li> +10% Blox Fruits Defense </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> It is good for and against players who use Blox Fruits. </li>
                                <li> Highest Blox Fruits' cooldown reduction along with the Zebra Cap accessory. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Players who use Swords and Guns will not find this item very helpful, apart from the defense bonus.</li>
                                <li> It does not increase health, energy or movement speed, and is quite narrow in its usefulness.</li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Choppa can be obtained after defeating a Sea Beast, a Boss that has a chance to spawn while traveling in a Boat in the Second Sea and Third Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/4d/New_sea_beast_model.png" width="170px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="ghoul_mask">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/7c/Ghoul_Mask.png" width="200px">
                    <font style="font-size: 45px"><b>Ghoul Mask</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"This mask can somehow steal life energy."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +10% life leech (2.5% against NPCs) </li>
                                <li> +35% speed </li>
                                <li> +500 Energy. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Greatly increases energy and movement speed. </li>
                                <li> Cheap and easy to obtain. </li>
                                <li> Life leech is compatible with players who uses the Buddha Fruit. </li>
                                <li> Extremely good for raids when paired with Ghoul V4 and Buddha V2 due to it's high health regen and damage reduct makes the player essentially immortal. </li>
                                <li> Can be paired with Ghoul (race) for even more life leech. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> No increase for Health or damage or defense. Although life leech is making up for Health.</li>
                                <li> Life leech only applies to Fighting Styles, Not Blox Fruits or Swords or Guns, Which makes it less useful for other builds.</li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Ghoul Mask can be bought from El Perro, who is located in the Cursed Ship in the Second Sea. It costs 50 Ectoplasm. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/17/El_Perro_Ship.png" width="100px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="red_spikey_coat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/65/Red_Spikey_Coat.png" width="200px">
                    <font style="font-size: 45px"><b>Red Spikey Coat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"It feels so ominous. Is it possessed?"</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> + 500 Health </li>
                                <li> + 250 Energy </li>
                                <li> + 7.5% damage </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> High health, energy, and damage increase. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> It is difficult to obtain.</li>
                                <li> Doesn't increase defense or speed.</li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> This accessory can be dropped after defeating the Cursed Captain, who has a 1/3 chance of spawning in the Cursed Ship every in-game night, in the Second Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/a/a1/The_cursed_captain.jpg" width="170px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="top_hat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/8d/Top_Hat.png" width="200px">
                    <font style="font-size: 45px"><b>Top Hat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Who would put goggles on a top hat, and why isn't it being squished?"</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +3% Fighting Style damage </li>
                                <li> -10% Skills Cooldown </li>
                                <li> +10% Sword defense </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> It is generally good for any build. </li>
                                <li> It is good against players who use Swords. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> It does not increase health, energy or movement speed. </li>
                                <li> Very minor and specialized damage increase. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Top Hat can be obtained after defeating a Sea Beast. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/4d/New_sea_beast_model.png" width="180px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="warrior_helmet">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/6b/WarriorHelmet.png" width="200px">
                    <font style="font-size: 45px"><b>Warrior Helmet</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Given as a token of appreciation for becoming respected in the Kingdom of Rose."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +12.5% Melee/Sword Damage </li>
                                <li> 5% Melee/Sword attack cooldown reduction </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Good for players who use Swords. </li>
                                <li> Reduces cooldown for Melee/Sword attacks. </li>
                                <li>Provides decent increase in damage.</li>
                                <li>It has the most melee damage boost, shared with Jaw Shield</li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> It does not increase health or energy. </li>
                                <li> Not compatible with players who use Blox Fruits or Guns. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Warrior Helmet can be obtained after completing the Colosseum Quest from Bartilo, who is located at The Café in the Kingdom of Rose in the Second Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/f/f5/Bartilo_in-game.png" width="100px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="swan_glasses">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/75/Swan_Glasses.png" width="200px">
                    <font style="font-size: 45px"><b>Swan Glasses</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"A fancy pair of glasses worn by the previous ruler of the Kingdom of Rose."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +25% Movement Speed </li>
                                <li> +8% Damage </li>
                                <li> -8% Skills Cooldown</li>
                                <li> +8% Defense</li>
                                <li> +250 Energy</li>
                                <li> +250 Health</li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Well-rounded increases in stats, compatible with players of any build. </li>
                                <li> Decent Energy and Health boosts. </li>
                                <li> High universal damage boost. </li>
                                <li> Provides defense and reduces skill cooldown. </li>
                                <li> Increased movement speed. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Extremely difficult to obtain. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> This accessory can be dropped by defeating Don Swan in the Second Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/0/08/DonSwan.png" width="170px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="zebra_cap">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/4d/Zebra_Cap.png" width="200px">
                    <font style="font-size: 45px"><b>Zebra Cap</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"A simple cap made out of zebra fur."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +10% Sword damage </li>
                                <li> -15% Blox Fruit Skills Cooldown </li>
                                <li> +500 Energy</li>
                                <li> +100 Health</li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Increases Sword damage. </li>
                                <li> Decent energy boost. </li>
                                <li> Provides a fairly large cooldown reduction for Blox Fruits skills. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Does not provide any buffs for Guns or Fighting Styles. </li>
                                <li> Small health boost. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> This accessory is guaranted to be dropped after defeating Order, who can be spawned by starting an Order Raid in the hidden laboratory on the hot side of the Hot and Cold island in the Second Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/58/Order.png" width="120px">
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm mythical" id="dark_coat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/23/Dark_Coat.png" width="200px">
                    <font style="font-size: 45px"><b>Dark Coat</b></font>
                </div>
                    <div class="description">
                        <h3 class="item_description"><i>"Coated with the power of darkness, it channels some of the user's hidden potential."</i></h3>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EFFECTS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> +600 Energy </li>
                                <li> +600 Health </li>
                                <li> +15% Blox Fruit damage</li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Great for Blox Fruit users. </li>
                                <li> Provides high boost in health and energy. </li>
                            </div>
                        </div>
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> Extremely difficult to obtain. </li>
                                <li> Hardly useful for Sword and Gun users. </li>
                                <li> Generally not considered to be the best accessory available in the Second Sea although one it is one of the best. </li>
                            </div>
                        </div>
                </div>
                <div class="obtainment">
                    <h2>OBTAINMENT</h2>
                    <p> The Dark Coat can be obtained after defeating the Darkbeard Raid Boss, who spawns after a Fist of Darkness is placed on the altar at the Dark Arena in the Second Sea. </p>
                    <img src="https://static.wikia.nocookie.net/roblox-blox-piece/images/d/d7/61CDE2BA-33A7-4097-8D19-D260E98068BD.jpeg" width="120px">
                </div> 
            </div>
        </div>
        <h1 id="third-sea">THIRD SEA</h1>
        <div class="row">
            <div class="col-sm rare" id="bandanna(black)">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/7/7d/Bandanna%28Black%29.png" width="200px">
                    <font style="font-size: 45px"><b>Bandanna (black)</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="bandanna(green)">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/3/3c/Bandanna%28Green%29.png" width="200px">
                    <font style="font-size: 45px"><b>Bandanna (green)</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="bandanna(red)">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/85/Bandanna%28Red%29.png" width="200px">
                    <font style="font-size: 45px"><b>Bandanna (red)</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="bear_ears">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/13/Bear_Ears.png" width="200px">
                    <font style="font-size: 45px"><b>Bear&nbsp;Ears</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="choppa">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/96/Choppa.png" width="200px">
                    <font style="font-size: 45px"><b>Choppa</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="golden_sunhat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/55/Golden_Sunhat.png" width="200px">
                    <font style="font-size: 45px"><b>Golden Sunhat</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="hunter_cape(black)">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/1c/HunterCape%28Black%29.png" width="200px">
                    <font style="font-size: 45px;"><b>Hunter&nbsp;Cape (black)</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="hunter_cape(green)">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/4e/HunterCape%28Green%29.png" width="200px">
                    <font style="font-size: 45px"><b>Hunter&nbsp;Cape (green)</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="hunter_cape(red)">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/25/HunterCape%28Red%29.png" width="200px">
                    <font style="font-size: 45px"><b>Hunter&nbsp;Cape (red)</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="jaw_shield">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/20/Jaw_Shield.png" width="200px">
                    <font style="font-size: 45px;"><b>Jaw&nbsp;Shield</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="lei">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/45/Lei.png" width="200px">
                    <font style="font-size: 45px"><b>Lei</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="pilot_helmet">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/6e/Pilot_Helmet.png" width="200px">
                    <font style="font-size: 45px"><b>Pilot&nbsp;Helmet</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm rare" id="pretty_helmet">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/f/f5/Pretty_Helmet.png" width="200px">
                    <font style="font-size: 45px;"><b>Pretty Helmet</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="shark_tooth_necklace">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/4a/Shark_Tooth_Necklace.png" width="200px">
                    <font style="font-size: 45px"><b>Shark&nbsp;Tooth Necklace</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="top_hat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/8d/Top_Hat.png" width="200px">
                    <font style="font-size: 45px"><b>Top&nbsp;Hat</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="holy_crown">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/1/14/Holy_Crown.png" width="200px">
                    <font style="font-size: 45px;"><b>Holy&nbsp;Crown</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="kitsune_mask">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/45/Kitsune_Mask.png" width="200px">
                    <font style="font-size: 45px"><b>Kitsune&nbsp;Mask</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="kitsune_ribbon">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/29/Kitsune_Ribbon.png" width="200px">
                    <font style="font-size: 45px"><b>Kitsune&nbsp;Ribbon</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="leviathan_crown">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/d/df/Leviathan_Crown.png" width="200px">
                    <font style="font-size: 45px;"><b>Leviathan Crown</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="musketeer_hat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/96/Musketeer_Hat.png" width="200px">
                    <font style="font-size: 45px"><b>Musketeer Hat</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="pale_scarf">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/2a/Pale_Scarf.png" width="200px">
                    <font style="font-size: 45px"><b>Pale&nbsp;Scarf</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="terror_jaw">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/5/5d/Terror_Jaw.png" width="200px">
                    <font style="font-size: 45px;"><b>Terror Jaw</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="valkyrie_helm">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/b/b4/Valkyrie_Helm.png" width="200px">
                    <font style="font-size: 45px"><b>Valkyrie Helm</b></font>
                </div>
            </div>
            <div class="col-sm mythical" id="leviathan_shield">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/2/2f/Leviathan_Shield.png" width="200px">
                    <font style="font-size: 45px"><b>Leviathan Shield</b></font>
                </div>
            </div>
        </div>
        <h1 id="events">EVENTS</h1>
        <div class="row">
            <div class="col-sm rare" id="elf_hat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/9/9a/Elf_Hat.png" width="200px">
                    <font style="font-size: 45px;"><b>Elf&nbsp;Hat</b></font>
                </div>
            </div>
            <div class="col-sm rare" id="santa_hat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/e/e6/Santa_Hat.png" width="200px">
                    <font style="font-size: 45px"><b>Santa&nbsp;Hat</b></font>
                </div>
            </div>
            <div class="col-sm legendary" id="cupid_coat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/8/82/Cupid%27s_Coat.png" width="200px">
                    <font style="font-size: 45px"><b>Cupid's&nbsp;Coat</b></font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm legendary" id="heart_shades">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/42/Heart_Shades.png" width="200px">
                    <font style="font-size: 45px;"><b>Heart&nbsp;Shades</b></font>
                </div>
            </div>
            <div class="col-sm mythical" id="holiday_cloak">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/4/44/Holiday_Cloak.png" width="200px">
                    <font style="font-size: 45px"><b>Holiday&nbsp;Cloak</b></font>
                </div>
            </div>
            <div class="col-sm mythical" id="party_hat">
                <div class="accessory-name">
                    <img id="accessory-logo" src="https://static.wikia.nocookie.net/roblox-blox-piece/images/6/69/Party_Hat.png" width="200px">
                    <font style="font-size: 45px"><b>Party&nbsp;Hat</b></font>
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