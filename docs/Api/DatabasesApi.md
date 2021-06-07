# Equisoft\SDK\EquisoftConnect\DatabasesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDatabases()**](DatabasesApi.md#listDatabases) | **GET** /crm/api/v1/databases | 


## `listDatabases()`

```php
listDatabases($organizationUuid, $databaseName): \Equisoft\SDK\EquisoftConnect\Model\DatabasesListDatabasesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organizationUuid = 'organizationUuid_example'; // string
$databaseName = 'databaseName_example'; // string

try {
    $result = $apiInstance->listDatabases($organizationUuid, $databaseName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->listDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUuid** | **string**|  | [optional]
 **databaseName** | **string**|  | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DatabasesListDatabasesResponse**](../Model/DatabasesListDatabasesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
