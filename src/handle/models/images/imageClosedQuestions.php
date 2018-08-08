<?php

require_once dirname(__FILE__).'/../shared/BaseCommon.php';
require_once dirname(__FILE__).'/../connections/Connector.php';

class ImageClosedQuestion extends Connector
{
    public static function create($token, $params = array())
    {
        return parent::create_image(get_class(), get_path("images", "closed_questions"), $token, $params);
    }

    public static function gets($token, $params = array())
    {
        $params = array('page' => 0, 'paerPage' => 20);

        return parent::get_image(get_class(), get_path("images", "closed_questions"), $token, $params);
    }

    public static function find_id($token, $params = array())
    {
        return parent::get_image(get_class(), get_path("images", "find"), $token, $params);
    }
}
