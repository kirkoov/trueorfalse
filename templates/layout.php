<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$title?></title>
    <meta name="description" content="KK's T||F layout file">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <header class="main_h">
      <!-- <h1>Logo</h1> -->
      <div class="row">
        <a class="logo" href="#">t||f</a>
        <div class="mobile-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav>
          <ul>
            <li><a href=".sec02">themed torfs</a></li>
            <li><a href=".sec03">add a torf</a></li>
            <li><a href=".sec04">about</a></li>
            <li><a href=".sec05">@</a></li>

          </ul>
        </nav>
      </div> <!-- / row -->
    </header>

    <div class="hero">
      <h1><span>welcome to kk's</span><br>true||false</h1>
    </div>

    <div class="row content">
      <!-- <h1 class="sec01">?</h1>
      <p></p> -->
      <h1 class="sec02">themed torfs</h1>
      <p>These are arguably better, since they enjoy common topics to choose from. First, opt for one and you are good to go in the same fashion as the random quiz above. Topic buttons follow, click whichever feels interesting at the moment.</p>
      <h1 class="sec03">add a torf</h1>
      <p>You have found out something you did not know was true or false? You are open to share it? Go on and add your own 'I-didn't-know-that!' torfs! Once you are through with a nightmare of a filtering web-form below, your torf will get inserted in our torf database under your email. The latter is used for further reference or removal of your torfs you no longer feel anxious about. Please pay special attention to your sources and your torf users are sure to be very thankful if they would want to check something up later on. Start typing in the form fields and your data may show up in the dropdowns.</p>
      <h1 class="sec04">about</h1>
      <p>It all starts with a play. You are given a random true and false (<i>torf</i>) quiz of the day. All you have to do is read a torf statement in the centre and then choose whether it is true or false by pressing the corresponding T or F buttons on the sides. Its sources are somewhere easy to find, progress is arguably very necessary to display, and timing is of no importance (at least so far). As to the number of torfs, well it will be up to the AI behind the website)). Main thing is enjoy it or comment it, or try both.</p>
      <p>This project was originally thought of as one embracing many a language, then it dropped down to only English, yet quiz enthusiasts are welcome to add more torfs translated from other languages. The main idea behind this project is encourage reading of more books and sharing knowledge thus gained, via torf quizzes. Comments are also very welcome, since they may really help in defining further course of action.</p>
        <h1 class="sec05">@</h1>
      <p>When not struck-through, this indicates that your email is happily familiar to the website and the PHP session is aware of it. With a strike-through, it means the opposite.</p>
    </div>

    <div class="topnav" id="navbar">
      <a href="#about">About</a>
      <a href="#email" id="signin-email" title="Your @ to sign in">@</a>
    </div>

    

    <div id="welcome">
      <h3></h3>
    </div>

    <div id="info"><span class="subscript">dev</span>INFO<span class="subscript">toggle</span></div>
    <div id="intro">This small app demoes:<ul>
      <li>MVC logic in a <a href="https://en.wikipedia.org/wiki/Matryoshka_doll">matryoshka doll</a> fashion to both separate inner workings vs views and avoid code repetition</li>
      <li>Interaction with a MySQL database via PDOs (PHP Data Objects)</li>
      <li>...</li></ul>
    </div>

    <main>
      <h3>Output Goes Here</h3>
      <?//=$output?>

    </main>

    <footer>
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
      <a href="mailto:k.koovshinov@gmail.com"><i class="fa fa-envelope"></i></a> &copy; <?="KK's T||F DB, " . date("Y")?>
    </footer>
  </body>
</html>