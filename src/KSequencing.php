<?php
/* namespace Buonzz\Template; */
/* require_once dirname(__FILE__) . 'k-sequencing/'; */

require_once dirname(__FILE__).'/k-sequencing/models/imageChoices.php';
require_once dirname(__FILE__).'/k-sequencing/models/imageClosedQuestions.php';
require_once dirname(__FILE__).'/k-sequencing/models/imageMessages.php';
require_once dirname(__FILE__).'/k-sequencing/models/imagePhotoTags.php';



// post test
$params = array('instruction' => 'face', 'categories' => 'p h p', 'data' => 'https://s3-ap-southeast-1.amazonaws.com/kiyo-images/2016/10/10/57fada626288cf0a692b6070.jpg', 'postback_url' => 'https://kseq.datawow.io/', 'multiple' => true);
$s = ImageChoices::create('xkA4eW3ZPHD17Pj81xBY5V7Q', $params);


print_r(json_decode($s));
echo('--------------------------------');

// get test
$s = ImageChoices::get('xkA4eW3ZPHD17Pj81xBY5V7Q');
print_r(json_decode($s));


echo('--------------------------------');
echo('--------------------------------');
// post test
$params = array('instruction' => 'face', 'data' => 'https://s3-ap-southeast-1.amazonaws.com/kiyo-images/2016/10/10/57fada626288cf0a692b6070.jpg', 'postback_url' => 'https://kseq.datawow.io/', 'multiple' => true);
$s = ImageClosedQuestions::create('HK7eB6PHztfMZmhoeXPrRAHk', $params);


print_r(json_decode($s));
echo('--------------------------------');

// get test
$s = ImageClosedQuestions::get('HK7eB6PHztfMZmhoeXPrRAHk');
print_r(json_decode($s));

echo('--------------------------------');
echo('--------------------------------');

// post test
$params = array('instruction' => 'face', 'data' => 'https://s3-ap-southeast-1.amazonaws.com/kiyo-images/2016/10/10/57fada626288cf0a692b6070.jpg', 'postback_url' => 'https://kseq.datawow.io/', 'multiple' => true);
$s = ImageMessages::create('3paHN4Jx2EeEERCHupPMkHzs', $params);


print_r(json_decode($s));
echo('--------------------------------');

// get test
$s = ImageMessages::get('3paHN4Jx2EeEERCHupPMkHzs');
print_r(json_decode($s));


echo('--------------------------------');
echo('--------------------------------');
// post test
$params = array('instruction' => 'face', 'data' => 'https://s3-ap-southeast-1.amazonaws.com/kiyo-images/2016/10/10/57fada626288cf0a692b6070.jpg', 'postback_url' => 'https://kseq.datawow.io/', 'multiple' => true);
$s = ImagePhotoTags::create('ZwuaoaUHMYMHCbZh6TKUMpg7', $params);


print_r(json_decode($s));
echo('--------------------------------');

// get test
$s = ImagePhotoTags::get('ZwuaoaUHMYMHCbZh6TKUMpg7');
print_r(json_decode($s));
