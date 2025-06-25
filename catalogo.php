<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Maria - Catalogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h2>Menú</h2>
    <div class="barra-lateral">
    <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Servicios</a></li>
        </ul>
    </div>
    
    <div class="contenido">
        <h1>Contenido principal</h1>
        <p>"Maria nace del deseo de realzar la belleza única que hay en cada persona, a través de accesorios hechos con pasión, detalle y estilo."</p>
        
        <!-- Repite el párrafo para ver el scroll -->
        <?php for ($i = 0; $i < 20; $i++): ?>
            <p>Este es el párrafo número <?= $i + 1 ?> del contenido de prueba para probar el scroll.</p>
        <?php endfor; ?>
    </div>

</body>
</html>
