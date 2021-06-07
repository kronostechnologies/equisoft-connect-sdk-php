# Equisoft\SDK\EquisoftConnect\RemoteAccountApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**synchronizeCalendars()**](RemoteAccountApi.md#synchronizeCalendars) | **POST** /crm/api/agenda/account/calendarSync | Synchronize calendars with remote account
[**synchronizeTasks()**](RemoteAccountApi.md#synchronizeTasks) | **POST** /crm/api/agenda/account/tasksSync | Synchronize tasks with remote account


## `synchronizeCalendars()`

```php
synchronizeCalendars($dateTimeStart, $dateTimeEnd, $webuserCalendarIds, $remoteFolderIds, $webuserIds): \Equisoft\SDK\EquisoftConnect\Model\RemoteaccountAccountSyncResponse
```

Synchronize calendars with remote account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\RemoteAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dateTimeStart = 'dateTimeStart_example'; // string
$dateTimeEnd = 'dateTimeEnd_example'; // string
$webuserCalendarIds = 56; // int[]
$remoteFolderIds = 56; // int[]
$webuserIds = 56; // int[]

try {
    $result = $apiInstance->synchronizeCalendars($dateTimeStart, $dateTimeEnd, $webuserCalendarIds, $remoteFolderIds, $webuserIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteAccountApi->synchronizeCalendars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateTimeStart** | **string**|  | [optional]
 **dateTimeEnd** | **string**|  | [optional]
 **webuserCalendarIds** | [**int[]**](../Model/int.md)|  | [optional]
 **remoteFolderIds** | [**int[]**](../Model/int.md)|  | [optional]
 **webuserIds** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\RemoteaccountAccountSyncResponse**](../Model/RemoteaccountAccountSyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `synchronizeTasks()`

```php
synchronizeTasks($dateTimeStart, $dateTimeEnd, $webuserCalendarIds, $remoteFolderIds, $webuserIds): \Equisoft\SDK\EquisoftConnect\Model\RemoteaccountAccountSyncResponse
```

Synchronize tasks with remote account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\RemoteAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dateTimeStart = 'dateTimeStart_example'; // string
$dateTimeEnd = 'dateTimeEnd_example'; // string
$webuserCalendarIds = 56; // int[]
$remoteFolderIds = 56; // int[]
$webuserIds = 56; // int[]

try {
    $result = $apiInstance->synchronizeTasks($dateTimeStart, $dateTimeEnd, $webuserCalendarIds, $remoteFolderIds, $webuserIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteAccountApi->synchronizeTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateTimeStart** | **string**|  | [optional]
 **dateTimeEnd** | **string**|  | [optional]
 **webuserCalendarIds** | [**int[]**](../Model/int.md)|  | [optional]
 **remoteFolderIds** | [**int[]**](../Model/int.md)|  | [optional]
 **webuserIds** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\RemoteaccountAccountSyncResponse**](../Model/RemoteaccountAccountSyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
