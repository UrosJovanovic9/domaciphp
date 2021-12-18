<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Odabir kurseva</title>
    <!-- <link rel="shortcut icon" type="image/png" href="/img/logo.png"/> -->
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>

<nav>

<div class = "navbar-header">
    <a class = "navbar-brand" href=""><img src="img/logo.png" alt="" class = "image-responsive logo"></a>
</div>



<div class = "nav">
<ul class = "navbar-nav">
    <li class = "home"><a href="#home">Home</a></li>
    <li class = "about"><a href="#about">About</a></li>
    <li class = "products"><a href="#product">Products</a></li>
    <li class = "tabela"><a href="#pregled">Tabela</a></li>
</ul>
</div>

</nav>


<!-- FORMA1//////////////////////////////////////////////////////////////////////////////// -->

<p class = "paragraf">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem est nobis dicta repudiandae quis nesciunt, 
  asperiores ab deserunt. Optio, recusandae!
  </p>



<form>
<h3 id="home">Ovo je h1 tag home gde mozete da unesete sve neophodne informacije</h3>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput">Example label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>

  <button type="submit" class="btn btn-outline-secondary btn-lg">Sign in</button>
</form>


<hr>


<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->



<form>
<h3 id="about">Ovo je h1 tag about </h3>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput">Example label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>

  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>

  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>

  <button type="submit" class="btn btn-outline-secondary btn-lg">Sign in</button>
</form>


<!-- //////////////////////////////////////////////////////////////////////////////////// -->


<hr>

<form>
<h3 id="product">Ovo je h1 tag product </h3>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput">Example label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>
  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>

  <div class="form-group">
    <!-- <label for="formGroupExampleInput2">Another label</label> -->
    <input type="text" class="form-control" id="formGroupExampleInput2"  placeholder="Another input">
  </div>


  <button type="submit" class="btn btn-outline-secondary btn-lg">Sign in</button>
</form>

<hr>


<div id="pregled" class="panel panel-success" style="margin-top: 1%;">
    
    <div class="panel-body">
        <table id="myTable" class="table table-hover table-striped" style="color: black;" >
            <thead class ="thead">
            <tr >
                <th scope="col"></th>
                <th scope="col">Naslov 1</th>    
                <th scope="col">Naslov 2</th>
                <th scope="col">Naslov 3</th>
            </tr>
            </thead>
            <tbody>
           
                <tr>
                <td>
                        <label class="custom-radio-btn">
                            <input type="radio" name="checked-donut" value=>
                            <span class="checkmark"></span>
                        </label>
                </td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
               
            </tbody>
        </table>

        <button style = "color:red" type="submit" class="btn btn-outline-secondary btn-lg">Sign in</button>
        <button style = "color:yellow" type="submit" class="btn btn-outline-secondary btn-lg">Sign in</button>
        <button style = "color:green"type="submit" class="btn btn-outline-secondary btn-lg">Sign in</button>
        
    </div>
</div>






<!-- <form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">State</label>
      <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Zip</label>
      <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form> -->










    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>