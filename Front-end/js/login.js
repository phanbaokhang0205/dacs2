// input-field
const inputFields = document.querySelectorAll('.input-field');

inputFields.forEach((input) => {
  input.addEventListener('focus', function() {
    this.classList.add('focus');
  });

  input.addEventListener('blur', function() {
    this.classList.remove('focus');
  });
});

//checkboxLabel
const checkbox = document.getElementById('rememberMeCheckbox');
const label = document.querySelector('.checkboxLabel');

checkbox.addEventListener('change', function() {
    if (this.checked) {
      label.classList.add('checked');
    } else {
      label.classList.remove('checked');
    }
  });