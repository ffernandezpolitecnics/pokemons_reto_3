<?php

include_once('./php_librarys/pokedex.php');


//Crea una pokédex buida.
$pokedex = [];

//Crea els següents pokémons:

$pokemon = newPokemon('001', 'Bulbasaur', 'Hoen', ['Planta', 'Veneno'], 70, 6.9, 'Sin evolucionar');
insertPokemon($pokedex, $pokemon);

$pokemon = newPokemon('002', 'Ivysaur', 'Hoen', ['Planta', 'Veneno'], 100, 13, 'Primera evolución');
insertPokemon($pokedex, $pokemon);

$pokemon = newPokemon('004', 'Charmander', 'Jotho', ['Fuego'], 60, 8.5, 'Sin evolucionar');
insertPokemon($pokedex, $pokemon);

showPokedex($pokedex);

deletePokemon($pokedex, '002');

showPokedex($pokedex);
