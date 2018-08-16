# Text class
We've going to explant about parameter for creation and example of use 

# Table of Content
- [How to use it](#create)

## [Type of AI](#response-of-each-type-ai)
- [Standard Criteria](#standard-criteria)


## Images (AI Beta)

- Standard Criteria
- Nudity/Sexual
- Demographic
- Standard Criteria & Human

### Create
```php 
Predictor::create($token, $params)
```
##### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| data     | 	string | Yes |Data for attachment|
| postback_url	     | string      | No | Image postback url|
| postback_method     | 	string | No |Postback method|
| custom_id	     | string      |   No |Custom's id|


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


## Response of each type AI

### Standard Criteria
```php 
Array
(
    [data] => Array
        (
            [image] => Array
                (
                    [id] => 5b751b875a5e43228728d6dd
                    [answer] => approved
                    [credit_charged] => 0
                    [custom_id] =>
                    [data] => https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/242ce817-97a3-48fe-9acd-b1bf97930b01/09-posterization-opt.jpg
                    [postback_url] => https://e66f2b04.ap.ngrok.io/callback
                    [processed_at] => 2018-08-16T13:49:06.544+07:00
                    [project_id] => 143
                    [staff_id] => 999999
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
### Nudity/Sexual

> Incoming

### Demographic
> Incoming
### Standard Criteria & Human
> Incoming
