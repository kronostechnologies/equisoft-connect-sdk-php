# Equisoft\SDK\EquisoftConnect\DatabasesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUser()**](DatabasesApi.md#getUser) | **GET** /crm/api/v1/databases/{uuid}/users/{id} | 
[**listDatabases()**](DatabasesApi.md#listDatabases) | **GET** /crm/api/v1/databases | 
[**listUsers()**](DatabasesApi.md#listUsers) | **GET** /crm/api/v1/databases/{uuid}/users | 
[**updateUser()**](DatabasesApi.md#updateUser) | **PATCH** /crm/api/v1/databases/{uuid}/users/{id} | 


## `getUser()`

```php
getUser($uuid, $id): \Equisoft\SDK\EquisoftConnect\Model\UsersUser
```



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
$uuid = 'uuid_example'; // string
$id = 56; // int

try {
    $result = $apiInstance->getUser($uuid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **id** | **int**|  |

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
$organizationUuid = 'organizationUuid_example'; // string
$databaseName = 'databaseName_example'; // string

try {
    $result = $apiInstance->listDatabases($organizationUuid, $databaseName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->listDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationUuid** | **string**|  | [optional]
 **databaseName** | **string**|  | [optional]

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
listUsers($uuid): \Equisoft\SDK\EquisoftConnect\Model\UsersListUsersResponse
```



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
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->listUsers($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

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

## `updateUser()`

```php
updateUser($uuid, $id, $usersUpdateUserPayload): object
```



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
$uuid = 'uuid_example'; // string
$id = 56; // int
$usersUpdateUserPayload = new \Equisoft\SDK\EquisoftConnect\Model\UsersUpdateUserPayload(); // \Equisoft\SDK\EquisoftConnect\Model\UsersUpdateUserPayload

try {
    $result = $apiInstance->updateUser($uuid, $id, $usersUpdateUserPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **id** | **int**|  |
 **usersUpdateUserPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\UsersUpdateUserPayload**](../Model/UsersUpdateUserPayload.md)|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
