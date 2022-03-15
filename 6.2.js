async function getPokemon() {
  const rsPokemonAll = await fetch(
    'https://pokeapi.co/api/v2/pokemon?limit=100&offset=200'
  ).then((rs) => rs.json());

  let finalResults = [];

  const fetchPokemons = rsPokemonAll.results.map((result) =>
    fetch(result.url).then((rs) => rs.json())
  );

  for (const fetchPokemon of fetchPokemons) {
    finalResults.push(await fetchPokemon);
  }

  return finalResults;
}

getPokemon().then((pokemons) => {
  const appElement = document.getElementById('app');
  appElement.style.display = 'flex';
  appElement.style.flexWrap = 'wrap';
  let content = `  `;
  pokemons.forEach((pokemon) => {
    const pokemonContent = `<div>
        <div ><img src="${pokemon.sprites.front_default}"/></div>
        <h4> <div >${pokemon.name}</div></h4>
    </div>`;
    
    content += pokemonContent;
    
  });
  appElement.innerHTML = content;
      
});


