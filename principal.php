<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Opción Múltiple</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Encuesta Rapida</h2>
        <form action="welcome.php" method="POST">
            <div class="form-group">
                <label for="pregunta1">¿Con qué frecuencia compra flores?</label>
                <select id="pregunta1" name="pregunta1">
                    <option value="regularmente ">Regularmente </option>
                    <option value="ocasionalmente">Ocasionalmente</option>
                    <option value="raramente ">Raramente </option>
                    <option value=" esta es mi primera compra"> Esta es mi primera compra</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pregunta2">¿Qué tipo de arreglos florales suele comprar con más frecuencia? </label>
                <select id="pregunta2" name="pregunta2">
                    <option value=" Ramos de flores frescas"> Ramos de flores frescas</option>
                    <option value="Arreglos florales para eventos">Arreglos florales para eventos</option>
                    <option value=" Plantas de interior"> Plantas de interior</option>
                    <option value=" Flores para funerales"> Flores para funerales</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pregunta3">¿Qué tan satisfecho está con la calidad de nuestras flores y arreglos?</label>
                <select id="pregunta3" name="pregunta3">
                    <option value=" Muy satisfecho"> Muy satisfecho</option>
                    <option value=" Satisfecho"> Satisfecho</option>
                    <option value="Neutral">Neutral</option>
                    <option value=" Insatisfecho"> Insatisfecho</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pregunta4">¿Cómo se enteró de nuestra florería?</label>
                <select id="pregunta4" name="pregunta4">
                    <option value="  Recomendación de un amigo/familiar"> Recomendación de un amigo/familiar</option>
                    <option value="  Búsqueda en línea">  Búsqueda en línea</option>
                    <option value=" Redes sociales"> Redes sociales</option>
                    <option value="  Publicidad impresa">  Publicidad impresa</option>
                </select>
            </div>
            <button type="submit" >Enviar</button><br><br><br>

            <label>Contestando esta breve encuesta te generara un certificado</label>
            <button  type="submit" style="background-color: green; ">Generar Certificado</button>


        </form>

    </div>
</body>
</html>
