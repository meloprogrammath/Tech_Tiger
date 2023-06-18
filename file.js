const buttons = document.querySelectorAll('.btn');

buttons.forEach(function(button) {
  button.addEventListener('click', function() {
    button.classList.toggle('clicked');
  });
});