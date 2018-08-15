# Images class
We've going to explant about parameter for creation and example of use 

# Table of Content
- [Choice class](#choice-class)
- [Closed Question class](#closed-question-class)
- [Image message class](#image-messages-class)
- [Photo tags class](#photo-tags-class)


## Image Choice class

### Create

```php
ImageChoice::create($token, $params);
```

### params

|Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| instruction| string|**Yes**| Tell moderator what answer you expected and what image is|
|categories | Array[string]|**Yes** | List of answers that you were expected. separate by use space |
| data |string | **Yes** |URL of image|
| postback_url| string|No| URL for answer callback once image has been checked|
| postback_method|string | No |Configuration HTTP method GET POST PUT PATCH|
| allow_empty| boolean|No|Allow answer can be blank. default is `false`|
|multiple | boolean | No | Configuration for multiple selection of category to answer default is `false` |
| custom_id | string | No |Custom ID that used for search|


## Image Closed Question class
```php
ImageClosedQuestion::create($token, $params);
```
#### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| data     | 	string | **Yes** |URL of image|
| postback_url	     | string      | No | URL for answer callback once image has been checked|
| postback_method     | 	string | No |Configuration HTTP method GET POST PUT PATCH|
| custom_id	     | string      |   No |Custom ID that used for search|


## Image Message class
```php
ImageMessage::create($token, $params);
```
#### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| instruction	     | string      |   **Yes** | Tell moderator what answer you expected and what image is|
| data     | 	string | **Yes** |URL of image|
| postback_url	     | string      | No | URL for answer callback once image has been checked|
| postback_method     | 	string | No |Configuration HTTP method GET POST PUT PATCH|
| custom_id	     | string      |   No |Custom ID that used for search|

## Photo tag class

```php 
ImagePhotoTag::create($token, $params);
```

#### params
| Field | Type| Required | Description |
| ------------- |:-------------:| :-----:| :-----|
|instruction| string|**Yes** |Tell moderator what answer you expected and what image is|
|data|string| **Yes** |URL of image|
|postback_url|string| No |URL for answer callback once image has been checked|
|postback_method|string | No |Configuration HTTP method GET POST PUT PATCH|
|custom_id|string|No|Custom ID that used for search|


## Query list of data by `gets()`
For `$params` we've going to explant parameter that `gets()`  has been defined

```php
YourClass::gets(array('page' => 1, 'per_page' => 20))
```

#### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| page     | 	integer | No | default 0|
| per_page 	     | string      | No | default 20 |

Once, you want to controller number of result and implement pagination on you system, you must pass those parameters on you code


## Find data with ID by `find_id()`

```php
YourClass::gets(array('id' => 1))
```
#### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :----:| :-----|
| id	     | string  |   **Yes** | Image's ID or custom ID which is you were assigned|
