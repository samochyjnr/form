<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="javascript.js" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<section class="sec2">

<h1 class= 'h1i'> THANKS FOR SUBMITTING THE FORM</h1> <br>
<img src='img/greencheck1.png' alt='green' class='green1'>
<h4 class= 'h1i'>Here are the informations you filled: </h4>




<table class="table table-bordered tb1">
<tbody>
  <tr>
     <th scope="row">First Name</th>
    <td><?php echo $_POST["firstname"]; ?> </td>
  </tr>
  <tr>
     <th scope="row">Last Name</th>
    <td><?php echo $_POST["lastname"]; ?> </td>
  </tr>
  <tr>
     <th scope="row">Email</th>
    <td><?php echo $_POST["email"]; ?> </td>
  </tr>
  <tr>
     <th scope="row">Phone</th>
    <td><?php echo $_POST["number"]; ?> </td>
  </tr>
  <tr>
     <th scope="row">Message</th>
    <td><?php echo $_POST["message"]; ?> </td>
  </tr>

</tbody>
</table>

</section>


  </body>
</html>
