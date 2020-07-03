# Equisoft\SDK\EquisoftConnect\UsersApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrentUser**](UsersApi.md#getCurrentUser) | **GET** /crm/api/v1/users/me | Get informations about the current user



## getCurrentUser

> \Equisoft\SDK\EquisoftConnect\Model\UsersUser getCurrentUser($acceptLanguage)

Get informations about the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->getCurrentUser($acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\UsersUser**](../Model/UsersUser.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

