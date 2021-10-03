<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    
</form>
    <label for="number">Número</label>
    <input type="text" name="number" id="number">
    <br>

    <label for="name">Nombre</label>
    <input type="text" name="name" id="name">
    <br>

    <label for="region">Región</label>
    <select name="region" id="region">
        <option value="">Kanto</option>
        <option value="">Jotho</option>
        <option value="">Hoenn</option>
        <option value="">Sinnoh</option>
        <option value="">Teselia</option>
    </select>
    <br>

    <label for="">Tipo</label>
    
    <input type="checkbox" name="type[]" id="type1" value="">
    <label for="type1">Planta</label>
    <input type="checkbox" name="type[]" id="type2" value="Veneno">
    <label for="type2">Veneno</label>
    <input type="checkbox" name="type[]" id="type3" value="Fuego">
    <label for="type3">Fuego</label>
    <input type="checkbox" name="type[]" id="type4" value="Volador">
    <label for="type4">Volador</label>
    <input type="checkbox" name="type[]" id="type5" value="Agua">
    <label for="type5">Agua</label>
    <input type="checkbox" name="type[]" id="type6" value="Eléctrico">
    <label for="type6">Eléctrico</label>
    <input type="checkbox" name="type[]" id="type7" value="Hada">
    <label for="type7">Hada</label>
     <input type="checkbox" name="type[]" id="type8" value="Bicho">
    <label for="type8">Bicho</label>
     <input type="checkbox" name="type[]" id="type9" value="Lucha">
    <label for="type9">Lucha</label>
     <input type="checkbox" name="type[]" id="type10" value="Psíquico">
    <label for="type10">Psíquico</label>
    <br>

    <label for="height">Altura</label>
    <input type="number" name="height" id="height">
    <br>

    <label for="weight">Peso</label>
    <input type="number" name="weight" id="weight">
    <br>

    <label for="">Evolución</label>

    <input type="radio" name="evolution" id="evolution1" checked>
    <label for="evolution1">Sin evolución</label>
    <input type="radio" name="evolution" id="evolution2">
    <label for="evolution2">Primera evolución</label>
    <input type="radio" name="evolution" id="evolution3">
    <label for="evolution3">Otras evolución</label>
    <br>

    <label for="image">Imagen</label>
    <input type="file" name="image" id="image">
    <br>

    <button>Aceptar</button>
    <a href="">Cancelar</a>


</body>
</html>