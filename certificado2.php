<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas del Formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Certificado por tu Compra</h2>
        <div class="form-responses">
            <p><strong>Nombre:</strong> <?php echo $_POST['nombre']; ?></p>
            <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
            <p><strong>Gracias por tu compra obtubiste el 40% de descuento en nuestra tienda favor de presentar este certificado para hacerl valido tu descuento.</strong></p>

        </div>

        <img src="https://static.vecteezy.com/system/resources/previews/000/537/800/original/manual-signature-for-documents-on-white-background-hand-drawn-calligraphy-lettering-vector-illustration.jpg"
    style="width: 150px; height: auto;     display: inline;     vertical-align: middle;" > 
    </div>
</body>
</html>
