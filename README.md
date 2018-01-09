k sequencing php
=========================
k-sequencing-php is rest library for php version.
###### support or question support@datawow.io

## Requirements
* php 5.4 or above
* Built-in libcurl support.

## Installation 
#### Composer
You can install library via [Compose](https://getcomposer.org/). Please check you have installed Composer on your machine and copy below code to your ```composer.json``` If you don't have composer then click on the link Official website to install
- [Installation Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

Copy below code to your composer.json 

```json
"datawow/ksequencing-php": "dev-master"
```

Run composer install
``` 
php composer.phar install 
```
or (Global setup)
``` 
composer install 
```

After you run composer install then you will have folder ```vendor/``` to store your libs. Now you can load those lib via
```php
require_once dirname(__FILE__).'/vendor/autoload.php';
```


## Usage 

```php 
<?php 

require_once dirname(__FILE__).'/vendor/autoload.php';

$params = array('instruction' => 'face', 
		'categories' => 'face eye ear', 
		'data' => 'www.url-of-image.com', 
		'postback_url' => 'www.your-callback.url', 
		'multiple' => true);

$project_token = 'yourToekn';
$res = ImageChoices::create($project_token, $params);
// print_r(json_decode($s, true));

// find by id
$params = array('id' => $res["data"]["id"]);
$res = ImageChoices::get_id($project_token, $params);
// print_r(json_decode($s, true));

// list all data 
$res = ImageChoices::get($project_token);
// print_r(json_decode($s, true));


```


## Response 
Structure of response 
```php 
Array
(
    [data] => Array
        (
            [id] => 59dda6bb60f4f1231eff23ff
            [answer] => Array
                (
                )

            [categories] => Array
                (
                    [0] => face
                    [1] => eye
                    [2] => ear
                )

            [credit_charged] => 0
            [custom_id] => 
            [data] => https://your.url/
            [instruction] => face
            [multiple] => 1
            [postback_url] => https://your.url/
            [processed_at] => 
            [project_id] => 67
            [status] => unprocess
        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)

```


## List of API Provider

* [Closed questions](#closed-questions)(Standard Criteria (5 mins response time)) - Answer can be only approved, declined or ban(kenta).
* [Choices](#choices)(Yes or No Question from Image (30 mins response time)) - This model use to ask question with multiple choice. Anwser can be one or multiple.
* [Photo tags](#photo-tags)(Tag an object in the image (60 mins response time)) - This model use to create a selection area to find where answer is by drag the area on image from web page.
* [Messages](#messages)(Message Question from Image (30 mins response time)) - This model allow moderator type the anwser on what they see.
* [Predictions](#predictions)(Images (AI Beta / 95% accuracy)) - Use AI to prediction the result
------------------------------------

# Choices 
[Yes or No Question from Image (30 mins response time)]

## Get list
```php
ImageChoices::get($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| page     | 	interger | No | default 0|
| per_page 	     | string      | No | default 20 |

Note: You must choose id or custom_id for search. Not both.

## Example  

Request 

```php
$project_token = 'xkA4eW3ZPHD17Pj81xBY5V7Q';
$res = ImageChoices::get($project_token);
```

Response
```php
(
    [data] => Array
        (
            [images] => Array
                (
                    [0] => Array
                        (
                            [id] => 5a41b82b60f4f15943f42d31
                            [allow_empty] => 0
                            [answer] => Array
                                (
                                )

                            [categories] => Array
                                (
                                    [0] => dog
                                    [1] => pig
                                    [2] => cat
                                )

                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [instruction] => animal
                            [multiple] => 1
                            [postback_url] => https://your.url/
                            [processed_at] =>
                            [project_id] => 4242
                            [status] => unprocess
                        )

                    [1] => Array
                        (
                            [id] => 59f82b7b60f4f111eaa5f051
                            [allow_empty] => 0
                            [answer] => Array
                                (
                                )

                            [categories] => Array
                                (
                                    [0] => human
                                    [1] => animal
                                )

                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [instruction] => what is it
                            [multiple] => 0
                            [postback_url] => https://your.url/
                            [processed_at] =>
                            [project_id] => 4242
                            [status] => unprocess
                        )

                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
            [current_page] => 1
            [next_page] => -1
            [prev_page] => -1
            [total_pages] => 1
            [total_count] => 2
        )

)
```
 
## Create
```php
ImageChoices::create($project_token, $params);
```
##### params

| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| instruction	     | string      |   Yes | Image instruction|
|categories | Array[string]     |    Yes | Categories of answers |
| data     | 	string | Yes |Data for attachment|
| postback_url	     | string      |  No | Image postback url|
|multiple | boolean   |    No | true for multiple answer and false for one answer |
| postback_method     | 	string | No |Postback method|
| custom_id	     | string      |   No |Custom's id|
| allow_empty	     | boolean      |   No |Allow sent answer with empty choice. default is `false`|

Note: Answer can choose only one is default. If you want answer to be multiple, you need to set ```multiple``` to true.

## Example  

Request
```php
$project_token = 'xkA4eW3ZPHD17Pj81xBY5V7Q';
$params = array('instruction' => 'animal',
		'categories' => 'dog cat pig', 
                'data' => 'https://your.url/', 
                'postback_url' => 'https://your.url/', 
                'multiple' => true);
                
$res= ImageChoices::create($project_token, $params);
```

Response 
```php 
Array
(
    [data] => Array
        (
            [id] => 5a41bb7660f4f15943f42d32
            [allow_empty] =>
            [answer] => Array
                (
                )

            [categories] => Array
                (
                    [0] => dog
                    [1] => cat
                    [2] => pig
                )

            [credit_charged] => 0
            [custom_id] =>
            [data] => https://your.url/
            [instruction] => face
            [multiple] => 1
            [postback_url] => https://your.url/
            [processed_at] =>
            [project_id] => 67
            [status] => unprocess
        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)
```

## Find by ID 

```js
ImageChoices::get_id($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :----:| :-----|
| id	     | string  |   No | Image id|
|custom_id | string |    No | Client's image id |

Note: You must choose id or custom_id for search. Not both.

## Example  

Request

```php
$project_token = 'xkA4eW3ZPHD17Pj81xBY5V7Q';
$params = array('id' => '5a41bb7660f4f15943f42d32');
$res = ImageChoices::get_id($project_token, $params);
```


Response
```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a41bb7660f4f15943f42d32
                    [allow_empty] =>
                    [answer] => Array
                        (
                        )

                    [categories] => Array
                        (
                            [0] => pig
                            [1] => dog
                            [2] => cat
                        )

                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [instruction] => face
                    [multiple] => 1
                    [postback_url] => https://your.url/
                    [processed_at] =>
                    [project_id] => 4242
                    [status] => unprocess
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)
```

----------

# Closed Questions
[Standard Criteria (5 mins response time)]


## Get list
```php
ImageClosedQuestions::get($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| page     | 	interger | No | default 0|
| per_page 	     | string      | No | default 20 |

## Example  

Request
```php
$project_token = 'HK7eB6PHztfMZmhoeXPrRAHk';
$res= ImageClosedQuestions::get($project_token);
```

Response

```php 
Array
(
    [data] => Array
        (
            [images] => Array
                (
                    [0] => Array
                        (
                            [id] => 5a40a92560f4f15943f42d2e
                            [answer] =>
                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [postback_url] => https://your.url/
                            [processed_at] =>
                            [project_id] => 70
                            [status] => unprocess
                        )

                    [1] => Array
                        (
                            [id] => 59c8c6ba60f4f13ef59b656d
                            [answer] => declined
                            [credit_charged] => 1
                            [custom_id] =>
                            [data] => https://your.url/
                            [postback_url] => https://your.url/
                            [processed_at] => 2017-09-29T16:15:17.295+07:00
                            [project_id] => 70
                            [status] => processed
                        )
                    
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
            [current_page] => 1
            [next_page] => 1
            [prev_page] => -1
            [total_pages] => 1
            [total_count] => 2
        )

)
```
 
## Create
```php
ImageClosedQuestions::create($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| data     | 	string | Yes |Data for moderate|
| postback_url	     | string      | No | Image postback url|
| postback_method     | 	string | No |Postback method|
| custom_id	     | string      |   No |Custom's id|

## Example  

Request
```php
$params = array('data' => 'https://your.url/', 'postback_url' => 'https://your.url/');
$project_token = 'HK7eB6PHztfMZmhoeXPrRAHk';
$res= ImageClosedQuestions::create($project_token, $params);
```

Response
```php 
Array
(
    [data] => Array
        (
            [id] => 5a41c1da60f4f15943f42d33
            [answer] =>
            [credit_charged] => 0
            [custom_id] =>
            [data] => https://your.url/
            [postback_url] => https://your.url/
            [processed_at] =>
            [project_id] => 70
            [status] => unprocess
        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)
```


## Find by ID 

```php
ImageClosedQuestions::get_id($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :----:| :-----|
| id	     | string      |   No | Image id|
| custom_id | string     |    No | Client's image id |

Note: You must choose id or custom_id for search. Not both.

## Example  

Request
```php 
$params = array('id' => '5a41c1da60f4f15943f42d33');
$project_token = 'HK7eB6PHztfMZmhoeXPrRAHk';
$res= ImageClosedQuestions::get_id($project_token, $params);
```

Response
```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a41c1da60f4f15943f42d33
                    [answer] => approved
                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [postback_url] => https://your.url/
                    [processed_at] => 2017-12-26T10:30:14.186+07:00
                    [project_id] => 70
                    [status] => processed
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)

```

----------

# Messages
[Message Question from Image (30 mins response time)]
## Get list
```php
ImageMessages::get($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| page     | 	interger | No | default 0|
| per_page 	     | string      | No | default 20 |

## Example  

Request
```php 
$project_token = '3paHN4Jx2EeEERCHupPMkHzs';
$res= ImageMessages::get($project_token);
```

Response
```php 

Array
(
    [data] => Array
        (
            [images] => Array
                (
                    [0] => Array
                        (
                            [id] => 59c8c6ba60f4f13ef59b656e
                            [answer] =>
                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [instruction] => face
                            [postback_url] => https://your.url/
                            [processed_at] =>
                            [project_id] => 71
                            [status] => unprocess
                        )

                    [1] => Array
                        (
                            [id] => 59c8c46260f4f13ef59b6569
                            [answer] =>
                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [instruction] => face
                            [postback_url] => https://your.url/
                            [processed_at] =>
                            [project_id] => 71
                            [status] => unprocess
                        )
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
            [current_page] => 1
            [next_page] => 1
            [prev_page] => -1
            [total_pages] => 1
            [total_count] => 2
        )

)
```

## Create
```js
ImageMessages::create($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| instruction	     | string      |   Yes | Image instruction|
| data     | 	string | Yes |Data for attachment|
| postback_url	     | string      | No | Image postback url|
| postback_method     | 	string | No |Postback method|
| custom_id	     | string      |   No |Custom's id|

## Example  

Request
```php 
$params = array('instruction' => 'face',
		'data' => 'https://your.url/', 
                'postback_url' => 'https://your.url/';
$project_token = '3paHN4Jx2EeEERCHupPMkHzs';
$res= ImageMessages::create($project_token, $params);
```

Response
```php 
Array
(
    [data] => Array
        (
            [id] => 5a41cb4460f4f15943f42d34
            [answer] =>
            [credit_charged] => 0
            [custom_id] =>
            [data] => https://your.url/
            [instruction] => face
            [postback_url] => https://your.url/
            [processed_at] =>
            [project_id] => 71
            [status] => unprocess
        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)

```

## Find by ID 

```php
ImageMessages::get_id($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :----:| :-----|
| id	     | string      |   No | Image id|
|custom_id | string     |    No | Client's image id |

Note: You must choose id or custom_id for search. Not both.

## Example  

Request
```php 
$params = array('id' => '5a41cb4460f4f15943f42d34');
$project_token = '3paHN4Jx2EeEERCHupPMkHzs';
$res= ImageMessages::get_id($project_token, $params);
```

Response

```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a41cb4460f4f15943f42d34
                    [answer] =>
                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [instruction] => face
                    [postback_url] => https://your.url/
                    [processed_at] =>
                    [project_id] => 71
                    [status] => unprocess
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)

```

----------

# Photo tags
[Tag an object in the image (60 mins response time)]

## Get list
```php 
ImagePhotoTags::get_id($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| page     | 	interger | No | default 0|
| per_page 	     | string      | No | default 20 |

Note: You must choose id or custom_id for search. Not both.

## Example  

Request
```php 
$project_token = 'ZwuaoaUHMYMHCbZh6TKUMpg7';
$res= ImageMessages::get_id($project_token);
```

Response
```php 

Array
(
    [data] => Array
        (
            [images] => Array
                (
                    [0] => Array
                        (
                            [id] => 59c8853860f4f13ef59b6538
                            [answer] => Array
                                (
                                )

                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [instruction] => face
                            [postback_url] => https://your.url/
                            [processed_at] =>
                            [project_id] => 72
                            [status] => unprocess
                        )

                    [1] => Array
                        (
                            [id] => 59c8851b60f4f13ef59b6535
                            [answer] => Array
                                (
                                    [0] => Array
                                        (
                                            [height] => 130
                                            [id] => 0
                                            [width] => 243
                                            [x] => 345
                                            [y] => 276
                                            [z] => 0
                                        )

                                    [1] => Array
                                        (
                                            [height] => 0
                                            [id] => 1
                                            [width] => 0
                                            [x] => 274
                                            [y] => 264
                                            [z] => 0
                                        )
                                )

                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [instruction] => face
                            [postback_url] => https://your.url/
                            [processed_at] => 2017-09-29T16:47:19.802+07:00
                            [project_id] => 72
                            [status] => processed
                        )

                    [2] => Array
                        (
                            [id] => 59c8752f60f4f16b4b1271ba
                            [answer] => Array
                                (
                                    [0] => Array
                                        (
                                            [height] => 276
                                            [id] => 0
                                            [width] => 359
                                            [x] => 241
                                            [y] => 26
                                            [z] => 100
                                        )

                                )

                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [instruction] => face
                            [postback_url] => https://your.url/
                            [processed_at] => 2017-09-29T16:37:35.445+07:00
                            [project_id] => 72
                            [status] => processed
                        )

                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
            [current_page] => 1
            [next_page] => 1
            [prev_page] => -1
            [total_pages] => 1
            [total_count] => 3
        )

)

```

## Create
```php
ImagePhotoTags::create($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| instruction	     | string      |   Yes | Image instruction|
| data     | 	string | Yes |Data for attachment|
| postback_url	     | string      | No | Image postback url|
| postback_method     | 	string | No |Postback method|
| custom_id	     | string      |   No |Custom's id|

## Example  

Request
```php 
$params = array('instruction' => 'face', 
		'data' => 'https://your.url/', 
		'postback_url' => 'https://your.url/');
$project_token = 'ZwuaoaUHMYMHCbZh6TKUMpg7';
$res= ImagePhotoTags::create($project_token, $params);
```

Response
```php
Array
(
    [data] => Array
        (
            [id] => 5a41cdc660f4f15943f42d35
            [answer] => Array
                (
                )

            [credit_charged] => 0
            [custom_id] =>
            [data] => https://your.url/
            [instruction] => face
            [postback_url] => https://your.url/
            [processed_at] =>
            [project_id] => 72
            [status] => unprocess
        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)
```



## Find by ID 

```js
ImagePhotoTags::get_id($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :----:| :-----|
| id	     | string      |   No | Image id|
|custom_id | string     |    No | Client's image id |

Note: You must choose id or custom_id for search. Not both.

## Example  

Request
```php 
$params = array('id' => '5a41cdc660f4f15943f42d35');
$project_token = 'ZwuaoaUHMYMHCbZh6TKUMpg7';
$res= ImagePhotoTags::get_id($project_token, $params);
```

Response
```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a41cdc660f4f15943f42d35
                    [answer] => Array
                        (
                        )

                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [instruction] => face
                    [postback_url] => https://your.url/
                    [processed_at] =>
                    [project_id] => 72
                    [status] => unprocess
                )
        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )
)

```

----------

# Predictions

Images (AI Beta / 95% accuracy)

- [nanameue] Standard Criteria (~1 min)
- [sexual] Nudity/Sexual (~1 min)
- [demographic] Demographic (~3 mins)
- [ai_human] Standard Criteria & Human

## Get list
```php
Predictions::get($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| page     | 	interger | No | default 0|
| per_page 	     | string      | No | default 20 |

## Example 

Request
```php 
$project_token = 'iS8rc7sam9X2puyF7QogUzVJ';
$res= Predictions::get($project_token);
```

Response
```php
Array
(
    [data] => Array
        (
            [images] => Array
                (
                    [0] => Array
                        (
                            [id] => 5a41eb5e60f4f15943f42d3b
                            [answer] => human
                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [postback_url] => https://your.url/
                            [processed_at] => 2017-12-26T13:25:35.976+07:00
                            [project_id] => 78
                            [status] => processed
                        )

                    [1] => Array
                        (
                            [id] => 5a41eac360f4f15943f42d39
                            [answer] => human
                            [credit_charged] => 0
                            [custom_id] =>
                            [data] => https://your.url/
                            [postback_url] => https://your.url/
                            [processed_at] => 2017-12-26T13:23:00.759+07:00
                            [project_id] => 78
                            [status] => processed
                        )
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
            [current_page] => 1
            [next_page] => -1
            [prev_page] => -1
            [total_pages] => 1
            [total_count] => 2
        )
)
```
 
## Create
```js
Predictions::create($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| data     | 	string | Yes |Data for attachment|
| postback_url	     | string      | No | Image postback url|
| custom_id	     | string      |   No |Custom's id|


## Example  

Request
```php 
$params = array('data' => 'https://your.url/', 'postback_url' => 'https://your.url/');
$project_token = 'iS8rc7sam9X2puyF7QogUzVJ';
$res= Predictions::create($project_token, $params);
```

Response
```php 
Array
(
    [data] => Array
        (
            [id] => 5a41eb5e60f4f15943f42d3b
            [answer] =>
            [credit_charged] => 0
            [custom_id] =>
            [data] => https://your.url/
            [postback_url] => https://your.url/
            [processed_at] =>
            [project_id] => 78
            [status] => processing
        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )
)
```

## Find by ID 

```php
Predictions::get_id($project_token, $params);
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :----:| :-----|
| id	     | string      |   No | Image id|
|custom_id | string     |    No | Client's image id |

Note:
- You must choose id or custom_id for search. Not both.
- Image data dynamic by project token.


## Example  

Request
```php 
$params = array('id' => '5a41eb5e60f4f15943f42d3b');
$project_token = 'iS8rc7sam9X2puyF7QogUzVJ';
$res= Predictions::create($project_token, $params);
```

Response
```php

Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a41eb5e60f4f15943f42d3b
                    [answer] => human
                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [postback_url] => https://your.url/
                    [processed_at] => 2017-12-26T13:25:35.976+07:00
                    [project_id] => 78
                    [status] => processed
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)

```

## This is a compare reponse of each type of Prediction 

For each type of AI prediction will return a difference ```answer``` field, Please make sure you understand each of structure

#### [nanameue] Standard Criteria (~1 min)

response

```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a42062b60f4f15943f42d42
                    [answer] => human
                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [postback_url] => https://your.url/
                    [processed_at] => 2017-12-26T15:19:57.005+07:00
                    [project_id] => 78
                    [status] => processed
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)
```

----
#### [sexual] Nudity/Sexual (~1 min)

response

```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a4204da60f4f15943f42d3f
                    [answer] => Array
                        (
                            [sexual] => 0.00027116652927361
                        )

                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [postback_url] => https://your.url/
                    [processed_at] => 2017-12-26T15:14:19.760+07:00
                    [project_id] => 79
                    [status] => processed
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)
```
---
#### [demographic] Demographic (~3 mins)
Response
```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a4206be60f4f15943f42d46
                    [answer] => Array
                        (
                            [result] => Array
                                (
                                  [coordinates] => Array 
                                  		(
		                                    [x_max] => 747.9999554157257
        		                            [x_min] => 0.0
                		                    [y_max] => 573.0054758787155
                        		            [y_min] => 0.0
                                  		)
	                                  		[gender] => male
                                )

                        )

                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [postback_url] => https://your.url/
                    [processed_at] => 2017-12-26T15:22:37.540+07:00
                    [project_id] => 80
                    [status] => processed
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)
```

---

#### [ai_human] Standard Criteria & Human
Response
```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5a4207e960f4f15943f42d4a
                    [answer] => approved 
                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://your.url/
                    [postback_url] => https://your.url/
                    [processed_at] => 2017-12-26T15:27:22.972+07:00
                    [project_id] => 81
                    [status] => processed
                )

        )

    [meta] => Array
        (
            [code] => 200
            [message] => success
        )

)
```
