<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKz...">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Ingrese dos números</h2>
        <form action="proceso.php" method="POST">
            <div class="mt-3">
                <select name="operacion" id="" class="form-control">
                    <option value="null">Seleccionar...</option>
                    <option value="sum">Suma</option>
                    <option value="subtraction">Resta</option>
                    <option value="multiplication">Multiplicacion</option>
                    <option value="division">Division</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="numero1" class="form-label">Número 1</label>
                <input type="number" class="form-control" name="numero1" id="numero1" placeholder="Ingrese el primer número">
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Número 2</label>
                <input type="number" class="form-control" name="numero2" id="numero2" placeholder="Ingrese el segundo número">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384..."></script>
</body>
</html>
