const form = document.querySelector('#form');
form.addEventListener('submit', function (e) {
    e.preventDefault();
    console.log('Form Submitted');
})

document.querySelector('a').addEventListener('click',(e) => {
    e.preventDefault();
    console.log('Link to Google');
})