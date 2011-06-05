## About
Forrst Canopy is an API wrapper for the [Forrst API](http://forrst.com/api).

## Conventions Used
Canopy uses `ForrstCanopy` as its namespace. In addition, it separates the available methods into individual classes. Therefore, to pull information about a user you would do something like this.

    $user_info = ForrstCanopy\User::info('BaylorRae');
    
    // Get a user's posts
    $user_posts = ForrstCanopy\User::posts('BaylorRae', 'type=code&limit=3');
    
Notice that `User::posts` has a second parameter. When an API method supports extra parameters you use the syntax showed above.

## Available Methods
**!note** - `$params` use a query string format. Look at the code above for `User::posts`

- ForrstCanopy\stats()<br /> <http://forrst.com/api#m-stats>

### User
**!important** - Authentication coming soon

- ForrstCanopy\User::info($username\_or\_id)<br /> <http://forrst.com/api#m-users-info>
- ForrstCanopy\User::posts($username\_or\_id, $params = null)<br /> <http://forrst.com/api#m-user-posts>

### Posts
- ForrstCanopy\Posts::show($id\_or\_tiny\_id)<br /> <http://forrst.com/api#m-posts-show>
- ForrstCanopy\Posts::all($after = null)<br /> <http://forrst.com/api#m-posts-all>
- ForrstCanopy\Posts::\_list($post_type, $params = null)<br /> <http://forrst.com/api#m-posts-list>

## Todo
0. Add support for servers that don't have curl
0. Add exceptions for request errors.
