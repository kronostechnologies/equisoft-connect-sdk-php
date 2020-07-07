# Equisoft\SDK\EquisoftConnect\TasksApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTask**](TasksApi.md#createTask) | **POST** /crm/api/v1/tasks | Create a task.
[**deleteTask**](TasksApi.md#deleteTask) | **DELETE** /crm/api/v1/tasks/{taskId} | Delete a task.
[**getTask**](TasksApi.md#getTask) | **GET** /crm/api/v1/tasks/{taskId} | Return the detail of a task.
[**getTaskInternalNoteList**](TasksApi.md#getTaskInternalNoteList) | **GET** /crm/api/v1/tasks/{taskId}/notes | Get the internal notes list for a task.
[**listTasks**](TasksApi.md#listTasks) | **GET** /crm/api/v1/tasks | List or search tasks.
[**patchTask**](TasksApi.md#patchTask) | **PATCH** /crm/api/v1/tasks/{taskId} | Partially update a task.
[**transferTaskToCompleted**](TasksApi.md#transferTaskToCompleted) | **POST** /crm/api/v1/tasks/{taskId}/transferToCompleted | Transfer a task to completed/done.



## createTask

> \Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskResponse createTask($tasksCreateTaskPayload, $acceptLanguage)

Create a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tasksCreateTaskPayload = new \Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskPayload(); // \Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskPayload | 
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->createTask($tasksCreateTaskPayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->createTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tasksCreateTaskPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskPayload**](../Model/TasksCreateTaskPayload.md)|  |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskResponse**](../Model/TasksCreateTaskResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTask

> object deleteTask($taskId)

Delete a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskId = 'taskId_example'; // string | 

try {
    $result = $apiInstance->deleteTask($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTask

> \Equisoft\SDK\EquisoftConnect\Model\TasksTask getTask($taskId, $acceptLanguage)

Return the detail of a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskId = 'taskId_example'; // string | 
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->getTask($taskId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**|  |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksTask**](../Model/TasksTask.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTaskInternalNoteList

> \Equisoft\SDK\EquisoftConnect\Model\InternalNotesNoteList getTaskInternalNoteList($taskId, $acceptLanguage)

Get the internal notes list for a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskId = 'taskId_example'; // string | 
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->getTaskInternalNoteList($taskId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTaskInternalNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**|  |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesNoteList**](../Model/InternalNotesNoteList.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTasks

> \Equisoft\SDK\EquisoftConnect\Model\TasksListTaskResponse listTasks($ownerId, $contactIds, $minDueDate, $maxDueDate, $isCompleted, $dueDateFilter, $orderBy, $pageToken, $maxResults, $acceptLanguage)

List or search tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ownerId = 'ownerId_example'; // string | Owner ID filter param.
$contactIds = array(56); // int[] | Contact ID filter param. Many ids can be passed to this argument separated by coma. Ex: '?contactId=1,2,3'. Any of the given contacts will be returned in the result.
$minDueDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum (inclusive) due date of the task.
$maxDueDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum (exclusive) due date of the task.
$isCompleted = True; // bool | If true, include only completed tasks. If false, include only TODO tasks. If not set or null, include both.
$dueDateFilter = new \Equisoft\SDK\EquisoftConnect\Model\\Equisoft\SDK\EquisoftConnect\Model\TasksDueDateFilter(); // \Equisoft\SDK\EquisoftConnect\Model\TasksDueDateFilter | Include or exclude tasks with or without due date.
$orderBy = new \Equisoft\SDK\EquisoftConnect\Model\\Equisoft\SDK\EquisoftConnect\Model\TasksOrderByType(); // \Equisoft\SDK\EquisoftConnect\Model\TasksOrderByType | Specify the order of the results.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page.  If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->listTasks($ownerId, $contactIds, $minDueDate, $maxDueDate, $isCompleted, $dueDateFilter, $orderBy, $pageToken, $maxResults, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ownerId** | **string**| Owner ID filter param. | [optional]
 **contactIds** | [**int[]**](../Model/int.md)| Contact ID filter param. Many ids can be passed to this argument separated by coma. Ex: &#39;?contactId&#x3D;1,2,3&#39;. Any of the given contacts will be returned in the result. | [optional]
 **minDueDate** | **\DateTime**| Minimum (inclusive) due date of the task. | [optional]
 **maxDueDate** | **\DateTime**| Maximum (exclusive) due date of the task. | [optional]
 **isCompleted** | **bool**| If true, include only completed tasks. If false, include only TODO tasks. If not set or null, include both. | [optional]
 **dueDateFilter** | [**\Equisoft\SDK\EquisoftConnect\Model\TasksDueDateFilter**](../Model/.md)| Include or exclude tasks with or without due date. | [optional]
 **orderBy** | [**\Equisoft\SDK\EquisoftConnect\Model\TasksOrderByType**](../Model/.md)| Specify the order of the results. | [optional]
 **pageToken** | **string**| Token to specify which page to fetch. | [optional]
 **maxResults** | **string**| Maximum number of records for one result page.  If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional]
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksListTaskResponse**](../Model/TasksListTaskResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchTask

> \Equisoft\SDK\EquisoftConnect\Model\TasksPatchTaskResponse patchTask($taskId, $tasksPatchTaskPayload, $acceptLanguage)

Partially update a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskId = 'taskId_example'; // string | Task unique identifier.
$tasksPatchTaskPayload = new \Equisoft\SDK\EquisoftConnect\Model\TasksPatchTaskPayload(); // \Equisoft\SDK\EquisoftConnect\Model\TasksPatchTaskPayload | Event fields to update. The body of the patch request includes only the resource fields you want to modify. To delete a field, set it to null. Collections are always overridden if defined.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->patchTask($taskId, $tasksPatchTaskPayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->patchTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Task unique identifier. |
 **tasksPatchTaskPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\TasksPatchTaskPayload**](../Model/TasksPatchTaskPayload.md)| Event fields to update. The body of the patch request includes only the resource fields you want to modify. To delete a field, set it to null. Collections are always overridden if defined. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksPatchTaskResponse**](../Model/TasksPatchTaskResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## transferTaskToCompleted

> \Equisoft\SDK\EquisoftConnect\Model\TasksTransferToCompletedResponse transferTaskToCompleted($taskId)

Transfer a task to completed/done.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskId = 'taskId_example'; // string | Task unique identifier.

try {
    $result = $apiInstance->transferTaskToCompleted($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->transferTaskToCompleted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Task unique identifier. |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksTransferToCompletedResponse**](../Model/TasksTransferToCompletedResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

