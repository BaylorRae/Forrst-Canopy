## About
Forrst Canopy is an API wrapper for the [Forrst API](http://forrst.com/api).

## Conventions Used
Canopy separates the available methods into individual classes. Therefore, to pull information about a user you would do something like this.

    $user_info = ForrstCanopyUser::info('BaylorRae');
    
    // Get a user's posts
    $user_posts = ForrstCanopyUser::posts('BaylorRae', array('type' => 'code', 'limit' => 3));
    
Notice that `User::posts` has a second parameter. When an API method supports extra parameters you use the syntax showed above.

## Available Methods
Look at the wiki for list of methods with their documentation.<br /><https://github.com/BaylorRae/Forrst-Canopy/wiki>

## Todo
0. Add support for servers that don't have curl
