<?php
include 'forrst-canopy.php';

// $stats = ForrstCanopy_stats();

// $user = ForrstCanopyUser::info('BaylorRae');

// $posts = ForrstCanopyUser::posts('BaylorRae', array('limit' => 1));
// $posts = ForrstCanopyUser::posts('BaylorRae', array('type' => 'code', 'limit' => 3));

// post id: 70743
// post tiny_id: OIm
// $post = ForrstCanopyPosts::show(70743);

// $all_posts = ForrstCanopyPosts::all();

// $list_posts = ForrstCanopyPosts::_list('code'); // ['code', 'link', 'snap', 'question']
// $list_posts = ForrstCanopyPosts::_list('code', 'page=2');

// Will be added later
// $user = new ForrstCanopyUser('BaylorRae', 'k6ZZKleRp5g3kv');
try {
  $user = new ForrstCanopyUser('BaylorRae', 'k6ZZKleRp5g3kv');
}catch( ForrstCanopyException $e ) {
  echo $e;
}
