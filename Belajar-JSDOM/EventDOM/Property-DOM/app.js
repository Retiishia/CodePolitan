const button = document.querySelector('#clickme');
const button2 = document.querySelector('#clickme2');

button2.onclick = function () {
    alert('kamu sudah klik saya ea');
}

const scream2 = () => {
    console.log('DONT TOUCH ME!!');
}

button.onclick = function () {
    console.log('You clicked me');
};

const scream = () => {
    console.log('DONT TOUCH ME AGAIN!!');
}

button.onmouseover = scream;
button2.onmouseover = scream2;