<div id="container">
 <?php
  include('rssclass.php');
  $feedlist = new rss('http://fm-status.livejournal.com/data/rss');
  echo $feedlist->display(5,"");  
?> 
</div>