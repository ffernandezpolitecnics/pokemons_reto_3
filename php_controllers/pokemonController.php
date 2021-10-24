<?php

session_start();
require_once('../php_librarys/pokedex.php');

if (isset($_SESSION['pokedex'])) {
    $pokedex = $_SESSION['pokedex'];
}
else {
    $pokedex = [];
}


if (isset($_POST['insert'])) {

    // Hacer el tratamiento de la imagen

    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $name = '../media/img/pokemon/'.$_POST['number'].'.'.$fileExtension;
    

    $name_insert = '/pokemons_reto_3/media/img/pokemon/'.$_POST['number'].'.'.$fileExtension;

    $pokemon = newPokemon($_POST['number'], $_POST['name'], $_POST['region'], $_POST['type'], $_POST['height'], $_POST['weight'], $_POST['evolution'], $name_insert);

    insertPokemon($pokedex, $pokemon);

    if (isset($_SESSION['error'])) {
        $_SESSION['pokemon'] = $pokemon;
        header('Location: ' . '../php_views/pokemon.php');
    }
    else {
        move_uploaded_file($fileTmpPath, $name);
        $_SESSION['pokedex'] = $pokedex;
        header('Location: ' . '../php_views/pokemonList.php');
    }
    exit();
}
elseif (isset($_POST['delete'])) {
    $number = $_POST['number'];

    $pokemon = $pokedex[searchPokemonByNumber($pokedex, $number)];

    deletePokemon($pokedex, $number);
    
    $ruta = $_SERVER['DOCUMENT_ROOT'] . $pokemon['image'];

    // if (unlink($pokemon['image']))
    if (unlink($ruta))
    {
        $_SESSION['pokedex'] = $pokedex;
        $_SESSION['message'] = 'Pokémon borrado correctamente';
    }
    else {
        $_SESSION['error'] = 'No se ha borrado el pokémon. Problemas al borrar la imagen';
    }
        
    header('Location: ' . '../php_views/pokemonList.php');
    exit();
}
elseif (isset($_POST['edit'])) {
    $number = $_POST['number'];
    $pokemon = $pokedex[searchPokemonByNumber($pokedex, $number)];

    $_SESSION['pokemon'] = $pokemon;

    header('Location: ' . '../php_views/pokemon_edit.php');
    exit();
}
elseif (isset($_POST['update'])) {
    $number = $_POST['number'];
    updatePokemon($pokedex, $_POST['number'], $_POST['name'], $_POST['region'], $_POST['type'], $_POST['height'], $_POST['weight'], $_POST['evolution']);
    
    $_SESSION['pokedex'] = $pokedex;

    header('Location: ' . '../php_views/pokemonList.php');
    exit();
}

