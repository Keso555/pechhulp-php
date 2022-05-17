<?php require __DIR__ . '/../header.php'; ?>

<?php check_login_or_exit(); ?>

<?php
if (!isset($_GET['review'])) {
  die('Kan bericht niet laden! Geen id meegegeven. Ga terug en probeer het opnieuw');
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

<h2>Review verwijderen</h2>

<p>Weet u zeker dat u dit review wilt verwijderen?</p>

<form action="<?php echo path('backend/reviewsController.php'); ?>" method="POST">
  <input type="hidden" name="action" value="delete">
  <input type="hidden" name="id" value="<?php echo $review['review_id']; ?>">
  <input type="submit" value="Ja, verwijderen">
</form>

<br>

<?php require __DIR__ . '/../footer.php'; ?>