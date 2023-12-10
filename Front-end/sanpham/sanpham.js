const myIcons = document.querySelectorAll('.icon-heart');

for (let i = 0; i < myIcons.length; i++) {
    myIcons[i].addEventListener('click', () => {
        if (myIcons[i].style.background === 'white') {
            myIcons[i].style.color = 'white';
            myIcons[i].style.background = 'red';
        } else {
            myIcons[i].style.color = 'black';
            myIcons[i].style.background = 'white';
        }
    })
}

// cart
const buttons = document.querySelectorAll('i.bx-cart');

buttons.forEach(function (button, index) {
    button.addEventListener('click', (event) => {
        var btnTarget = event.target;
        var product = btnTarget.parentElement;
        var productImg = product.querySelector('.IMG').src;
        // console.log(productImg)
        var productName = product.querySelector('.NAME').innerText;
        var productPrice = product.querySelector('.PRICE').innerText;
        addCart(productImg, productName, productPrice);
    })
})

function addCart(productImg, productName, productPrice) {
    var addtr = document.createElement('tr');
    var trContent = '<tr><td style="width: 100%;"><img src="' + productImg + '" alt="" class="image"><p class="info"><span class="name">' + productName + '</span><span style="color: rgba(0,0,0,0.5);"><br>Tình trạng: Còn hàng<br>Mã SP: No.010<br>Hãng: Honda<br></span></p></td><td class="text-center"><span class="price">' + productPrice + '</span>₫</td><td><div class="cong-tru-btn"><button class="tru">-</button><span class="num">1</span><button class="cong">+</button></div></td><td class="text-center"><span class="price_2">' + productPrice + '</span>₫</td><td class="text-center"><button class="del">Xóa</button></td></tr>'
    addtr.innerHTML = trContent;
    var cartTable = document.querySelector('tbody');
    cartTable.append(addtr);

    cartTotal();
}
//Cart total
function cartTotal() {
    var cartItem = document.querySelectorAll('tbody tr');
    // console.log(cartItem.length)
    var totalC = 0;
    for (var i = 0; i < cartItem.length; i++) {
        var inputValue = parseFloat(cartItem[i].querySelector('span.num').innerHTML)
        // console.log(inputValue)
        var productPrice = parseFloat(cartItem[i].querySelector('span.price').innerHTML)
        // console.log(productPrice)

        totalA = inputValue*productPrice*1000000
        // console.log(totalA)

        totalC += totalA
        totalD = totalC.toLocaleString('de-DE')
        // console.log(totalD)

    }
    var cartTotalA = document.querySelector('span.total')
    cartTotalA.innerHTML = totalD
    // console.log(cartTotalA)
}   