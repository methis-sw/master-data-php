# METHIS\DeceasedContactsApi

All URIs are relative to *https://master-data.methis.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchDeceasedContact**](DeceasedContactsApi.md#searchDeceasedContact) | **POST** /deceased-contact/search | Detect a deceased contacts from name and address
[**searchDeceasedContacts**](DeceasedContactsApi.md#searchDeceasedContacts) | **POST** /deceased-contacts/search | Detect deceased contacts from name and address as batch


# **searchDeceasedContact**
> \METHIS\DeceasedContactResponse searchDeceasedContact($key, $first_name, $last_name, $country, $zip, $street)

Detect a deceased contacts from name and address

Returns an array of information about the given contact if it was found in the deceased data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\DeceasedContactsApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$first_name = "first_name_example"; // string | The first name
$last_name = "last_name_example"; // string | The last name
$country = "country_example"; // string | 2 digit ISO country code
$zip = "zip_example"; // string | Zip code of the address
$street = "street_example"; // string | Street name without housenumber or any other additions.

try {
    $result = $api_instance->searchDeceasedContact($key, $first_name, $last_name, $country, $zip, $street);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeceasedContactsApi->searchDeceasedContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **first_name** | **string**| The first name |
 **last_name** | **string**| The last name |
 **country** | **string**| 2 digit ISO country code |
 **zip** | **string**| Zip code of the address |
 **street** | **string**| Street name without housenumber or any other additions. |

### Return type

[**\METHIS\DeceasedContactResponse**](../Model/DeceasedContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDeceasedContacts**
> \METHIS\DeceasedContactResponse[] searchDeceasedContacts($key, $batch)

Detect deceased contacts from name and address as batch

Returns an array of information about the given contacts if it was found in the deceased data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\DeceasedContactsApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$batch = "batch_example"; // string | JSON encoded request data as array of single requests. For structure of single request please see /deceased-contact/search route

try {
    $result = $api_instance->searchDeceasedContacts($key, $batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeceasedContactsApi->searchDeceasedContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The API key which you got for authenticating against the API |
 **batch** | **string**| JSON encoded request data as array of single requests. For structure of single request please see /deceased-contact/search route |

### Return type

[**\METHIS\DeceasedContactResponse[]**](../Model/DeceasedContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

