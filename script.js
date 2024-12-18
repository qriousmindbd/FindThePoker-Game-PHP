// Poker Card Flip Animation
const cards = document.querySelectorAll('.card');
cards.forEach(card => {
  card.addEventListener('click', function() {
    this.classList.toggle('flipped');
  });
});

// Navigation Panel
function toggleNavigation() {
    var navigation = document.getElementById("navigation");
    navigation.classList.toggle("show");
}

// Random Card Generator and Joker tracking
document.addEventListener("DOMContentLoaded", function() {
  // Array containing all the card filenames
  var cardImages = [
      "club_A.png", "club_2.png", "club_3.png", "club_4.png", "club_5.png",
      "club_6.png", "club_7.png", "club_8.png", "club_9.png", "club_10.png", "club_Q.png", "club_K.png",
      "diamond_A.png", "diamond_2.png", "diamond_3.png", "diamond_4.png", "diamond_5.png",
      "diamond_6.png", "diamond_7.png", "diamond_8.png", "diamond_9.png", "diamond_10.png", "diamond_Q.png", "diamond_K.png",
      "heart_A.png", "heart_2.png", "heart_3.png", "heart_4.png", "heart_5.png",
      "heart_6.png", "heart_7.png", "heart_8.png", "heart_9.png", "heart_10.png", "heart_Q.png", "heart_K.png",
      "spade_A.png", "spade_2.png", "spade_3.png", "spade_4.png", "spade_5.png",
      "spade_6.png", "spade_7.png", "spade_8.png", "spade_9.png", "spade_10.png", "spade_Q.png", "spade_K.png"
  ];

  // Select three random cards
  var selectedCards = [];
  for (var i = 0; i < 3; i++) {
      var randomIndex = Math.floor(Math.random() * cardImages.length);
      selectedCards.push(cardImages[randomIndex]);
      cardImages.splice(randomIndex, 1);
  }

  // Add the joker card to the array
  selectedCards.push("joker.jpg");

  // Shuffle the array to randomize the position of the joker card
  for (var i = selectedCards.length - 1; i > 0; i--) {
      var j = Math.floor(Math.random() * (i + 1));
      var temp = selectedCards[i];
      selectedCards[i] = selectedCards[j];
      selectedCards[j] = temp;
  }

  // Replace the card images on the webpage
  var cards = document.querySelectorAll(".card");
  cards.forEach(function(card, index) {
      var cardFront = card.querySelector(".card-back img");
      cardFront.src = "cards/" + selectedCards[index];
      // Add an ID to the joker card for tracking
      if (selectedCards[index] === "joker.jpg") {
          cardFront.id = "joker";
      }
  });
    
  // Track when the joker card is clicked
  var jokerCard = document.querySelector("#joker");
  jokerCard.addEventListener("click", function() {
      console.log("Joker clicked!");
  });
});