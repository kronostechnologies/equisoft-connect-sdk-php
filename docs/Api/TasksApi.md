# Equisoft\SDK\EquisoftConnect\TasksApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveTaskInternalNote()**](TasksApi.md#archiveTaskInternalNote) | **POST** /crm/api/v1/tasks/{taskId}/notes/{noteId}/archive | Archive an internal note for a task.
[**createTask()**](TasksApi.md#createTask) | **POST** /crm/api/v1/tasks | Create a task.
[**createTaskInternalNote()**](TasksApi.md#createTaskInternalNote) | **POST** /crm/api/v1/tasks/{taskId}/notes | Add an internal note to a task.
[**deleteTask()**](TasksApi.md#deleteTask) | **DELETE** /crm/api/v1/tasks/{taskId} | Delete a task.
[**getTask()**](TasksApi.md#getTask) | **GET** /crm/api/v1/tasks/{taskId} | Return the detail of a task.
[**getTaskInternalNoteList()**](TasksApi.md#getTaskInternalNoteList) | **GET** /crm/api/v1/tasks/{taskId}/notes | Get the internal notes list for a task.
[**listTasks()**](TasksApi.md#listTasks) | **GET** /crm/api/v1/tasks | List or search tasks.
[**patchTask()**](TasksApi.md#patchTask) | **PATCH** /crm/api/v1/tasks/{taskId} | Partially update a task.
[**patchTaskInternalNote()**](TasksApi.md#patchTaskInternalNote) | **PATCH** /crm/api/v1/tasks/{taskId}/notes/{noteId} | Add an internal note to a task.
[**putTaskLinksDocuments()**](TasksApi.md#putTaskLinksDocuments) | **PUT** /crm/api/v1/tasks/{taskId}/documents | Update the links between a task and existing documents
[**restoreTaskInternalNote()**](TasksApi.md#restoreTaskInternalNote) | **POST** /crm/api/v1/tasks/{taskId}/notes/{noteId}/restore | Restore an archived internal note for a task.
[**transferTaskToCompleted()**](TasksApi.md#transferTaskToCompleted) | **POST** /crm/api/v1/tasks/{taskId}/transferToCompleted | Transfer a task to completed/done.


## `archiveTaskInternalNote()`

```php
archiveTaskInternalNote($taskId, $noteId, $acceptLanguage)
```

Archive an internal note for a task.

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
$noteId = 56; // int | Note unique identifier.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $apiInstance->archiveTaskInternalNote($taskId, $noteId, $acceptLanguage);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->archiveTaskInternalNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Task unique identifier. |
 **noteId** | **int**| Note unique identifier. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTask()`

```php
createTask($tasksCreateTaskPayload, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskResponse
```

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
$tasksCreateTaskPayload = new \Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskPayload(); // \Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskPayload
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->createTask($tasksCreateTaskPayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->createTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tasksCreateTaskPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskPayload**](../Model/TasksCreateTaskPayload.md)|  |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksCreateTaskResponse**](../Model/TasksCreateTaskResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaskInternalNote()`

```php
createTaskInternalNote($taskId, $internalNotesCreateNotePayload, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNoteResponse
```

Add an internal note to a task.

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
$internalNotesCreateNotePayload = new \Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNotePayload(); // \Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNotePayload
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->createTaskInternalNote($taskId, $internalNotesCreateNotePayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->createTaskInternalNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Task unique identifier. |
 **internalNotesCreateNotePayload** | [**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNotePayload**](../Model/InternalNotesCreateNotePayload.md)|  |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNoteResponse**](../Model/InternalNotesCreateNoteResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTask()`

```php
deleteTask($taskId)
```

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
$taskId = 'taskId_example'; // string

try {
    $apiInstance->deleteTask($taskId);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTask()`

```php
getTask($taskId, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\TasksTask
```

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
$taskId = 'taskId_example'; // string
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getTask($taskId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**|  |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksTask**](../Model/TasksTask.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskInternalNoteList()`

```php
getTaskInternalNoteList($taskId, $history, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\InternalNotesNoteList
```

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
$taskId = 'taskId_example'; // string
$history = new \Equisoft\SDK\EquisoftConnect\Model\InternalNotesHistoryType(); // InternalNotesHistoryType | Query all revisions or not.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getTaskInternalNoteList($taskId, $history, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTaskInternalNoteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**|  |
 **history** | [**InternalNotesHistoryType**](../Model/.md)| Query all revisions or not. | [optional]
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesNoteList**](../Model/InternalNotesNoteList.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTasks()`

```php
listTasks($ownerId, $contactIds, $minDueDate, $maxDueDate, $isCompleted, $dueDateFilter, $orderBy, $pageToken, $maxResults, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\TasksListTaskResponse
```

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
$contactIds = array(56); // int[] | Contact ID filter param. Many ids can be passed to this argument separated by coma. Ex: '?contactIds=1,2,3'. Any of the given contacts will be returned in the result.
$minDueDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum (inclusive) due date of the task.
$maxDueDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum (exclusive) due date of the task.
$isCompleted = True; // bool | If true, include only completed tasks. If false, include only TODO tasks. If not set or null, include both.
$dueDateFilter = new \Equisoft\SDK\EquisoftConnect\Model\TasksDueDateFilter(); // TasksDueDateFilter | Include or exclude tasks with or without due date.
$orderBy = new \Equisoft\SDK\EquisoftConnect\Model\TasksOrderByType(); // TasksOrderByType | Specify the order of the results.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->listTasks($ownerId, $contactIds, $minDueDate, $maxDueDate, $isCompleted, $dueDateFilter, $orderBy, $pageToken, $maxResults, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ownerId** | **string**| Owner ID filter param. | [optional]
 **contactIds** | [**int[]**](../Model/int.md)| Contact ID filter param. Many ids can be passed to this argument separated by coma. Ex: &#39;?contactIds&#x3D;1,2,3&#39;. Any of the given contacts will be returned in the result. | [optional]
 **minDueDate** | **\DateTime**| Minimum (inclusive) due date of the task. | [optional]
 **maxDueDate** | **\DateTime**| Maximum (exclusive) due date of the task. | [optional]
 **isCompleted** | **bool**| If true, include only completed tasks. If false, include only TODO tasks. If not set or null, include both. | [optional]
 **dueDateFilter** | [**TasksDueDateFilter**](../Model/.md)| Include or exclude tasks with or without due date. | [optional]
 **orderBy** | [**TasksOrderByType**](../Model/.md)| Specify the order of the results. | [optional]
 **pageToken** | **string**| Token to specify which page to fetch. | [optional]
 **maxResults** | **string**| Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional]
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksListTaskResponse**](../Model/TasksListTaskResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchTask()`

```php
patchTask($taskId, $tasksPatchTaskPayload, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\TasksPatchTaskResponse
```

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
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->patchTask($taskId, $tasksPatchTaskPayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->patchTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Task unique identifier. |
 **tasksPatchTaskPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\TasksPatchTaskPayload**](../Model/TasksPatchTaskPayload.md)| Event fields to update. The body of the patch request includes only the resource fields you want to modify. To delete a field, set it to null. Collections are always overridden if defined. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\TasksPatchTaskResponse**](../Model/TasksPatchTaskResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchTaskInternalNote()`

```php
patchTaskInternalNote($taskId, $noteId, $internalNotesPatchNotePayload, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNoteResponse
```

Add an internal note to a task.

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
$noteId = 56; // int | Note unique identifier.
$internalNotesPatchNotePayload = new \Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNotePayload(); // \Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNotePayload
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->patchTaskInternalNote($taskId, $noteId, $internalNotesPatchNotePayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->patchTaskInternalNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Task unique identifier. |
 **noteId** | **int**| Note unique identifier. |
 **internalNotesPatchNotePayload** | [**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNotePayload**](../Model/InternalNotesPatchNotePayload.md)|  |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNoteResponse**](../Model/InternalNotesPatchNoteResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putTaskLinksDocuments()`

```php
putTaskLinksDocuments($taskId, $tasksPutTaskLinkDocumentsPayload, $acceptLanguage)
```

Update the links between a task and existing documents

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
$tasksPutTaskLinkDocumentsPayload = new \Equisoft\SDK\EquisoftConnect\Model\TasksPutTaskLinkDocumentsPayload(); // \Equisoft\SDK\EquisoftConnect\Model\TasksPutTaskLinkDocumentsPayload | Contains an array of Ids for the documents to link with the task.  *     To remove all links, documentIds set to an empty array  Collections are always overridden if defined.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $apiInstance->putTaskLinksDocuments($taskId, $tasksPutTaskLinkDocumentsPayload, $acceptLanguage);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->putTaskLinksDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Task unique identifier. |
 **tasksPutTaskLinkDocumentsPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\TasksPutTaskLinkDocumentsPayload**](../Model/TasksPutTaskLinkDocumentsPayload.md)| Contains an array of Ids for the documents to link with the task.  *     To remove all links, documentIds set to an empty array  Collections are always overridden if defined. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

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

## `restoreTaskInternalNote()`

```php
restoreTaskInternalNote($taskId, $noteId, $acceptLanguage)
```

Restore an archived internal note for a task.

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
$noteId = 56; // int | Note unique identifier.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $apiInstance->restoreTaskInternalNote($taskId, $noteId, $acceptLanguage);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->restoreTaskInternalNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **string**| Task unique identifier. |
 **noteId** | **int**| Note unique identifier. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferTaskToCompleted()`

```php
transferTaskToCompleted($taskId): \Equisoft\SDK\EquisoftConnect\Model\TasksTransferToCompletedResponse
```

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
