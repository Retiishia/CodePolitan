const delayedColorChange = (color, delay) => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            document.body.style.backgroundColor = color;
            resolve();
        }, delay);
    });
};

// // Change this line
// delayedColorChange('red', 1000)
//     .then(() => delayedColorChange('orange', 1000))
//     .then(() => delayedColorChange('yellow', 1000))
//     .then(() => delayedColorChange('blue', 1000))
//     .then(() => delayedColorChange('black', 1000))
//     .then(() => delayedColorChange('pink', 1000))
//     .then(() => delayedColorChange('indigo', 1000))
//     .then(() => delayedColorChange('purple', 1000))
//     .then(() => delayedColorChange('cyan', 1000))
//     .then(() => delayedColorChange('orange', 1000))

async function changeColor() {
    await delayedColorChange('red', 1000);
    await delayedColorChange('yellow', 1000);
    await delayedColorChange('blue', 1000);
    await delayedColorChange('cyan', 1000);
    await delayedColorChange('indigo', 1000);
    await delayedColorChange('black', 1000);
    return 'ALL DONE';
}

async function printRainbow() {
    await changeColor();
    console.log('ALL DONE! DARI PRINTRAINBOW BOIS');
}

