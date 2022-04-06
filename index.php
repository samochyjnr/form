<!doctype html>
<html lang="en">
  <head>

    <link href="css/style.css" rel="stylesheet">
<link href="javascript.js" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>FORM</title>
  </head>
  <body>

    <section>

</section>

<section class="sec1">


  <div class="container cont2">
  <div class="row">
    <div class="col-sm go1">

    </div>

    <div class="col-sm">

      <div class="card c1" style="width: 35rem;">
<div class="card-body cb">
  <h5 class="ct1">Send Us A Message</h5>

  <form action="formprocessing.php" method="post">


  <p>
  <label for="inputName">TELL US YOUR NAME * </label>
  <br>
  <input class="num2" type="text" placeholder="First name" name="firstname" id="inputName">
  <input class="num2" type="text" placeholder="Last name" name="lastname" id="inputName">
  </p>

  <p>
  <label for="inputEmail">ENTER YOUR EMAIL * </label>
  <br>
  <input class="num1" type="email" placeholder="Eg. example@email.com" name="email" id="inputEmail">
  </p>

  <p>
  <label for="inputNumber">ENTER PHONE NUMBER </label>
  <br>
  <input class="num1" type="tel" placeholder="number" name="number" id="inputNumber">
  </p>

  <p>
  <label for="inputMessage">MESSAGE * </label>
  <br>
  <textarea name="message" placeholder="write us a message" id="inputMessage" row="5" cols="57">
    </textarea>
  </p>

<div class="but1">
  <input class="btn btn-success" type="submit" value="Submit">
<input class="btn btn-success" type="reset" value="Refill">

</div>

  </form>



</div>
</div>


    </div>

    <div class="col-sm">

    </div>
  </div>
</div>




</section>











    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


  </body>
</html>
