<?php require __DIR__ . '/../header.php'; ?>

<?php check_login_or_exit(); ?>

<h2>Contact opnemen</h2>

<br>

<div class="container">

  <form action="<?php echo path('backend/issuesController.php'); ?>" method="POST">

    <input type="hidden" name="action" value="create">
    
    <div class="row">

      <div class="col-25">
        <label for="issue">Vraag</label>
      </div>

      <div class="col-75">
        <textarea id="issue" name="issue" placeholder="Wat is jouw vraag?" style="height:200px"></textarea>
      </div>

    </div>

    <div class="row">
      <input type="submit" value="Vraag doorsturen">
    </div>

  </form>

</div>

<?php require __DIR__ . '/../footer.php'; ?>