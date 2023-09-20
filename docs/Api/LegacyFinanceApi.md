# Equisoft\SDK\EquisoftConnect\LegacyFinanceApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**legacyFinanceAddContact()**](LegacyFinanceApi.md#legacyFinanceAddContact) | **POST** /apps/api/kronos.finance.addContact | Create a new contact.
[**legacyFinanceGetAccountStatement()**](LegacyFinanceApi.md#legacyFinanceGetAccountStatement) | **GET** /apps/api/kronos.finance.getAccountStatement | Get Account Statement information for a contact.
[**legacyFinanceGetAccountStatementByExternalId()**](LegacyFinanceApi.md#legacyFinanceGetAccountStatementByExternalId) | **GET** /apps/api/kronos.finance.getAccountStatementByExternalId | Get Account Statement information for a contact.
[**legacyFinanceGetAssetDetail()**](LegacyFinanceApi.md#legacyFinanceGetAssetDetail) | **GET** /apps/api/kronos.finance.getAssetDetail | Get asset detail with transactions.
[**legacyFinanceGetContact()**](LegacyFinanceApi.md#legacyFinanceGetContact) | **GET** /apps/api/kronos.finance.getContact | Get complete data for a contact.
[**legacyFinanceGetContactList()**](LegacyFinanceApi.md#legacyFinanceGetContactList) | **GET** /apps/api/kronos.finance.getContactList | Get a list of all contacts.
[**legacyFinanceGetLiabilities()**](LegacyFinanceApi.md#legacyFinanceGetLiabilities) | **GET** /apps/api/kronos.finance.getLiabilities | Get Liabilities information for a contact.
[**legacyFinanceUpdateContact()**](LegacyFinanceApi.md#legacyFinanceUpdateContact) | **POST** /apps/api/kronos.finance.updateContact | Update a contact.


## `legacyFinanceAddContact()`

```php
legacyFinanceAddContact($kronosFinanceContactPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
```

Create a new contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kronosFinanceContactPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\KronosFinanceContactPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\KronosFinanceContactPayloadRequest

try {
    $result = $apiInstance->legacyFinanceAddContact($kronosFinanceContactPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->legacyFinanceAddContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kronosFinanceContactPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\KronosFinanceContactPayloadRequest**](../Model/KronosFinanceContactPayloadRequest.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse**](../Model/LegacyAddUpdateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyFinanceGetAccountStatement()`

```php
legacyFinanceGetAccountStatement($contactId, $includeUnmanagedAssets, $fetchOwnedAndInsuredPolicies): \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse
```

Get Account Statement information for a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 'contactId_example'; // string | Contact identifier.
$includeUnmanagedAssets = True; // bool | Include unmagned assets. Default: false.
$fetchOwnedAndInsuredPolicies = True; // bool | Fetch policies by both owner and insured. Default: false.

try {
    $result = $apiInstance->legacyFinanceGetAccountStatement($contactId, $includeUnmanagedAssets, $fetchOwnedAndInsuredPolicies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->legacyFinanceGetAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| Contact identifier. |
 **includeUnmanagedAssets** | **bool**| Include unmagned assets. Default: false. | [optional]
 **fetchOwnedAndInsuredPolicies** | **bool**| Fetch policies by both owner and insured. Default: false. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse**](../Model/LegacyFinanceGetAccountStatementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyFinanceGetAccountStatementByExternalId()`

```php
legacyFinanceGetAccountStatementByExternalId($externalId, $includeUnmanagedAssets): \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse
```

Get Account Statement information for a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalId = 'externalId_example'; // string | External id for the contact in the current consumer.
$includeUnmanagedAssets = True; // bool | Include unmagned assets. Default: false.

try {
    $result = $apiInstance->legacyFinanceGetAccountStatementByExternalId($externalId, $includeUnmanagedAssets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->legacyFinanceGetAccountStatementByExternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalId** | **string**| External id for the contact in the current consumer. |
 **includeUnmanagedAssets** | **bool**| Include unmagned assets. Default: false. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse**](../Model/LegacyFinanceGetAccountStatementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyFinanceGetAssetDetail()`

```php
legacyFinanceGetAssetDetail($assetId): \Equisoft\SDK\EquisoftConnect\Model\KronosFinanceAssetDetail
```

Get asset detail with transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assetId = 'assetId_example'; // string | Identifier of the account product.

try {
    $result = $apiInstance->legacyFinanceGetAssetDetail($assetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->legacyFinanceGetAssetDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetId** | **string**| Identifier of the account product. |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\KronosFinanceAssetDetail**](../Model/KronosFinanceAssetDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyFinanceGetContact()`

```php
legacyFinanceGetContact($id): \Equisoft\SDK\EquisoftConnect\Model\KronosFinanceGetContactResponse
```

Get complete data for a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact identifier.

try {
    $result = $apiInstance->legacyFinanceGetContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->legacyFinanceGetContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact identifier. |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\KronosFinanceGetContactResponse**](../Model/KronosFinanceGetContactResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyFinanceGetContactList()`

```php
legacyFinanceGetContactList($legacyContactContactGetListPayloadRequest, $lastModifiedTime): \Equisoft\SDK\EquisoftConnect\Model\KronosFinanceGetContactList
```

Get a list of all contacts.

This will return basic information about the contact. To get the complete record of a contact, you need to use the kronos.contact.get method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacyContactContactGetListPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactGetListPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactGetListPayloadRequest
$lastModifiedTime = 'lastModifiedTime_example'; // string | To Fetch all documents, which got modified / created after specified date. If the value \"auto\" is used, the last access date to this method will be used. Set the value to \"reset\" to reset the last access date.

try {
    $result = $apiInstance->legacyFinanceGetContactList($legacyContactContactGetListPayloadRequest, $lastModifiedTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->legacyFinanceGetContactList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacyContactContactGetListPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactGetListPayloadRequest**](../Model/LegacyContactContactGetListPayloadRequest.md)|  |
 **lastModifiedTime** | **string**| To Fetch all documents, which got modified / created after specified date. If the value \&quot;auto\&quot; is used, the last access date to this method will be used. Set the value to \&quot;reset\&quot; to reset the last access date. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\KronosFinanceGetContactList**](../Model/KronosFinanceGetContactList.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyFinanceGetLiabilities()`

```php
legacyFinanceGetLiabilities($contactId): \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse
```

Get Liabilities information for a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 'contactId_example'; // string | Contact identifier.

try {
    $result = $apiInstance->legacyFinanceGetLiabilities($contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->legacyFinanceGetLiabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| Contact identifier. |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse**](../Model/LegacyFinanceGetLiabilitiesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyFinanceUpdateContact()`

```php
legacyFinanceUpdateContact($kronosFinanceContactPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
```

Update a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kronosFinanceContactPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\KronosFinanceContactPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\KronosFinanceContactPayloadRequest

try {
    $result = $apiInstance->legacyFinanceUpdateContact($kronosFinanceContactPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->legacyFinanceUpdateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kronosFinanceContactPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\KronosFinanceContactPayloadRequest**](../Model/KronosFinanceContactPayloadRequest.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse**](../Model/LegacyAddUpdateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
