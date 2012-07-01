<?php
//Include wordpress files
$wp_blog_header_path = '';
if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.'wp-blog-header.php'))
{
    $wp_blog_header_path = $_SERVER['DOCUMENT_ROOT'].'/'.'wp-blog-header.php';
}
    else if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.'wp-blog-header.php'))
{
    $wp_blog_header_path = $_SERVER['DOCUMENT_ROOT'].'/'.'wp-blog-header.php';
}

if($wp_blog_header_path != '') {
    //Include Wordpress
    include($wp_blog_header_path);
    header("HTTP/1.0 200 OK");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="da-DK" xml:lang="da-DK">
  <head>
    <title xmlns="">DTP og tegneprogrammer</title>
    <meta xmlns="" http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta xmlns="" name="robots" content="index,follow" />
    <link xmlns="" rel="canonical" href="http://ubuntudanmark.dk/support/" />
    <link xmlns="" rel="stylesheet" type="text/css" href="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/style.css" />
    <link xmlns="" rel="pingback" href="http://ubuntudanmark.dk/xmlrpc.php" />
    <link xmlns="" rel="alternate" type="application/rss+xml" title="Ubuntu Danmark » Feed" href="http://ubuntudanmark.dk/feed/" />
    <link xmlns="" rel="alternate" type="application/rss+xml" title="Ubuntu Danmark » Kommentarfeed" href="http://ubuntudanmark.dk/comments/feed/" />
    <link xmlns="" rel="stylesheet" id="nivo-slider-css" href="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/js/slider/nivo-slider.css?ver=2" type="text/css" media="all" />
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-includes/js/jquery/jquery.js?ver=1.4.2"></script>
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/js/jquery.corner.js?ver=2.08"></script>
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/js/slider/jquery.nivo.slider.pack.js?ver=2"></script>
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-includes/js/comment-reply.js?ver=20090102"></script>
    <script xmlns="" type="text/javascript" src="http://ubuntudanmark.dk/wp-content/plugins/google-analyticator/external-tracking.min.js?ver=6.1.1"></script>
    <link xmlns="" rel="EditURI" type="application/rsd+xml" title="RSD" href="http://ubuntudanmark.dk/xmlrpc.php?rsd" />
    <link xmlns="" rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://ubuntudanmark.dk/wp-includes/wlwmanifest.xml" />
    <link xmlns="" rel="index" title="Ubuntu Danmark" href="http://ubuntudanmark.dk/" />
    <link xmlns="" rel="prev" title="Om Ubuntu" href="http://ubuntudanmark.dk/om-ubuntu/" />
    <link xmlns="" rel="next" title="Download" href="http://ubuntudanmark.dk/download/" />
    <link xmlns="" rel="canonical" href="http://ubuntudanmark.dk/support/" />
    <link xmlns="" rel="shortcut icon" href="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/images/favicon.ico" type="image/x-icon" />
    <meta xmlns="" http-equiv="X-UA-Compatible" content="chrome=1" />
    <script xmlns="" type="text/javascript">
	var analyticsFileTypes = ['mp3','pdf','ogg'];
	var analyticsEventTracking = 'enabled';
</script>
    <script xmlns="" type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-3824272-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
    <link rel="home" href="index.php" title="Kontor" />
    <link rel="up" href="index.php" title="Kontor" />
    <link rel="prev" href="office-oohelp.php" title="Få hjælp til OpenOffice" />
    <link rel="next" href="office-finance.php" title="Finansprogrammer" />
  </head>
  <body class="single single-post">
    <div id="wrapper" class="hfeed">
      <div id="header">
        <div id="branding">
          <div id="blog-title">
            <span>
              <a href="http://ubuntudanmark.dk/" title="Ubuntu Danmark" rel="home">Ubuntu Danmark</a>
            </span>
          </div>
          <div id="blog-description">Danske brugere</div>
        </div>
        <div id="access">
          <div id="loco-header-menu">
            <ul id="primary-header-menu"><?php
            ob_start();
            dynamic_sidebar('primary-header-menu');
            $primary_header_menu = ob_get_clean();
            $primary_header_menu = str_replace(' menu-item-635', ' menu-item-635 current-menu-item', $primary_header_menu);
            $primary_header_menu = str_replace(' menu-item-636', ' menu-item-636 current-menu-item', $primary_header_menu);
            echo($primary_header_menu);
            ?></ul>
          </div>
        </div>
      </div>
      <div id="secondary-header">
        <div id="secondary-access">
          <div id="loco-search-form">
            <form id="searchform" method="get" action="/help/10.10/search.php">
              <div>
                <input id="s" name="s" type="text" value="" size="32" tabindex="1" />
                <input id="searchsubmit" name="searchsubmit" type="submit" value="Søg" tabindex="2" />
              </div>
            </form>
          </div>
          <div id="loco-sub-header-menu"></div>
        </div>
      </div>
      <div id="main">
        <div id="container">
          <div id="content">
            <div class="page type-page hentry" style="-moz-border-radius: 5px 5px 5px 5px;">
              <h1 class="entry-title">DTP og tegneprogrammer</h1>
              <div class="entry-content">
                <div class="sect1" title="DTP og tegneprogrammer">
                  <p><span class="emphasis"><em>Desktoppublishing</em></span> (DTP) programmer giver dig mulighed for at fremstille publikationer såsom nyhedsbreve og brochurer.</p>
                  <div class="itemizedlist">
                    <ul class="itemizedlist" type="disc">
                      <li class="listitem">
                        <p><span class="strong"><strong><span class="application"><strong>Scribus</strong></span></strong></span> er et professionel desktoppublishing-program.</p>
                        <div class="itemizedlist">
                          <ul class="itemizedlist" type="circle">
                            <li class="listitem">
                              <p>For yderligere information, se <a class="ulink" href="http://www.scribus.net/" target="_top">hjemmesiden for Scribus</a>.</p>
                            </li>
                            <li class="listitem">
                              <p>For at starte <span class="application"><strong>Scribus</strong></span>, tryk på <span class="guimenu">Programmer</span> → <span class="guimenuitem">Kontor</span> → <span class="guimenuitem">Scribus</span>.</p>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="listitem">
                        <p>I <span class="strong"><strong><span class="application"><strong>OpenOffice.org Draw</strong></span></strong></span> kan du lave alt fra simple diagrammer til 3D-illustrationer.</p>
                        <div class="itemizedlist">
                          <ul class="itemizedlist" type="circle">
                            <li class="listitem">
                              <p><span class="application"><strong>Draw</strong></span> er installeret som standard, og er en del af <span class="application"><strong>OpenOffice.org</strong></span>-kontorpakken.</p>
                            </li>
                            <li class="listitem">
                              <p>For at starte <span class="application"><strong>Draw</strong></span>, skal du trykke på <span class="guimenu">Programmer</span> → <span class="guimenuitem">Grafik</span> → <span class="guimenuitem">OpenOffice.org Draw</span>.</p>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="listitem">
                        <p><span class="strong"><strong><span class="application"><strong>Inkscape</strong></span></strong></span> er et avanceret illustration værktøj.</p>
                        <div class="itemizedlist">
                          <ul class="itemizedlist" type="circle">
                            <li class="listitem">
                              <p>For yderligere information, se <a class="ulink" href="http://www.inkscape.org/" target="_top">hjemmesiden for Inkscape</a>.</p>
                            </li>
                            <li class="listitem">
                              <p>For at starte <span class="application"><strong>Inkscape</strong></span>, tryk på <span class="guimenu">Programmer</span> → <span class="guimenuitem">Grafik</span> → <span class="guimenuitem">Inkscape Vector Graphics Editor</span>.</p>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="aside main-aside" id="secondary" style="-moz-border-radius: 5px 5px 5px 5px;">
          <ul class="xoxo">
            <li class="widgetcontainer widget" id="">
              <h3 class="widgettitle">Kontor</h3>
              <ul>
              <li><a href="office-suites.php">Kontorpakker</a></li>
              <li><a href="office-oohelp.php">Få hjælp til OpenOffice</a></li>
              <li><a href="office-dtp.php">DTP og tegneprogrammer</a></li>
              <li><a href="office-finance.php">Finansprogrammer</a></li>
              <li><a href="office-document-templates.php">Anskaffelse af dokumentskabeloner</a></li>
              <li><a href="sending-office-documents.php">Folk kan ikke åbne dokumenter, som jeg har sendt til dem</a></li>
              <li><a href="create-pdfs.php">Hvordan kan jeg oprette kopier af mine dokumenter i PDF-format?</a></li>
              <li><a href="finding-clipart.php">Finde billedudklip (clipart) til brug i dokumenter</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div id="footer">
        <div id="siteinfo"></div>
      </div>
    </div>
    <script type="text/javascript" src="http://ubuntudanmark.dk/wp-content/themes/light-wordpress-theme/js/ubuntu-loco.js?ver=0.2-light"></script>
  </body>
</html>
