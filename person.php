<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Person info</title>
  </head>
  <body>
<h2>Person info</h2>
<p>
  post array:<br>
  <?php print_r($_POST);  ?>
</p>
<p>
  <?php echo 'firstname is '.$_POST['fname']; ?>
</p>
<p>
  <?php echo 'lastname is '.$_POST['lname']; ?>
</p>
  </body>
</html>
