<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Subir un Archivo</h2>
        <form action="proceso-file.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="archivo" class="form-label">Selecciona un archivo</label>
                <input type="file" class="form-control" id="archivo" name="archivo">
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>