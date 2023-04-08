<?php

require './PhpassHashedPassword.php';

$hasher = new PhpassHashedPassword(16);

if ($_POST['validate']) {
  $check = $hasher->check(
    $_POST['plaintext_validate'],
    $_POST['hash_validate']
  );

  $result = $check ? 'Valid hash for password' : 'Invalid';
}

?>

<style>
  h1 {
    margin: 20px;
  }
  main {
    display: flex;
  }
  article {
    border: 1px solid #000;
    margin: 20px;
    padding: 20px;
    flex-grow: 1;
    flex-basis: 50%;
  }
  .valid {
    color: green;
  }
  .invalid {
    color: red;
  }
</style>

<h1>Drupal Hash System</h1>
<main>
  <article style="">
    <h2>Validate</h2>
    <form action="/" method="POST">
      <label>
        Plain Text Password<br>
        <input
          type="text"
          name="plaintext_validate"
          placeholder="Inform plain text pass"
          value="<?php echo $_POST['plaintext_validate'] ?>"
        />
      </label>
      <br><br>

      <label>
        Database hash<br>
        <input
          type="text"
          name="hash_validate"
          placeholder="Inform hash"
          value="<?php echo $_POST['hash_validate'] ?>"
        />
      </label>
      <br><br>

      <input type="submit" value="Validate hash" name="validate" />

      <h3>Result:</h3>
      <p class="<?php echo $check ? 'valid' : 'invalid'?>">
        <?php echo $result ?>
      </p>
    </form>
  </article>
</main>
