# METHIS\UndeliverableContactsApi

All URIs are relative to *https://master-data.methis.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchUndeliverableContact**](UndeliverableContactsApi.md#searchUndeliverableContact) | **POST** /undeliverable-contact/search | Searches for name and addresses and detects if the contact has moved or is deceased
[**searchUndeliverableContacts**](UndeliverableContactsApi.md#searchUndeliverableContacts) | **POST** /undeliverable-contacts/search | Batch search for name and addresses and detects if the contact has moved or is deceased.


# **searchUndeliverableContact**
> \METHIS\UndeliverableContactResponse searchUndeliverableContact($key, $first_name, $last_name, $country_code, $zip, $street)

Searches for name and addresses and detects if the contact has moved or is deceased

Returns information about the given contact and trys to locate the new address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\UndeliverableContactsApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$country_code = "country_code_example"; // string | 2 digit ISO country code
$zip = "zip_example"; // string | Zip code of the address
$street = "street_example"; // string | Street name without housenumber or any other additions.

try {
    $result = $api_instance->searchUndeliverableContact($key, $first_name, $last_name, $country_code, $zip, $street);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UndeliverableContactsApi->searchUndeliverableContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **country_code** | **string**| 2 digit ISO country code |
 **zip** | **string**| Zip code of the address |
 **street** | **string**| Street name without housenumber or any other additions. |

### Return type

[**\METHIS\UndeliverableContactResponse**](../Model/UndeliverableContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUndeliverableContacts**
> \METHIS\UndeliverableContactsResponse searchUndeliverableContacts($key, $batch)

Batch search for name and addresses and detects if the contact has moved or is deceased.

Returns information about the given contact and trys to locate the new address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\UndeliverableContactsApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$batch = "batch_example"; // string | JSON encoded request data as array of single requests. For structure of single request please see /undeliverable-contact/search route

try {
    $result = $api_instance->searchUndeliverableContacts($key, $batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UndeliverableContactsApi->searchUndeliverableContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **batch** | **string**| JSON encoded request data as array of single requests. For structure of single request please see /undeliverable-contact/search route |

### Return type

[**\METHIS\UndeliverableContactsResponse**](../Model/UndeliverableContactsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

