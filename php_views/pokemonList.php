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
        <a id="insertar" href="./pokemon.php" class="position-fixed btn btn-info btn-lg rounded-circle text-white" > <i class="fas fa-plus"></i></a>

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
                                <!-- <form action="../php_controllers/pokemonController.php" method="post"> -->
                                    <button type="button" name="delete" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-number="<?php echo $pokemon['number'] ?>" data-bs-name="<?php echo $pokemon['name'] ?>"><i class="far fa-trash-alt"></i></button>
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->

                                <!-- </form> -->
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

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="message"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                <form action="../php_controllers/pokemonController.php" method="post">
                    <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-trash-alt" aria-hidden="true"></i> Esborrar</button>
                    <input type="hidden" name="number" value="<?php echo $pokemon['number']; ?>">
                </form>
            </div>
            </div>
        </div>
    </div>
</body>

<script>
    var deleteModal = document.getElementById('deleteModal')
    deleteModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var numberPokemon = button.getAttribute('data-bs-number')
    var namePokemon = button.getAttribute('data-bs-name')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = deleteModal.querySelector('.modal-title')
    var message = document.getElementById('message');

    modalTitle.textContent = numberPokemon + ' - ' + namePokemon;
    message.textContent = '¿Estas seguro de borrar el pokémon ' + namePokemon + '?'

    // modalBodyInput.value = recipient
})
</script>


</html>