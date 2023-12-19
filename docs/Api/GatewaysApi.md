# Equisoft\SDK\EquisoftConnect\GatewaysApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCapsilAccess()**](GatewaysApi.md#createCapsilAccess) | **POST** /crm/api/v1/gateways/capsil/accesses | Create a Capsil Access
[**createEquisoftAnalyzeAccess()**](GatewaysApi.md#createEquisoftAnalyzeAccess) | **POST** /crm/api/v1/gateways/equisoftAnalyze/accesses | 
[**deleteCapsilAccess()**](GatewaysApi.md#deleteCapsilAccess) | **DELETE** /crm/api/v1/gateways/capsil/accesses/{accessId} | Delete Capsil access
[**deleteEquisoftAnalyzeAccess()**](GatewaysApi.md#deleteEquisoftAnalyzeAccess) | **DELETE** /crm/api/v1/gateways/equisoftAnalyze/accesses/{accessId} | 
[**gatewayAdminLogin()**](GatewaysApi.md#gatewayAdminLogin) | **POST** /crm/api/v1/gateways/credentials-validation/admin-credentials/login | 
[**getCapsilAccess()**](GatewaysApi.md#getCapsilAccess) | **GET** /crm/api/v1/gateways/capsil/accesses/{accessId} | Get Capsil access
[**listAssetBookCredentials()**](GatewaysApi.md#listAssetBookCredentials) | **GET** /crm/api/v1/gateways/assetbook/credentials | 
[**listCapsilAccesses()**](GatewaysApi.md#listCapsilAccesses) | **GET** /crm/api/v1/gateways/capsil/accesses | List capsil accesses
[**listCapsilCarrierAdminSystems()**](GatewaysApi.md#listCapsilCarrierAdminSystems) | **GET** /crm/api/v1/gateways/capsil/carrierAdminSystems | List carrier admin systems
[**listCredentials()**](GatewaysApi.md#listCredentials) | **GET** /crm/api/v1/gateways/credentials-validation/{gatewayId}/credentials/{status} | 
[**listEquisoftAnalyzeAccesses()**](GatewaysApi.md#listEquisoftAnalyzeAccesses) | **GET** /crm/api/v1/gateways/equisoftAnalyze/accesses | 
[**listGatewayConfigurations()**](GatewaysApi.md#listGatewayConfigurations) | **GET** /crm/api/v1/gateways/generic/{gatewayName}/configuration | 
[**listGateways()**](GatewaysApi.md#listGateways) | **GET** /crm/api/v1/gateways/credentials-validation | 
[**listGenericCredentials()**](GatewaysApi.md#listGenericCredentials) | **GET** /crm/api/v1/gateways/generic/{gatewayName}/credentials | 
[**patchEquisoftAnalyzeAccess()**](GatewaysApi.md#patchEquisoftAnalyzeAccess) | **PATCH** /crm/api/v1/gateways/equisoftAnalyze/accesses/{accessId} | 
[**updateCapsilAccess()**](GatewaysApi.md#updateCapsilAccess) | **PATCH** /crm/api/v1/gateways/capsil/accesses/{accessId} | Update a Capsil Access
[**updateCredentials()**](GatewaysApi.md#updateCredentials) | **PUT** /crm/api/v1/gateways/credentials-validation/{gatewayId}/credentials/{status} | 


## `createCapsilAccess()`

```php
createCapsilAccess($gatewaysAccessesCreateCapsilAccessPayload): \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateOrUpdateCapsilAccessResponse
```

Create a Capsil Access

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
$gatewaysAccessesCreateCapsilAccessPayload = new \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateCapsilAccessPayload(); // \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateCapsilAccessPayload

try {
    $result = $apiInstance->createCapsilAccess($gatewaysAccessesCreateCapsilAccessPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->createCapsilAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gatewaysAccessesCreateCapsilAccessPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateCapsilAccessPayload**](../Model/GatewaysAccessesCreateCapsilAccessPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateOrUpdateCapsilAccessResponse**](../Model/GatewaysAccessesCreateOrUpdateCapsilAccessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEquisoftAnalyzeAccess()`

```php
createEquisoftAnalyzeAccess($gatewaysAccessesCreateEquisoftAnalyzeAccessPayload): \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateAccessResponse
```



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
$gatewaysAccessesCreateEquisoftAnalyzeAccessPayload = new \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateEquisoftAnalyzeAccessPayload(); // \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateEquisoftAnalyzeAccessPayload

try {
    $result = $apiInstance->createEquisoftAnalyzeAccess($gatewaysAccessesCreateEquisoftAnalyzeAccessPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->createEquisoftAnalyzeAccess: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCapsilAccess()`

```php
deleteCapsilAccess($accessId)
```

Delete Capsil access

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
$accessId = 56; // int | Unique identifier of a Capsil Access.

try {
    $apiInstance->deleteCapsilAccess($accessId);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->deleteCapsilAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **int**| Unique identifier of a Capsil Access. |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEquisoftAnalyzeAccess()`

```php
deleteEquisoftAnalyzeAccess($accessId)
```



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
$accessId = 56; // int

try {
    $apiInstance->deleteEquisoftAnalyzeAccess($accessId);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->deleteEquisoftAnalyzeAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **int**|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gatewayAdminLogin()`

```php
gatewayAdminLogin($authorization, $adminCredentialPayload): \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesValidationAdminCredentialResponse
```



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
$authorization = 'authorization_example'; // string | Authorization header using the Bearer scheme
$adminCredentialPayload = new \Equisoft\SDK\EquisoftConnect\Model\AdminCredentialPayload(); // \Equisoft\SDK\EquisoftConnect\Model\AdminCredentialPayload

try {
    $result = $apiInstance->gatewayAdminLogin($authorization, $adminCredentialPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->gatewayAdminLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header using the Bearer scheme |
 **adminCredentialPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\AdminCredentialPayload**](../Model/AdminCredentialPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesValidationAdminCredentialResponse**](../Model/GatewaysAccessesValidationAdminCredentialResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCapsilAccess()`

```php
getCapsilAccess($accessId): \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCapsilAccess
```

Get Capsil access

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
$accessId = 56; // int | Unique identifier of a Capsil Access.

try {
    $result = $apiInstance->getCapsilAccess($accessId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->getCapsilAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **int**| Unique identifier of a Capsil Access. |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCapsilAccess**](../Model/GatewaysAccessesCapsilAccess.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssetBookCredentials()`

```php
listAssetBookCredentials(): \Equisoft\SDK\EquisoftConnect\Model\GatewaysListCredentialsResponse
```



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

try {
    $result = $apiInstance->listAssetBookCredentials();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listAssetBookCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysListCredentialsResponse**](../Model/GatewaysListCredentialsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCapsilAccesses()`

```php
listCapsilAccesses($userAccountUuid, $carrierAdminSystemId, $code, $databaseUuid): \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesListCapsilAccessResponse
```

List capsil accesses

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
$userAccountUuid = 'userAccountUuid_example'; // string | UserAccount uuid.
$carrierAdminSystemId = 56; // int | CarrierAdminSystem unique identifier.
$code = 'code_example'; // string | Capsil agent code.
$databaseUuid = 'databaseUuid_example'; // string | Database unique identifier.

try {
    $result = $apiInstance->listCapsilAccesses($userAccountUuid, $carrierAdminSystemId, $code, $databaseUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listCapsilAccesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userAccountUuid** | **string**| UserAccount uuid. | [optional]
 **carrierAdminSystemId** | **int**| CarrierAdminSystem unique identifier. | [optional]
 **code** | **string**| Capsil agent code. | [optional]
 **databaseUuid** | **string**| Database unique identifier. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesListCapsilAccessResponse**](../Model/GatewaysAccessesListCapsilAccessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCapsilCarrierAdminSystems()`

```php
listCapsilCarrierAdminSystems(): \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesListCarrierAdminSystemResponse
```

List carrier admin systems

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

try {
    $result = $apiInstance->listCapsilCarrierAdminSystems();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listCapsilCarrierAdminSystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesListCarrierAdminSystemResponse**](../Model/GatewaysAccessesListCarrierAdminSystemResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCredentials()`

```php
listCredentials($gatewayId, $status, $authorization): \Equisoft\SDK\EquisoftConnect\Model\CredentialsResponse
```



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
$gatewayId = 'gatewayId_example'; // string
$status = 'status_example'; // string
$authorization = 'authorization_example'; // string | Authorization header using the Bearer scheme

try {
    $result = $apiInstance->listCredentials($gatewayId, $status, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gatewayId** | **string**|  |
 **status** | **string**|  |
 **authorization** | **string**| Authorization header using the Bearer scheme |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\CredentialsResponse**](../Model/CredentialsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEquisoftAnalyzeAccesses()`

```php
listEquisoftAnalyzeAccesses($userUuid): \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesListGatewayAccessesResponse
```



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
$userUuid = d2507338-78f2-4299-8bec-e82b1d242d4c; // string

try {
    $result = $apiInstance->listEquisoftAnalyzeAccesses($userUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listEquisoftAnalyzeAccesses: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGatewayConfigurations()`

```php
listGatewayConfigurations($gatewayName)
```



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
$gatewayName = 'gatewayName_example'; // string

try {
    $apiInstance->listGatewayConfigurations($gatewayName);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listGatewayConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gatewayName** | **string**|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGateways()`

```php
listGateways($authorization, $gatewaysId): \Equisoft\SDK\EquisoftConnect\Model\GatewaysGatewaysResponse
```



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
$authorization = 'authorization_example'; // string | Authorization header using the Bearer scheme
$gatewaysId = 'gatewaysId_example'; // string | Many ids can be passed to this argument separated by coma. Ex: '?gatewaysId=1,2,3'.

try {
    $result = $apiInstance->listGateways($authorization, $gatewaysId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header using the Bearer scheme |
 **gatewaysId** | **string**| Many ids can be passed to this argument separated by coma. Ex: &#39;?gatewaysId&#x3D;1,2,3&#39;. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysGatewaysResponse**](../Model/GatewaysGatewaysResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGenericCredentials()`

```php
listGenericCredentials($gatewayName, $includeSsn): \Equisoft\SDK\EquisoftConnect\Model\GatewaysListCredentialsResponse
```



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
$gatewayName = 'gatewayName_example'; // string
$includeSsn = True; // bool | Include the list of SSN for each credentials. Defaults to false

try {
    $result = $apiInstance->listGenericCredentials($gatewayName, $includeSsn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->listGenericCredentials: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEquisoftAnalyzeAccess()`

```php
patchEquisoftAnalyzeAccess($accessId, $gatewaysAccessesPatchEquisoftAnalyzeAccessPayload)
```



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
$accessId = 56; // int
$gatewaysAccessesPatchEquisoftAnalyzeAccessPayload = new \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesPatchEquisoftAnalyzeAccessPayload(); // \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesPatchEquisoftAnalyzeAccessPayload

try {
    $apiInstance->patchEquisoftAnalyzeAccess($accessId, $gatewaysAccessesPatchEquisoftAnalyzeAccessPayload);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->patchEquisoftAnalyzeAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **int**|  |
 **gatewaysAccessesPatchEquisoftAnalyzeAccessPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesPatchEquisoftAnalyzeAccessPayload**](../Model/GatewaysAccessesPatchEquisoftAnalyzeAccessPayload.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCapsilAccess()`

```php
updateCapsilAccess($accessId, $gatewaysAccessesUpdateCapsilAccessPayload): \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateOrUpdateCapsilAccessResponse
```

Update a Capsil Access

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
$accessId = 56; // int | Unique identifier of a Capsil Access.
$gatewaysAccessesUpdateCapsilAccessPayload = new \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesUpdateCapsilAccessPayload(); // \Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesUpdateCapsilAccessPayload

try {
    $result = $apiInstance->updateCapsilAccess($accessId, $gatewaysAccessesUpdateCapsilAccessPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->updateCapsilAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **int**| Unique identifier of a Capsil Access. |
 **gatewaysAccessesUpdateCapsilAccessPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesUpdateCapsilAccessPayload**](../Model/GatewaysAccessesUpdateCapsilAccessPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\GatewaysAccessesCreateOrUpdateCapsilAccessResponse**](../Model/GatewaysAccessesCreateOrUpdateCapsilAccessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCredentials()`

```php
updateCredentials($gatewayId, $status, $authorization, $credentialIds): \Equisoft\SDK\EquisoftConnect\Model\CredentialsResponse
```



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
$gatewayId = 'gatewayId_example'; // string
$status = 'status_example'; // string
$authorization = 'authorization_example'; // string | Authorization header using the Bearer scheme
$credentialIds = array(56); // int[] | Many ids can be passed to this argument separated by coma. Ex: '?credentialIds=1,2,3'.

try {
    $result = $apiInstance->updateCredentials($gatewayId, $status, $authorization, $credentialIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewaysApi->updateCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gatewayId** | **string**|  |
 **status** | **string**|  |
 **authorization** | **string**| Authorization header using the Bearer scheme |
 **credentialIds** | [**int[]**](../Model/int.md)| Many ids can be passed to this argument separated by coma. Ex: &#39;?credentialIds&#x3D;1,2,3&#39;. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\CredentialsResponse**](../Model/CredentialsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
