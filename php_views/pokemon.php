<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once('../php_partials/styles.php') ?>
    <?php require_once('../php_partials/scripts.php') ?>
    <link rel="stylesheet" href="../style/miCss.css">
</head>
<body>

<?php require_once('../php_partials/menu.php') ?>

<div class="container-fluid mt-3">
    <div class="card col col-md-8 offset-md-2">
        <div class="card-header bg-secondary text-dark ">
            <img src="../media/img/pokeball.svg.png" alt="" height="40" width="40" class="mr-5">
            <span class="ml-5 align-center">Pokemon</span>
        </div>
        <div class="card-body">
            <form action="../php_controllers/pokemonController.php" method="post" enctype="multipart/form-data">
                <!-- Pokemon number -->
                <div class="row mb-2"> 
                    <label for="number" class="col-sm-2 col-form-label">Número</label>
                    <div class="col-sm-10">
                        <input type="text" name="number" id="number" class="form-control" autofocus>
                    </div>
                </div>

                <!-- Pokemon name -->
                <div class="row mb-2"> 
                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                         <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>

                <!-- Region -->
                <div class="row mb-2"> 
                    <label for="region" class="col-sm-2 col-form-label">Región</label>
                    <div class="col-sm-10">
                        <select name="region" id="region" class="form-select" >
                            <option value="Kanto">Kanto</option>
                            <option value="Jotho">Jotho</option>
                            <option value="Hoenn">Hoenn</option>
                            <option value="Sinnoh">Sinnoh</option>
                            <option value="Teselia">Teselia</option>
                        </select>
                    </div>
                </div>

                <!-- Type -->
                <div class="row mb-2"> 
                    <label for=""  class="col-sm-2 col-form-label">Tipo</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type1" value="Planta" class="form-check-input">
                            <label for="type1" class="form-check-label">Planta</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type2" value="Veneno" class="form-check-input">
                            <label for="type2" class="form-check-label">Veneno</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type3" value="Fuego" class="form-check-input">
                            <label for="type3"  class="form-check-label">Fuego</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type4" value="Volador" class="form-check-input">
                            <label for="type4" class="form-check-label">Volador</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type5" value="Agua" class="form-check-input">
                            <label for="type5" class="form-check-label">Agua</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type6" value="Eléctrico" class="form-check-input">
                            <label for="type6" class="form-check-label">Eléctrico</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type7" value="Hada" class="form-check-input">
                            <label for="type7">Hada</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type8" value="Bicho" class="form-check-input">
                            <label for="type8" class="form-check-label">Bicho</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type9" value="Lucha" class="form-check-input">
                            <label for="type9" class="form-check-label">Lucha</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="type[]" id="type10" value="Psíquico" class="form-check-input">
                            <label for="type10" class="form-check-label">Psíquico</label>
                        </div>
                    </div>
                </div>
                
                <!-- height -->
                <div class="row mb-2"> 
                    <label for="height" class="col-sm-2 col-form-label">Altura</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="number" name="height" id="height" class="form-control">
                            <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                    </div>
                </div>

                <!-- weight -->
                <div class="row mb-2"> 
                     <label for="weight"  class="col-sm-2 col-form-label">Peso</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="number" name="weight" id="weight"class="form-control">
                            <span class="input-group-text" id="basic-addon2">kg</span>
                        </div>
                    </div>
                </div>

                <!-- Evolution -->
                <div class="row mb-2"> 
                    <label for=""  class="col-sm-2 col-form-label">Evolución</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="evolution" id="evolution1" class="form-check-input" value="Sin evolución" checked>
                            <label for="evolution1" class="form-check-label">Sin evolución</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="evolution" id="evolution2" class="form-check-input" value="Primera evolución">
                            <label for="evolution2" class="form-check-label">Primera evolución</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="evolution" id="evolution3" class="form-check-input" value="Otras evoluciones">
                            <label for="evolution3" class="form-check-label">Otras evoluciones</label>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="row mb-2"> 
                    <label for="image" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                         <input type="file" name="image" id="image" class="formFile">
                    </div>
                </div>
                <div class="row mb-2"> 
                    
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary float-end m-1" name="insert">Aceptar</button>
                        <a href="./pokemonList.php" class="btn btn-secondary float-end m-1" >Cancelar</a>
                    </div>
                </div>
                
            </form>

        </div>
    </div>



    
</div>


</body>
</html>