<?php 

class Connector
{
  const REQ_GET = 'GET';
  const REQ_POST = 'POST';
  const BASE_API_URL = 'https://kseq.datawow.io/api/';

  protected static function getInstance($className)
  {
    if (class_exists($className)){
      return new $className();
    }

    throw new Exception('Class name not found!!');
  }

  protected static function create_image($className, $url, $token, $params = null) 
  {
    $caller = call_user_func('getInstance', $className);
    $result = $caller->_curlExcutor(self::REQ_POST, $url, $token, $params);

    return $result;
  }

  protected static function get_image($token)
  {
    
    $caller = call_user_func('getInstance', $className);
    $result = $caller->_curlExcutor(self::REQ_GET, $url, $token, $params);

    return $result;
  }


  private function _curlExcutor($method, $url, $token, $params = null) 
  {
    $ch = curl_init(self::BASE_APU_URL.$url);
    curl_setopt_array($ch, $this->_curlOptionExecutor($method, $token,  $params))

    $result = curl_exec($ch);

    if($result === false) 
    {
      $error = curl_error($ch);
      curl_close($ch);

      throw new Exception($error);
    }

    curl_close($ch);

    return $result;
  }


  private function _curlOptionExecutor($method, $token, $params = null)
  {
    
    $options = array(
      CURLOPT_AUTOREFERER => TRUE,
      CURLOPT_NOBODY => TRUE,
      CURLOPT_CONNECTTIMEOUT => 30,
      CURLOPT_TIMEOUT => 60,
      CURLOPT_HEADER => FALSE,
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_CUSTOMREQUEST, $method,
      CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
      CURLINFO_HEADER_OUT => TRUE,
      CURLOPT_HTTPHEADER => array("Authorization: $token", "Accept: application/json", "Content-Type: application/x-www-form-urlencoded"),
      CURLOPT_POSTFIELDS => http_build_query($params)
    );


    return $options;
  }
}
