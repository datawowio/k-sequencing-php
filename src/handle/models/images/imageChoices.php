<?php

require_once dirname(__FILE__).'/../../shared/BaseCommon.php';
require_once dirname(__FILE__).'/../../connections/Connector.php';

class ImageChoice extends Connector
{
    public static function create($token, $params = array())
    {
        return parent::create_data(get_class(), base_url('images').get_path('images', 'choices'), $token, $params);
    }

    public static function gets($token, $params = array())
    {
        $params = array('page' => 0, 'paerPage' => 20);

        return parent::retrive_list(get_class(), base_url('images').get_path('images', 'choices'), $token, $params);
    }

    public static function find_id($token, $id)
    {
        return parent::retrive_once(get_class(), base_url('images').get_path('images', 'find'), $token, $id);
    }
}
