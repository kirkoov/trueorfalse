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
            <li><a href=".sec01">about</a></li>
            <li><a href=".sec02">themed torfs</a></li>
            <li><a href=".sec03">add a torf</a></li>
            <li><a href=".sec04">terms</a></li>
            <li><a href=".sec05">@</a></li>


          </ul>
        </nav>
      </div> <!-- / row -->
    </header>

    <div class="hero">
      <h1><span>welcome to kk's</span><br>true||false</h1>
    </div>

    <main>
      <h3>Output Goes Here</h3>
      <?=$output?>
    </main>

    <div class="row content">
      <h1 class="sec01">about</h1>
      <p>It all starts with a play. You are given a random true and false (<i>torf</i> for short) quiz of the day. All you have to do is read a statement in the centre and click it true or false by pressing the corresponding buttons on the sides. The answer comes referenced, progress is arguably very necessary to display, and timing is of no importance (at least so far). As to the number of torfs, well it will be up to the AI behind the website)).</p>
      <p>Main thing is enjoy it or comment it, or try both.</p>
      <p>This project was originally thought of as one embracing many a language, then it dropped down to English only since it is a universal language. Yet quiz enthusiasts are welcome to add more own torfs translated from other languages, provided they comply with the terms of use. The main idea behind this project is encourage users to read more books and share their newly gained knowledge for their won sake and others' too, via torf quizzes. Comments are also very welcome, since they may really help in defining further course of action.</p>
      <p>This small app demoes: MVC logic in a <a href="https://en.wikipedia.org/wiki/Matryoshka_doll">matryoshka doll</a> fashion to both separate inner workings vs views and avoid code repetition, interaction with a MySQL database via PDOs (PHP Data Objects)...</p>
      <h1 class="sec02">themed torfs</h1>
      <p>These are arguably better, since they enjoy common topics to choose from. First, click on one and you are good to go in the same fashion as the random quiz above. Click whichever feels interesting at the moment.</p>
      <h1 class="sec03">add a torf</h1>
      <p>You have found out something you did not know and are open to share it? Go on and add your own 'I-didn't-know-that!' torfs! Once you are through with a nightmare of a filtering web-form below, your torf will populate the website's database under your email as its ID. This is good for further reference or removal of one's torfs one no longer feels anxious about sharing.</p>
      <p>Special attention to be paid to ones' sources, that they do NOT refer to Wikipedia, to make happy other torf quiz users if they would want to check something up later on. A Wiki-hater script will regularly check the database for Wiki links. No offence, but real books in both physical and electronic nature are solid references, whereas Wikipedia, being great at giving general ideas and unveiling the unknown, so far seems unprofessional and unportected from very young contributors or "editors" who may add whatever they like.</p>
      <p>Start typing in the form fields and your data may show up in the dropdowns to avoid such hell for databases as repetition.</p>
      <h1 class="sec04">terms</h1>
      <p>Terms of use are such that:
        <ol>
          <li>The relevant copyrights to any fact or/and true or false statement(s), or torfs hereinafter (a term coined by KK), saved in the website database are reserved to their original authors, whether translated into English or not.</i>
            <li>KK's copyrights are reserved in terms of coming up with the original idea to accumulate such torfs with their sources, since at the time or writing this no website has, to the best of KK's knowledge, seemed to provide such quizzes that would feature linked materials to prove correctness and authenticity of the facts behind such torfs.</li>
            <li>KK may use other users' torfs saved in the database in builidng other content that may seem fit, with no hidnrance to their authors and with due reference. Should one wish to delete one's torf from the database after it has been used by KK or any third party, such a torf will be no longer possible to delete for ever unless the torf author decides to do the impossible on his or her or their own, which is entirely up to them.</li>
            <li>Torfs added by users of the website are entirely at their discretion and to their liking, unless they breach any law or any relevant legislation, or are offensive in nature or encourage discrimination or acts of terror. KK is not responsible for all such torfs appearing in the database unnoticed, but still shall do KK's best to check the database for such irregularities and violations. Torf users are encouraged to give a helping hand in sieving such unwanted content both proactively and post factum.</li>
            <li>Any torf under one's email may be used by any third party, unless prohibited by the torf author expressly in writing addressed to such a party, which is these two parties' business.</li>
            <li>No Wikipedia(-related) information is to be used as valid and solid reference in the creation of one's torfs on this website.</li>
            <li>Torfs as well as the comments to them will not exceed ... characters each. Reference style will be ... (link)</li>
            <li>By using this website one confirms one's consent to these terms of use and to the use of one's personal data, such as email for identification.</li>
              <li>More terms may follow with the course of time as the project develops or otherwise, without KK notifying the users of these expressly in any form except via publication under this section, in this numbered list.</li>
        </ol>
      </p>
      <h1 class="sec05">@</h1>
      <p>When not struck-through, this indicates that your email is happily familiar to the website and the current PHP session. With a strike-through, it means the opposite.</p>
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
        <a href="mailto:k.koovshinov@gmail.com"><i class="fa fa-envelope"></i></a> &copy; <?="KK, " . date("Y")?>
      </footer>
    </div>
  </body>
</html>