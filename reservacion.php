<?php
$mensaje = "";
$folio = "";
$reservaRealizada = false;

$nombre = "";
$telefono = "";
$servicio = "";
$fecha = "";
$hora = "";
$dispositivo = "";
$problema = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $telefono = htmlspecialchars(trim($_POST["telefono"]));
    $servicio = htmlspecialchars($_POST["servicio"]);
    $fecha = htmlspecialchars($_POST["fecha"]);
    $hora = htmlspecialchars($_POST["hora"]);
    $dispositivo = htmlspecialchars(trim($_POST["dispositivo"]));
    $problema = htmlspecialchars(trim($_POST["problema"]));

    $folio = "GF-" . rand(1000, 9999);

    $mensaje = "Tu reservación fue registrada correctamente.";
    $reservaRealizada = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones | GlitchFix</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <h1>GLITCH<span>FIX</span></h1>

        <nav>
            <a href="index.php">Inicio</a>
            <a href="servicios.php">Servicios</a>
            <a href="reservacion.php">Reservaciones</a>
        </nav>
    </header>

    <main>

        <section class="reservacion">

            <?php if ($reservaRealizada): ?>

                <div class="reserva-confirmada">

                    <p class="reserva-status">
                        RESERVATION / CONFIRMED
                    </p>

                    <h2>
                        Reservación<br>
                        <span>confirmada.</span>
                    </h2>

                    <p class="reserva-mensaje">
                        <?php echo $mensaje; ?>
                    </p>

                    <div class="reserva-folio">
                        <small>FOLIO DE RESERVACIÓN</small>
                        <strong><?php echo $folio; ?></strong>
                    </div>

                    <div class="reserva-datos">

                        <div>
                            <small>CLIENTE</small>
                            <strong><?php echo $nombre; ?></strong>
                        </div>

                        <div>
                            <small>SERVICIO</small>
                            <strong><?php echo $servicio; ?></strong>
                        </div>

                        <div>
                            <small>FECHA</small>
                            <strong><?php echo $fecha; ?></strong>
                        </div>

                        <div>
                            <small>HORA</small>
                            <strong><?php echo $hora; ?></strong>
                        </div>

                        <div>
                            <small>DISPOSITIVO</small>
                            <strong><?php echo $dispositivo; ?></strong>
                        </div>
                        <div>
                            <small>PROBLEMA REPORTADO</small>
                           <strong><?php echo $problema; ?></strong>
                        </div>

                        <div>
                            <small>TELÉFONO</small>
                            <strong><?php echo $telefono; ?></strong>
                        </div>

                    </div>

                    <a href="reservacion.php" class="btn btn-primary">
                        Nueva reservación
                    </a>

                </div>

            <?php else: ?>

                <h2>Reserva tu reparación</h2>

                <p>
                    Agenda una visita a GlitchFix y lleva tu dispositivo
                    en el horario que prefieras.
                </p>

                <form method="POST" action="">

                    <div class="form-group">
                        <label>Nombre completo</label>
                        <input type="text" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="tel" name="telefono" required>
                    </div>

                    <div class="form-group">
                        <label>Servicio</label>
                        <select name="servicio" required>
                            <option value="">Selecciona un servicio</option>
                            <option value="Diagnóstico">Diagnóstico</option>
                            <option value="Mantenimiento">Mantenimiento</option>
                            <option value="Reparación de pantalla">Reparación de pantalla</option>
                            <option value="Cambio de batería">Cambio de batería</option>
                            <option value="Instalación SSD">Instalación SSD</option>
                            <option value="Limpieza interna">Limpieza interna</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Fecha</label>
                        <input type="date" name="fecha" required>
                    </div>

                    <div class="form-group">
                        <label>Hora</label>
                        <input type="time" name="hora" required>
                    </div>

                    <div class="form-group">
                        <label>Dispositivo</label>
                        <input type="text"
                               name="dispositivo"
                               placeholder="Ej. Laptop HP 15"
                               required>
                    </div>

                    <div class="form-group form-full">
                        <label>Describe el problema</label>
                        <textarea name="problema"
                                  placeholder="Cuéntanos qué sucede con tu dispositivo..."
                                  required></textarea>
                    </div>

                    <button type="submit">
                        CONFIRMAR RESERVACIÓN
                    </button>

                </form>

            <?php endif; ?>

        </section>

    </main>

</body>
</html>