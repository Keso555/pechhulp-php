<?php require __DIR__ . '/../header.php'; ?>

<?php check_login_or_exit(); ?>

<?php
if (!isset($_GET['review'])) {
  die('Kan het review niet laden! Geen id meegegeven. Ga terug en probeer het opnieuw');
}

$review = selectOne("
    SELECT *, 
    reviews.id AS review_id
    FROM reviews
    WHERE reviews.id = :id
  ", [
    ':id' => $_GET['review']
  ]);

if (!$review) {
  die('Kan het review niet laden! Ongeldig id meegegeven. Ga terug en probeer het opnieuw');
}
?>

<h2>Bericht bewerken</h2>

<form action="<?php echo path('backend/reviewsController.php'); ?>" method="POST">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" value="<?php echo $review['review_id']; ?>">

  <div>
    <label for="score">Score</label>
    <input type="text" name="score" id="score" value="<?php echo $review['score']; ?>">
  </div>
  <div>
    <label for="description">Inhoud</label>
    <textarea type="content" name="description" id="description"><?php echo $review['description']; ?></textarea>
  </div>
  <input type="submit" value="Review aanpassen">
</form>

<br>

<?php require __DIR__ . '/../footer.php'; ?>