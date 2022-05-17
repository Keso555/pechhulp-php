<?php require __DIR__ . '/../header.php'; ?>

<?php check_login_or_exit(); ?>

<?php
$users = select("
    SELECT *, 
    role_id as role_id
    FROM users
  ");

$support_call = select("
    SELECT *, 
    support_call.id AS support_call_id, 
      users.name AS user 
    FROM support_call
    INNER JOIN users
    ON support_call.user_id = users.id
  ");
?>

<h2>Meldingen</h2>

<? if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] === 3) : ?>

<?php foreach ($support_call as $support_call) : ?>
  <article>
    <span class="user">Geschreven door <?php echo $support_call['user']; ?></span>
    <p><?php echo $support_call['priority']; ?></p>
    <p><?php echo $support_call['status']; ?></p>
  </article>
<?php endforeach; ?>

<? else : ?>

<span> Sorry, maar deze pagina is niet berschikt voor jouw. <span>

<? endif; ?>

<?php require __DIR__ . '/../footer.php'; ?>