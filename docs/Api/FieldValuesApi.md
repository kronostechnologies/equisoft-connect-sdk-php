# Equisoft\SDK\EquisoftConnect\FieldValuesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getValue()**](FieldValuesApi.md#getValue) | **GET** /crm/api/v1/fields/{fieldName}/values/{id} | Get single value for a specific field name and value id
[**listFields()**](FieldValuesApi.md#listFields) | **GET** /crm/api/v1/fields | List fields with values list (values domain).
[**listValues()**](FieldValuesApi.md#listValues) | **GET** /crm/api/v1/fields/{fieldName}/values | List values for a specific field name


## `getValue()`

```php
getValue($fieldName, $id): \Equisoft\SDK\EquisoftConnect\Model\FieldValueValue
```

Get single value for a specific field name and value id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\FieldValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldName = 'fieldName_example'; // string | Field unique identifier.
$id = 56; // int | value unique identifier.

try {
    $result = $apiInstance->getValue($fieldName, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldValuesApi->getValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldName** | **string**| Field unique identifier. |
 **id** | **int**| value unique identifier. |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\FieldValueValue**](../Model/FieldValueValue.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFields()`

```php
listFields(): \Equisoft\SDK\EquisoftConnect\Model\FieldValueListFieldResponse
```

List fields with values list (values domain).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\FieldValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldValuesApi->listFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\FieldValueListFieldResponse**](../Model/FieldValueListFieldResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listValues()`

```php
listValues($fieldName, $systemName): \Equisoft\SDK\EquisoftConnect\Model\FieldValueListValueResponse
```

List values for a specific field name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\FieldValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldName = 'fieldName_example'; // string | Field unique identifier.
$systemName = 'systemName_example'; // string | Value unique identifier.

try {
    $result = $apiInstance->listValues($fieldName, $systemName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldValuesApi->listValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldName** | **string**| Field unique identifier. |
 **systemName** | **string**| Value unique identifier. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\FieldValueListValueResponse**](../Model/FieldValueListValueResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
