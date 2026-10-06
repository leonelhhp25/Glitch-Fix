<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = trim($_POST["correo"] ?? "");
    $contrasena = trim($_POST["contrasena"] ?? "");

    if (!empty($correo) && !empty($contrasena)) {

        /*
         * Por ahora solamente simulamos el inicio de sesión.
         * Posteriormente se conectará con MySQL.
         */

        $mensaje = "datos_recibidos";

    } else {

        $mensaje = "campos_vacios";

    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Iniciar sesión | GLITCHFIX</title>

    <link rel="stylesheet" href="estilos.css">

</head>


<body>

<header class="header">

    <div class="logo">
        GLITCH<span>FIX</span>
    </div>

    <nav class="nav">

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
            Reservación
        </a>

        <a href="login.php" class="active">
            Iniciar sesión
        </a>

    </nav>

</header>


<main>

    <section class="login-section">

        <div class="login-panel">

            <span class="section-tag">
                GLITCHFIX / USER SYSTEM
            </span>

            <h1>
                INICIAR <span>SESIÓN.</span>
            </h1>

            <p class="login-description">
                Accede a tu cuenta para consultar tus reservaciones,
                reparaciones y servicios.
            </p>


            <?php if ($mensaje == "datos_recibidos"): ?>

                <div class="login-message success-login">

                    <strong>
                        DATOS RECIBIDOS
                    </strong>

                    <p>
                        El sistema de usuarios todavía está en desarrollo.
                        La validación con la base de datos se agregará
                        posteriormente.
                    </p>

                </div>

            <?php elseif ($mensaje == "campos_vacios"): ?>

                <div class="login-message error-login">

                    <strong>
                        DATOS INCOMPLETOS
                    </strong>

                    <p>
                        Ingresa tu correo y contraseña.
                    </p>

                </div>

            <?php endif; ?>


            <form
                action="login.php"
                method="POST"
                class="login-form"
            >

                <div class="form-group">

                    <label for="correo">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        placeholder="correo@ejemplo.com"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="contrasena">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        id="contrasena"
                        name="contrasena"
                        placeholder="Ingresa tu contraseña"
                        required
                    >

                </div>


                <button
                    type="submit"
                    class="form-button"
                >
                    INICIAR SESIÓN →
                </button>

            </form>


            <div class="login-links">

                <p>
                    ¿Todavía no tienes una cuenta?
                </p>

                <a href="registro.php">
                    Crear una cuenta
                </a>

            </div>

        </div>


        <div class="login-side">

            <div class="login-system">

                <span class="system-dot"></span>

                SYSTEM STATUS: ONLINE

            </div>

            <h2>
                TU INFORMACIÓN.
                <span>TU CONTROL.</span>
            </h2>

            <p>
                Con una cuenta GLITCHFIX podrás tener acceso a las
                herramientas digitales de nuestro sistema.
            </p>


            <div class="login-features">

                <div class="login-feature">

                    <strong>01</strong>

                    <div>
                        <h3>Reservaciones</h3>
                        <p>
                            Consulta y administra tus citas.
                        </p>
                    </div>

                </div>


                <div class="login-feature">

                    <strong>02</strong>

                    <div>
                        <h3>RepairLive</h3>
                        <p>
                            Consulta el progreso de tu reparación.
                        </p>
                    </div>

                </div>


                <div class="login-feature">

                    <strong>03</strong>

                    <div>
                        <h3>Historial</h3>
                        <p>
                            Mantén un registro de tus servicios.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>

</main>


<footer class="footer">

    <div class="logo">
        GLITCH<span>FIX</span>
    </div>

    <p>
        You’re glitched. We’re fixed.
    </p>

    <p>
        © 2026 GLITCHFIX. Todos los derechos reservados.
    </p>

</footer>


</body>

</html>