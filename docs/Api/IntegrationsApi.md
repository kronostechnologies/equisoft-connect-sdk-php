# Equisoft\SDK\EquisoftConnect\IntegrationsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadLaserAppEnterpriseContactData**](IntegrationsApi.md#downloadLaserAppEnterpriseContactData) | **GET** /crm/api/app/integrations/laserapp/enterprise/{contactId} | Download contact data for LaserApp Enterprise.
[**redirectContactToLaserAppAnywhere**](IntegrationsApi.md#redirectContactToLaserAppAnywhere) | **GET** /crm/api/app/integrations/laserapp/anywhere/{contactId} | Redirect contact to LaserApp Anywhere.



## downloadLaserAppEnterpriseContactData

> downloadLaserAppEnterpriseContactData($contactId)

Download contact data for LaserApp Enterprise.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 56; // int | 

try {
    $apiInstance->downloadLaserAppEnterpriseContactData($contactId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->downloadLaserAppEnterpriseContactData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **int**|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## redirectContactToLaserAppAnywhere

> \Equisoft\SDK\EquisoftConnect\Model\LaserAppLaserAppAnywhereResponse redirectContactToLaserAppAnywhere($contactId)

Redirect contact to LaserApp Anywhere.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 56; // int | 

try {
    $result = $apiInstance->redirectContactToLaserAppAnywhere($contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->redirectContactToLaserAppAnywhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **int**|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LaserAppLaserAppAnywhereResponse**](../Model/LaserAppLaserAppAnywhereResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

