<?php

// Crear pokémon.
// Donat el número, el nom, la regió, els tipus, l’alçada, el pes i l’evolució, ha de retorna un array associatiu amb tota la informació del pokémon .

function newPokemon($number, $name, $region, $type, $height, $weight, $evolution, $image)
{
    $pokemon = [
        'number'    => $number,
        'name'      => $name,
        'region'    => $region,
        'type'      => $type,
        'height'    => $height,
        'weight'    => $weight,
        'evolution' => $evolution,
        'image'     => $image
    ];

    return $pokemon;
}

// Afegir pokémon.
// Donada una pokédex i un pokémon, afegir el pokémon a la pokédex. Si el pokémon ja existeix, mostrar un missatge d’error.

function insertPokemon(&$pokedex, $pokemon)
{
    array_push($pokedex, $pokemon);
}

// Buscar pokémon.
// Donada una pokédex i el número d’un pokémon, retorna la posició on es troba el pokémon. En cas de no trobar el pokémon, s’ha de retornar un -1.
function searchPokemonByNumber($pokedex, $number)
{
    $found = false;
    $i = 0;
    $index = -1;
    $numberPokemons = count($pokedex);

    while ($i < $numberPokemons && !$found) {
        if ($pokedex[$i]['number'] == $number) {
            $index = $i;
            $found = true;
        }else {
            $i++;
        }
    }

    return $index;
}

// Buscar pokémon.
// Donada una pokédex i el nom d’un pokémon, retorna la posició on es troba el pokémon. En cas de no trobar el pokémon, s’ha de retornar un -1.
function searchPokemonByName($pokedex, $name)
{
    $found = false;
    $i = 0;
    $index = -1;
    $numberPokemons = count($pokedex);

    while ($i < $numberPokemons && !$found) {
        if ($pokedex[$i]['name'] == $name) {
            $index = $i;
            $found = true;
        }
        else {
            $i++;
        }
    }

    return $index;
}

// Mostrar pokémon.
// Donat un pokémon, mostrar tota la seva informació.

function showPokemon($pokemon)
{
    echo('Number   : ' . $pokemon['number'] . '<br>');
    echo('Name     : ' . $pokemon['name'] . '<br>');
    echo('Region   : ' . $pokemon['region'] . '<br>');

    $type = '';
    for ($i=0; $i < count($pokemon['type']); $i++) { 
        $type .= $pokemon['type'][$i] . ' ';
    }

    echo('Type     : ' . $type . '<br>');
    echo('Height   : ' . $pokemon['height'] . '<br>');
    echo('Weight   : ' . $pokemon['weight'] . '<br>');
    echo('Evolution: ' . $pokemon['evolution'] . '<br>');
    echo('<hr>');
    echo('<br>');
}

// Mostrar pokédex. 
// Donada una pokédex, mostrar la informació de tots el pokémon que conté.
function showPokedex($pokedex)
{
    $numberPokemons = count($pokedex);

    for ($i=0; $i < $numberPokemons ; $i++) { 
        showPokemon($pokedex[$i]);
    }
}

// Borrar pokémon.
// Donada una pokédex i el nom d’un pokémon, esborrar el pokémon de la pokédex. Si el pokémon no existeix, mostrar missatge d’error.

function deletePokemon(&$pokedex, $number)
{
    $index = searchPokemonByNumber($pokedex, $number);

    if ($index != -1) {
        array_splice($pokedex, $index, 1);
    }
}
