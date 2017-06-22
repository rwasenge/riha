
  <?php
require_once('../mysqli_connect.php');


  if(isset($_POST['first'])){
    $first = trim($_POST['first']);
    $last = trim($_POST['last']);
    $company = trim($_POST['company']);
    $position = trim($_POST['position']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $query ="INSERT INTO rsvp (first, last, company, position, email, phone) VALUES(?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "ssssss", $first, $last, $company, $position, $email, $phone);
    mysqli_stmt_execute($stmt);
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    if($affected_rows == 1){
    //  echo '<h2 align="center"> Submission Successful! </h2>';
      mysqli_stmt_close($stmt);
      mysqli_close($dbc);
    }else{
      echo '<h2 align="center"> Error Occurred <br /></h2>';
      echo mysqli_error();
      mysqli_stmt_close($stmt);
      mysqli_close($dbc);
    }

  }
   ?>
