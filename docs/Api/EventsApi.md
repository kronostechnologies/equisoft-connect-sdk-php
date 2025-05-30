# Equisoft\SDK\EquisoftConnect\EventsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveEventInternalNote()**](EventsApi.md#archiveEventInternalNote) | **POST** /crm/api/v1/events/{eventId}/notes/{noteId}/archive | Archive an internal note for an event. |
| [**createEvent()**](EventsApi.md#createEvent) | **POST** /crm/api/v1/events | Create an event. |
| [**createEventInternalNote()**](EventsApi.md#createEventInternalNote) | **POST** /crm/api/v1/events/{eventId}/notes | Add an internal note to an event. |
| [**deleteEvent()**](EventsApi.md#deleteEvent) | **DELETE** /crm/api/v1/events/{eventId} | Delete an event. |
| [**deleteEvents()**](EventsApi.md#deleteEvents) | **DELETE** /crm/api/v1/events | Delete some events. |
| [**getCalendar()**](EventsApi.md#getCalendar) | **GET** /crm/api/v1/calendars/{calendarId} | Get informations about a calendar or a default calendar. |
| [**getEvent()**](EventsApi.md#getEvent) | **GET** /crm/api/v1/events/{eventId} | Return the detail of an event. |
| [**getEventInstances()**](EventsApi.md#getEventInstances) | **GET** /crm/api/v1/events/{eventId}/instances | Get a recurring event instances. |
| [**getEventInternalNoteList()**](EventsApi.md#getEventInternalNoteList) | **GET** /crm/api/v1/events/{eventId}/notes | Get the internal notes list for an event. |
| [**listCalendars()**](EventsApi.md#listCalendars) | **GET** /crm/api/v1/calendars | Get the list of available calendarslol. |
| [**listEvents()**](EventsApi.md#listEvents) | **GET** /crm/api/v1/events | List or search events. |
| [**patchEvent()**](EventsApi.md#patchEvent) | **PATCH** /crm/api/v1/events/{eventId} | Partially update an event. |
| [**patchEventInternalNote()**](EventsApi.md#patchEventInternalNote) | **PATCH** /crm/api/v1/events/{eventId}/notes/{noteId} | Update an internal note of an event. |
| [**putEventLinksDocuments()**](EventsApi.md#putEventLinksDocuments) | **PUT** /crm/api/v1/events/{eventId}/documents | Update the links between an event and existing documents |
| [**restoreEventInternalNote()**](EventsApi.md#restoreEventInternalNote) | **POST** /crm/api/v1/events/{eventId}/notes/{noteId}/restore | Restore an archived internal note for an event. |
| [**transferEventToCompleted()**](EventsApi.md#transferEventToCompleted) | **POST** /crm/api/v1/events/{eventId}/transferToCompleted | Transfer an event to the completed/done calendar. |


## `archiveEventInternalNote()`

```php
archiveEventInternalNote($eventId, $noteId, $acceptLanguage)
```

Archive an internal note for an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$noteId = 56; // int | Note unique identifier.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $apiInstance->archiveEventInternalNote($eventId, $noteId, $acceptLanguage);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->archiveEventInternalNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **noteId** | **int**| Note unique identifier. | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

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

## `createEvent()`

```php
createEvent($eventsCreateEventPayload, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventResponse
```

Create an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventsCreateEventPayload = new \Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventPayload(); // \Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventPayload
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->createEvent($eventsCreateEventPayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventsCreateEventPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventPayload**](../Model/EventsCreateEventPayload.md)|  | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventResponse**](../Model/EventsCreateEventResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEventInternalNote()`

```php
createEventInternalNote($eventId, $internalNotesCreateNotePayload, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNoteResponse
```

Add an internal note to an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$internalNotesCreateNotePayload = new \Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNotePayload(); // \Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNotePayload
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->createEventInternalNote($eventId, $internalNotesCreateNotePayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createEventInternalNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **internalNotesCreateNotePayload** | [**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesCreateNotePayload**](../Model/InternalNotesCreateNotePayload.md)|  | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

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

## `deleteEvent()`

```php
deleteEvent($eventId)
```

Delete an event.

**Note:** To delete an instance of recurring event, use the master event id suffixed by the original start date of the occurrence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.

try {
    $apiInstance->deleteEvent($eventId);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->deleteEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |

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

## `deleteEvents()`

```php
deleteEvents()
```

Delete some events.

**Note:** To delete an instance of recurring event, use the master event id suffixed by the original start date of the occurrence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteEvents();
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->deleteEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getCalendar()`

```php
getCalendar($calendarId, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\CalendarsCalendar
```

Get informations about a calendar or a default calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendarId = 'calendarId_example'; // string | Calendar ID filter param. An id returned by listCalendars. The string `primary` for the current connected user primary (TODO) calendar. The string `completed` for the current connected user completed (DONE) calendar.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getCalendar($calendarId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendarId** | **string**| Calendar ID filter param. An id returned by listCalendars. The string &#x60;primary&#x60; for the current connected user primary (TODO) calendar. The string &#x60;completed&#x60; for the current connected user completed (DONE) calendar. | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\CalendarsCalendar**](../Model/CalendarsCalendar.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvent()`

```php
getEvent($eventId, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\EventsEvent
```

Return the detail of an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getEvent($eventId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsEvent**](../Model/EventsEvent.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventInstances()`

```php
getEventInstances($eventId, $minTime, $maxTime, $pageToken, $maxResults, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\EventsGetEventInstancesResponse
```

Get a recurring event instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$minTime = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Minimum (inclusive) date and time of the event start time. As defined by date-time - RFC3339.
$maxTime = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Maximum (exclusive) date and time of the event start time. As defined by date-time - RFC3339.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getEventInstances($eventId, $minTime, $maxTime, $pageToken, $maxResults, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEventInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **minTime** | **\DateTime**| Minimum (inclusive) date and time of the event start time. As defined by date-time - RFC3339. | [optional] |
| **maxTime** | **\DateTime**| Maximum (exclusive) date and time of the event start time. As defined by date-time - RFC3339. | [optional] |
| **pageToken** | **string**| Token to specify which page to fetch. | [optional] |
| **maxResults** | **string**| Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional] |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsGetEventInstancesResponse**](../Model/EventsGetEventInstancesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventInternalNoteList()`

```php
getEventInternalNoteList($eventId, $history, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\InternalNotesNoteList
```

Get the internal notes list for an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$history = new \Equisoft\SDK\EquisoftConnect\Model\\Equisoft\SDK\EquisoftConnect\Model\InternalNotesHistoryType(); // \Equisoft\SDK\EquisoftConnect\Model\InternalNotesHistoryType | Query all revisions or not.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getEventInternalNoteList($eventId, $history, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEventInternalNoteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **history** | [**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesHistoryType**](../Model/.md)| Query all revisions or not. | [optional] |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

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

## `listCalendars()`

```php
listCalendars($acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\CalendarsListCalendarResponse
```

Get the list of available calendarslol.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->listCalendars($acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listCalendars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\CalendarsListCalendarResponse**](../Model/CalendarsListCalendarResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEvents()`

```php
listEvents($calendarId, $ownerId, $contactIds, $minTime, $maxTime, $singleEvents, $isCompleted, $orderBy, $pageToken, $maxResults, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\EventsListEventResponse
```

List or search events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendarId = 'calendarId_example'; // string | Calendar ID filter param. An id returned by listCalendars. The string `primary` for the current connected user primary (TODO) calendar. The string `completed` for the current connected user completed (DONE) calendar.
$ownerId = 'ownerId_example'; // string | Owner ID filter param.
$contactIds = array(56); // int[] | Contact ID filter param. Many ids can be passed to this argument separated by coma. Ex: '?contactIds=1,2,3'. Any of the given contacts will be returned in the result.
$minTime = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Minimum (inclusive) date and time of the event start time. As defined by date-time - RFC3339.
$maxTime = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Maximum (exclusive) date and time of the event start time. As defined by date-time - RFC3339.
$singleEvents = True; // bool | Expand recurring events into occurrences. When singleEvents is true, master recurrences are not returned in list.
$isCompleted = True; // bool | If true, include only completed events. If false, include only TODO event. If not set or null, include both.
$orderBy = new \Equisoft\SDK\EquisoftConnect\Model\\Equisoft\SDK\EquisoftConnect\Model\EventsOrderByType(); // \Equisoft\SDK\EquisoftConnect\Model\EventsOrderByType | Specify the order of the results. `startTime` may result in inconsistant sort when used without the `singleEvents` option.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->listEvents($calendarId, $ownerId, $contactIds, $minTime, $maxTime, $singleEvents, $isCompleted, $orderBy, $pageToken, $maxResults, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendarId** | **string**| Calendar ID filter param. An id returned by listCalendars. The string &#x60;primary&#x60; for the current connected user primary (TODO) calendar. The string &#x60;completed&#x60; for the current connected user completed (DONE) calendar. | [optional] |
| **ownerId** | **string**| Owner ID filter param. | [optional] |
| **contactIds** | [**int[]**](../Model/int.md)| Contact ID filter param. Many ids can be passed to this argument separated by coma. Ex: &#39;?contactIds&#x3D;1,2,3&#39;. Any of the given contacts will be returned in the result. | [optional] |
| **minTime** | **\DateTime**| Minimum (inclusive) date and time of the event start time. As defined by date-time - RFC3339. | [optional] |
| **maxTime** | **\DateTime**| Maximum (exclusive) date and time of the event start time. As defined by date-time - RFC3339. | [optional] |
| **singleEvents** | **bool**| Expand recurring events into occurrences. When singleEvents is true, master recurrences are not returned in list. | [optional] |
| **isCompleted** | **bool**| If true, include only completed events. If false, include only TODO event. If not set or null, include both. | [optional] |
| **orderBy** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsOrderByType**](../Model/.md)| Specify the order of the results. &#x60;startTime&#x60; may result in inconsistant sort when used without the &#x60;singleEvents&#x60; option. | [optional] |
| **pageToken** | **string**| Token to specify which page to fetch. | [optional] |
| **maxResults** | **string**| Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional] |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsListEventResponse**](../Model/EventsListEventResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEvent()`

```php
patchEvent($eventId, $eventsPatchEventPayload, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\EventsPatchEventResponse
```

Partially update an event.

**Note:** To update an instance of recurring event, use the master event id suffixed by the original start date of the occurrence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$eventsPatchEventPayload = new \Equisoft\SDK\EquisoftConnect\Model\EventsPatchEventPayload(); // \Equisoft\SDK\EquisoftConnect\Model\EventsPatchEventPayload | Event fields to update. The body of the patch request includes only the resource fields you want to modify. To delete a field, set it to null. Collections are always overridden if defined.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->patchEvent($eventId, $eventsPatchEventPayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->patchEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **eventsPatchEventPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsPatchEventPayload**](../Model/EventsPatchEventPayload.md)| Event fields to update. The body of the patch request includes only the resource fields you want to modify. To delete a field, set it to null. Collections are always overridden if defined. | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsPatchEventResponse**](../Model/EventsPatchEventResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEventInternalNote()`

```php
patchEventInternalNote($eventId, $noteId, $internalNotesPatchNotePayload, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNoteResponse
```

Update an internal note of an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$noteId = 56; // int | Note unique identifier.
$internalNotesPatchNotePayload = new \Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNotePayload(); // \Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNotePayload
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->patchEventInternalNote($eventId, $noteId, $internalNotesPatchNotePayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->patchEventInternalNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **noteId** | **int**| Note unique identifier. | |
| **internalNotesPatchNotePayload** | [**\Equisoft\SDK\EquisoftConnect\Model\InternalNotesPatchNotePayload**](../Model/InternalNotesPatchNotePayload.md)|  | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

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

## `putEventLinksDocuments()`

```php
putEventLinksDocuments($eventId, $eventsPutEventLinkDocumentsPayload, $acceptLanguage)
```

Update the links between an event and existing documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$eventsPutEventLinkDocumentsPayload = new \Equisoft\SDK\EquisoftConnect\Model\EventsPutEventLinkDocumentsPayload(); // \Equisoft\SDK\EquisoftConnect\Model\EventsPutEventLinkDocumentsPayload | Contains an array of Ids for the documents to link with the event. To remove all links, documentIds set to an empty array. Collections are always overridden if defined.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $apiInstance->putEventLinksDocuments($eventId, $eventsPutEventLinkDocumentsPayload, $acceptLanguage);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->putEventLinksDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **eventsPutEventLinkDocumentsPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsPutEventLinkDocumentsPayload**](../Model/EventsPutEventLinkDocumentsPayload.md)| Contains an array of Ids for the documents to link with the event. To remove all links, documentIds set to an empty array. Collections are always overridden if defined. | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

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

## `restoreEventInternalNote()`

```php
restoreEventInternalNote($eventId, $noteId, $acceptLanguage)
```

Restore an archived internal note for an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.
$noteId = 56; // int | Note unique identifier.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $apiInstance->restoreEventInternalNote($eventId, $noteId, $acceptLanguage);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->restoreEventInternalNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |
| **noteId** | **int**| Note unique identifier. | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

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

## `transferEventToCompleted()`

```php
transferEventToCompleted($eventId): \Equisoft\SDK\EquisoftConnect\Model\EventsTransferToCompletedResponse
```

Transfer an event to the completed/done calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101.

try {
    $result = $apiInstance->transferEventToCompleted($eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->transferEventToCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsTransferToCompletedResponse**](../Model/EventsTransferToCompletedResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
