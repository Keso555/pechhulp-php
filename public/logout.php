<?php require __DIR__ . '/header.php'; ?>

<h2>Uitloggen</h2>

<p>Weet u zeker dat u wilt uitloggen?</p>

<form action="<?php echo path('backend/logoutController.php'); ?>" method="POST">
  <input type="submit" value="Ja, uitloggen">
</form>

<br>

<?php require __DIR__ . '/footer.php'; ?>