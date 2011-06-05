<?php


namespace ForrstCanopy;

// Handles all of the url requests
class ForrstCanopyCurl {
  private $curl = null; // CURL instance
  private $response = null; // The returned data from CURL
class Curl {
  
  const API_BASE = 'http://api.forrst.com/api/v2/users/';
  
  public function getJSON($url) {
    $this->curl = curl_init($this->checkURL($url));
    $this->setOptions();
    
    $this->response = json_decode(curl_exec($this->curl));
    curl_close($this->curl);
    
    // Make sure everything was okay
    if( $this->response->stat != 'ok' )
      return false;
    
    return $this->response;
  }
  
  /**
   * Set default options for CURL
   *
   * @return void
   * @author Baylor Rae'
   */
  private function setOptions() {
    if( !empty($this->curl) ) {
      curl_setopt_array($this->curl, array(
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
  private function checkURL($url) {
    return (preg_match('/^http(s)?:\/\//', $url)) ? $url : self::API_BASE . $url;
  }
}

class ForrstCanopy {
  public $user;
  
  function __construct($username) {
        
    // Get the user's information
    $request = new ForrstCanopyCurl;
    $info = $request->getJSON(sprintf('info?username=%s', $username));
    
    // Make sure we recieved valid data
    if( empty($info) ) {
      echo '<p>The user could not be found.</p>';
    }
    
    // Save the user's info as an array
    $this->user = $info->resp;
    
    // Create user tag_array
    $this->user->tag_array = explode(',', $this->user->tag_string);
    
    // Change photos into an array
    $this->user->photos = (array) $this->user->photos;
  }
  
  // Allows active record approach
  // get_user_(post type) e.g. get_user_snaps()
  function __call($func, $args) {
    // Check if we're pulling user info
    if( preg_match('/^get_user_(\w+)/', $func, $matches) ) {
      $type = (substr($matches[1], -1) == 's') ? substr($matches[1], 0, -1) : $matches[1];
      return $this->get_posts(array(
        'type' => $type,
        'limit' => (empty($args[0])) ? null : $args[0]
        ));
    }
  }
  
  /**
   * Returns posts from a user
   *
   * @param array $options ['limit', 'type', 'username']
   * @return void
   * @author Baylor Rae'
   */
  public function get_posts($options = null) {
    $options = (is_string($options)) ? parse_url($options) : $options;
    $username = (empty($options['username'])) ? $this->user->username : $options['username'];
    $url = 'posts?username=%s';
    
    if( !empty($options['limit']) )
      $url .= sprintf('&limit=%s', $options['limit']);
      
    if( !empty($options['type']) )
      $url .= sprintf('&type=%s', $options['type']);
    
    $request = new ForrstCanopyCurl;
    return $request->getJSON(sprintf($url, $username));
  }
        
}