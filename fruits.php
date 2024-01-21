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
        body {
            background-image: url('https://wallpapercave.com/wp/wp9780350.jpg');
            background-size: 100%;
            font-family: myFont !important;
            letter-spacing: 5px;
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
            font-size: 18px;
            text-align: left;
        }
        .dropdown-menu {
            text-align: left;
            border-radius: 5px;
            opacity: 80%;
            width: 250px;
        }
        .btn {
            background-color: yellow;
            color: black;
            width: 150px;
            letter-spacing: 3px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>FRUITS</h1>
    <!-- 1st row -->
        <div class="row">
            <div class="col-sm">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://media.discordapp.net/attachments/885785188158799893/1168022205314121769/latest.png?ex=65504072&is=653dcb72&hm=c18044eabe0cbfed058f9ef86b99f1c2a04f2d8b1091fca803ee83e59feb10b5&=&width=268&height=268" width="100px">
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
                            <p>(Z) Missile Fist</p>
                            <p>(X) Air Strike</p>
                            <p>(C) Rocket Crash</p>
                            <p>(F) Blast Off</p>
                        </div>
                        <br><br>
                    </div>
                </div>    
            </div>
            
            <div class="col-sm">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://media.discordapp.net/attachments/885785188158799893/1168022963623317614/latest.png?ex=65504127&is=653dcc27&hm=d3905e42801c4276c21c364727dbc538263d3c8a896e94bdcd00ccd70ee6ad2f&=&width=268&height=268" width="100px">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z) Razor Wind </p>
                            <p>(X) Tornado Assault </p>
                            <p>(C) Air Slasher </p>
                            <p>(F) Helicopter Flight </p>
                        </div>
                        <br><br>
                    </div>
                </div>    
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 300px">
                            <p>(PASSIVE) Body Seperation</p>
                            <p>(Z) Tackle </p>
                            <p>(X) Dance </p>
                            <p>(C) Party </p>
                            <p>(F) Helicopter </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        
        </div>
    <!-- 2nd row -->
        <div class="row">
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://media.discordapp.net/attachments/885785188158799893/1168023013355175956/latest.png?ex=65504133&is=653dcc33&hm=8d9cbae53c11bb2dce4b8bb0c7e3d59bb89128d6caa50bac826cabb920f9b358&=&width=268&height=268" width="100px">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 3rd row -->
        <div class="row">
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 4th row -->
         <div class="row">
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 5th row -->
         <div class="row">
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 6th row -->
         <div class="row">
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 7th row -->
         <div class="row">
            <div class="col-sm">
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
                        Value: $1,000,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 8th row -->
         <div class="row">
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Value: $1,800,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 9th row -->
         <div class="row">
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 10th row -->
         <div class="row">
            <div class="col-sm">
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
                        Value: $2,400,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Value: $2,500,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="fruit-name">
                    <img id="fruits-logo" src="https://blox-fruits.com/wp-content/uploads/2023/10/Mammoth-Fruit-Blox-Fruits-150x150.webp" width="100px">
                    <font style="font-size: 25px"><b>MAMMOTH</b></font>
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 11th row -->
         <div class="row">
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Value: $2,900,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 12th row -->
         <div class="row">
            <div class="col-sm">
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
                        Value: $3,000,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Value: $3,200,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Value: $3,400,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    <!-- 13th row -->
         <div class="row">
            <div class="col-sm">
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
                        Value: $3,500,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Value: $5,000,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm">
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
                        Value: $8,000,000
                        <br>
                        Skills:
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SKILLS
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p>(Z)  </p>
                            <p>(X)  </p>
                            <p>(C)  </p>
                            <p>(F)  </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
</body>
</html>