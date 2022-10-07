<form method="post" action="" name="login">
    <div class="form-element">
        <label>Nombre de usuari@: </label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña:</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Acceder</button>
</form>
<p>¿Todavía no eres miembro? <a href="FormRegistro.php">Registrarse</a></p>