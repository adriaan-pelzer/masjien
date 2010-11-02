<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo ('name'); ?></title>
<meta property="og:title" content="masjien"/>
<meta property="og:type" content="musician"/>
<meta property="og:image" content="<?php bloginfo ('template_url'); ?>/images/masjien_logo.png"/>
<meta property="og:url" content="<?php bloginfo ('url'); ?>"/>
<meta property="og:site_name" content="masjien midnight theatre"/>
<meta property="fb:admins" content="544207149"/>
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo ('template_url'); ?>" />
<script src="http://platform.twitter.com/anywhere.js?id=TEMiI9BjV3ZayuF8yTfY7Q&v=1" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
<script>
$.ajaxSetup({ cache: false });
var t = new Array();
t[0] = new Array ();
t[0][0] = 'm';
t[0][1] = 'M';
t[1] = new Array ();
t[1][0] = 'a';
t[1][1] = 'A';
t[1][2] = '4';
t[2] = new Array ();
t[2][0] = 's';
t[2][1] = 'S';
t[2][2] = '5';
t[3] = new Array ();
t[3][0] = 'j';
t[3][1] = 'J';
t[4] = new Array ();
t[4][0] = 'i';
t[4][1] = 'I';
t[4][2] = '1';
t[5] = new Array ();
t[5][0] = 'e';
t[5][1] = 'E';
t[5][2] = '3';
t[6] = new Array ();
t[6][0] = 'n';
t[6][1] = 'N';

function loadTitle () {
    var titlestr = "";

    for (h = 0; h < 6; h++) {
        if (titlestr != "") {
            titlestr = titlestr + " ";
        }

        for (i = 0; i < t.length; i++) {
            titlestr = titlestr + t[i][Math.floor(Math.random()*t[i].length)];
        }
    }

    $("#title").html ("<h1>"+titlestr+"</h1>")

    setTimeout ("loadTitle()", 1000 + Math.floor (Math.random () * 9000));
}

function loadArt () {
    $("#art").fadeOut ("slow", function () {
        $("#art").load ("<?php bloginfo ('template_url'); ?>/art.php", function() {
            $("#art").fadeIn ("slow", function () {
                setTimeout ("loadArt();", 5000 + Math.floor (Math.random () * 5000));
            });
        });
    });
}

$(document).ready(function(){
    loadTitle();
    setTimeout ("loadArt();", 5000 + Math.floor (Math.random () * 5000));
});
</script>
<?php wp_head(); ?>
</head>
<body>
<header>
<div id="title"></div>
<nav>
<ul>
<li><a href="">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Archive</a></li>
<li><a href="">Contact</a></li>
</ul>
</nav>
</header>
<div id="seperator"></div>

