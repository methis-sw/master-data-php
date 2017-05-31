# 
Documentation for METHIS Master Data API for centralized master data storage

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.1.0
- Package version: 0.0.1
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://datamill.solutions/en#contact-form](https://datamill.solutions/en#contact-form)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/methis-sw/master-data-php.git"
    }
  ],
  "require": {
    "methis-sw/master-data-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new METHIS\Api\DeceasedContactsApi();
$key = "key_example"; // string | The API key which you got for authenticating against the API
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
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

## Documentation for API Endpoints

All URIs are relative to *https://master-data.methis.at/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeceasedContactsApi* | [**searchDeceasedContact**](docs/Api/DeceasedContactsApi.md#searchdeceasedcontact) | **POST** /deceased-contact/search | Detect a deceased contacts from name and address
*DeceasedContactsApi* | [**searchDeceasedContacts**](docs/Api/DeceasedContactsApi.md#searchdeceasedcontacts) | **POST** /deceased-contacts/search | Detect deceased contacts from name and address as batch
*GenderApi* | [**genderAll**](docs/Api/GenderApi.md#genderall) | **POST** /gender/all | Export the complete gender data
*GenderApi* | [**genderDetect**](docs/Api/GenderApi.md#genderdetect) | **POST** /gender/detect | Detects the gender based on the given first name
*GenderApi* | [**genderUpdate**](docs/Api/GenderApi.md#genderupdate) | **POST** /gender/update | Update gender data
*GenderApi* | [**gendersDetect**](docs/Api/GenderApi.md#gendersdetect) | **POST** /genders/detect | Detects the gender based on the given first name
*MovedContactsApi* | [**searchMovedContact**](docs/Api/MovedContactsApi.md#searchmovedcontact) | **POST** /moved-contact/search | Detect a moved contact and try to find the contact&#39;s new address
*MovedContactsApi* | [**searchMovedContacts**](docs/Api/MovedContactsApi.md#searchmovedcontacts) | **POST** /moved-contacts/search | Detect moved contacts as batch and try to find the contact&#39;s new address
*UndeliverableContactsApi* | [**searchUndeliverableContact**](docs/Api/UndeliverableContactsApi.md#searchundeliverablecontact) | **POST** /undeliverable-contact/search | Searches for name and addresses and detects if the contact has moved or is deceased
*UndeliverableContactsApi* | [**searchUndeliverableContacts**](docs/Api/UndeliverableContactsApi.md#searchundeliverablecontacts) | **POST** /undeliverable-contacts/search | Batch search for name and addresses and detects if the contact has moved or is deceased.


## Documentation For Models

 - [ContactObject](docs/Model/ContactObject.md)
 - [DeceasedContactResponse](docs/Model/DeceasedContactResponse.md)
 - [DeceasedContactSearchRequest](docs/Model/DeceasedContactSearchRequest.md)
 - [DeceasedContactsResponse](docs/Model/DeceasedContactsResponse.md)
 - [ErrorForbidden](docs/Model/ErrorForbidden.md)
 - [ErrorInternalError](docs/Model/ErrorInternalError.md)
 - [ErrorMissingParameters](docs/Model/ErrorMissingParameters.md)
 - [ErrorNotAllowed](docs/Model/ErrorNotAllowed.md)
 - [ErrorNotFound](docs/Model/ErrorNotFound.md)
 - [ErrorServiceUnavailable](docs/Model/ErrorServiceUnavailable.md)
 - [ErrorUnauthorized](docs/Model/ErrorUnauthorized.md)
 - [GenderAllResponse](docs/Model/GenderAllResponse.md)
 - [GenderDetectResponse](docs/Model/GenderDetectResponse.md)
 - [GenderUpdateResponse](docs/Model/GenderUpdateResponse.md)
 - [MovedContactResponse](docs/Model/MovedContactResponse.md)
 - [MovedContactSearchRequest](docs/Model/MovedContactSearchRequest.md)
 - [MovedContactsResponse](docs/Model/MovedContactsResponse.md)
 - [UndeliverableContactResponse](docs/Model/UndeliverableContactResponse.md)
 - [UndeliverableContactsResponse](docs/Model/UndeliverableContactsResponse.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

info@datamill.solutions


