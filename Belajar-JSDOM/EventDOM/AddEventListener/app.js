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

/**
 * This function is called when the 'click' event is triggered on the '#eventbtn' element.
 * It logs the message 'Step Satu' to the console.
 */
function stepSatu () {
    // Log the step message to the console
    console.log('Step Satu');
}
function stepSatu () {
    console.log('Step Satu');
}

function stepDua () {
    console.log('Step Dua');
}

// eventbtn.onclick = stepSatu;
// eventbtn.onclick = stepDua;