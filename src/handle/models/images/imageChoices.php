<?php


require_once dirname(__FILE__).'/../connections/Connector.php';

class ImageChoice extends Connector
{
    const url_endpoint = 'images/choices';
    const url_find_by_id = 'images/choice';

    public static function create($token, $params = array())
    {
        return parent::create_image(get_class(), self::url_endpoint, $token, $params);
    }

    public static function get($token, $params = array())
    {
        $params = array('page' => 0, 'paerPage' => 20);

        return parent::get_image(get_class(), self::url_endpoint, $token, $params);
    }

    public static function get_id($token, $params = array())
    {
        return parent::get_image(get_class(), self::url_find_by_id, $token, $params);
    }
}
