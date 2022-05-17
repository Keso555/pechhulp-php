<?php require __DIR__ . '/header.php'; ?>

<?php
$garages = select("
    SELECT *, 
    garages.id AS garage_id, 
      users.name AS user 
    FROM garages
    INNER JOIN users
    ON garages.user_id = users.id
  ");
?>

<h2>Garages</h2>

<?php if (count($garages) == 0) : ?>
  <p>
    <strong>Er zijn geen garages.</strong>
  </p>
<?php endif; ?>

<?php foreach ($garages as $garage) : ?>
  <article>
    <span class="garage"><?php echo $garage['company_name']; ?></span>
    <p><?php echo $garage['location']; ?></p>
  </article>
<?php endforeach; ?>

<?php require __DIR__ . '/footer.php'; ?>