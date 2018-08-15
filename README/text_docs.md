# Text class
We've going to explant about parameter for creation and example of use 

# Table of Content
- [Category class](#category-class)
- [Closed Question class](#closed-question-class)
- [Conversation class](#conversation-class)

## Category class

### Create

```php
Category::create($token, $params);
```


|Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| conversation| array of dict|**Yes**| Example: `[{ "name": "...", "message": "..." }]`|
|title|string|**Yes**|Title of conversation|
|allow_empty |bool| |No|Answer can be empty|
|postback_url|string|No|URL for callback|
|postback_method| string|No| Configuration HTTP method GET POST PUT PATCH|
|custom_id| string|No| Custom ID that used for search|


## Closed Question class

### Create

```php
TextClosedQuestion::create($token, $params);
```

|Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
|data|string|**Yes**|Stream of text to moderate|
|postback_url|string|No|URL for callback|
|postback_method| string|No| Configuration HTTP method GET POST PUT PATCH|
|custom_id| string|No| Custom ID that used for search|


## Conversation class

### Create

```php
Conversation::create($token, $params);
```

|Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
|conversation| array of dict|**Yes**| Example: `["foo", "bar"]`|
|custom_conversation_ids|string|**Yes**|Example: `['1','2']`|
|postback_url|string|No|URL for callback|
|postback_method| string|No| Configuration HTTP method GET POST PUT PATCH|
|custom_id| string|No| Custom ID that used for search|



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
