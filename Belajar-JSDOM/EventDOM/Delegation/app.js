const form = document.querySelector('#form');
const input = document.querySelector('input');
const list = document.querySelector('#notes');


form.addEventListener('submit', function (e) {
    e.preventDefault();
    const noteValue = input.value;
    const newList = document.createElement('li');
    newList.innerText = noteValue;
    list.append(newList);
    input.value = '';
})

list.addEventListener('click', (e) => {
    e.target.nodeName === 'LI' && e.target.remove();
})


// const lis = document.querySelector('li')
// for (let li of lis)
//     li.addEventListener('click', () => {
//         li.remove();
//     })  
