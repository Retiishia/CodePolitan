const button = document.querySelector('#clickme');

button.onclick = function () {
    console.log('You clicked me');
};

const scream = () => {
    console.log('DONT TOUCH ME!!');
}

button.onmouseover = scream;

const eventbtn = document.querySelector('#eventbtn');
eventbtn.addEventListener('click', stepSatu);
eventbtn.addEventListener('click', stepDua);

function stepSatu () {
    console.log('Step Satu');
}

function stepDua () {
    console.log('Step Dua');
}

// eventbtn.onclick = stepSatu;
// eventbtn.onclick = stepDua;