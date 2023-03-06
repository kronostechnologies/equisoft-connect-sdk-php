# Equisoft\SDK\EquisoftConnect\ContactsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getByUuid()**](ContactsApi.md#getByUuid) | **GET** /crm/api/v1/contacts/{contactUuid} | Return the detail of a contact.


## `getByUuid()`

```php
getByUuid($contactUuid, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\ContactsContact
```

Return the detail of a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactUuid = 'contactUuid_example'; // string | Contact unique identifier.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getByUuid($contactUuid, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactUuid** | **string**| Contact unique identifier. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\ContactsContact**](../Model/ContactsContact.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
