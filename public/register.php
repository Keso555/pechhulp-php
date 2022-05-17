<?php require __DIR__ . '/header.php'; ?>

<h2>Registreren</h2>

<form action="<?php echo path('backend/registerController.php'); ?>" method="POST">

  <div>
    <label for="role_id">Rol</label>
      <select name="role_id" id="role_id">
        <option value="3">Customer</option>
      </select>
  </div>

  <div>
    <label for="name">Naam</label>
    <input type="name" name="name" id="name">
  </div>
  <div>
    <label for="email">E-mailadres</label>
    <input type="email" name="email" id="email">
  </div>
  <div>
    <label for="password">Wachtwoord</label>
    <input type="password" name="password" id="password">
  </div>

  <input type="submit" value="Registreren">
</form>

<br>

<?php require __DIR__ . '/footer.php'; ?>