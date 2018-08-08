<?php

require_once dirname(__FILE__).'/handle/models/images/imageChoices.php';
require_once dirname(__FILE__).'/handle/models/images/imageClosedQuestions.php';
require_once dirname(__FILE__).'/handle/models/images/imageMessages.php';
require_once dirname(__FILE__).'/handle/models/images/imagePhotoTags.php';
require_once dirname(__FILE__).'/handle/models/predictions/predictors.php';

require_once dirname(__FILE__).'/handle/models/texts/conversations.php';

/* $params = array('data' => 'https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg', 'postback_url' => 'https://kseq.datawow.io/', 'instruction' => 'test', 'categories' => 'b d'); */

/* $params = array('data' => 'https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg'); */

$params = array('conversation' => array(1,2,3,4), 'custom_conversation_ids' => array(6,7,8,9));

$res = Conversation::create('UkWeFVKvvfAiKXqKhiB5nYiE', $params);
$res = json_decode($res, true);

/* $res = Predictor::find_id('VfbFJGBxttpzgaHDV2z4QPvt', $res['data']['image']['id']); */
/* $res = json_decode($res, true); */

/* $res = ImageChoice::gets('mNHrKiCUps2QuyZtMDbnPHM7'); */
/* $res = json_decode($res, true); */

print_r($res);
