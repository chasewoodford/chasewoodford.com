<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Twitter</title>
</head>
<body>
<?php
  require('twitter.class.php');
  $twitter = new twitter_class();
  echo $twitter->getTweets('search term', 10);
?>
</body>
</html>
