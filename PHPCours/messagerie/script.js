const messages = document.getElementById("messages");

function loadMessages() {
  fetch("/loadMessages.php")
    .then(function (response) {
      return response.text();
    })
    .then(function (body) {
      messages.innerHTML = body;
    });
}
setInterval(loadMessages, 500);
// loadMessages();

// function loadMessages() {
//   //   messages.load("loadMessages.php");
//   var request = new XMLHttpRequest();
//   request.open("GET", "/loadMessages.php", true);
//   request.onload = function () {
//     if (request.status >= 200 && request.status < 400) {
//       var resp = request.responseText;
//       messages.innerHTML = resp;
//     }
//   };
//   request.send();
// }
