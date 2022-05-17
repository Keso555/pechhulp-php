<?php require __DIR__ . '/../header.php'; ?>

<?php
$reviews = select("
    SELECT *, 
    reviews.id AS review_id, 
      users.name AS user 
    FROM reviews
    INNER JOIN users
    ON reviews.user_id = users.id
  ");
?>

<h2>Reviews</h2>

<?php if (count($reviews) == 0) : ?>
  <p>
    <strong>Er zijn geen reviews.</strong>
  </p>
<?php endif; ?>

<?php foreach ($reviews as $review) : ?>
  <article>
    <h3><a href="<?php echo path('public/reviews/single.php?review=' . $review['review_id']); ?>"><?php echo $review['user_id']; ?></a></h3>
    <span class="user">Geschreven door <?php echo $review['user']; ?></span>
    <p><?php echo $review['description']; ?></p>
    <p><?php echo $review['score']; ?> sterren</p>
  </article>
<?php endforeach; ?>

<?php require __DIR__ . '/../footer.php'; ?>