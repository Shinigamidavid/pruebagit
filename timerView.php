<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['title']); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php
    // var_dump($data);
    require_once 'controller.php';

?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Placeholder for flash messages -->
            </div>
            <div class="col-12">
                <h1><?php echo htmlspecialchars($data['title']); ?></h1>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Cuenta regresiva
                        <div class="float-end">
                            <input type="date" name="fecha" id="fecha" class="form-control" 
                            value="<?php echo date('Y-m-d', strtotime('+1day')); ?>">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="wrapper_timer">
                            Selecciona una fecha para iniciar
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
