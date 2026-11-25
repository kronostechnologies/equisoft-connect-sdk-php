# Equisoft\SDK\EquisoftConnect\OpportunitiesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOpportunity()**](OpportunitiesApi.md#createOpportunity) | **POST** /crm/api/v1/opportunities | Create an opportunity |
| [**getOpportunity()**](OpportunitiesApi.md#getOpportunity) | **GET** /crm/api/v1/opportunities/{id} | Get opportunity |
| [**listOpportunities()**](OpportunitiesApi.md#listOpportunities) | **GET** /crm/api/v1/opportunities | List user opportunities |
| [**updateOpportunity()**](OpportunitiesApi.md#updateOpportunity) | **PATCH** /crm/api/v1/opportunities/{id} | Update an opportunity |


## `createOpportunity()`

```php
createOpportunity($opportunityCreateOpportunityPayload): \Equisoft\SDK\EquisoftConnect\Model\OpportunityOpportunity
```

Create an opportunity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$opportunityCreateOpportunityPayload = new \Equisoft\SDK\EquisoftConnect\Model\OpportunityCreateOpportunityPayload(); // \Equisoft\SDK\EquisoftConnect\Model\OpportunityCreateOpportunityPayload

try {
    $result = $apiInstance->createOpportunity($opportunityCreateOpportunityPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->createOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opportunityCreateOpportunityPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\OpportunityCreateOpportunityPayload**](../Model/OpportunityCreateOpportunityPayload.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\OpportunityOpportunity**](../Model/OpportunityOpportunity.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpportunity()`

```php
getOpportunity($id, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\OpportunityOpportunity
```

Get opportunity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getOpportunity($id, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier. | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\OpportunityOpportunity**](../Model/OpportunityOpportunity.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOpportunities()`

```php
listOpportunities($clientUuid, $ownerId, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\OpportunitiesListOpportunityResponse
```

List user opportunities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientUuid = 'clientUuid_example'; // string | Client unique identifier.
$ownerId = 'ownerId_example'; // string | Owner ID filter param.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->listOpportunities($clientUuid, $ownerId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->listOpportunities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientUuid** | **string**| Client unique identifier. | |
| **ownerId** | **string**| Owner ID filter param. | [optional] |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\OpportunitiesListOpportunityResponse**](../Model/OpportunitiesListOpportunityResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOpportunity()`

```php
updateOpportunity($id, $opportunityPatchOpportunityPayload): \Equisoft\SDK\EquisoftConnect\Model\OpportunityOpportunity
```

Update an opportunity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier.
$opportunityPatchOpportunityPayload = new \Equisoft\SDK\EquisoftConnect\Model\OpportunityPatchOpportunityPayload(); // \Equisoft\SDK\EquisoftConnect\Model\OpportunityPatchOpportunityPayload

try {
    $result = $apiInstance->updateOpportunity($id, $opportunityPatchOpportunityPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->updateOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier. | |
| **opportunityPatchOpportunityPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\OpportunityPatchOpportunityPayload**](../Model/OpportunityPatchOpportunityPayload.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\OpportunityOpportunity**](../Model/OpportunityOpportunity.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
