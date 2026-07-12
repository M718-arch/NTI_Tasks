let username = document.querySelector("#username");
let password = document.querySelector("#password");
let message = document.querySelector("#message");

password.addEventListener("input", function () {

    let value = password.value;

    if (value.length < 10) {
        message.innerHTML = "Password must be at least 10 characters.";
        message.style.color = "red";
    }
    else if (!/[%*+=_]/.test(value)) {
        message.innerHTML = "Password must contain one symbol (% * + = _).";
        message.style.color = "red";
    }
    else {
        message.innerHTML = "Password is valid.";
        message.style.color = "green";
    }

});

let timer;

function changeBackground() {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white";
}

function resetTimer() {
    clearTimeout(timer);
    document.body.style.backgroundColor = "#f2f2f2";
    document.body.style.color = "black";
    timer = setTimeout(changeBackground, 10000);
}

document.addEventListener("mousemove", resetTimer);
document.addEventListener("keydown", resetTimer);
document.addEventListener("click", resetTimer);
document.addEventListener("input", resetTimer);

resetTimer();