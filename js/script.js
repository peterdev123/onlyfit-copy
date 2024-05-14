function showMessage(message) {
    var inputErrorElement = document.getElementById('inputError');
    inputErrorElement.textContent = message;
    document.getElementById('inputError').style.backgroundColor = '#FF7F7F';
}

function showPopupMessage(message) {
    var popup = document.createElement('div');

    popup.style.position = 'fixed';
    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.backgroundColor = '#031620';
    popup.style.padding = '20px';
    popup.style.border = '2px solid #000000';
    popup.style.borderRadius = '5px';
    popup.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.5)';
    popup.style.zIndex = '9999';
    popup.style.color = '#ffa500';
    popup.style.textAlign = 'center';

    popup.innerHTML = '<p style="font-size: 25px; color:#ffa500;">' + message + '</p>';
    popup.innerHTML += '<a id="redirectButton" href="index.php" style="font-size: 20px; text-decoration: none; margin-top: 10px; color:#ffa500;">Back to main website</a>';

    document.body.appendChild(popup);
}

function showPopupMessage1(message) {
    var popup = document.createElement('div');

    popup.style.position = 'fixed';
    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.backgroundColor = '#031620';
    popup.style.padding = '20px';
    popup.style.border = '2px solid #000000';
    popup.style.borderRadius = '5px';
    popup.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.5)';
    popup.style.zIndex = '9999';
    popup.style.color = '#ffa500';
    popup.style.textAlign = 'center';

    popup.innerHTML = '<p style="font-size: 25px; color:#ffa500;">' + message + '</p>';
    popup.innerHTML += '<a id="redirectButton" href="login.php#LogCard" style="font-size: 20px; text-decoration: none; margin-top: 10px; color: #ffa500;">Log in now.</a>';

    document.body.appendChild(popup);
}

function showPopupMessage2(message) {
    var popup = document.createElement('div');

    popup.style.position = 'fixed';
    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.backgroundColor = '#031620';
    popup.style.padding = '20px';
    popup.style.border = '2px solid #000000';
    popup.style.borderRadius = '5px';
    popup.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.5)';
    popup.style.zIndex = '9999';
    popup.style.color = '#ffa500';
    popup.style.textAlign = 'center';

    popup.innerHTML = '<p style="font-size: 25px; color:#ffa500;">' + message + '</p>';
    popup.innerHTML += '<a id="redirectButton" href="index.php" style="font-size: 25px; text-decoration: none; margin-top: 10px; color: #ffa500;">Home</a>';

    document.body.appendChild(popup);
}

function showConfirmation() {
    document.getElementById("submitButtonRow").style.display = "none";
    document.getElementById("confirmationSection").style.display = "table-row";
}

function hideConfirmation() {
    document.getElementById("submitButtonRow").style.display = "table-row";
    document.getElementById("confirmationSection").style.display = "none";
}