# Equisoft\SDK\EquisoftConnect\LegacyContactApi

LegacyContact

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**legacyContactAddContact()**](LegacyContactApi.md#legacyContactAddContact) | **POST** /apps/api/kronos.contact.add | Create a new contact. |
| [**legacyContactDeleteContact()**](LegacyContactApi.md#legacyContactDeleteContact) | **POST** /apps/api/kronos.contact.delete | Delete a contact. |
| [**legacyContactGetContact()**](LegacyContactApi.md#legacyContactGetContact) | **GET** /apps/api/kronos.contact.get | Get complete record for a contact. |
| [**legacyContactGetContactAccessRights()**](LegacyContactApi.md#legacyContactGetContactAccessRights) | **GET** /apps/api/kronos.contact.getAccessRights | Get access rights for a contact. |
| [**legacyContactGetContactAccessRightsByExternalId()**](LegacyContactApi.md#legacyContactGetContactAccessRightsByExternalId) | **GET** /apps/api/kronos.contact.getAccessRightsByExternalId | Get access rights for a contact using external id. |
| [**legacyContactGetContactList()**](LegacyContactApi.md#legacyContactGetContactList) | **GET** /apps/api/kronos.contact.getList | Get a list of all contacts. |
| [**legacyContactGetDatagatewayUniverisContact()**](LegacyContactApi.md#legacyContactGetDatagatewayUniverisContact) | **GET** /apps/api/kronos.contact.getDatagatewayUniverisContact | Get access rights for a contact using external key. |
| [**legacyContactPatchContact()**](LegacyContactApi.md#legacyContactPatchContact) | **POST** /apps/api/kronos.contact.patchContact | Patch a contact. |
| [**legacyContactUpdateContact()**](LegacyContactApi.md#legacyContactUpdateContact) | **POST** /apps/api/kronos.contact.update | Update a contact. |


## `legacyContactAddContact()`

```php
legacyContactAddContact($legacyContactContactPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
```

Create a new contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacyContactContactPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactPayloadRequest

try {
    $result = $apiInstance->legacyContactAddContact($legacyContactContactPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactAddContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **legacyContactContactPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactPayloadRequest**](../Model/LegacyContactContactPayloadRequest.md)|  | |

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

## `legacyContactDeleteContact()`

```php
legacyContactDeleteContact($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
```

Delete a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact identifier.

try {
    $result = $apiInstance->legacyContactDeleteContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactDeleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Contact identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse**](../Model/LegacyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyContactGetContact()`

```php
legacyContactGetContact($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetResponse
```

Get complete record for a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact identifier.

try {
    $result = $apiInstance->legacyContactGetContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactGetContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Contact identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetResponse**](../Model/LegacyContactGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyContactGetContactAccessRights()`

```php
legacyContactGetContactAccessRights($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetAccessRightsResponse
```

Get access rights for a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact identifier.

try {
    $result = $apiInstance->legacyContactGetContactAccessRights($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactGetContactAccessRights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Contact identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetAccessRightsResponse**](../Model/LegacyContactGetAccessRightsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyContactGetContactAccessRightsByExternalId()`

```php
legacyContactGetContactAccessRightsByExternalId($externalId): \Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetAccessRightsResponse
```

Get access rights for a contact using external id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalId = 'externalId_example'; // string | External id for the contact in the current consumer.

try {
    $result = $apiInstance->legacyContactGetContactAccessRightsByExternalId($externalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactGetContactAccessRightsByExternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **externalId** | **string**| External id for the contact in the current consumer. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetAccessRightsResponse**](../Model/LegacyContactGetAccessRightsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyContactGetContactList()`

```php
legacyContactGetContactList($lastModifiedTime, $optionPayload): \Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetListResponse
```

Get a list of all contacts.

This will return basic information about the contact. To get the complete record of a contact, you need to use the kronos.contact.get method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lastModifiedTime = 'lastModifiedTime_example'; // string | To Fetch all documents, which got modified / created after specified date. If the value \"auto\" is used, the last access date to this method will be used. Set the value to \"reset\" to reset the last access date.
$optionPayload = new \Equisoft\SDK\EquisoftConnect\Model\\Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetListOptions(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetListOptions | Object containing the options to filter the list of contacts.

try {
    $result = $apiInstance->legacyContactGetContactList($lastModifiedTime, $optionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactGetContactList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lastModifiedTime** | **string**| To Fetch all documents, which got modified / created after specified date. If the value \&quot;auto\&quot; is used, the last access date to this method will be used. Set the value to \&quot;reset\&quot; to reset the last access date. | [optional] |
| **optionPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetListOptions**](../Model/.md)| Object containing the options to filter the list of contacts. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetListResponse**](../Model/LegacyContactGetListResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyContactGetDatagatewayUniverisContact()`

```php
legacyContactGetDatagatewayUniverisContact($externalKey): \Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetResponse
```

Get access rights for a contact using external key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalKey = 'externalKey_example'; // string | External key for the contact in the current consumer.

try {
    $result = $apiInstance->legacyContactGetDatagatewayUniverisContact($externalKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactGetDatagatewayUniverisContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **externalKey** | **string**| External key for the contact in the current consumer. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactGetResponse**](../Model/LegacyContactGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyContactPatchContact()`

```php
legacyContactPatchContact($contactId, $legacyContactPatchContactPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyContactPatchContactResponse
```

Patch a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 'contactId_example'; // string | Contact identifier.
$legacyContactPatchContactPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyContactPatchContactPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyContactPatchContactPayloadRequest

try {
    $result = $apiInstance->legacyContactPatchContact($contactId, $legacyContactPatchContactPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactPatchContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactId** | **string**| Contact identifier. | |
| **legacyContactPatchContactPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactPatchContactPayloadRequest**](../Model/LegacyContactPatchContactPayloadRequest.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactPatchContactResponse**](../Model/LegacyContactPatchContactResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyContactUpdateContact()`

```php
legacyContactUpdateContact($legacyContactContactPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
```

Update a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacyContactContactPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactPayloadRequest

try {
    $result = $apiInstance->legacyContactUpdateContact($legacyContactContactPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyContactApi->legacyContactUpdateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **legacyContactContactPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactContactPayloadRequest**](../Model/LegacyContactContactPayloadRequest.md)|  | |

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
