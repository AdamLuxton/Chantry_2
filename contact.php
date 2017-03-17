
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contact - Chantry Island</title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGmkeMrLwPj80bBb15X4SBxud0GEXHVGI"></script>
    <link rel="stylesheet" href="css/app.css">

  </head>

  <body>

    <?php include('includes/header.html');?>

    <div class="mainText" id="heritageSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-xs-push-1 col-md-8 col-md-push-2 text-center">
            <img src="images/island.svg" alt="MHS logo" class="mhsLogo">
            <h2>Contact Us</h2>
            <br>
            <form class="text-left" action="#" method="post">
              <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" id="name">
              </div>            <div class="form-group">
              <label for="email">Your Email:</label>
              <input type="email" name="email" placeholder="Enter Your Email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <input type="submit" class="btn btn-default" name="submit" value="SEND US YOUR MESSAGE">
           </form>
           <br>
          </div>
        </div>
      </div>
    </div>
    <div class="mainText" id="Box2">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-xs-push-1 col-md-8 col-md-push-2 text-center">
            <img src="images/mail.svg" alt="MHS logo" class="mhsLogo">
            <h2>Reach Out To Us</h2>
            <p>
              Call: 519-797-5862 <br>
              Toll: Free 1-866-797-5862
            </p>
            <h2>Mailing Address</h2>
            <p>
              Marine Heritage Society <br>
              Box 421 <br>
              Southampton, Ontario <br>
              Canada, N0H 2L0
            </p>
            <p class="dots bottomText">&#8226; 	&#8226; 	&#8226;</p>
          </div>
        </div>
      </div>
    </div>
    <div class="map-container">
      <div class="map-wrapper">
      </div>
      <button id="mapBut" class="btn btn-default">GET DIRECTIONS</button>
    </div>

    <div class="mainText">
      <div class="container">
        <div class="row">
          <div class="col-sm-2 col-sm-push-2 text-xs-center">
            <h2>Location</h2>
            <p>86 Saugeen St.<br>
            Southampton, ON <br>
            Canada N0H 2L0</p>
          </div>
          <div class="col-sm-6 col-sm-push-2 text-xs-center">
            <h2>Directions</h2>
            <p>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.</p>
          </div>
        </div>
      </div>
    </div>

    <?php include('includes/footer.html'); ?>


    <script src="js/jquery/dist/jquery.js"></script>
    <script src="js/javascripts/bootstrap.js"></script>
    <script src="js/map.js"></script>
  </body>
</html>
