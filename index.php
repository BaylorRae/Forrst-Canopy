<?php
include 'forrst-canopy.php';

$canopy = new ForrstCanopy('BaylorRae');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Forrst Canopy</title>
<meta charset="utf-8" />

</head>
<body>
  
  <h2>User Info</h2>
  <ul>
    <li><strong>Name:</strong> <?php echo $canopy->user->name ?></li>
    <li><strong>Posts:</strong> <?php echo $canopy->user->posts ?></li>
    <li><strong>Comments:</strong> <?php echo $canopy->user->comments ?></li>
    <li><strong>Likes:</strong> <?php echo $canopy->user->likes ?></li>
  </ul>
  
  <h2>Recent Posts</h2>
  <?php $posts = $canopy->get_posts('limit=3') ?>
  <ul>
    <?php foreach( $posts->resp as $post ) : ?>      
      <li><?php echo $post->title ?></li>
    <?php endforeach ?>
  </ul>
  
  <h2>Latest Snap</h2>
  <?php $latest_snap = $canopy->get_user_snaps(1)->resp[0] ?>
  <img src="<?php echo $latest_snap->snaps->mega_url ?>" />
  
  <h2>Latest Code</h2>
  <?php $latest_code = $canopy->get_user_code(1)->resp[0] ?>
  <pre><code><?php echo htmlentities($latest_code->content) ?></code></pre>
</body>
</html>