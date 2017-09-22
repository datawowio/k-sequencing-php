<?php 
/* namespace Buonzz\Template; */
/* require_once dirname(__FILE__) . 'k-sequencing/'; */

require_once dirname(__FILE__).'/k-sequencing/models/imageChoices.php';
require_once dirname(__FILE__).'/k-sequencing/models/imageClosedQuestions.php';
require_once dirname(__FILE__).'/k-sequencing/models/imageMessages.php';
require_once dirname(__FILE__).'/k-sequencing/models/imagePhotoTags.php';



// post test
$params = array('instruction' => 'face', 'categories' => 'p h p', 'data' => 'https://s3-us-west-1.amazonaws.com/powr/defaults/image-slider2.jpg', 'postback_url' => 'https://kseq.datawow.io/', 'multiple' => true);
$s = ImageChoices::create('xkA4eW3ZPHD17Pj81xBY5V7Q', $params);


print_r(json_decode($s));
echo('--------------------------------');

// get test
$s = ImageChoices::get('xkA4eW3ZPHD17Pj81xBY5V7Q');
print_r(json_decode($s));
