# Equisoft\SDK\EquisoftConnect\SystemParametersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompanyDetails()**](SystemParametersApi.md#getCompanyDetails) | **GET** /crm/api/v1/databases/{databaseUuid}/parameters/account/company | Get company information about the enterprise or an alternate company |
| [**getCompanyLogo()**](SystemParametersApi.md#getCompanyLogo) | **GET** /crm/api/v1/databases/{databaseUuid}/parameters/account/company/logo | Get company logo |


## `getCompanyDetails()`

```php
getCompanyDetails($databaseUuid, $companyId): \Equisoft\SDK\EquisoftConnect\Model\SystemparametersCompanyResponse
```

Get company information about the enterprise or an alternate company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\SystemParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$databaseUuid = 'databaseUuid_example'; // string | Database unique identifier.
$companyId = 56; // int | Id of the company, leave unspecified to get the enterprise company

try {
    $result = $apiInstance->getCompanyDetails($databaseUuid, $companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemParametersApi->getCompanyDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **databaseUuid** | **string**| Database unique identifier. | |
| **companyId** | **int**| Id of the company, leave unspecified to get the enterprise company | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\SystemparametersCompanyResponse**](../Model/SystemparametersCompanyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyLogo()`

```php
getCompanyLogo($databaseUuid, $type, $companyId): \SplFileObject
```

Get company logo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\SystemParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$databaseUuid = 'databaseUuid_example'; // string | Database unique identifier.
$type = 'web'; // string | type
$companyId = 56; // int | Id of the company, leave unspecified to get the enterprise company

try {
    $result = $apiInstance->getCompanyLogo($databaseUuid, $type, $companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemParametersApi->getCompanyLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **databaseUuid** | **string**| Database unique identifier. | |
| **type** | **string**| type | [optional] [default to &#39;web&#39;] |
| **companyId** | **int**| Id of the company, leave unspecified to get the enterprise company | [optional] |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
