<?php
declare(strict_types=1);

$titulo = "Mi Sitio en PHP 8.4";
$fechaActual = new DateTimeImmutable();
$usuario = "Visitante";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo) ?></title>
    <style>
        body { font-family: system-ui, sans-serif; line-height: 1.6; max-width: 800px; margin: 2rem auto; padding: 0 1rem; background: #f4f4f9; }
        header { background: #333; color: white; padding: 1rem; border-radius: 8px; text-align: center; }
        main { background: white; padding: 2rem; margin-top: 1rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        footer { margin-top: 2rem; font-size: 0.8rem; color: #666; text-align: center; }
    </style>
</head>
<body>

    <header>
        <h1><?= $titulo ?></h1>
    </header>

    <main>
        <h2>¡Hola, <?= htmlspecialchars($usuario) ?>!</h2>
        <p>Bienvenido a una estructura básica funcionando en <strong>PHP 8.4</strong>.</p>
        
        <section>
            <h3>Detalles del servidor:</h3>
            <ul>
                <li><strong>Versión de PHP:</strong> <?= PHP_VERSION ?></li>
                <li><strong>Fecha y hora:</strong> <?= $fechaActual->format('d/m/Y H:i:s') ?></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; <?= $fechaActual->format('Y') ?> - Creado con PHP</p>
    </footer>

</body>
</html>
