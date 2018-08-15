# Video class
We've going to explant about parameter for creation and example of use 


# Table of Content
- [Video classify class](#video-classify-class)



## Video classify class

### Create

```php
VideoClassify::create($token, $params);
```


#### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| data     | 	string | **Yes** |URL of Video|
| play_at | float |No |Setting video start time|
| allow_seeking |bool| No |Allow seeking video player (default `true`)|
|muted |bool|No| Mute video on start (default: `true`)|
| postback_url	     | string      | No | URL for answer callback once video has been checked|
| postback_method     | 	string | No |Configuration HTTP method GET POST PUT PATCH|
| custom_id	     | string      |   No |Custom ID that used for search|



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
