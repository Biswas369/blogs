
// Toggle Chat Box
function toggleChat() {
  let box = document.getElementById("chatBox");
  box.style.display = box.style.display === "flex" ? "none" : "flex";


  var text = document.getElementById("chatText");
  if (text.style.display === "none") {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

// Smart keyword responses
const responses = [



  { keyword: "create account", reply: "click on sign up <br> Enter Name, Email, Password <br> Click btn " },
  { keyword: "forgot password", reply: "Click on 'Forgot Password' <br> Enter your email Or Phone nbr. <br> Enter OTP <br> Enter 'Forgot Password '  " },

  { keyword: "email", keyword: "email change", reply: "You can chage your email." },




  { keyword: "place an order", reply: "1. search product <br> 2. Click 'Add to card' <br> 3. Go to Checkout" },
  { keyword: "order kasari garne", reply: "1. search product <br> 2. Click 'Add to card' <br> 3. Go to Checkout" },

  { keyword: "order cancel", reply: "If the item is not shipped yet, You can cancel order." },
  { keyword: "cancel order", reply: "If the item is not shipped yet, You can cancel order." },
  { keyword: "get my refund", reply: "Refund will be processed within 3-7 working days after approval." },
  { keyword: "refund", reply: "Refund will be processed within 3-7 working days after approval." },

  { keyword: "order track", reply: "Go To 'my-order' and click on the tracking section" },
  { keyword: "track order", reply: "Go To 'my-order' and click on the tracking section" },
  { keyword: "order get ", reply: "Go To 'my-order' and click on the tracking section" },
  { keyword: "get order", reply: "Go To 'my-order' and click on the tracking section" },



  { keyword: "delivery time", reply: "2-3 days inside kathmandu , 3-5 days outside valley." },
  { keyword: "delivery day", reply: "2-3 days inside kathmandu , 3-5 days outside valley." },


  { keyword: "payment method", reply: "- Cash on Delivery <br> - eSewa <br> - Khalti <br> - Debit/Credit Card" },


  { keyword: "prome code", reply: "Enter the prome code during checkout before payment." },
  { keyword: "special offer", reply: "During festivals like dashin, Tihar, and New Year." },
  { keyword: "offer", reply: "During festivals like dashin, Tihar, and New Year." },


  { keyword: "hi", reply: "Hi, How can I help you today?" },
  { keyword: "thank you", reply: "You are welcome." },
  { keyword: "bye", reply: "Have a great day . i love you" },








  { keyword: "time", reply: `The current time is ${new Date().toLocaleTimeString()}` },
  { keyword: "date", reply: `Today is ${new Date().toLocaleDateString()}` }
];



















// Send Message
function sendMessage() {
  let inputField = document.getElementById("userInput");
  let input = inputField.value.trim();
  let chatbox = document.getElementById("chatboxContent");

  if (input === "") return;

  // Show user message
  chatbox.innerHTML += `<div class="user"><b>You:</b><div> ${input} <div></div>`;

  // Get smart reply
  let reply = getSmartReply(input);

  setTimeout(() => {
    chatbox.innerHTML += `<div class="bot"><b>Bot:</b> <div> ${reply}</div></div>`;
    chatbox.scrollTop = chatbox.scrollHeight;
  }, 300);

  inputField.value = "";
}

// Longest keyword match logic
function getSmartReply(input) {
  input = input.toLowerCase();
  let matchedReply = null;
  let longestLength = 0;

  responses.forEach(item => {
    if (input.includes(item.keyword)) {
      if (item.keyword.length > longestLength) {
        longestLength = item.keyword.length;
        matchedReply = item.reply;
      }
    }
  });

  return matchedReply || "Sorry, I don't understand. Can you rephrase?";
}

// Enter key support
document.getElementById("userInput").addEventListener("keypress", function (e) {
  if (e.key === "Enter") sendMessage();
});





