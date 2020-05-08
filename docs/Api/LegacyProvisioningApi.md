# Equisoft\SDK\EquisoftConnect\LegacyProvisioningApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrganization**](LegacyProvisioningApi.md#getOrganization) | **GET** /apps/provisioning/kronos.provisioning.getOrganization | Get all informations about an organization.
[**getOrganizationList**](LegacyProvisioningApi.md#getOrganizationList) | **GET** /apps/provisioning/kronos.provisioning.getOrganizationList | List all organizations



## getOrganization

> \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetOrganizationResponse getOrganization($orgId)

Get all informations about an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string | Organization Id

try {
    $result = $apiInstance->getOrganization($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**| Organization Id |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetOrganizationResponse**](../Model/LegacyProvisioningGetOrganizationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrganizationList

> \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetOrganizationListResponse getOrganizationList()

List all organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganizationList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->getOrganizationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetOrganizationListResponse**](../Model/LegacyProvisioningGetOrganizationListResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

