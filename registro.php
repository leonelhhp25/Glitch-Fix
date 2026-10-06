<?php

$registro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $telefono = trim($_POST["telefono"] ?? "");
    $contrasena = $_POST["contrasena"] ?? "";
    $confirmar = $_POST["confirmar"] ?? "";

    if (
        empty($nombre) ||
        empty($correo) ||
        empty($telefono) ||
        empty($contrasena) ||
        empty($confirmar)
    ) {

        $registro = "vacio";

    } elseif ($contrasena !== $confirmar) {

        $registro = "diferente";

    } elseif (strlen($contrasena) < 6) {

        $registro = "corta";

    } else {

        /*
         * Por ahora solamente simulamos el registro.
         * Posteriormente los datos se guardarán en MySQL.
         */

        $registro = "correcto";
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

    <title>Crear cuenta | GLITCHFIX</title>

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

        <a href="login.php">
            Iniciar sesión
        </a>

    </nav>

</header>


<main>

    <section class="register-section">


        <div class="register-side">

            <div class="login-system">

                <span class="system-dot"></span>

                SYSTEM STATUS: ONLINE

            </div>

            <h1>
                CREA TU
                <span>CUENTA.</span>
            </h1>

            <p>
                Regístrate en GLITCHFIX para acceder a tus
                reservaciones, servicios y seguimiento de reparaciones.
            </p>


            <div class="register-benefits">

                <div class="register-benefit">

                    <span>01</span>

                    <div>
                        <strong>
                            Tus reservaciones
                        </strong>

                        <p>
                            Consulta las citas que hayas realizado.
                        </p>
                    </div>

                </div>


                <div class="register-benefit">

                    <span>02</span>

                    <div>
                        <strong>
                            Seguimiento
                        </strong>

                        <p>
                            Consulta el progreso de tus reparaciones.
                        </p>
                    </div>

                </div>


                <div class="register-benefit">

                    <span>03</span>

                    <div>
                        <strong>
                            Historial
                        </strong>

                        <p>
                            Conserva el historial de tus servicios.
                        </p>
                    </div>

                </div>

            </div>

        </div>


        <div class="register-panel">

            <span class="section-tag">
                GLITCHFIX / NEW USER
            </span>

            <h2>
                REGISTRO
            </h2>

            <p class="register-description">
                Completa tus datos para crear una cuenta.
            </p>


            <?php if ($registro == "correcto"): ?>

                <div class="login-message success-login">

                    <strong>
                        CUENTA LISTA
                    </strong>

                    <p>
                        Tus datos fueron recibidos correctamente.
                        La conexión con la base de datos se agregará
                        posteriormente.
                    </p>

                </div>

            <?php elseif ($registro == "vacio"): ?>

                <div class="login-message error-login">

                    <strong>
                        DATOS INCOMPLETOS
                    </strong>

                    <p>
                        Completa todos los campos.
                    </p>

                </div>

            <?php elseif ($registro == "diferente"): ?>

                <div class="login-message error-login">

                    <strong>
                        CONTRASEÑAS DIFERENTES
                    </strong>

                    <p>
                        Las contraseñas introducidas no coinciden.
                    </p>

                </div>

            <?php elseif ($registro == "corta"): ?>

                <div class="login-message error-login">

                    <strong>
                        CONTRASEÑA DEMASIADO CORTA
                    </strong>

                    <p>
                        La contraseña debe tener al menos 6 caracteres.
                    </p>

                </div>

            <?php endif; ?>


            <form
                action="registro.php"
                method="POST"
                class="register-form"
            >


                <div class="form-group">

                    <label for="nombre">
                        Nombre completo
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Ej. Juan Pérez"
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
                        placeholder="correo@ejemplo.com"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="telefono">
                        Teléfono
                    </label>

                    <input
                        type="tel"
                        id="telefono"
                        name="telefono"
                        placeholder="55 0000 0000"
                        required
                    >

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="contrasena">
                            Contraseña
                        </label>

                        <input
                            type="password"
                            id="contrasena"
                            name="contrasena"
                            placeholder="Mínimo 6 caracteres"
                            minlength="6"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="confirmar">
                            Confirmar contraseña
                        </label>

                        <input
                            type="password"
                            id="confirmar"
                            name="confirmar"
                            placeholder="Repite tu contraseña"
                            minlength="6"
                            required
                        >

                    </div>

                </div>


                <button
                    type="submit"
                    class="form-button"
                >
                    CREAR CUENTA →
                </button>


            </form>


            <div class="login-links">

                <p>
                    ¿Ya tienes una cuenta?
                </p>

                <a href="login.php">
                    Iniciar sesión
                </a>

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