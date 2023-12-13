// Lắng nghe sự kiện click trên các thẻ a
document.querySelectorAll('.button-xeSo, .button-xeGa, .button-xetayCon, .button-xetayDien').forEach(function(element) {
    element.addEventListener('click', function() {
      // Lấy ID của thẻ a được click
      var clickedId = this.id;
  
      // Lặp qua tất cả các thẻ a và thay đổi màu sắc tương ứng
      document.querySelectorAll('.button-xeSo, .button-xeGa, .button-xetayCon, .button-xetayDien').forEach(function(aElement) {
        if (aElement.id === clickedId) {
          aElement.style.backgroundColor = 'rgb(252, 175, 11)';
        } else {
          aElement.style.backgroundColor = '#fff';
        }
      });
  
      // Lặp qua tất cả các phần tử xe và hiển thị/ẩn tương ứng
      document.querySelectorAll('.xeSo, .xeGa, .xetayCon, .xetayDien').forEach(function(xeElement) {
        if (xeElement.id === 'xe_' + clickedId) {
          xeElement.style.display = 'block';
        } else {
          xeElement.style.display = 'none';
        }
      });
    });
  });

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