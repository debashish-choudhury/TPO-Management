<link rel="stylesheet" href="css/master.css">

<?php if (count($errors) > 0): ?>
    <div class="error">
      <?php foreach ($errors as $error): ?>
        <p><?php echo $error; ?></p>
      <?php endforeach ?>
    </div>
  <?php endif ?>
<style>
.error {
  width: 50%;
  height: 50px;
  margin: 0px auto;
  padding 10px;
  border: 1px solid #a94442;
  background: #f2dede;
  color: #a94442;
  border-radius: 5px;
  text-align: left;
}
</style>
