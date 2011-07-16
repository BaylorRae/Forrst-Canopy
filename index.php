<?php
include 'forrst-canopy.php';

// $stats = ForrstCanopy_stats();


/* *******************************************************************************************
UUUUUUUU     UUUUUUUU                                                                         
U::::::U     U::::::U                                                                         
U::::::U     U::::::U                                                                         
UU:::::U     U:::::UU                                                                         
 U:::::U     U:::::U    ssssssssss       eeeeeeeeeeee    rrrrr   rrrrrrrrr       ssssssssss   
 U:::::D     D:::::U  ss::::::::::s    ee::::::::::::ee  r::::rrr:::::::::r    ss::::::::::s  
 U:::::D     D:::::Uss:::::::::::::s  e::::::eeeee:::::eer:::::::::::::::::r ss:::::::::::::s 
 U:::::D     D:::::Us::::::ssss:::::se::::::e     e:::::err::::::rrrrr::::::rs::::::ssss:::::s
 U:::::D     D:::::U s:::::s  ssssss e:::::::eeeee::::::e r:::::r     r:::::r s:::::s  ssssss 
 U:::::D     D:::::U   s::::::s      e:::::::::::::::::e  r:::::r     rrrrrrr   s::::::s      
 U:::::D     D:::::U      s::::::s   e::::::eeeeeeeeeee   r:::::r                  s::::::s   
 U::::::U   U::::::Ussssss   s:::::s e:::::::e            r:::::r            ssssss   s:::::s 
 U:::::::UUU:::::::Us:::::ssss::::::se::::::::e           r:::::r            s:::::ssss::::::s
  UU:::::::::::::UU s::::::::::::::s  e::::::::eeeeeeee   r:::::r            s::::::::::::::s 
    UU:::::::::UU    s:::::::::::ss    ee:::::::::::::e   r:::::r             s:::::::::::ss  
      UUUUUUUUU       sssssssssss        eeeeeeeeeeeeee   rrrrrrr              sssssssssss

*/

// try {
//   $user = ForrstCanopyUser::info('BaylorRae');
//   echo '<pre>',  print_r($user, true), '</pre>';
// }catch( ForrstCanopyException $e ) {
//   echo $e;
// }

// try {
//   $posts = ForrstCanopyUser::posts('BaylorRae', array('limit' => 1));
//   // $posts = ForrstCanopyUser::posts('BaylorRae', array('type' => 'code', 'limit' => 3));
//   
//   echo '<pre>',  print_r($posts, true), '</pre>';
// }catch( ForrstCanopyException $e ) {
//   echo $e;
// }




/* ******************************************************************************************
PPPPPPPPPPPPPPPPP                                             tttt                           
P::::::::::::::::P                                         ttt:::t                           
P::::::PPPPPP:::::P                                        t:::::t                           
PP:::::P     P:::::P                                       t:::::t                           
  P::::P     P:::::P  ooooooooooo       ssssssssss   ttttttt:::::ttttttt        ssssssssss   
  P::::P     P:::::Poo:::::::::::oo   ss::::::::::s  t:::::::::::::::::t      ss::::::::::s  
  P::::PPPPPP:::::Po:::::::::::::::oss:::::::::::::s t:::::::::::::::::t    ss:::::::::::::s 
  P:::::::::::::PP o:::::ooooo:::::os::::::ssss:::::stttttt:::::::tttttt    s::::::ssss:::::s
  P::::PPPPPPPPP   o::::o     o::::o s:::::s  ssssss       t:::::t           s:::::s  ssssss 
  P::::P           o::::o     o::::o   s::::::s            t:::::t             s::::::s      
  P::::P           o::::o     o::::o      s::::::s         t:::::t                s::::::s   
  P::::P           o::::o     o::::ossssss   s:::::s       t:::::t    ttttttssssss   s:::::s 
PP::::::PP         o:::::ooooo:::::os:::::ssss::::::s      t::::::tttt:::::ts:::::ssss::::::s
P::::::::P         o:::::::::::::::os::::::::::::::s       tt::::::::::::::ts::::::::::::::s 
P::::::::P          oo:::::::::::oo  s:::::::::::ss          tt:::::::::::tt s:::::::::::ss  
PPPPPPPPPP            ooooooooooo     sssssssssss              ttttttttttt    sssssssssss

*/

// post id: 70743
// post tiny_id: OIm
// try {
//   $post = ForrstCanopyPosts::show(70743);
//   
//   echo '<pre>',  print_r($post, true), '</pre>';
// }catch( ForrstCanopyException $e ) {
//   echo $e;
// }

// try {
//   $all_posts = ForrstCanopyPosts::all();
//   
//   echo '<pre>',  print_r($all_posts, true), '</pre>';
// }catch( ForrstCanopyException $e ) {
//   echo $e;
// }

// try {
//   $list_posts = ForrstCanopyPosts::_list('code'); // ['code', 'link', 'snap', 'question']
//   // $list_posts = ForrstCanopyPosts::_list('code', array('page' => 2));
//   
//   echo '<pre>',  print_r($list_posts, true), '</pre>';
// }catch( ForrstCanopyException $e ) {
//   echo $e;
// }

// try {
//   $user = new ForrstCanopyUser('BaylorRae', 'abc123');
// }catch( ForrstCanopyException $e ) {
//   echo $e;
// }