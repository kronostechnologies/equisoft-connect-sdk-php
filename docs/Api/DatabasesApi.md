# Equisoft\SDK\EquisoftConnect\DatabasesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDatabase()**](DatabasesApi.md#getDatabase) | **GET** /crm/api/v1/databases/{databaseUuid} | Get a database |
| [**getUser()**](DatabasesApi.md#getUser) | **GET** /crm/api/v1/databases/{databaseUuid}/users/{userId} | Get a database&#39;s user |
| [**listDatabases()**](DatabasesApi.md#listDatabases) | **GET** /crm/api/v1/databases | List all databases |
| [**listUsers()**](DatabasesApi.md#listUsers) | **GET** /crm/api/v1/databases/{databaseUuid}/users | List database&#39;s users |
| [**updateState()**](DatabasesApi.md#updateState) | **PUT** /crm/api/v1/databases/{databaseUuid}/state | Update a database&#39;s state |
| [**updateUser()**](DatabasesApi.md#updateUser) | **PATCH** /crm/api/v1/databases/{databaseUuid}/users/{userId} | Update a database&#39;s user |


## `getDatabase()`

```php
getDatabase($databaseUuid): \Equisoft\SDK\EquisoftConnect\Model\DatabasesDatabase
```

Get a database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$databaseUuid = 'databaseUuid_example'; // string | Database unique identifier.

try {
    $result = $apiInstance->getDatabase($databaseUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->getDatabase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **databaseUuid** | **string**| Database unique identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DatabasesDatabase**](../Model/DatabasesDatabase.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($databaseUuid, $userId): \Equisoft\SDK\EquisoftConnect\Model\UsersUser
```

Get a database's user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$databaseUuid = 'databaseUuid_example'; // string | Database unique identifier.
$userId = 56; // int | User identifier.

try {
    $result = $apiInstance->getUser($databaseUuid, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **databaseUuid** | **string**| Database unique identifier. | |
| **userId** | **int**| User identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\UsersUser**](../Model/UsersUser.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDatabases()`

```php
listDatabases($organizationUuid, $databaseName): \Equisoft\SDK\EquisoftConnect\Model\DatabasesListDatabasesResponse
```

List all databases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organizationUuid = 'organizationUuid_example'; // string | Organization unique identifier.
$databaseName = 'databaseName_example'; // string | Database name.

try {
    $result = $apiInstance->listDatabases($organizationUuid, $databaseName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->listDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organizationUuid** | **string**| Organization unique identifier. | [optional] |
| **databaseName** | **string**| Database name. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DatabasesListDatabasesResponse**](../Model/DatabasesListDatabasesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($databaseUuid): \Equisoft\SDK\EquisoftConnect\Model\UsersListUsersResponse
```

List database's users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$databaseUuid = 'databaseUuid_example'; // string | Database unique identifier.

try {
    $result = $apiInstance->listUsers($databaseUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **databaseUuid** | **string**| Database unique identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\UsersListUsersResponse**](../Model/UsersListUsersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateState()`

```php
updateState($databaseUuid, $databaseUpdateStatePayload)
```

Update a database's state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$databaseUuid = 'databaseUuid_example'; // string | Database unique identifier.
$databaseUpdateStatePayload = new \Equisoft\SDK\EquisoftConnect\Model\DatabaseUpdateStatePayload(); // \Equisoft\SDK\EquisoftConnect\Model\DatabaseUpdateStatePayload

try {
    $apiInstance->updateState($databaseUuid, $databaseUpdateStatePayload);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->updateState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **databaseUuid** | **string**| Database unique identifier. | |
| **databaseUpdateStatePayload** | [**\Equisoft\SDK\EquisoftConnect\Model\DatabaseUpdateStatePayload**](../Model/DatabaseUpdateStatePayload.md)|  | |

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

## `updateUser()`

```php
updateUser($databaseUuid, $userId, $usersUpdateUserPayload)
```

Update a database's user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$databaseUuid = 'databaseUuid_example'; // string | Database unique identifier.
$userId = 56; // int | User identifier.
$usersUpdateUserPayload = new \Equisoft\SDK\EquisoftConnect\Model\UsersUpdateUserPayload(); // \Equisoft\SDK\EquisoftConnect\Model\UsersUpdateUserPayload

try {
    $apiInstance->updateUser($databaseUuid, $userId, $usersUpdateUserPayload);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **databaseUuid** | **string**| Database unique identifier. | |
| **userId** | **int**| User identifier. | |
| **usersUpdateUserPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\UsersUpdateUserPayload**](../Model/UsersUpdateUserPayload.md)|  | |

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
