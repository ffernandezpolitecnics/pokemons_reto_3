<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once('../php_partials/styles.php') ?>
    <link rel="stylesheet" href="../style/pokemonListCss.css">
    <?php require_once('../php_partials/scripts.php') ?>
</head>
<body>
    <?php require_once('../php_partials/menu.php') ?>

    <div class="container-fluid">
        <a id="insertar" href="./pokemon.php" class="position-fixed btn btn-success btn-lg rounded-circle" > <i class="fas fa-plus"></i></a>

        <div class="row row-cols-1 row-cols-md-5 mt-4">
            <?php 
                if (isset($_SESSION['pokedex'])) {
                    $pokedex = $_SESSION['pokedex'];
                }
                else {
                    $pokedex = [];
                }

                foreach ($pokedex as $pokemon) {
            ?>

                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="<?php echo $pokemon['image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="font-weight-bold"><?php echo $pokemon['number'] . ' - ' . $pokemon['name'] ?></h6>
                            <?php 
                            foreach ($pokemon['type'] as $type) {
                            ?>
                                <span class="badge bg-info"><?php echo $type ?></span>
                            <?php  
                            }
                            ?>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex flex-row-reverse">
                                <form action="../php_controllers/pokemonController.php" method="post">
                                    <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                                    <input type="hidden" name="number" value="<?php echo $pokemon['number']; ?>">
                                </form>
                                <form action="../php_controllers/pokemonController.php" method="post">
                                    <button type="submit" name="delete" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                    <input type="hidden" name="number" value="<?php echo $pokemon['number']; ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            
            <!-- <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/001.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">001 - Bulbasur</h6>
                        <span class="badge bg-info">Planta</span>
                        <span class="badge bg-info">Veneno</span> 
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/002.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">002 - Ivysaur</h6>
                        <span class="badge bg-info">Planta</span>
                        <span class="badge bg-info">Veneno</span> 
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/003.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">003 - Venusaur</h6>
                        <span class="badge bg-info">Planta</span>
                        <span class="badge bg-info">Veneno</span> 
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/004.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">004 - Charmander</h6>
                        <span class="badge bg-info">Fuego</span>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/005.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">005 - Charmeleon</h6>
                        <span class="badge bg-info">Fuego</span>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/006.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">006 - Charizard</h6>
                        <span class="badge bg-info">Fuego</span>
                        <span class="badge bg-info">Volador</span> 
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/007.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">007 - Squirtle</h6>
                        <span class="badge bg-info">Agua</span>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse">
                            <button type="submit" name="edit" class="btn btn-outline-primary"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/008.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">008 - Wartortle</h6>
                        <span class="badge bg-info">Agua</span>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="../media/img/pokemons/009.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="font-weight-bold">009 - Blastoise</h6>
                        <span class="badge bg-info">Agua</span>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div> -->
        </div>




    </div>

</body>
</html>