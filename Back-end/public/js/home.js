

  
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