<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="3D geoinformation research group at TU Delft">
  <meta name="keywords" content="3D GIS, GIS, 3D geoinformation, TU Delft, CityGML">

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png"/>
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png"/>
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png"/>
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png"/>
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png"/>
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png"/>
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png"/>
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png"/>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png"/>
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32"/>
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192"/>
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96"/>
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16"/>
  <link rel="manifest" href="/manifest.json"/>
  <meta name="msapplication-TileColor" content="#2b5797"/>
  <meta name="msapplication-TileImage" content="/mstile-144x144.png"/>
  <meta name="theme-color" content="#ffffff"/>

  <title>3D geomisinformation</title>


  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/syntax.css" rel="stylesheet" />
  <link href="/assets/css/mine.css" rel="stylesheet" />
  <link href="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" rel="stylesheet" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59614264-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

  
  <body>
  
  <!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-xs hidden-sm" href="http://www.tudelft.nl/en/">
        <img class="tud" src="/img/logos/tudwhite.png" onmouseover="this.src='/img/logos/tudblue.png'" onmouseout="this.src='/img/logos/tudwhite.png'" />
      </a>
      <a class="navbar-brand hidden-xs" href="/">
        <img class="logo" src="/img/logos/navbar-white.png" onmouseover="this.src='/img/logos/navbar-blue.png'" onmouseout="this.src='/img/logos/navbar-white.png'" />
      </a>
      <a class="navbar-brand visible-xs-block" href="/">
        <img class="logo"  src="/img/logos/navbar-short-white.png" onmouseover="this.src='/img/logos/navbar-short-blue.png'" onmouseout="this.src='/img/logos/navbar-short-white.png'" />
      </a>
    </div>
    <div class="navbar-collapse collapse navbar-right" id="navbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">about <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/about/">the group</a></li>
            <li><a href="/about/#people">our staff</a></li>
            <li><a href="/about/#where">our location</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">research <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/projects">projects</a></li>
            <li><a href="/pubs">publications</a></li>
            <li><a href="/3dtalks">3D talks</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="/education" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">education <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <!-- <li><a href="/education/">education</a></li> -->
            <li><a href="/education/#courses">MSc Geomatics</a></li>
            <li><a href="/education/#theses">MSc theses</a></li>
            <li><a href="/education/msctopics">potential thesis topics</a></li>
          </ul>
        </li>
        <!--<li class="dropdown">
          <a href="/download" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">download <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/code">open-source software</a></li>
            <li><a href="/opendata">open data</a></li>
          </ul>
        </li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">etc <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/news">news</a></li>
            <li><a href="/events">events</a></li>
            <li><a href="/jobs">jobs</a></li>
            <li><a href="/journals">GIS journals</a></li>
            <li><a href="/conferences">GIS conferences</a></li>
            <li><a href="/open-gis-software">GIS software</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

  <div class="container">
<?php
	$repository_path = '/var/www/website';
	// $repository_path = '/Users/hugo/www/website';
?>

<h1>Git pull</h1>
<pre><code>
<?php
	echo("$ git -C ".$repository_path." pull\n");
	system("git -C ".$repository_path." pull 2>&1");
?>
</code></pre>

<h1>Jekyll build</h1>
<pre><code>
<?php
	echo("$ jekyll build --source ".$repository_path." --destination ".$repository_path."/_site\n");
	system("jekyll build --source ".$repository_path." --destination ".$repository_path."/_site 2>&1");
?>
</code></pre>
</div>
  <hr>

<footer>
	<!-- <a href="/feed.xml"><i class="fa fa-rss"></i></a> -->
	<a href="https://twitter.com/tudelft3d"><i class="fa fa-twitter"></i></a> 
  <a href="https://github.com/tudelft3d"><i class="fa fa-github"></i></a>
	<a href="/about/#where"><i class="fa fa-map-marker"></i></a>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<!-- <script src="/assets/js/holder.js"></script> -->
<script src="/assets/js/jquery.eqheight.js"></script>
<script src="/assets/js/jquery.mark.min.js"></script>
<script>
  $(document).ready(function() {

    $(".row").eqHeight(".column");


  });
</script>
  </body>
</html>
