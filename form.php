<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Measurement Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
        <div class="card shadow p-4 col-12">
            <h3 class="text-center mb-4 text-primary">Measurement Converter</h3>
            
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="mb-3">
                    <label for="value" class="form-label">Enter Value</label>
                    <input type="number" name="value" id="value" step="any" class="form-control" placeholder="enter the value here " required>
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="from-unit" class="form-label">From</label>
                        <select name="from-unit" id="from-unit" class="form-select">
                            <?php foreach ($units as $unit): ?>
                                <option value="<?= $unit ?>"><?= ucfirst($unit) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="to-unit" class="form-label">To</label>
                        <select name="to-unit" id="to-unit" class="form-select">
                            <?php foreach ($units as $unit): ?>
                                <option value="<?= $unit ?>"><?= ucfirst($unit) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Convert</button>
                </div>

                <?php if (isset($data)): ?>
                    <div class="mt-4 alert alert-success text-center">
                        <strong>Result:</strong> <?= $data ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
        <a href="index.php">return to menu</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>
