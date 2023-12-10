// Sự kiện đánh giá sao
const s1 = document.getElementById('s1');
const s2 = document.getElementById('s2');
const s3 = document.getElementById('s3');
const s4 = document.getElementById('s4');
const s5 = document.getElementById('s5');

function danhGia_s1() {
    s1.style.color = '#fc2222';
    s2.style.color = 'rgba(0, 0, 0, .2)';
    s3.style.color = 'rgba(0, 0, 0, .2)';
    s4.style.color = 'rgba(0, 0, 0, .2)';
    s5.style.color = 'rgba(0, 0, 0, .2)';
}
function danhGia_s2() {
    s2.style.color = '#fc2222';
    s1.style.color = 'rgba(0, 0, 0, .2)';
    s3.style.color = 'rgba(0, 0, 0, .2)';
    s4.style.color = 'rgba(0, 0, 0, .2)';
    s5.style.color = 'rgba(0, 0, 0, .2)';

}
function danhGia_s3() {
    s3.style.color = '#fc2222';
    s2.style.color = 'rgba(0, 0, 0, .2)';
    s1.style.color = 'rgba(0, 0, 0, .2)';
    s4.style.color = 'rgba(0, 0, 0, .2)';
    s5.style.color = 'rgba(0, 0, 0, .2)';

}
function danhGia_s4() {
    s4.style.color = '#fc2222';
    s2.style.color = 'rgba(0, 0, 0, .2)';
    s3.style.color = 'rgba(0, 0, 0, .2)';
    s1.style.color = 'rgba(0, 0, 0, .2)';
    s5.style.color = 'rgba(0, 0, 0, .2)';

}

function danhGia_s5() {
    s5.style.color = '#fc2222';
    s2.style.color = 'rgba(0, 0, 0, .2)';
    s3.style.color = 'rgba(0, 0, 0, .2)';
    s4.style.color = 'rgba(0, 0, 0, .2)';
    s1.style.color = 'rgba(0, 0, 0, .2)';

}

// sự kiện tăng giảm số lượng
const plusButtons = document.querySelectorAll('button.cong');
const minusButtons = document.querySelectorAll('button.tru');
const numberSpans = document.querySelectorAll('span.num');

plusButtons.forEach(function(plusButton,index) {
    const minusButton = minusButtons[index];
    const numberSpan = numberSpans[index];
    let number = 1;
    // console.log(numberSpan)

    plusButton.addEventListener('click',()=> {
        number++;
        numberSpan.textContent = number;
    });

    minusButton.addEventListener('click',()=> {
        number--;
        numberSpan.textContent = number;
    });
    
})


// trái tim
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

