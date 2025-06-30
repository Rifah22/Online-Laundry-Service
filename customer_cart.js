
//add to cart function
function addToCart(e, user, item) {
    var qty = e.parentNode.parentNode.childNodes[5].childNodes[0].value;
    item = item.split(':')[0] + ":"+ item.split(':')[1] * qty;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        alert('Order Placed!');
        getCart();
    }
    };

    xhttp.open("GET", `../control/insert_orders.php?user=${user}&item=${item}&qty=${qty}`, true);
    xhttp.send();
}

//ajax call to get cart items
function checkout() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        alert('Ordered!');
        getCart();
    }
};


var urlParams = new URLSearchParams(window.location.search);
var pn = urlParams.get('Phone_Number')
var le = urlParams.get('laundry_email')
var lt = urlParams.get('laundry_title')

xhttp.open("GET", `../control/checkout.php?Phone_Number=${pn}&laundry_email=${le}&laundry_title=${lt}`, true);
xhttp.send("fullname=");
}



function getCookie(name) {
const value = `; ${document.cookie}`;
const parts = value.split(`; ${name}=`);
if (parts.length === 2) return parts.pop().split(';').shift();
}

getCart();
function getCart() {
    document.getElementById("cartbox").innerHTML = "";
        let cart  = JSON.parse(decodeURIComponent(getCookie('cart')));
        for (let i = 0; i < cart.length; i++) {
            let node = document.createElement("h4");
            node.innerHTML = cart[i].name + " " + cart[i].qty;
            document.getElementById("cartbox").appendChild(node);
        }
}