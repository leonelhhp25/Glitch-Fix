<?php

$mensaje_enviado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $asunto = trim($_POST["asunto"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    if (
        !empty($nombre) &&
        !empty($correo) &&
        !empty($asunto) &&
        !empty($mensaje)
    ) {
        $mensaje_enviado = true;
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto | GLITCHFIX</title>

    <meta name="description"
        content="Contacta con GLITCHFIX para solicitar información sobre nuestros servicios tecnológicos.">

    <link rel="stylesheet" href="estilos.css">

</head>


<body>


    <!-- =========================
         ENCABEZADO
         ========================= -->

    <header>

        <div class="logo">
            GLITCH<span>FIX</span>
        </div>


        <nav>

            <a href="index.php">
                Inicio
            </a>

            <a href="nosotros.php">
                Nosotros
            </a>

            <a href="servicios.php">
                Servicios
            </a>

            <a href="contacto.php">
                Contacto
            </a>

            <a href="reservacion.php">
                Reservar
            </a>

            <a href="login.php">
                Iniciar sesión
            </a>

        </nav>

    </header>



    <main>


        <!-- =========================
             ENCABEZADO
             ========================= -->

        <section class="page-header">

            <p class="status">
                03 / CONTACT
            </p>

            <h1>
                HABLEMOS DE
                <span>TECNOLOGÍA.</span>
            </h1>

            <p>
                ¿Tienes alguna duda, necesitas información
                sobre un servicio o quieres solicitar una
                reparación? Escríbenos.
            </p>

        </section>



        <!-- =========================
             CONTACTO
             ========================= -->

        <section class="contact-section">


            <!-- INFORMACIÓN -->

            <div class="contact-info">

                <p class="status">
                    CONTACT SYSTEM
                </p>

                <h2>
                    Estamos para
                    <span>ayudarte.</span>
                </h2>


                <div class="contact-data">


                    <div class="contact-item">

                        <span>
                            EMAIL
                        </span>

                        <p>
                            contacto@glitchfix.com
                        </p>

                    </div>


                    <div class="contact-item">

                        <span>
                            TELÉFONO
                        </span>

                        <p>
                            55 0000 0000
                        </p>

                    </div>


                    <div class="contact-item">

                        <span>
                            HORARIO
                        </span>

                        <p>
                            Lunes a sábado
                            <br>
                            9:00 - 18:00
                        </p>

                    </div>


                    <div class="contact-item">

                        <span>
                            UBICACIÓN
                        </span>

                        <p>
                            Ciudad de México, México
                        </p>

                    </div>


                </div>

            </div>



            <!-- =========================
                 FORMULARIO
                 ========================= -->

            <div class="contact-form">


                <?php if ($mensaje_enviado): ?>

                    <div class="success-message">

                        <strong>
                            ✓ MENSAJE ENVIADO
                        </strong>

                        <p>
                            Gracias por contactar con GLITCHFIX.
                            Hemos recibido tu mensaje.
                        </p>

                    </div>

                <?php endif; ?>


                <form method="POST" action="contacto.php">


                    <div class="form-group">

                        <label for="nombre">
                            Nombre
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Escribe tu nombre"
                            required
                        >

                    </div>



                    <div class="form-group">

                        <label for="correo">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            placeholder="ejemplo@correo.com"
                            required
                        >

                    </div>



                    <div class="form-group">

                        <label for="asunto">
                            Asunto
                        </label>

                        <select
                            id="asunto"
                            name="asunto"
                            required
                        >

                            <option value="">
                                Selecciona una opción
                            </option>

                            <option value="informacion">
                                Información sobre un servicio
                            </option>

                            <option value="reparacion">
                                Solicitar reparación
                            </option>

                            <option value="cotizacion">
                                Solicitar cotización
                            </option>

                            <option value="seguimiento">
                                Seguimiento de reparación
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <div class="form-group">

                        <label for="mensaje">
                            Mensaje
                        </label>

                        <textarea
                            id="mensaje"
                            name="mensaje"
                            rows="7"
                            placeholder="Escribe tu mensaje..."
                            required
                        ></textarea>

                    </div>



                    <button
                        type="submit"
                        class="form-button"
                    >
                        ENVIAR MENSAJE
                    </button>


                </form>

            </div>


        </section>



        <!-- =========================
             PREGUNTA RÁPIDA
             ========================= -->

        <section class="contact-bottom">

            <p class="status">
                NEED A REPAIR?
            </p>

            <h2>
                ¿Prefieres reservar
                directamente?
            </h2>

            <a
                href="reservacion.php"
                class="btn btn-primary"
            >
                Reservar servicio
            </a>

        </section>



        <!-- =========================
             CTA
             ========================= -->

        <section class="cta">

            <p>
                You're glitched.
            </p>

            <h2>
                WE'RE FIXED.
            </h2>

        </section>


    </main>



    <!-- =========================
         FOOTER
         ========================= -->

    <footer>

        <div class="footer-logo">
            GLITCH<span>FIX</span>
        </div>

        <p>
            You're glitched. We're fixed.
        </p>

        <p>
            © 2026 GLITCHFIX. Todos los derechos reservados.
        </p>

    </footer>


</body>

</html>