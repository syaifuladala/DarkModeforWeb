<!DOCTYPE html>
<html lang="en">
<head>
  <title>Programming Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- JUMBOTRON -->
<div class="jumbotron text-center">
  <h1>Welcome to Light-Dark Website</h1>
  <button type="button" class="btn btn-link" onclick="lightFunction()">Light Mode</button>
  <button type="button" class="btn btn-link" onclick="darkFunction()">Dark Mode</button>
</div>
  
<!-- CONTAINER -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Fullstack</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="button" class="btn btn-detail" data-toggle="modal" data-target="#fullstackModal">Detail</button>
    </div>
    <div class="col-sm-4">
      <h3>Front-End</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="button" class="btn btn-detail">Detail</button>
    </div>
    <div class="col-sm-4">
      <h3>Back-End</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="button" class="btn btn-detail">Detail</button>
    </div>
    <div class="col-sm-4">
      <h3>Mobile Development</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="button" class="btn btn-detail">Detail</button>
    </div>
  </div>
</div>

<!-- MODAL -->
<div class="modal" id="fullstackModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fullstack Web Developer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <h5>Bootcamp Detail</h5>
        <table width="100%">
            <tr>
                <td width="40%">Technology</td>
                <td width="60">Laravel</td>
            </tr>
            <tr>
                <td width="40%">Batch</td>
                <td width="60">25 June - 17 July 2020</td>
            </tr>
            <tr>
                <td width="40%">Investment</td>
                <td width="60">150 USD</td>
            </tr>
        </table>
        <br>
        <h5>Join With Us!</h5>
        <form>
        <table width="100%">
            <tr>
              <td><input type="text" class="form-control" placeholder="Full Name" required></td>
            </tr>
            <tr>
              <td><input type="email" class="form-control" placeholder="yours@mail.com" required></td>
            </tr>
            <tr>
              <td><input type="checkbox" required> I agree with all <a href="#">Term</a> and <a href="#">Conditions</a></td>
            </tr>
        </table>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-apply">Apply</button>
      </div>

    </div>
  </div>
</div>

<script>
function lightFunction() {
   var element = document.body;
   element.classList.remove("dark-mode");
   element.classList.add("light-mode");
}
function darkFunction() {
   var element = document.body;
   element.classList.remove("light-mode");
   element.classList.add("dark-mode");
}
</script>

</body>
</html>
