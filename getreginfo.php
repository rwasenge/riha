<?php
require_once('../mysqli_connect.php');

$query = "SELECT first, last, company, position, email, phone FROM rsvp";

$response = @mysqli_query($dbc, $query);

if($response){
  echo '<table align="left" cellspacing="5" cellpadding="8">
  <tr>
    <td align="left"><b>First Name</b></td>
    <td align="left"><b>Last Name</b></td>
    <td align="left"><b>Company</b></td>
    <td align="left"><b>Position</b></td>
    <td align="left"><b>Email</b></td>
    <td align="left"><b>Phone</b></td>
    </tr>';
    while($row = mysqli_fetch_array($response)){
      echo '<tr><td align="left">' .
      $row['first'] . '</td><td align="left">' .
      $row['last'] . '</td><td align="left">' .
      $row['company'] . '</td><td align="left">' .
      $row['position'] . '</td><td align="left">' .
      $row['email'] . '</td><td align="left">' .
      $row['phone'] . '</td><td align="left">';

      echo '</tr>';
    }
    </table>
} else {
  echo "Couldn't issue database query<br />";
  echo mysqli_error($dbc);
}
mysqli_close($dbc);
?>
