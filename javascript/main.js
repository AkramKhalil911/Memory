const cards = document.querySelectorAll('.card');
cards.forEach(card => card.addEventListener('click', flipCard));

var count = 0;
var score = 0;
let flippedCard = false;
let firstcard, secondcard;
let locked = false;
var displayCount = document.getElementById("displayCount");

function flipCard(){
    if (locked) return;
    if (this === firstcard) return;

    this.classList.add('flip');

    if (!flippedCard) {
        flippedCard = true;
        firstcard = this;
        return;
    } 
    
    {
        flippedCard = false;
        secondcard = this;    
        matchCard();
        count += 1;
        displayCount.innerHTML = count;
    }
}

// start game 

function startGame() {
    var disable = document.getElementsByClassName('card');
    for (var i=0; i < disable.length; i++) {
        console.log('test');
        disable[i].addEventListener('click', flipCard);
        shuffle();
    }
    setTimer();
    document.getElementById("start").disabled = true;
}

// end game

function disableGame() {
    var disable = document.getElementsByClassName('card');
    for (var i=0; i < disable.length; i++) {
        console.log('test');
        disable[i].removeEventListener('click', flipCard);
    }
    document.getElementById("start").disabled = false;
}

disableGame();

// match cards
var MatchCount = 0;

function matchCard() {
    let Matched = firstcard.dataset.cardinfo === secondcard.dataset.cardinfo;
    if (Matched) {
        MatchCount++
        setInterval(checkWin, 1000);
    };
    Matched ? disableCards() : unflipCards();
    console.log(MatchCount);
}



// disable cards

function disableCards() {
    firstcard.removeEventListener('click', flipCard);
    secondcard.removeEventListener('click', flipCard);
    score += 150;
    box6.innerHTML = score;
}

// unflip cards

function unflipCards() {
    locked = true;
    setTimeout(() => {
        firstcard.classList.remove('flip');
        secondcard.classList.remove('flip');
        locked = false;
    }, 800);
}

//shuffle

function shuffle(){
    cards.forEach(card => {
    var position = Math.floor(Math.random() * 16);
    card.style.order = position;})
}

shuffle();

//reset

function reset() {
    count = 0;    
    minutes = 0;
    seconds = 0;
    score = 0;
    MatchCount = 0;
    clearInterval(interval);
    timer.innerHTML = minutes + " minuten " + seconds + " seconden";
    displayCount.innerHTML = count;
    box6.innerHTML = score;
    var reset = document.getElementsByClassName('card');
    for (var i=0; i < reset.length; i++){
        reset[i].classList.remove('flip')
    }
    disableGame();
    closePopup();
}

//timer 

var seconds = 0, minutes = 0; hour = 0;
var timer = document.querySelector(".timer");
var interval;

function setTimer(){
    interval = setInterval(function(){
        timer.innerHTML = minutes + " minuten " + seconds + " seconden";
        seconds++;
        if (seconds == 60){
            minutes++;
            seconds=0;
        } if (minutes == 60){
            hour++;
            minutes=0;
        }
    }, 1000);
}

// win

var maxMatches = 8;

function checkWin(){
    if (MatchCount === maxMatches){
        clearInterval(interval);
        finalTime = timer.innerHTML;
        finalScore = box6.innerHTML;
        finalCount = displayCount.innerHTML;

        document.getElementById("endTime").value = finalTime;
        document.getElementById("endScore").value = finalScore;
        document.getElementById("endCount").value = finalCount;

        openPopup();
    }
}

// popup window if win

function openPopup(){
    popup.classList.add('active')
    popupBG.classList.add('active')
}

function closePopup(){
    popup.classList.remove('active')
    popupBG.classList.remove('active')
}