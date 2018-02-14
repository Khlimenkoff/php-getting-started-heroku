<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Hello
  <?php if (isset($_GET['submitted'])) { ?>
  <div style="border: solid red 1px">
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>text: <?php echo htmlspecialchars($_GET['text']); ?></p>
    <p>text-area: <?php echo htmlspecialchars($_GET['area']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
    </div>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <div style="background-color: blue">
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <div>
      <p><label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes"> </p>
      <p><label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
      <p><label for="text-field">text field</label>
      <input id="text-field" name="text" type="text" required></p>
      <p><label for="text-area">text area</label>
      <input id="text-area" name="area" type="area" required></p>
    </div>
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>
  </div>
  <?php } ?>

</body>
</html>
