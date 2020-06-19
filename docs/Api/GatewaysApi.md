# Equisoft\SDK\EquisoftConnect\GatewaysApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEquisoftAnalyzeAccess**](GatewaysApi.md#createEquisoftAnalyzeAccess) | **POST** /crm/api/v1/gateways/equisoftAnalyze/accesses | 
[**deleteEquisoftAnalyzeAccess**](GatewaysApi.md#deleteEquisoftAnalyzeAccess) | **DELETE** /crm/api/v1/gateways/equisoftAnalyze/accesses/{accessId} | 
[**listEquisoftAnalyzeAccesses**](GatewaysApi.md#listEquisoftAnalyzeAccesses) | **GET** /crm/api/v1/gateways/equisoftAnalyze/accesses | 
[**listGenericCredentials**](GatewaysApi.md#listGenericCredentials) | **GET** /crm/api/v1/gateways/generic/{gatewayName}/credentials | 
[**patchEquisoftAnalyzeAccess**](GatewaysApi.md#patchEquisoftAnalyzeAccess) | **PATCH** /crm/api/v1/gateways/equisoftAnalyze/accesses/{accessId} | 



## createEquisoftAnalyzeAccess

> \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateAccessResponse createEquisoftAnalyzeAccess($gatewaysAccessesCreateEquisoftAnalyzeAccessPayload)



Create a user access configuration for Equisoft/analyze gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\GatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gatewaysAccessesCreateEquisoftAnalyzeAccessPayload = new \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateEquisoftAnalyzeAccessPayload(); // \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateEquisoftAnalyzeAccessPayload | 

try {
    $result = $apiInstance->createEquisoftAnalyzeAccess($gatewaysAccessesCreateEquisoftAnalyzeAccessPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->createEquisoftAnalyzeAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gatewaysAccessesCreateEquisoftAnalyzeAccessPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateEquisoftAnalyzeAccessPayload**](../Model/GatewaysAccessesCreateEquisoftAnalyzeAccessPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateAccessResponse**](../Model/GatewaysAccessesCreateAccessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteEquisoftAnalyzeAccess

> object deleteEquisoftAnalyzeAccess($accessId)



Delete user access configuration for given gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\GatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accessId = 56; // int | 

try {
    $result = $apiInstance->deleteEquisoftAnalyzeAccess($accessId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->deleteEquisoftAnalyzeAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **int**|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listEquisoftAnalyzeAccesses

> \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesListGatewayAccessesResponse listEquisoftAnalyzeAccesses($userUuid)



List user accesses configuration for equisoft/analyze gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\GatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userUuid = d2507338-78f2-4299-8bec-e82b1d242d4c; // string | 

try {
    $result = $apiInstance->listEquisoftAnalyzeAccesses($userUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listEquisoftAnalyzeAccesses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userUuid** | **string**|  | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesListGatewayAccessesResponse**](../Model/GatewaysAccessesListGatewayAccessesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listGenericCredentials

> \Equisoft\SDK\EquisoftConnect\Model\GatewaysListCredentialsResponse listGenericCredentials($gatewayName, $includeSsn)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\GatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gatewayName = 'gatewayName_example'; // string | 
$includeSsn = True; // bool | Include the list of SSN for each credentials. Defaults to false

try {
    $result = $apiInstance->listGenericCredentials($gatewayName, $includeSsn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listGenericCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gatewayName** | **string**|  |
 **includeSsn** | **bool**| Include the list of SSN for each credentials. Defaults to false | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysListCredentialsResponse**](../Model/GatewaysListCredentialsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchEquisoftAnalyzeAccess

> object patchEquisoftAnalyzeAccess($accessId, $gatewaysAccessesPatchEquisoftAnalyzeAccessPayload)



Update user access configuration for Equisoft/analyze gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\GatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accessId = 56; // int | 
$gatewaysAccessesPatchEquisoftAnalyzeAccessPayload = new \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesPatchEquisoftAnalyzeAccessPayload(); // \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesPatchEquisoftAnalyzeAccessPayload | 

try {
    $result = $apiInstance->patchEquisoftAnalyzeAccess($accessId, $gatewaysAccessesPatchEquisoftAnalyzeAccessPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->patchEquisoftAnalyzeAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **int**|  |
 **gatewaysAccessesPatchEquisoftAnalyzeAccessPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesPatchEquisoftAnalyzeAccessPayload**](../Model/GatewaysAccessesPatchEquisoftAnalyzeAccessPayload.md)|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

