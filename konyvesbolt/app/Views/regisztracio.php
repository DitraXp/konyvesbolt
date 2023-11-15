<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyv regisztrálása</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <h2>Könyv regisztrálása</h2>
            <form action="regisztracio_feldolgozas.php" method="POST">
                <div class="form-group">
                    <label for="szerzo">Könyv szerzője</label>
                    <input type="text" class="form-control" id="nev" name="nev" required>
                </div>
                <div class="form-group">
                    <label for="cim">Könyv címe</label>
                    <input type="text" class="form-control" id="cim" name="cim" required>
                </div>
                <div class="form-group">
                    <label for="ar">Könyv ára</label>
                    <input type="number" class="form-control" id="ar" name="ar" required>
                </div>
                <button type="submit" class="btn btn-primary">Regisztráció</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>