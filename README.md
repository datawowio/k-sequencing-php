k sequencing php
=========================
k-sequencing-php is rest library for php version.
###### support or question support@datawow.io

# Requirements
* php 5.4 or above
* Built-in libcurl support.

# Installation 
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


# Usage 

```php 
<?php 

require_once dirname(__FILE__).'/vendor/autoload.php';

$params = array('instruction' => 'face', 'categories' => 'face eye ear', 'data' => 'www.url-of-image.com', 'postback_url' => 'www.your-callback.url', 'multiple' => true);

$project_token = 'yourToekn'

$res = ImageChoices::create($project_token, $params);
$res = json_decode($res, true);
// print_r($res);

// find by id
$params = array('id' => $res["data"]["id"]);
$res = ImageChoices::get_id($project_token, $params);
// print_r(json_decode($s));

// list all data 
$res = ImageChoices::get($project_token);
// print_r($res);


```


# Response 
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
            [data] => https://image.url
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


# List of API Provider

#### Image Choices

##### Get list
```php
ImageChoices::get($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *page* **(string, optional)**: Default 0
> - *limit* **(string, optional)**: Default 20


 
##### Create
```php
ImageChoices::create($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *instruction* **(string, require)**
> - *categories* **(string group, require)**: separate group by space ``` name1 name2 name3 ```
> - *data* **(string URL, require, optional)**
> - *postback_url* **(string URL, optional)**
> - *multiple* **(boolean, optional)**: Default is ``` false ```
> - *postback_method* **(string, optional)**: Default with your project setting. if you set this parameter that will be override your default setting
> - *custom_id* **(string, optional)**: Use to custom ``` Primary key ``` of data row


##### Find by ID 

```js
ImageChoices::get_id($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *id* **(string, optional)**: Default 0


----------
#### Image Closed Question
##### Get list
```php
ImageClosedQuestions::get($project_token, $params);
```
##### params
> - *page* **(string, optional)**: Default 0
> - *limit* **(string, optional)**: Default 20


 
##### Create
```php
ImageClosedQuestions::create($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *data* **(string URL, require, optional)**
> - *postback_url* **(string URL, optional)**
> - *postback_method* **(string, optional)**: Default with your project setting. if you set this parameter that will be override your default setting
> - *custom_id* **(string, optional)**: Use to custom ``` Primary key ``` of data row


##### Find by ID 

```php
ImageClosedQuestions::get_id($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *id* **(string, optional)**: Default 0

----------
#### Image Messages

##### Get list
```php
ImageMessages::get($project_token, $params);
```
##### params
> - *page* **(string, optional)**: Default 0
> - *limit* **(string, optional)**: Default 20


 
##### Create
```js
ImageMessages::create($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *instruction* **(string, require)**
> - *data* **(string URL, require, optional)**
> - *postback_url* **(string URL, optional)**
> - *postback_method* **(string, optional)**: Default with your project setting. if you set this parameter that will be override your default setting
> - *custom_id* **(string, optional)**: Use to custom ``` Primary key ``` of data row


##### Find by ID 

```php
ImageMessages::get_id($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *id* **(string, optional)**: Default 0

----------
#### Photo tags

##### Get list
```php 
ImagePhotoTags::get_id($project_token, $params);
```
##### params
> - *page* **(string, optional)**: Default 0
> - *limit* **(string, optional)**: Default 20


 
##### Create
```php
ImagePhotoTags::create($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *instruction* **(string, require)**
> - *data* **(string URL, require, optional)**
> - *postback_url* **(string URL, optional)**
> - *postback_method* **(string, optional)**: Default with your project setting. if you set this parameter that will be override your default setting
> - *custom_id* **(string, optional)**: Use to custom ``` Primary key ``` of data row


##### Find by ID 

```js
ImagePhotoTags::get_id($project_token, $params);
```
##### params
> - *Authorization* **(string, header, require)**: Token of your project
> - *id* **(string, optional)**: Default 0

