<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
   <div class="waterfall">
  <ul class="list-group">
    <li class="list-group-item">
      <a href="#">
        <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bGVuc3xlbnwwfHwwfHw%3D&w=1000&q=80">
      </a>
    </li>
  </ul>

  <ul class="list-group">
    <li class="list-group-item">
      <a href="#">
        <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bGVuc3xlbnwwfHwwfHw%3D&w=1000&q=80">
      </a>
    </li>
  </ul>

  <ul class="list-group">
    <li class="list-group-item">
      <a href="#">
        <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bGVuc3xlbnwwfHwwfHw%3D&w=1000&q=80">
      </a>
    </li>
  </ul>
  ...
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    	<script src="<?=base_url('webassets/js/')?>bootstrap-waterfall.js"></script>

  </body>
</html>
<style>
    .waterfall .list-group { margin-right: 14px; }

.waterfall .list-group > li:first-child {
  padding: 0;
  background-color: white;
}

.waterfall .list-group > li:first-child img {
  width: 100%;
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}

.waterfall .list-group > li { background-color: #f5f5f5; }

@media (min-width: 768px) {

  .waterfall .list-group { width: 346px; }

}

@media (min-width: 992px) {

  .waterfall .list-group { width: 299px; }

}

@media (min-width: 1200px) {

  .waterfall .list-group { width: 271px; }
  
}
</style>
<script>
$( document ).ready(function() {
     alert(" hi sanjay");
});
    $('.waterfall').waterfall();
  

</script>