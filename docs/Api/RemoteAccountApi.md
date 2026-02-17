# Equisoft\SDK\EquisoftConnect\RemoteAccountApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMailAccountAccessRights()**](RemoteAccountApi.md#getMailAccountAccessRights) | **GET** /crm/api/v1/mailAccounts/{remoteAccountId}/accessRights | Return the mail account access rights granted to the currently connected user account. |


## `getMailAccountAccessRights()`

```php
getMailAccountAccessRights($remoteAccountId): \Equisoft\SDK\EquisoftConnect\Model\AccessRights
```

Return the mail account access rights granted to the currently connected user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\RemoteAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remoteAccountId = 'remoteAccountId_example'; // string | Remote account identifier.

try {
    $result = $apiInstance->getMailAccountAccessRights($remoteAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteAccountApi->getMailAccountAccessRights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remoteAccountId** | **string**| Remote account identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\AccessRights**](../Model/AccessRights.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
