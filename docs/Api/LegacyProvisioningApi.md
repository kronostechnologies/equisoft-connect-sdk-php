# Equisoft\SDK\EquisoftConnect\LegacyProvisioningApi

LegacyProvisioning

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**legacyProvisioningAddOrganization()**](LegacyProvisioningApi.md#legacyProvisioningAddOrganization) | **POST** /apps/provisioning/kronos.provisioning.addOrganization | Add a new organization. |
| [**legacyProvisioningAddUser()**](LegacyProvisioningApi.md#legacyProvisioningAddUser) | **POST** /apps/provisioning/kronos.provisioning.addUser | Add a new user. |
| [**legacyProvisioningChangeDatabaseProfile()**](LegacyProvisioningApi.md#legacyProvisioningChangeDatabaseProfile) | **POST** /apps/provisioning/kronos.provisioning.changeDatabaseProfile | Change database profile. |
| [**legacyProvisioningClearCache()**](LegacyProvisioningApi.md#legacyProvisioningClearCache) | **POST** /apps/provisioning/kronos.provisioning.clearCache | Clear cache. |
| [**legacyProvisioningDeleteOrganization()**](LegacyProvisioningApi.md#legacyProvisioningDeleteOrganization) | **POST** /apps/provisioning/kronos.provisioning.deleteOrganization | Delete an organization. |
| [**legacyProvisioningDeleteUser()**](LegacyProvisioningApi.md#legacyProvisioningDeleteUser) | **POST** /apps/provisioning/kronos.provisioning.deleteUser | Delete a user. |
| [**legacyProvisioningEnableContactPersonalizedFieldsModule()**](LegacyProvisioningApi.md#legacyProvisioningEnableContactPersonalizedFieldsModule) | **POST** /apps/provisioning/kronos.provisioning.enableContactPersonalizedFieldsModule | Enable Contact Personalized Fields module for a database. |
| [**legacyProvisioningEnableFnaForUser()**](LegacyProvisioningApi.md#legacyProvisioningEnableFnaForUser) | **POST** /apps/provisioning/kronos.provisioning.enableFnaForUser | Enable FNA for user. |
| [**legacyProvisioningGetCrmGatewaysAccessReport()**](LegacyProvisioningApi.md#legacyProvisioningGetCrmGatewaysAccessReport) | **GET** /apps/provisioning/kronos.provisioning.getCrmGatewaysAccessReport | Get a report of active accesses for all CRM datagateways. |
| [**legacyProvisioningGetFFGatewaysAccessReport()**](LegacyProvisioningApi.md#legacyProvisioningGetFFGatewaysAccessReport) | **GET** /apps/provisioning/kronos.provisioning.getFFGatewaysAccessReport | Get a report of active accesses for all FF datagateways. |
| [**legacyProvisioningGetGatewayArchiveByDate()**](LegacyProvisioningApi.md#legacyProvisioningGetGatewayArchiveByDate) | **GET** /apps/provisioning/kronos.provisioning.getGatewayArchiveByDate | Get the archives for a given gateway at the given date. |
| [**legacyProvisioningGetGatewayArchiveListByDate()**](LegacyProvisioningApi.md#legacyProvisioningGetGatewayArchiveListByDate) | **GET** /apps/provisioning/kronos.provisioning.getGatewayArchiveListByDate | Get the archives list for a given gateway at the given date. |
| [**legacyProvisioningGetOrganizationStatus()**](LegacyProvisioningApi.md#legacyProvisioningGetOrganizationStatus) | **POST** /apps/provisioning/kronos.provisioning.getOrganizationStatus | Return the state of a given database. |
| [**legacyProvisioningGetSyncControlDataForAllDatabaseStatus()**](LegacyProvisioningApi.md#legacyProvisioningGetSyncControlDataForAllDatabaseStatus) | **GET** /apps/provisioning/kronos.provisioning.getSyncControlDataForAllDatabaseStatus | Get the progression status of a previous call to moveUserToOrganization. |
| [**legacyProvisioningMonitorDatagateways()**](LegacyProvisioningApi.md#legacyProvisioningMonitorDatagateways) | **GET** /apps/provisioning/kronos.provisioning.monitorDatagateways | Monitor stats of the datagateways for a given environment. |
| [**legacyProvisioningSyncControlData()**](LegacyProvisioningApi.md#legacyProvisioningSyncControlData) | **POST** /apps/provisioning/kronos.provisioning.syncControlData | Sync one database pilotage. |
| [**legacyProvisioningSyncControlDataForAllDatabase()**](LegacyProvisioningApi.md#legacyProvisioningSyncControlDataForAllDatabase) | **POST** /apps/provisioning/kronos.provisioning.syncControlDataForAllDatabase | Use gearman to sync all database for a given profile. |
| [**legacyProvisioningUpdateUser()**](LegacyProvisioningApi.md#legacyProvisioningUpdateUser) | **POST** /apps/provisioning/kronos.provisioning.updateUser | Update a user. |


## `legacyProvisioningAddOrganization()`

```php
legacyProvisioningAddOrganization($legacyProvisioningOrganizationPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningAddOrganizationResponse
```

Add a new organization.

This method is asynchronous. It returns the new organization unique identifier. Use getOrganizationStatus in a loop until the returned status is not \"CREATION\". If the organization creation failed, getOrganizationStatus will throw a ERR_RECORD_NOT_FOUND exception.

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
$legacyProvisioningOrganizationPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningOrganizationPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningOrganizationPayloadRequest

try {
    $result = $apiInstance->legacyProvisioningAddOrganization($legacyProvisioningOrganizationPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningAddOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **legacyProvisioningOrganizationPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningOrganizationPayloadRequest**](../Model/LegacyProvisioningOrganizationPayloadRequest.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningAddOrganizationResponse**](../Model/LegacyProvisioningAddOrganizationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningAddUser()`

```php
legacyProvisioningAddUser($orgId, $legacyProvisioningUserPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningAddUpdateUserResponse
```

Add a new user.

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
$orgId = 'orgId_example'; // string | Organization identifier.
$legacyProvisioningUserPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningUserPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningUserPayloadRequest

try {
    $result = $apiInstance->legacyProvisioningAddUser($orgId, $legacyProvisioningUserPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningAddUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orgId** | **string**| Organization identifier. | |
| **legacyProvisioningUserPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningUserPayloadRequest**](../Model/LegacyProvisioningUserPayloadRequest.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningAddUpdateUserResponse**](../Model/LegacyProvisioningAddUpdateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningChangeDatabaseProfile()`

```php
legacyProvisioningChangeDatabaseProfile($orgId, $legacyProvisioningChangeDatabaseProfilePayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningChangeDatabaseProfileResponse
```

Change database profile.

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
$orgId = 'orgId_example'; // string | Organization identifier.
$legacyProvisioningChangeDatabaseProfilePayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningChangeDatabaseProfilePayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningChangeDatabaseProfilePayloadRequest

try {
    $result = $apiInstance->legacyProvisioningChangeDatabaseProfile($orgId, $legacyProvisioningChangeDatabaseProfilePayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningChangeDatabaseProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orgId** | **string**| Organization identifier. | |
| **legacyProvisioningChangeDatabaseProfilePayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningChangeDatabaseProfilePayloadRequest**](../Model/LegacyProvisioningChangeDatabaseProfilePayloadRequest.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningChangeDatabaseProfileResponse**](../Model/LegacyProvisioningChangeDatabaseProfileResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningClearCache()`

```php
legacyProvisioningClearCache($legacyProvisioningClearCachePayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningClearCacheResponse
```

Clear cache.

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
$legacyProvisioningClearCachePayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningClearCachePayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningClearCachePayloadRequest

try {
    $result = $apiInstance->legacyProvisioningClearCache($legacyProvisioningClearCachePayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningClearCache: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **legacyProvisioningClearCachePayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningClearCachePayloadRequest**](../Model/LegacyProvisioningClearCachePayloadRequest.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningClearCacheResponse**](../Model/LegacyProvisioningClearCacheResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningDeleteOrganization()`

```php
legacyProvisioningDeleteOrganization($orgId, $legacyProvisioningDeleteOrganizationOptionRequest, $testIfOrgExists): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningDeleteOrganizationResponse
```

Delete an organization.

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
$orgId = 'orgId_example'; // string | Organization identifier.
$legacyProvisioningDeleteOrganizationOptionRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningDeleteOrganizationOptionRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningDeleteOrganizationOptionRequest
$testIfOrgExists = True; // bool | Test if the organization exists.

try {
    $result = $apiInstance->legacyProvisioningDeleteOrganization($orgId, $legacyProvisioningDeleteOrganizationOptionRequest, $testIfOrgExists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningDeleteOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orgId** | **string**| Organization identifier. | |
| **legacyProvisioningDeleteOrganizationOptionRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningDeleteOrganizationOptionRequest**](../Model/LegacyProvisioningDeleteOrganizationOptionRequest.md)|  | |
| **testIfOrgExists** | **bool**| Test if the organization exists. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningDeleteOrganizationResponse**](../Model/LegacyProvisioningDeleteOrganizationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningDeleteUser()`

```php
legacyProvisioningDeleteUser($userId, $legacyProvisioningDeleteUserOptionRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
```

Delete a user.

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
$userId = 'userId_example'; // string | User identifier.
$legacyProvisioningDeleteUserOptionRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningDeleteUserOptionRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningDeleteUserOptionRequest

try {
    $result = $apiInstance->legacyProvisioningDeleteUser($userId, $legacyProvisioningDeleteUserOptionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningDeleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| User identifier. | |
| **legacyProvisioningDeleteUserOptionRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningDeleteUserOptionRequest**](../Model/LegacyProvisioningDeleteUserOptionRequest.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse**](../Model/LegacyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningEnableContactPersonalizedFieldsModule()`

```php
legacyProvisioningEnableContactPersonalizedFieldsModule($orgId): \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
```

Enable Contact Personalized Fields module for a database.

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
$orgId = 'orgId_example'; // string | Organization identifier.

try {
    $result = $apiInstance->legacyProvisioningEnableContactPersonalizedFieldsModule($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningEnableContactPersonalizedFieldsModule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orgId** | **string**| Organization identifier. | |

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

## `legacyProvisioningEnableFnaForUser()`

```php
legacyProvisioningEnableFnaForUser($userId): \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
```

Enable FNA for user.

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
$userId = 'userId_example'; // string | User identifier.

try {
    $result = $apiInstance->legacyProvisioningEnableFnaForUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningEnableFnaForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| User identifier. | |

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

## `legacyProvisioningGetCrmGatewaysAccessReport()`

```php
legacyProvisioningGetCrmGatewaysAccessReport(): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningReportAccessesResponse
```

Get a report of active accesses for all CRM datagateways.

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
    $result = $apiInstance->legacyProvisioningGetCrmGatewaysAccessReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningGetCrmGatewaysAccessReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningReportAccessesResponse**](../Model/LegacyProvisioningReportAccessesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningGetFFGatewaysAccessReport()`

```php
legacyProvisioningGetFFGatewaysAccessReport(): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningReportAccessesResponse
```

Get a report of active accesses for all FF datagateways.

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
    $result = $apiInstance->legacyProvisioningGetFFGatewaysAccessReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningGetFFGatewaysAccessReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningReportAccessesResponse**](../Model/LegacyProvisioningReportAccessesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningGetGatewayArchiveByDate()`

```php
legacyProvisioningGetGatewayArchiveByDate($payload): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetFileForGatewayArchiveByDateResponse
```

Get the archives for a given gateway at the given date.

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
$payload = new \Equisoft\SDK\EquisoftConnect\Model\\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGatewayArchivePayload(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGatewayArchivePayload | Legacy payload argument.

try {
    $result = $apiInstance->legacyProvisioningGetGatewayArchiveByDate($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningGetGatewayArchiveByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGatewayArchivePayload**](../Model/.md)| Legacy payload argument. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetFileForGatewayArchiveByDateResponse**](../Model/LegacyProvisioningGetFileForGatewayArchiveByDateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningGetGatewayArchiveListByDate()`

```php
legacyProvisioningGetGatewayArchiveListByDate($payload): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetGatewayArchiveListByDateResponse
```

Get the archives list for a given gateway at the given date.

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
$payload = new \Equisoft\SDK\EquisoftConnect\Model\\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGatewayArchivePayload(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGatewayArchivePayload | Legacy payload argument.

try {
    $result = $apiInstance->legacyProvisioningGetGatewayArchiveListByDate($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningGetGatewayArchiveListByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGatewayArchivePayload**](../Model/.md)| Legacy payload argument. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetGatewayArchiveListByDateResponse**](../Model/LegacyProvisioningGetGatewayArchiveListByDateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningGetOrganizationStatus()`

```php
legacyProvisioningGetOrganizationStatus($orgId): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetOrganizationStatusResponse
```

Return the state of a given database.

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
$orgId = 'orgId_example'; // string | Organization identifier.

try {
    $result = $apiInstance->legacyProvisioningGetOrganizationStatus($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningGetOrganizationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orgId** | **string**| Organization identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGetOrganizationStatusResponse**](../Model/LegacyProvisioningGetOrganizationStatusResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningGetSyncControlDataForAllDatabaseStatus()`

```php
legacyProvisioningGetSyncControlDataForAllDatabaseStatus($jobId): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningSyncControlDataForAllDatabaseResponse
```

Get the progression status of a previous call to moveUserToOrganization.

Status can be \"MOVING\" or \"DONE\".

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
$jobId = 'jobId_example'; // string | Job identifier.

try {
    $result = $apiInstance->legacyProvisioningGetSyncControlDataForAllDatabaseStatus($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningGetSyncControlDataForAllDatabaseStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jobId** | **string**| Job identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningSyncControlDataForAllDatabaseResponse**](../Model/LegacyProvisioningSyncControlDataForAllDatabaseResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningMonitorDatagateways()`

```php
legacyProvisioningMonitorDatagateways($environment): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningMonitorDatagatewayResponse
```

Monitor stats of the datagateways for a given environment.

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
$environment = 'environment_example'; // string | The environment.

try {
    $result = $apiInstance->legacyProvisioningMonitorDatagateways($environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningMonitorDatagateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment** | **string**| The environment. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningMonitorDatagatewayResponse**](../Model/LegacyProvisioningMonitorDatagatewayResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningSyncControlData()`

```php
legacyProvisioningSyncControlData($database): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningSyncControlDataResponse
```

Sync one database pilotage.

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
$database = 'database_example'; // string | Database identifier.

try {
    $result = $apiInstance->legacyProvisioningSyncControlData($database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningSyncControlData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database** | **string**| Database identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningSyncControlDataResponse**](../Model/LegacyProvisioningSyncControlDataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningSyncControlDataForAllDatabase()`

```php
legacyProvisioningSyncControlDataForAllDatabase($profile): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningSyncControlDataForAllDatabaseResponse
```

Use gearman to sync all database for a given profile.

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
$profile = 'profile_example'; // string | Profile identifier.

try {
    $result = $apiInstance->legacyProvisioningSyncControlDataForAllDatabase($profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningSyncControlDataForAllDatabase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile** | **string**| Profile identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningSyncControlDataForAllDatabaseResponse**](../Model/LegacyProvisioningSyncControlDataForAllDatabaseResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyProvisioningUpdateUser()`

```php
legacyProvisioningUpdateUser($userId, $legacyProvisioningUserPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningAddUpdateUserResponse
```

Update a user.

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
$userId = 'userId_example'; // string | User identifier.
$legacyProvisioningUserPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningUserPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningUserPayloadRequest

try {
    $result = $apiInstance->legacyProvisioningUpdateUser($userId, $legacyProvisioningUserPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyProvisioningApi->legacyProvisioningUpdateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| User identifier. | |
| **legacyProvisioningUserPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningUserPayloadRequest**](../Model/LegacyProvisioningUserPayloadRequest.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningAddUpdateUserResponse**](../Model/LegacyProvisioningAddUpdateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
