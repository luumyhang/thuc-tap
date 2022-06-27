const api = "https://api.exchangerate-api.com/v4/latest/USD";

const currencyApi = [];
fetch(`${api}`)
    .then((currency) => {
        return currency.json();
    })
    .then(displayResults);

function displayResults(currency) {
    currencyApi[0] = currency.rates['VND']
    currencyApi[1] = currency.rates['USD']
    currencyApi[2] = currency.rates['JPY']
}

document.querySelector(".convert").addEventListener("click", function() {
    var price = document.querySelector(".searchBox").value;
    var from = document.querySelector(".from").value;
    var to = document.querySelector(".to").value;
    total = (currencyApi[to] / currencyApi[from]) * price
    document.getElementById("finalAmount")
    document.querySelector(".finalValue").innerHTML = total;
    document.getElementById("finalAmount").style.display = "block";
});











