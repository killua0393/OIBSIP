
function addToDisplay(value) {
    document.getElementById("display").value += value;
}

function calculate() {
    var expression = document.getElementById("display").value;
    var result = eval(expression);
    document.getElementById("display").value = result;
}

function clearDisplay() {
    document.getElementById("display").value = '';
}
function backspace() {
    var display = document.getElementById("display");
    var currentValue = display.value;
    display.value = currentValue.substring(0, currentValue.length - 1);
}