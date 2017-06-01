# METHIS\MovedContactsApi

All URIs are relative to *https://master-data.methis.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchMovedContact**](MovedContactsApi.md#searchMovedContact) | **POST** /moved-contact/search | Detect a moved contact and try to find the contact&#39;s new address
[**searchMovedContacts**](MovedContactsApi.md#searchMovedContacts) | **POST** /moved-contacts/search | Detect moved contacts as batch and try to find the contact&#39;s new address


# **searchMovedContact**
> \METHIS\MovedContactResponse searchMovedContact($key, $first_name, $last_name, $country_old, $zip_old, $street_old)

Detect a moved contact and try to find the contact's new address

Returns information about the given contact and trys to locate the new address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\MovedContactsApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$first_name = "first_name_example"; // string | The first name
$last_name = "last_name_example"; // string | The last name
$country_old = "country_old_example"; // string | 2 digit ISO country code
$zip_old = "zip_old_example"; // string | 
$street_old = "street_old_example"; // string | Street name without housenumber or any other additions.

try {
    $result = $api_instance->searchMovedContact($key, $first_name, $last_name, $country_old, $zip_old, $street_old);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovedContactsApi->searchMovedContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **first_name** | **string**| The first name |
 **last_name** | **string**| The last name |
 **country_old** | **string**| 2 digit ISO country code |
 **zip_old** | **string**|  |
 **street_old** | **string**| Street name without housenumber or any other additions. |

### Return type

[**\METHIS\MovedContactResponse**](../Model/MovedContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchMovedContacts**
> \METHIS\MovedContactResponse[] searchMovedContacts($key, $batch)

Detect moved contacts as batch and try to find the contact's new address

Returns an array of information about the given contact and trys to locate the new address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\MovedContactsApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$batch = "batch_example"; // string | JSON encoded request data as array of single requests. For structure of single request please see /moved-contact/search route

try {
    $result = $api_instance->searchMovedContacts($key, $batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovedContactsApi->searchMovedContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **batch** | **string**| JSON encoded request data as array of single requests. For structure of single request please see /moved-contact/search route |

### Return type

[**\METHIS\MovedContactResponse[]**](../Model/MovedContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

