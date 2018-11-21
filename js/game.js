document.addEventListener("DOMContentLoaded", function (event) {
    //variables
    var count = 0;
    var onoff = false;
    var strictPlay = '';
    var userTurn = false;
    var userArr = [];
    var simonArr = [];
    var strict = false;
    var match;

    //Reset Button Pushed
    document.getElementById('reset-btn').addEventListener('click', function () {
        alert('Restarting game...');
        gameover();
    });
    //Power Button Pushed
    document.getElementById('pwr-btn').addEventListener('click', function () {
        //Turn on game
        if (!onoff) {
            do {
                strictPlay = prompt('Would you like to play in strict mode?(y/n)');
                strictPlay = strictPlay.toLowerCase();
            } while (strictPlay !== 'y' && strictPlay !== 'n');

            //Strict UI Update
            if (strictPlay === 'y') {
                document.getElementById('strict-indicator').innerHTML = 'Strict Mode On';
                strict = true;
            }
            this.classList.add('btn--active'); //Makes button pushed
            onoff = true; // Allows user to click on buttons
            gamePlay(); //Start game play 
        }
        //Turn off game
        else {
            alert('Turning off game.');
            gameover();
        }
    });
    //Main button listener
    document.getElementById('btn-group').addEventListener('click', function (e) {
        if (onoff && userTurn) { //Regular game play
            if (e.target.getAttribute('id').indexOf('blue') === 5) {
                document.getElementById('blueSound').play();
                userArr.push(0);
            } else if (e.target.getAttribute('id').indexOf('green') === 5) {
                document.getElementById('greenSound').play();
                userArr.push(1);
            } else if (e.target.getAttribute('id').indexOf('red') === 5) {
                document.getElementById('redSound').play();
                userArr.push(2);
            } else if (e.target.getAttribute('id').indexOf('yellow') === 5) {
                document.getElementById('yellowSound').play();
                userArr.push(3);
            } else if (e.target.getAttribute('id').indexOf('purple') === 5) {
				document.getElementById('purpleSound').play();
				userArr.push(4);
			} else if (e.target.getAttribute('id').indexOf('pink') === 5) {
				document.getElementById('pinkSound').play();
				userArr.push(5);
			}
        }

        if (onoff && userArr.length === simonArr.length) {
            match = checkPlayerPattern(userArr);

            //both array patterns match (player entered correct pattern)
            if (match) {
                count += 1;
                setTimeout(gamePlay, 1500);
                // gamePlay();
            } else {
                if (strict) {
                    alert('Wrong. During "strict" play you are not allowed to miss more than 1. Start over.');
                    gameover();
                } else {
                    alert('Try again!');
                    setTimeout(playPattern(simonArr), 2000);
                    userArr = [];
                    userTurn = true;
                }index.html#songs
            }
        }
        if (count === 20) { // End of game play 
            //Execute when the user reaches the end of the pattern.
            alert("You've Reached the end! Congrats you beat the game!");
            gameover();
        }

        if (!onoff) {
            alert('You must first push on/off!');
        }
    });
    //Compare | Check for winner
    function checkPlayerPattern(usrArr) {
        var matchCount = 0;
        usrArr.forEach(function (curr, i, arr) {
            if (simonArr[i] === curr) {
                matchCount += 1;
            }
        });
        if (matchCount === usrArr.length)
            return true;
        else
            return false;
    };
    //Gameover | Clear all variables
    function gameover() {
        onoff = false;
        count = 0;
        strict = false;
        userTurn = false;
        simonArr = [];
        userArr = [];
        document.getElementById('counter').innerHTML = '';
        document.getElementById('strict-indicator').innerHTML = '';
        document.getElementById('pwr-btn').classList.remove('btn--active');
    }
    //Plays sequence depending on the array values
    function playPattern(arr) {
        document.getElementById('counter').innerHTML = arr.length;
        var patternIDs = {
            0: 'blue',
            1: 'green',
            2: 'red',
            3: 'yellow',
            4: 'purple',
            5: 'pink'
        }
        arr.forEach(function (val, x) {
            var myTimer = setTimeout(playAudio, 1000 * x, patternIDs[val], x, arr);
            if (x === arr.length) {
                clearTimeout(myTimer);
            }
        });
    };
    //Play audio
    function playAudio(id, x, arr) {
        document.getElementById('idBtn' + id).classList.add('btn--' + id + '__highlight');
        document.getElementById(id + 'Sound').play();
        if (arr.length !== x)
            var otherTimer = setTimeout(removeHighlight, 500, id);
        else
            clearTimeout(otherTimer);
    };
    //Remove Highlight
    function removeHighlight(id) {
        document.getElementById('idBtn' + id).classList.toggle('btn--' + id + '__highlight');
    };
    //main gameplay
    function gamePlay() {
        userTurn = false;
        userArr = [];
        if (strict) {
            simonArr.push(Math.floor(Math.random() * 6) + 0); //Generates number between 0 - 3
            playPattern(simonArr);
            userTurn = true;
        } else {
            simonArr.push(Math.floor(Math.random() * 6) + 0); //Generates number between 0 - 3	
            playPattern(simonArr);
            userTurn = true;
        }
    };
});