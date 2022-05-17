<?php require __DIR__ . '/../header.php'; ?>

<?php
if (!isset($_GET['review'])) {
  die('Kan het review niet laden! Geen id meegegeven. Ga terug en probeer het opnieuw');
}

$review = selectOne("
    SELECT *, 
      reviews.id AS review_id, 
      users.name AS user 
    FROM reviews
    INNER JOIN users
    ON reviews.user_id = users.id
    WHERE reviews.id = :id
  ", [
    ':id' => $_GET['review']
  ]);

if (!$review) {
  die('Kan het review niet laden! Ongeldig id meegegeven. Ga terug en probeer het opnieuw');
}
?>

<article>
  <h2><?php echo $review['post_date']; ?></h2>
  <span class="user">Geschreven door <?php echo $review['user']; ?></span>
  <p><?php echo $review['description']; ?></p>
  <p><?php echo $review['score']; ?> sterren</p>
  <?php if(isset($_SESSION['user_id']) && ($review['user_id'] == $_SESSION['user_id'])): ?>
    <a href="<?php echo path('public/reviews/edit.php?review=' . $review['review_id']); ?>">(review bewerken)</a>
    <a href="<?php echo path('public/reviews/delete.php?review=' . $review['review_id']); ?>">(review verwijderen)</a>
    <a href="<?php echo path('public/reviews/index.php'); ?>">(terug naar reviews)</a>
  <?php endif; ?>
</article>

<?php require __DIR__ . '/../footer.php'; ?>