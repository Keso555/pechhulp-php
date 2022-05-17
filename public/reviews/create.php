<?php require __DIR__ . '/../header.php'; ?>

<?php check_login_or_exit(); ?>

<h2>Review aanmaken</h2>

<br>

<div class="container">

  <form action="<?php echo path('backend/reviewsController.php'); ?>" method="POST">

    <input type="hidden" name="action" value="create">
      
    <div class="row">

      <div class="col-25">
        <label for="score">Score</label>
      </div>

      <div class="col-25">
        <select name="score" id="score">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
      </div>

    </div>
      
    <div class="row">

      <div class="col-25">
        <label for="description">Inhoud</label>
      </div>

      <div class="col-75">
        <textarea id="description" name="description" placeholder="Wees creatief.." style="height:200px"></textarea>
      </div>

    </div>

    <div class="row">
      <input type="submit" value="Review schrijven">
    </div>

  </form>

</div>

<?php require __DIR__ . '/../footer.php'; ?>