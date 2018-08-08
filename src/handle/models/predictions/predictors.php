<?php

require_once dirname(__FILE__).'/../../shared/BaseCommon.php';
require_once dirname(__FILE__).'/../../connections/Connector.php';

class Predictor extends Connector
{
    public static function create($token, $params = array())
    {
        return parent::create_data(get_class(), base_url('ai').get_path('ai', 'predictors'), $token, $params);
    }

    public static function gets($token, $params = array())
    {
        $params = array('page' => 0, 'paerPage' => 20);

        return parent::retrive_list(get_class(), base_url('ai').get_path('ai', 'predictors'), $token, $params);
    }

    public static function find_id($token, $id)
    {
        return parent::retrive_once(get_class(), base_url('ai').get_path('ai', 'find'), $token, $id);
    }
}
