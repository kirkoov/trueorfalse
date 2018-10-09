<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KK's T||F</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="css/screen_layout_large.css"/>
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)"
            href="css/screen_layout_small.css"/>
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)"
            href="css/screen_layout_medium.css"/>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <div id="welcome">
      <h1>Welcome to KK's TorF DataBase!</h1>
      <h3>You've found out something you didn't know was true or false? You're open to share it? Go on and add your own 'I-didn't-know-that!' <i>torfs</i> (short for 'true or false statements') via the form below. They'll get inserted in the database under your email, which can be used for further reference or torf removal. Please pay special attention to your sources and your torf users would be very thankful if they wanted to check something up. Start typing in the fields and your source may show up in the dropdown. The available torfs follow ordered by their themes.</h3>
    </div>
    <div id="info"><span class="subscript">dev</span>INFO<span class="subscript">toggle</span></div>
    <div id="intro">This small app demoes:<ul>
      <li>Interaction with a MySQL database via PHP's PDOs</li>
      <li>this</li></ul>
    </div>


    <p>
      <form action="" method="post">
        <label for="firstname">First name:</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Last name:</label>
        <input type="text" name="lastname" id="lastname">
        <button class="button" type="submit" value="Submit">tORf it!</button>
      </form>
    </p>

    <?php foreach($torfs as $torf) : ?>
      <blockquote>
        <p>
          <?php echo htmlspecialchars($torf, ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </blockquote>
    <?php endforeach; ?>






    
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!-- <script>
      window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
      ga('create', 'UA-GSTBK-K', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
    <noscript>
      <div id="noscript-warning">Things work and look better with JavaScript enabled.</div>
    </noscript>
  </body>
</html>