//Lấy dữ liệu fetch API từ ngân hàng
const api = "https://api.exchangerate-api.com/v4/latest/USD"; 

// Để chọn các điều khiển khác nhau
var search = document.querySelector(".searchBox");  //querySelector() trả về phần tử đầu tiên là phần tử con của phần tử mà nó được gọi ra khớp với nhóm bộ chọn được chỉ định.
var convert = document.querySelector(".convert");
var fromCurrecy = document.querySelector(".from");
var toCurrecy = document.querySelector(".to");
var finalValue = document.querySelector(".finalValue");
var finalAmount = document.getElementById("finalAmount"); // trả về một phần tử có giá trị chỉ định
var resultFrom;
var resultTo;
var searchValue;

// Sự kiện khi tiền tệ được thay đổi
fromCurrecy.addEventListener("change", (event) => { //addEventListener() đính kèm một trình xử lý sự kiện vào một phần tử.
  resultFrom = `${event.target.value}`; //event.target.value để lấy giá trị từ cgi đó
});

// Sự kiện khi tiền tệ được thay đổi
toCurrecy.addEventListener("change", (event) => {
  resultTo = `${event.target.value}`;
});

search.addEventListener("input", updateValue);

// Hàm để cập nhật giá trị
function updateValue(n) {
  searchValue = n.target.value; // ủy quyền sự kiện 
}

// Khi người dùng click, nó sẽ gọi hàm getresults
convert.addEventListener("click", getResults);

// Kết quả hàm (lấy rate)
function getResults() {
  fetch(`${api}`)
    .then((currency) => {
      return currency.json();
    })
    .then(displayResults);
}

// Hiển thị kết quả sau khi chuyển đổi
function displayResults(currency) {
  let fromRate = currency.rates[resultFrom];
  let toRate = currency.rates[resultTo];
  finalValue.innerHTML = ((toRate / fromRate) * searchValue);
  finalAmount.style.display = "block";
}
