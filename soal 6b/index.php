<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- As a link -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bootcamp Arcademy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
<!-- As a heading -->
<div class="container">
  <div class="row my-4">
    <div class="col">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Add
</button>
<form class="form-inline my-2 my-lg-0 float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Cashier</th>
      <th scope="col">Product</th>
      <th scope="col">Categori</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pevita pearce</td>
      <td>Latte</td>
      <td>Drink</td>
      <td>Rp. 10000</td>
      <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModalLong">
  edit
</button>|<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalLong">
  delete
</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Raisa Andriana</td>
      <td>Cake</td>
      <td>Food</td>
      <td>Rp. 15000</td>
      <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModalLong">
  edit
</button>|<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalLong">
  delete
</button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Pevita pearce</td>
      <td>Latte</td>
      <td>Drink</td>
      <td>Rp. 10000</td>
      <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModalLong">
  edit
</button>|<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalLong">
  delete
</button></td>
    </tr>
  </tbody>
</table>
      
    </div>
  </div>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <div class="form-group">
    <label for="exampleFormControlSelect1">select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Pevita Pearce</option>
      <option>Raisa Andriana</option>
      <option>Your Name</option>
    </select>
  </div>
        <div class="form-group">
    <label for="exampleFormControlSelect1">select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Drink</option>
      <option>Food</option>
    </select>
  </div>
              <input class="form-control mr-sm-2 mt-2" type="search" placeholder="Latte" aria-label="Search">
              <input class="form-control mr-sm-2 mt-2" type="search" placeholder="Rp. 10000" aria-label="Search">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="editModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <div class="form-group">
    <label for="exampleFormControlSelect1">select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Pevita Pearce</option>
      <option>Raisa Andriana</option>
      <option>Your Name</option>
    </select>
  </div>
        <div class="form-group">
    <label for="exampleFormControlSelect1">select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Drink</option>
      <option>Food</option>
    </select>
  </div>
              <input class="form-control mr-sm-2 mt-2" type="search" placeholder="Latte" aria-label="Search">
              <input class="form-control mr-sm-2 mt-2" type="search" placeholder="Rp. 10000" aria-label="Search">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Delete Data
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>