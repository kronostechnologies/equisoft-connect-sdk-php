# Equisoft\SDK\EquisoftConnect\MovementApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMovement()**](MovementApi.md#addMovement) | **POST** /crm/api/v1/movements | Add a movement |
| [**cancelMovement()**](MovementApi.md#cancelMovement) | **POST** /crm/api/v1/movements/{movementId}/cancel | Cancel a movement. |
| [**deleteMovement()**](MovementApi.md#deleteMovement) | **DELETE** /crm/api/v1/movements/{movementId} | Delete a movement. |
| [**getMovementStatistic()**](MovementApi.md#getMovementStatistic) | **GET** /crm/api/v1/movements/statistic | Get movement statistic |
| [**listMovements()**](MovementApi.md#listMovements) | **GET** /crm/api/v1/movements | List all movements |


## `addMovement()`

```php
addMovement($movementMovementPayload): \Equisoft\SDK\EquisoftConnect\Model\MovementAddMovementResponse
```

Add a movement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$movementMovementPayload = new \Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload(); // \Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload

try {
    $result = $apiInstance->addMovement($movementMovementPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovementApi->addMovement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movementMovementPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload**](../Model/MovementMovementPayload.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\MovementAddMovementResponse**](../Model/MovementAddMovementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMovement()`

```php
cancelMovement($movementId)
```

Cancel a movement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$movementId = 56; // int | Movement identifier

try {
    $apiInstance->cancelMovement($movementId);
} catch (Exception $e) {
    echo 'Exception when calling MovementApi->cancelMovement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movementId** | **int**| Movement identifier | |

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

## `deleteMovement()`

```php
deleteMovement($movementId)
```

Delete a movement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$movementId = 56; // int | Movement identifier

try {
    $apiInstance->deleteMovement($movementId);
} catch (Exception $e) {
    echo 'Exception when calling MovementApi->deleteMovement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movementId** | **int**| Movement identifier | |

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

## `getMovementStatistic()`

```php
getMovementStatistic($movementMovementPayload): \Equisoft\SDK\EquisoftConnect\Model\MovementMovementStatisticResponse
```

Get movement statistic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$movementMovementPayload = new \Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload(); // \Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload

try {
    $result = $apiInstance->getMovementStatistic($movementMovementPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovementApi->getMovementStatistic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movementMovementPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload**](../Model/MovementMovementPayload.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\MovementMovementStatisticResponse**](../Model/MovementMovementStatisticResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMovements()`

```php
listMovements(): \Equisoft\SDK\EquisoftConnect\Model\MovementListMovementResponse
```

List all movements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMovements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovementApi->listMovements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\MovementListMovementResponse**](../Model/MovementListMovementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
