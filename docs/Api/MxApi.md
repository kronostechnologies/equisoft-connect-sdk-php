# Equisoft\SDK\EquisoftConnect\MxApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateRecipients()**](MxApi.md#validateRecipients) | **POST** /crm/api/app/mail/validateRecipients | Validate recipients


## `validateRecipients()`

```php
validateRecipients($mxRecipientsPayload): \Equisoft\SDK\EquisoftConnect\Model\MxValidateRecipientsResponse
```

Validate recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mxRecipientsPayload = new \Equisoft\SDK\EquisoftConnect\Model\MxRecipientsPayload(); // \Equisoft\SDK\EquisoftConnect\Model\MxRecipientsPayload

try {
    $result = $apiInstance->validateRecipients($mxRecipientsPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MxApi->validateRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mxRecipientsPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\MxRecipientsPayload**](../Model/MxRecipientsPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\MxValidateRecipientsResponse**](../Model/MxValidateRecipientsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
