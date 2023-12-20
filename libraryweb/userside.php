<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Book Request Form</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php include 'dbcon.php'; ?>

<body>
  <div class="container mt-5">
    <h1 class="mb-4">Book Request Form</h1>
    <form action="submit_form.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="barcode">Enter Barcode/ID Number:</label>
        <input type="text" id="barcode" name="barcode" class="form-control" />
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="studentNo">Student No.:</label>
          <input type="text" id="studentNo" name="studentNo" class="form-control" />
        </div>
        <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" class="form-control" />
        </div>
      </div>

      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control" />
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="dateRequested">Date Requested:</label>
          <input type="date" id="dateRequested" name="dateRequested" class="form-control" />
        </div>
        <div class="form-group col-md-6">
          <label for="course">Course:</label>
          <input type="text" id="course" name="course" class="form-control" />
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" />
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
