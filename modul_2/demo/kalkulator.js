const display = document.getElementById("user-input");
const buttons = document.querySelectorAll(".buttons button");
const specialChars = ["%", "*", "/", "-", "+", "=", "^"];
let output = "";

const calculate = (btnValue) => {
    if (btnValue === "=" && output !== "") {
        if (output.includes("^")) {
            let [base, exponent] = output.split("^");
            output = Math.pow(base, exponent).toString();
        } else if (output.includes ("%")){
            let [num1, num2] = output.split("%");
            output = (parseFloat(num1) % parseFloat(num2)).toString();
        }
    } else if (btnValue === "AC") {
        output = "";
    } else if (btnValue === "DEL") {
        output = output.toString().slice(0, -1);
    } else {
        if (output === "" && specialChars.includes(btnValue)) return;
        output += btnValue;
    }
    
    display.innerText = output || "0";
};

buttons.forEach((button) => {
    button.addEventListener("click", (e) => {
        calculate(e.target.dataset.value);
    });
});
