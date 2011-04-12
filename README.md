## Forrst Canopy
canopy is a PHP wrapper for the Forrst API.

## Getting Started

	<?php
	  include 'forrst-canopy.php';

	  $canopy = new ForrstCanopy('BaylorRae');
	
	  // Get the user's name
	  echo $canopy->user->name;
	?>

## Getting User Info
The user's information is stored in a variable referenced as `$canopy->user->(name|url)`

Here's a list of what can be called

* id
* username 
* name
* url
* posts (post count)
* comments (comment count)
* likes (like count)
* followers (followers count)
* following (following count)
* photos (array) `$canopy->user->photos['medium_url']`
 * xl\_url
 * large\_url
 * medium\_url
 * small\_url
 * thumb\_url
* in\_directory
* tag\_string
* tag\_array

## Getting User Posts

Posts can be called two different ways. When working with the user supplied when initializing `ForrstCanopy` you can use the following functions. Each of the functions accept a parameter to set the limit.

* get\_user\_snaps
* get\_user\_code
* get\_user\_links
* get\_user\_questions

        // Get the last three posts with type=code
        $latest_code = $canopy->get_user_code(3);

---
The second method allows you to change the user that is being referenced. Giving you control to pull posts from other users.

    // Using an array
    $posts = $canopy->get_posts(array(
        'limit' => 3,
        'type' => 'code',
        'username' => 'another_user' // defaults to original username
        ));
        
    // Passing the data in as a string
    $canopy->get_posts('limit=3&type=code&username=another_user');