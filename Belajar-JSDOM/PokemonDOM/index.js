const container = document.querySelector('#container');
const baseImgURL = 
    'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/';

for (let i = 1; i <= 1025; i++) {
    const pokemon = document.createElement('div');
    pokemon.classList.add('pokemon');

    const imgPokemon = document.createElement('img');
    imgPokemon.src = `${baseImgURL}${i}.png`;

    const label = document.createElement('label');
    label.textContent = `#${i}`;

    pokemon.appendChild(imgPokemon);
    pokemon.appendChild(label);
    container.appendChild(pokemon);
}