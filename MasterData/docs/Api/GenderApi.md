# METHIS\GenderApi

All URIs are relative to *https://master-data.methis.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**genderAll**](GenderApi.md#genderAll) | **POST** /gender/all | Export the complete gender data
[**genderDetect**](GenderApi.md#genderDetect) | **POST** /gender/detect | Detects the gender based on the given first name
[**genderUpdate**](GenderApi.md#genderUpdate) | **POST** /gender/update | Update gender data
[**gendersDetect**](GenderApi.md#gendersDetect) | **POST** /genders/detect | Detects the gender based on the given first name


# **genderAll**
> \METHIS\GenderAllResponse genderAll($key)

Export the complete gender data

Returns all the gender data from the database

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\GenderApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API

try {
    $result = $api_instance->genderAll($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenderApi->genderAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |

### Return type

[**\METHIS\GenderAllResponse**](../Model/GenderAllResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderDetect**
> \METHIS\GenderDetectResponse genderDetect($key, $first_name, $country_code)

Detects the gender based on the given first name

Returns the gender for a given first name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\GenderApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$first_name = "first_name_example"; // string | 
$country_code = "country_code_example"; // string | Optional 2 digit ISO country code. If this value is set, only country specific first names will be searched.

try {
    $result = $api_instance->genderDetect($key, $first_name, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenderApi->genderDetect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **first_name** | **string**|  |
 **country_code** | **string**| Optional 2 digit ISO country code. If this value is set, only country specific first names will be searched. | [optional]

### Return type

[**\METHIS\GenderDetectResponse**](../Model/GenderDetectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **genderUpdate**
> \METHIS\GenderUpdateResponse genderUpdate($key, $first_name, $country_code, $gender)

Update gender data

Updates the gender data of the given first name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\GenderApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$first_name = "first_name_example"; // string | 
$country_code = "country_code_example"; // string | Optional 2 digit ISO country code if the given data should be country specific.
$gender = "gender_example"; // string | The gender as it should be set

try {
    $result = $api_instance->genderUpdate($key, $first_name, $country_code, $gender);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenderApi->genderUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **first_name** | **string**|  |
 **country_code** | **string**| Optional 2 digit ISO country code if the given data should be country specific. | [optional]
 **gender** | **string**| The gender as it should be set | [optional]

### Return type

[**\METHIS\GenderUpdateResponse**](../Model/GenderUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gendersDetect**
> \METHIS\GenderDetectResponse gendersDetect($key, $first_name)

Detects the gender based on the given first name

Returns the gender for a given first name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\GenderApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$first_name = "first_name_example"; // string | 

try {
    $result = $api_instance->gendersDetect($key, $first_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenderApi->gendersDetect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **first_name** | **string**|  |

### Return type

[**\METHIS\GenderDetectResponse**](../Model/GenderDetectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

