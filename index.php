<?php
include 'forrst-cannopy.php';

$cannopy = new ForrstCannopy('BaylorRae');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Forrst Cannopy</title>
<meta charset="utf-8" />

</head>
<body>
  
  <h2>User Info</h2>
  <ul>
    <li><strong>Name:</strong> <?php echo $cannopy->user->name ?></li>
    <li><strong>Posts:</strong> <?php echo $cannopy->user->posts ?></li>
    <li><strong>Comments:</strong> <?php echo $cannopy->user->comments ?></li>
    <li><strong>Likes:</strong> <?php echo $cannopy->user->likes ?></li>
  </ul>
  
  <h2>Recent Posts</h2>
  <?php $posts = $cannopy->get_posts('limit=3') ?>
  <ul>
    <?php foreach( $posts->resp as $post ) : ?>      
      <li><?php echo $post->title ?></li>
    <?php endforeach ?>
  </ul>
  
  <h2>Latest Snap</h2>
  <?php $latest_snap = $cannopy->get_user_snaps(1)->resp[0] ?>
  <img src="<?php echo $latest_snap->snaps->mega_url ?>" />
  
  <h2>Latest Code</h2>
  <?php $latest_code = $cannopy->get_user_code(1)->resp[0] ?>
  <pre><code><?php echo htmlentities($latest_code->content) ?></code></pre>
</body>
</html>