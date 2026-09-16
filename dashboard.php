<?php
  session_start();
  if(!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

  <link rel="stylesheet" href="./css/chatbot.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
      body {
  font-family: Arial, sans-serif;
  background: white;
}

/* Chat Icon Button */
.chat-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: var(--primaryColor);
  color: white;
  border: none;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  font-size: 26px;
  cursor: pointer;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  transition: transform 0.2s;
}

.chat-btn:hover {
  transform: scale(1.1);
}

/* Chat Box */
.chat-box {
  position: fixed;
  bottom: 90px;
  right: 20px;
  width: 360px;
  max-height: 500px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
  display: none;
  flex-direction: column;
  overflow: hidden;
  z-index: 7;

}

.chat-header {
  background: #0f9d58;
  color: white;
  padding: 12px 15px;
  font-weight: bold;
  font-size: 16px;
}

#chatboxContent {
  flex: 1;
  padding: 12px;
  overflow-y: auto;
  font-size: 14px;
  background: #f9f9f9;
}

.chat-input {
  display: flex;
  border-top: 1px solid #ddd;
  background: #fff;
}

.chat-input input {
  flex: 1;
  padding: 10px;
  border: none;
  outline: none;
  font-size: 14px;
}

.chat-input button {
  padding: 10px 15px;
  border: none;
  background: #0f9d58;
  color: white;
  cursor: pointer;
  transition: background 0.2s;
}

.chat-input button:hover {
  background: #0c7a42;
}

.user,
.bot {
  display: inline-block;
  padding: 10px 15px;
  margin: 5px 0;
  border-radius: 10px;
  max-width: 80%;
  word-wrap: break-word;
}

.user {
  background: #1a73e8;
  color: white;
  align-self: flex-end;
  display: block;
  margin-top: 30px;
}

.bot {
  background: #e0ffe0;
  color: #006400;
  align-self: flex-start;
}

#chatboxContent::-webkit-scrollbar {
  width: 6px;
}

#chatboxContent::-webkit-scrollbar-thumb {
  background: rgba(0, 0, 0, 0.2);
  border-radius: 3px;
}

#chatboxContent::-webkit-scrollbar-track {
  background: transparent;
}



.chatbotimg {
  width: 40px;
  height: auto;
  animation: zoomInOut 2s infinite ease-in-out;
}

@keyframes zoomInOut {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(1.4);
    /* kati thulo banaune */
  }

  100% {
    transform: scale(1);
  }
}

@media only screen and (min-width:200px) and (max-width:575px) {
  .chat-box {
    right: 0;
    width: 100%;
    margin: auto;

  }

  #chatboxContent {
    padding: 15px;
  }

  .chat-box {
    bottom: 48px;
  }

    .chat-btn {
      bottom: -6px;
      right: -7px;
      box-shadow: none;
    }

  }
      
      
      
      
      
    header {
      background: #2e239f;
      color: white;
      padding: 0px;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 2;
    }

    main {
      margin-top: 100px;

    }

    header a {
      color: white;
      text-decoration: none;

    }

    header a:hover {
      color: rgb(255, 255, 255);
    }

    .dashBox {

      border-radius: 0.75rem;
      border: none;
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 1.3rem;
      font-weight: 550;

    }

    .dashBox:hover {
      color: rgb(17, 13, 60);
      transform: scale(1.08) translateY(-5px);


    }

    @media only screen and (min-width:200px) and (max-width:575px) {
      .logo {
        width: 5rem !important;
      }

      .searchForm {
        display: flex;
        width: 100%;
      }
    }

    @media only screen and (min-width:575px) and (max-width:768px) {

      .logo {
        width: 5rem !important;
      }

      .searchForm {
        display: flex;
        justify-content: flex-end;
        width: 100%;
      }

      .creator {
        font-size: 8px;
        color: gray;
        margin: 0px;
      }
    }
  </style>
</head>

<body>
  <header class="container-fluid shadow p-0">
    <div class="container">
      <div class="row">
        <div class="col-2 ">
          <img src="logo.png" alt="logo" class="w-50 logo ">
        </div>
        <div class="col-8 col-md-7  text-center d-flex align-items-center justify-content-center">
          <h1 class="text-center m-0">Blog Website</h1>
        </div>
        <div class="col-md-3 d-flex align-items-center justify-content-end ">
          <nav class="text-end  d-flex gap-lg-5 gap-3 pe-2">
            <a href="index.php">Home</a>
            <a href="logout.php ">Logout</a>
          </nav>
        </div>
      </div>

    </div>


  </header>





  <main class="container">
    <div class="row">
      <div class="col-12 p-5">
        <h1>Welcome
          <?php echo $_SESSION['user_name']; ?>
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex gap-3 gap-lg-5 ">
        <a href="create_post.php" class="p-5 shadow dashBox">Create Now</a>
        <a href="my_posts.php" class="p-5 shadow dashBox">My Posts</a>
      </div>

    </div>
  </main>



  <!-- for chatbot -->
  <button class="chat-btn" onclick="toggleChat()">
    <i class="fa-solid fa-comment chatbotimg text-success"></i>
  </button>
  <div class="chat-box" id="chatBox">
    <div class="chat-header">Smart Chatbot </div>
    <div id="chatboxContent">
      <div class="bot">Hello, How can I help you?</div>
    </div>
    <div class="chat-input">
      <input type="text" id="userInput" placeholder="Type your message..." />
      <button onclick="sendMessage()">Send</button>
    </div>
  </div>

  <footer class="mt-5">
    <div class="row p-4 text-white m-0">
      <div class="col-12 text-center">
        &copy; Quantum-Gen. All Rights Reserved.

      </div>
    </div>
  </footer>


  <script>
    
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
  { keyword: "bye", reply: "Have a great day" },








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





</script>
</body>

</html>