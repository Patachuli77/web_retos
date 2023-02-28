<main id="inicioSes">
    <h1>Inicio de sesion</h1>
    <form action="index.php?action=verificar&control=controladorSes" enctype="multipart/form-data" method="POST">
        <label for="nombre">Nombre</label></br>
        <input type="text" name="nombre"></br>
        <label for="clave">Contraseña</label></br>
        <input type="text" name="clave"></br>
        <input type="submit" value="Iniciar Sesion">
    </form>
</main>