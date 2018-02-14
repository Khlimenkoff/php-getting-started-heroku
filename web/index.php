<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
  <?php if (isset($_GET['submitted'])) { ?>
  <div name="begunok" style="border: solid red 1px">
    <h1>The server had accepted:</h1>
    <p>Radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>Text: <?php echo htmlspecialchars($_GET['text']); ?></p>
    <p>Text-area: <?php echo htmlspecialchars($_GET['area']); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($_GET['pismo']); ?></p>
    <p>Checkbox: <?php echo htmlspecialchars($_GET['galochka']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
    </div>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <div style="background-color: lightblue; border-radius:20px; width: 200px; padding:5%">
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <div>
      <p><label for="my-radio-yes">Radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes"> </p>
      <p><label for="my-radio-no">Radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
      <p><label for="text-field">Text field </label>
      <input id="text-field" name="text" type="text" required></p>
      <p><label for="text-area">Text area </label>
      <input id="text-area" name="area" type="area" required></p>
      <p><label for="e-mail">E-mail: </label>
      <input id="e-mail" name="pismo" type="e-mail" required></p>
      <p><label for="checkbox">Checkbox: </label>
      <input id="checkbox" name="galochka" type="checkbox" required></p>
      <p><label for="checkbox">Range: </label>
      <input type="range" id="range" name="begunok" min="1" max="100" required></p>
    </div>
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>
  </div>
  <?php } ?>

</body>
</html>
