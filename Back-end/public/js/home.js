function displaySo() {
    document.getElementById('xe_1').style.display = "block";
    document.getElementById('xe_2').style.display = "none";
    document.getElementById('xe_3').style.display = "none";
    document.getElementById('1').style.backgroundColor = "rgb(252, 175, 11)";
    document.getElementById('2').style.backgroundColor = "#fff";
    document.getElementById('3').style.backgroundColor = "#fff";

}

function displayGa() {
    document.getElementById('xe_2').style.display = "block";
    document.getElementById('xe_1').style.display = "none";
    document.getElementById('xe_3').style.display = "none";
    document.getElementById('2').style.backgroundColor = "rgb(252, 175, 11)";
    document.getElementById('1').style.backgroundColor = "#fff";
    document.getElementById('3').style.backgroundColor = "#fff";
}

function displayCon() {
    document.getElementById('xe_3').style.display = "block";
    document.getElementById('xe_1').style.display = "none";
    document.getElementById('xe_2').style.display = "none";
    document.getElementById('3').style.backgroundColor = "rgb(252, 175, 11)";
    document.getElementById('2').style.backgroundColor = "#fff";
    document.getElementById('1').style.backgroundColor = "#fff";
}

//trais tim
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