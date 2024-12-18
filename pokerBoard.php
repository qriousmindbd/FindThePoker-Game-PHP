<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find The Poker</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="main_board">

    <div class="game-header">
        <div class="navigation-toggle" onclick="toggleNavigation()">
            <i class="fa fa-bars" aria-hidden="true"></i> Menu
        </div>

        <div class="score">Score : 0</div>
        <div class="game-options">
            <button class="gradient-button"><i class="fa fa-trophy fa-lg" aria-hidden="true"></i> Leaderboard</button>
            <button class="gradient-button"><i class="fa fa-cogs fa-lg" aria-hidden="true"></i> Settings</button>
            <button class="gradient-button"><i class="fa fa-question fa-lg" aria-hidden="true"></i> Help</button>
        </div>
    </div>

    <div class="shuffle-board">

        <div class="card" id="card1">
            <div class="card-inner">
                <div class="card-front" id="frontCard1">
                    <img src="images/front-card-image.jpg" alt="Front of the card">
                </div>
                <div class="card-back" id="backCard1"><img src=""></div>
            </div>
        </div>
        <div class="card" id="card2">
            <div class="card-inner">
                <div class="card-front" id="frontCard2">
                    <img src="images/front-card-image.jpg" alt="Front of the card">
                </div>
                <div class="card-back" id="backCard2"><img src=""></div>
            </div>
        </div>
        <div class="card" id="card3">
            <div class="card-inner">
                <div class="card-front" id="frontCard3">
                    <img src="images/front-card-image.jpg" alt="Front of the card">
                </div>
                <div class="card-back" id="backCard3"><img src=""></div>
            </div>
        </div>
        <div class="card" id="card4">
            <div class="card-inner">
                <div class="card-front" id="frontCard4">
                    <img src="images/front-card-image.jpg" alt="Front of the card">
                </div>
                <div class="card-back" id="backCard4"><img src=""></div>
            </div>
        </div>
    </div>

    
    <div class="navigation" id="navigation">
        <ul>
            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="fa fa-bar-chart"></i> Statistics</a></li>
            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fa fa-trophy"></i> Leaderboard</a></li>
            <li><a href="#"><i class="fa fa-question-circle"></i> Help</a></li>
            <li><a href="index.php"><i class="fa fa-sign-out"></i> Sign Out</a></li>
        </ul>
    </div>

    <img src="images/coinsFalling.gif" id="overlay-gif">

    <div class="board_hint fade-in-out">
        Select and click a card to flip back
    </div>
</div>

<script type="text/javascript" src="script.js"></script>

</body>
</html>