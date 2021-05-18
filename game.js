var pointsArray = [];
var sum = 0;

function addPoints(id) {
    var button = document.getElementById(id);
    pointsArray.push(parseInt(button.dataset.points));
    console.log(pointsArray);
}

function sumPoints() {
    for (var i = 0; i < pointsArray.length; i++) {
        sum += pointsArray[i];
    }

    var pointsDisplay = document.createElement("h2");
    var text = document.createTextNode("Totali i pikëve: " + sum + " pikë.");
    pointsDisplay.appendChild(text);
    var position = document.getElementById("displayPoints");
    position.appendChild(pointsDisplay);

    document.getElementById("endButton").disabled = true;
}


function disableButtons(question) {
    var buttons = document.querySelectorAll(`button[id^=${question}]`);
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].disabled = true;
    }
}


console.log(document.querySelectorAll('button[id^="first"]'));

console.log(sum);

document.addEventListener('submit', function(event) {
    event.preventDefault();
});


const init = function(){
	document.getElementById('button-cancel').addEventListener('click', reset);
}
const reset = function(){
	ec.preventDefault();
	document.getElementById('form-user').reset();
}
document.addEventListener('DOMContentLoaded', init);
