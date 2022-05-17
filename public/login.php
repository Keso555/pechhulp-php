<?php require __DIR__ . '/header.php'; ?>

<h2>Inloggen</h2>

<form action="<?php echo path('backend/loginController.php'); ?>" method="POST">
  <div>
    <label for="email">E-mailadres</label>
    <input type="email" name="email" id="email">
  </div>
  <div>
    <label for="password">Wachtwoord</label>
    <input type="password" name="password" id="password">
  </div>
  <input type="submit" value="Inloggen">
</form>

<br>

<?php require __DIR__ . '/footer.php'; ?>