<?php
$folio = "";
$consultado = false;
$reparacion = null;

$reparaciones = [

    "GF-4821" => [
        "dispositivo" => "Laptop HP 15",
        "descripcion" => "Diagnóstico completado. El equipo se encuentra actualmente en proceso de reparación.",
        "estado" => "EN REPARACIÓN",
        "paso" => 3
    ],

    "GF-3157" => [
        "dispositivo" => "iPhone 13",
        "descripcion" => "El equipo fue recibido y actualmente se encuentra en etapa de diagnóstico.",
        "estado" => "DIAGNÓSTICO",
        "paso" => 2
    ],

    "GF-7294" => [
        "dispositivo" => "Lenovo IdeaPad",
        "descripcion" => "La reparación terminó. El equipo está pasando por las pruebas finales.",
        "estado" => "EN PRUEBAS",
        "paso" => 4
    ],

    "GF-8642" => [
        "dispositivo" => "PC Gamer",
        "descripcion" => "El equipo está listo. Puedes acudir a recogerlo en el horario indicado.",
        "estado" => "LISTO PARA ENTREGA",
        "paso" => 5
    ]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $folio = strtoupper(trim($_POST["folio"]));
    $consultado = true;

    if (isset($reparaciones[$folio])) {
        $reparacion = $reparaciones[$folio];
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RepairLive | GlitchFix</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <h1>GLITCH<span>FIX</span></h1>

        <nav>
            <a href="index.php">Inicio</a>
            <a href="servicio.php">Servicios</a>
            <a href="reservacion.php">Reservaciones</a>
        </nav>
    </header>

    <main>

        <section class="repairlive-page">

            <div class="repairlive-header">
                <p class="status">SYSTEM / REPAIRLIVE™</p>

                <h2>
                    Consulta tu<br>
                    <span>reparación.</span>
                </h2>

                <p>
                    Ingresa el folio de tu reparación para
                    consultar el estado actual de tu equipo.
                </p>
            </div>

            <form method="POST" action="" class="repairlive-form">

                <label for="folio">Folio de reparación</label>

                <input
                    type="text"
                    id="folio"
                    name="folio"
                    placeholder="Ej. GF-4821"
                    required
                >

                <button type="submit">
                    CONSULTAR REPARACIÓN
                </button>

            </form>

            <?php if ($consultado): ?>

                <div class="repair-result">

                    <div class="repair-result-top">
                        <div>
                            <small>FOLIO</small>
                            <strong><?php echo htmlspecialchars($folio); ?></strong>
                        </div>

                        <div class="repair-status">
                            <span></span>
                            EN REPARACIÓN
                        </div>
                    </div>

                    <div class="repair-device">
                        <small>DISPOSITIVO</small>
                        <h3>Laptop HP 15</h3>
                        <p>
                            Diagnóstico completado. El equipo se encuentra
                            actualmente en proceso de reparación.
                        </p>
                    </div>

                    <div class="repair-tracking">

                        <div class="tracking-step completed">
                            <span>01</span>
                            <div>
                                <strong>Recepción</strong>
                                <small>Equipo recibido</small>
                            </div>
                        </div>

                        <div class="tracking-step completed">
                            <span>02</span>
                            <div>
                                <strong>Diagnóstico</strong>
                                <small>Revisión completada</small>
                            </div>
                        </div>

                        <div class="tracking-step active">
                            <span>03</span>
                            <div>
                                <strong>Reparación</strong>
                                <small>Proceso en curso</small>
                            </div>
                        </div>

                        <div class="tracking-step">
                            <span>04</span>
                            <div>
                                <strong>Pruebas</strong>
                                <small>Pendiente</small>
                            </div>
                        </div>

                        <div class="tracking-step">
                            <span>05</span>
                            <div>
                                <strong>Entrega</strong>
                                <small>Pendiente</small>
                            </div>
                        </div>

                    </div>

                </div>

            <?php endif; ?>

        </section>

    </main>

</body>
</html>