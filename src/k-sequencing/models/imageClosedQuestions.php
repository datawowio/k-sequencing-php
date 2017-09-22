<?php 

require_once dirname(__FILE__).'/../connections/Connector.php';

class ImageClosedQuestions extends Connector 
{
  const url_endpoint = 'images/closed_questions';

  public static function create($token, $params = array())
  {
    return parent::create_image(get_class(), self::url_endpoint, $token, $params);
  }

  public static function get($token, $params = array())
  {
    $params = array('page' => 0, 'paerPage' => 20);
    return parent::get_image(get_class(), self::url_endpoint, $token, $params);
  }

} 
