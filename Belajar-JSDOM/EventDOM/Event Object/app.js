document.querySelector('button').addEventListener('click', (e) => {
    console.log(e);
})

const input = document.querySelector('input');

input.addEventListener('keydown', (e) => {
    switch (e.code) {
        case 'ArrowUp':
            console.log('Tombol Ke Atas');
            break;
        case 'ArrowDown':
            console.log('Tombol Ke Bawah');
            break;
        case 'ArrowLeft':
            console.log('Tombol Ke Kiri');
            break;
        case 'ArrowRight':
            console.log('Tombol Ke Kanan');
            break;
        default:
            console.log('Diabaikan')
    }
})

// input.addEventListener('keyup', (e) => {
//     console.log('Tombol Di Release'); //Saat dilepaskan tombolnya
// })