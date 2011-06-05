<?php

// TODO: Add exceptions

namespace ForrstCanopy;

// Handles all of the url requests
class Curl {
  private static $curl = null; // CURL instance
  private static $response = null; // The returned data from CURL
  
  const API_BASE = 'http://forrst.com/api/v2/';
  
  public static function getJSON($url) {
    self::$curl = curl_init(self::checkURL($url));
    self::setOptions();
    
    self::$response = json_decode(curl_exec(self::$curl));
    curl_close(self::$curl);
        
    // Make sure everything was okay
    if( self::$response->stat != 'ok' ) {
      return false;
    }
    
    return self::$response;
  }
  
  /**
   * Set default options for CURL
   *
   * @return void
   * @author Baylor Rae'
   */
  private function setOptions() {
    if( !empty(self::$curl) ) {
      curl_setopt_array(self::$curl, array(
          CURLOPT_RETURNTRANSFER => true
        ));
    }
  }
  
  /**
   * Check to see if we need to prepend the API_BASE url
   *
   * @param string $url 
   * @return void
   * @author Baylor Rae'
   */
  private static function checkURL($url) {
    return (preg_match('/^http(s)?:\/\//', $url)) ? $url : self::API_BASE . $url;
  }
}

class Users {
  private $authed = false;
  
  // TODO: Add authentication when it's live
  function __construct($email_or_username, $password) {
    if( Curl::getJSON(sprintf('users/auth?email_or_username=%&password=%', $email_or_username, $password)) )
    if( Curl::getJSON(sprintf('users/auth?email_or_username=%s&password=%s', $email_or_username, $password)) ) {
      $this->authed = true;
  }
  
  /**
   * Returns information about a given user
   *
   * @param mixed $username_or_id 
   * @return (object) with information about the user
   * @author Baylor Rae'
   * @see http://forrst.com/api#m-users-info
   */
  public static function info($username_or_id) {
    $means = (is_string($username_or_id)) ? 'username' : 'id';
    $info = Curl::getJSON(sprintf('users/info?%s=%s', $means, $username_or_id));
    
    return $info;
  }
  
  /**
   * Get all posts from a given user
   *
   * @param mixed $username_or_id 
   * @param string $params (optional)
   * @return (array) with all posts
   * @author Baylor Rae'
   * @see http://forrst.com/api#m-user-posts
   */
  public static function posts($username_or_id, $params = null) {
    $means = (is_string($username_or_id)) ? 'username' : 'id';
    $url = sprintf('users/posts?%s=%s', $means, $username_or_id);
    
    if( $params !== null )
      $url .= '&' . $params;
          
    return Curl::getJSON($url);
  }
    
}
class_alias('ForrstCanopy\Users', __NAMESPACE__ . '\User');

class Posts {
  
  /**
   * Get data about a single post.
   *  Note: 
   *  - Questions: content is the question.
   *  - Code: content contains the code snippet.
   *  - For code, snaps, and links, description is the post description; it is not used for questions.
   *
   * @param mixed $id use string for tiny_id
   * @return (object) information about a specific post
   * @author Baylor Rae'
   * @see http://forrst.com/api#m-posts-show
   */
  public static function show($id) {
    $means = (is_string($id)) ? 'tiny_id' : 'id';
    return Curl::getJSON(sprintf('posts/show?%s=%s', $means, $id));
  }
  
  /**
   * Gets all posts in reverse chronological order
   *
   * @param int $after (optional)
   * @return (array) of all recent posts
   * @author Baylor Rae'
   * @see http://forrst.com/api#m-posts-all
   */
  public static function all($after = null) {
    $url = 'posts/all';
    
    if( $after !== null )
      $url .= sprintf('?after=%s', $after);
      
    return Curl::getJSON($url);
  }
  
  /**
   * Gets all posts of a specific type
   *
   * @param string $post_type ['code', 'link', 'question', 'snap']
   * @param string $params (optional)
   * @return void
   * @author Baylor Rae'
   * @see http://forrst.com/api#m-posts-list
   */
  public static function _list($post_type, $params = null) {
    $url = sprintf('posts/list?post_type=%s', $post_type);
    
    if( $params !== null )
      $url .= '&' . $params;
      
    return Curl::getJSON($url);
  }
  
}
class_alias('ForrstCanopy\Posts', __NAMESPACE__ . '\Post');

/**
 * Returns all API status
 *
 * @return (object)
 * @author Baylor Rae'
 * @see http://forrst.com/api#m-stats
 */
function stats() {
  return Curl::getJSON('stats');
}