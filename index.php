<?php get_header(); ?>
<div id="left_column">
<div id="video">
<div id="video_back">
<?php
if (!isset($_GET['live'])) {
?>
<img src="images/noise.gif" height="394" />
<?php
} else {
?>
<object width="589" height="394" id="lsplayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param name="movie" value="http://cdn.livestream.com/grid/LSPlayer.swf?channel=masjien&amp;color=0x000000&amp;autoPlay=false&amp;mute=false&amp;iconColorOver=0xe7e7e7&amp;iconColor=0xcccccc"></param><param name="allowScriptAccess" value="always"></param><param name="allowFullScreen" value="true"></param><embed name="lsplayer" wmode="transparent" src="http://cdn.livestream.com/grid/LSPlayer.swf?channel=masjien&amp;color=0x000000&amp;autoPlay=true&amp;mute=false&amp;iconColorOver=0xe7e7e7&amp;iconColor=0xcccccc" width="589" height="394" allowScriptAccess="always" allowFullScreen="true" type="application/x-shockwave-flash"></embed></object>
<?php
}
?>
</div>
<div id="video_frame">
<img src="images/tv.png" />
</div>
</div>
<div id="bottom_left">
<div id="scope">
<span id="soc_fb">
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fraak.it%2Fmas.jien%2F&amp;layout=box_count&amp;show_faces=true&amp;width=326&amp;action=like&amp;font=arial&amp;colorscheme=dark&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:326px; height:65px;" allowTransparency="true"></iframe>
</span>
<span id="soc_tw">
<a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="_masjien_">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
</span>
<!--img src="polygons.php?w=203&h=134&seed=124" /-->
<!--img width="326px;" height="134px;" src="images/scope.png" /-->
</div>
<div id="art">
<img src="polygons.php?w=203&h=134" />
</div>
</div>
</div>
<div id="right_column">
<div id="twitter">
<div id="twitter_display">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'music machine',
  rpp: 6,
  interval: 6000,
  width: 351,
  height: 351,
  theme: {
    shell: {
      background: '#000000',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#777777'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().start();
</script>
</div>
<div id="twitter_input">
<div id="tbox"></div>
<script type="text/javascript">

  twttr.anywhere(function (T) {

    T("#tbox").tweetBox({
      height: 68,
      width: 351,
      defaultContent: "@_masjien_ #masjien",
      label: "Tweet here"
    });

  });

</script>
</div>
</div>
</div>
<?php get_footer(); ?>
