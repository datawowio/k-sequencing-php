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

After you run composer install then you will have folder ```vendor/``` to store your libs. Now you can load those libs via
```php
require_once dirname(__FILE__).'/vendor/autoload.php';
```


# APIs explanation 
There are 4 models for our API and each of its there are 3 operations to use such as _Create_, _list data_ and _find by id_. We've going to show you what APIs we have .

#### Image model. We have 4 APIs

- ImageChoice
- ImageClosedQuestion
- ImageMessage
- ImagePhotoTag


#### Text model. We have 3 APIs

- Category
- Conversation
- TextClosedQuestion

#### Video model. We have 1 APIs

- VideoClassify


#### Prediction model. We have 1 APIs

- Predictor



### Model functions
For create data use `create()`
```php
/**
@param string $token 
@param array $params
**/
ImageChoice::create($token, $params);
```
For query list of data use `gets()`
```php
/**
@param string $token 
@param array $params
**/
ImageChoice::gets($token, $params);
``` 
For find data by ID use `find_id()`
```php
/**
@param string $token 
@param string|int $id
**/
ImageChoice::find_id($token, $id);
``` 
Every function that being used must have `$token` which is a project token and  `$params` is a parameter that required for each model. For `$params` we've going to explanation in a usage section o or click [link](www.google.con) jump to the usage section



# Demo and Usage

 - Image Documentation [link](README/image_docs.md)
 - Video Documentation [link](README/video_docs.md)
 - Text Documentation [link](README/text_docs.md)
 - AI/Prediction Documentation [link](README/ai_docs.md)
