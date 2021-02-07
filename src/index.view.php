<?php require('views/partials/head.php'); ?>

<body>

  <main>

    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">

        <div class="col-5 text-center my-5">
          <h1>
            Please fill the form
          </h1>
        </div>

        <div class="col-10 d-flex justify-content-center">
          <form method="POST" action="/names">
            <input name="name" type="text" class="border-none rounded">
            <button type="submit" class="border-1 btn btn-primary">
              Submit
            </button>
          </form>
        </div>
      </div>

      <div class="row m-0">
        <div class="col-10 justify-content-center align-items-center">
          <?php foreach ($users as $user) : ?>
            <li> <?= $user->name ?> </li>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

  </main>
  <?php require('views/partials/footer.php'); ?>
</body>

</html>