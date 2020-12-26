<?php
require 'functions.php';
$datas = query("SELECT *, p.id AS 'post_id' FROM users_tb AS u JOIN post_tb AS p ON p.id_user = u.id");


if (isset($_POST["submit-post"])) {
  insertPost($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>WaysGram</title>
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    a {
      text-decoration: none;
    }
    .container {
      height: 100%;
    }
    p {
      color: #ffffff;
    }
    .d-flex {
      color: #ffffff;
    }
    .image-author img {
      height: 120px;
      width: 120px;
      object-fit: cover;
    }
    .card-list {
      padding: 20px;
    }
    .image-author {
      width: 120px;
    }
    .card {
      height: 700px;
    }
    .body-img {
      width: 900px;
      height: 350px;
      object-fit: cover;
    }
    .card-text {
      height: 100px;
    }
    .btn-body {
      background-color: #292938;
      color: blue;
    }
  </style>
</head>
<body style="background-color:#000000">
    <div class="container">
      <div class="d-flex flex-row my-5 justify-content-between">
        <h3>WaysGram</h3>
        <button type="button" data-bs-toggle="modal" data-bs-target="#modalPost" class="btn btn-warning btn-post">Add Content</button>
      </div>
      <?php $i = 1; ?>
      <?php foreach ($datas as $data) : ?>
      <div class="card mb-3 mt-3 p-2 d-flex" style="background-color: #292929;">
        <div class="d-flex flex-row card-list">
          <div class="col-md-4 image-author text-center">
            <img src=<?= $data['photo']; ?> alt="...">
            <div><?=$data["name"]?></div>
          </div>
          <div>
            <div class="card-body">
              <img class="body-img" src=<?= $data['image']; ?> alt="...">
              <p class="card-text mt-3 overflow-hidden"><?=$data["content"]?></p>
              <div class="text-center">
                <a href=<?="./detail.php?id={$data["post_id"]}";?>>
                  <button class="btn btn-body" type="button">Load More</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php $i++; ?>
    <?php endforeach; ?>

    <!-- Modal Post -->
  <div class="modal fade" id="modalPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Title</span>
            </div>
            <input type="text" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1" name="title" id="title">
          </div>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Content</span>
            </div>
            <input type="text" class="form-control" placeholder="Content" aria-label="Username" aria-describedby="basic-addon1" name="content" id="content">
          </div>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">image</span>
            </div>
            <input type="text" class="form-control" placeholder="image" aria-label="Username" aria-describedby="basic-addon1" name="image" id="image">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-post">Save changes</button>
        </div>
      </form>
    </div>
  </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>