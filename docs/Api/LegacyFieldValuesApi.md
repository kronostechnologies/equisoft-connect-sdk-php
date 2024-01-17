# Equisoft\SDK\EquisoftConnect\LegacyFieldValuesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**legacyFieldValuesGet()**](LegacyFieldValuesApi.md#legacyFieldValuesGet) | **GET** /apps/api/kronos.fieldValues.get | Return a list of all available field values item. |
| [**legacyFieldValuesGetList()**](LegacyFieldValuesApi.md#legacyFieldValuesGetList) | **GET** /apps/api/kronos.fieldValues.getList | Return a list of field values. |


## `legacyFieldValuesGet()`

```php
legacyFieldValuesGet($id): \Equisoft\SDK\EquisoftConnect\Model\KronosFieldValuesFieldValuesGet
```

Return a list of all available field values item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFieldValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The fieldValue unique id or the fieldValue unique system name.

try {
    $result = $apiInstance->legacyFieldValuesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFieldValuesApi->legacyFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The fieldValue unique id or the fieldValue unique system name. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\KronosFieldValuesFieldValuesGet**](../Model/KronosFieldValuesFieldValuesGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyFieldValuesGetList()`

```php
legacyFieldValuesGetList($module, $includeValues): \Equisoft\SDK\EquisoftConnect\Model\LegacyFieldValuesFieldValuesGetList
```

Return a list of field values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFieldValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$module = 'module_example'; // string | The module name.
$includeValues = True; // bool | Includes field value's values.

try {
    $result = $apiInstance->legacyFieldValuesGetList($module, $includeValues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFieldValuesApi->legacyFieldValuesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **module** | **string**| The module name. | [optional] |
| **includeValues** | **bool**| Includes field value&#39;s values. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyFieldValuesFieldValuesGetList**](../Model/LegacyFieldValuesFieldValuesGetList.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
