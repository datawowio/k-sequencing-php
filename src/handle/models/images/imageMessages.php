<?php

require_once dirname(__FILE__).'/../shared/BaseCommon.php';
require_once dirname(__FILE__).'/../connections/Connector.php';

class ImageMessage extends Connector
{
    public static function create($token, $params = array())
    {
        return parent::create(get_class(), base_url("images").get_path("images", "messages"), $token, $params);
    }

    public static function gets($token, $params = array())
    {
        $params = array('page' => 0, 'paerPage' => 20);

        return parent::retrive(get_class(), base_url("images").get_path("images", "messages"), $token, $params);
    }

    public static function find_id($token, $id)
    {
        return parent::retrive(get_class(), base_url("images").get_path("images", "find"), $token, null, $id, null);
    }
}
