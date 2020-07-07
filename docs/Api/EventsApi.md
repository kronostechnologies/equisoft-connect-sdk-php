# Equisoft\SDK\EquisoftConnect\EventsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEvent**](EventsApi.md#createEvent) | **POST** /crm/api/v1/events | Create an event.
[**deleteEvent**](EventsApi.md#deleteEvent) | **DELETE** /crm/api/v1/events/{eventId} | Delete an event.
[**getCalendar**](EventsApi.md#getCalendar) | **GET** /crm/api/v1/calendars/{calendarId} | Get informations about a calendar or a default calendar.
[**getEvent**](EventsApi.md#getEvent) | **GET** /crm/api/v1/events/{eventId} | Return the detail of an event.
[**getEventInstances**](EventsApi.md#getEventInstances) | **GET** /crm/api/v1/events/{eventId}/instances | Get a recurring event instances.
[**getEventInternalNoteList**](EventsApi.md#getEventInternalNoteList) | **GET** /crm/api/v1/events/{eventId}/notes | Get the internal notes list for an event.
[**listCalendars**](EventsApi.md#listCalendars) | **GET** /crm/api/v1/calendars | Get the list of available calendars.
[**listEvents**](EventsApi.md#listEvents) | **GET** /crm/api/v1/events | List or search events.
[**patchEvent**](EventsApi.md#patchEvent) | **PATCH** /crm/api/v1/events/{eventId} | Partially update an event.
[**transferEventToCompleted**](EventsApi.md#transferEventToCompleted) | **POST** /crm/api/v1/events/{eventId}/transferToCompleted | Transfer an event to the completed/done calendar.



## createEvent

> \Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventResponse createEvent($eventsCreateEventPayload, $acceptLanguage)

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
$eventsCreateEventPayload = new \Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventPayload(); // \Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventPayload | 
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->createEvent($eventsCreateEventPayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventsCreateEventPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventPayload**](../Model/EventsCreateEventPayload.md)|  |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsCreateEventResponse**](../Model/EventsCreateEventResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteEvent

> object deleteEvent($eventId)

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
    $result = $apiInstance->deleteEvent($eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->deleteEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. |

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


## getCalendar

> \Equisoft\SDK\EquisoftConnect\Model\CalendarsCalendar getCalendar($calendarId, $acceptLanguage)

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
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->getCalendar($calendarId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calendarId** | **string**| Calendar ID filter param. An id returned by listCalendars. The string &#x60;primary&#x60; for the current connected user primary (TODO) calendar. The string &#x60;completed&#x60; for the current connected user completed (DONE) calendar. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\CalendarsCalendar**](../Model/CalendarsCalendar.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEvent

> \Equisoft\SDK\EquisoftConnect\Model\EventsEvent getEvent($eventId, $acceptLanguage)

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
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->getEvent($eventId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsEvent**](../Model/EventsEvent.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventInstances

> \Equisoft\SDK\EquisoftConnect\Model\EventsGetEventInstancesResponse getEventInstances($eventId, $minTime, $maxTime, $pageToken, $maxResults, $acceptLanguage)

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
$minTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum (inclusive) date and time of the event start time. As defined by date-time - RFC3339
$maxTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum (exclusive) date and time of the event start time. As defined by date-time - RFC3339
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page.  If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->getEventInstances($eventId, $minTime, $maxTime, $pageToken, $maxResults, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEventInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. |
 **minTime** | **\DateTime**| Minimum (inclusive) date and time of the event start time. As defined by date-time - RFC3339 | [optional]
 **maxTime** | **\DateTime**| Maximum (exclusive) date and time of the event start time. As defined by date-time - RFC3339 | [optional]
 **pageToken** | **string**| Token to specify which page to fetch. | [optional]
 **maxResults** | **string**| Maximum number of records for one result page.  If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional]
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsGetEventInstancesResponse**](../Model/EventsGetEventInstancesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventInternalNoteList

> \Equisoft\SDK\EquisoftConnect\Model\InternalNotesNoteList getEventInternalNoteList($eventId, $acceptLanguage)

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
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->getEventInternalNoteList($eventId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEventInternalNoteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. |
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


## listCalendars

> \Equisoft\SDK\EquisoftConnect\Model\CalendarsListCalendarResponse listCalendars($acceptLanguage)

Get the list of available calendars.

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
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->listCalendars($acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listCalendars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\CalendarsListCalendarResponse**](../Model/CalendarsListCalendarResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listEvents

> \Equisoft\SDK\EquisoftConnect\Model\EventsListEventResponse listEvents($calendarId, $ownerId, $contactIds, $minTime, $maxTime, $singleEvents, $isCompleted, $orderBy, $pageToken, $maxResults, $acceptLanguage)

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
$contactIds = array(56); // int[] | Contact ID filter param. Many ids can be passed to this argument separated by coma. Ex: '?contactId=1,2,3'. Any of the given contacts will be returned in the result.
$minTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum (inclusive) date and time of the event start time. As defined by date-time - RFC3339
$maxTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum (exclusive) date and time of the event start time. As defined by date-time - RFC3339
$singleEvents = True; // bool | Expand recurring events into occurrences. When singleEvents is true, master recurrences are not returned in list.
$isCompleted = True; // bool | If true, include only completed events. If false, include only TODO event. If not set or null, include both.
$orderBy = new \Equisoft\SDK\EquisoftConnect\Model\\Equisoft\SDK\EquisoftConnect\Model\EventsOrderByType(); // \Equisoft\SDK\EquisoftConnect\Model\EventsOrderByType | Specify the order of the results. `startTime` may result in inconsistant sort when used without the `singleEvents` option.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page.  If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->listEvents($calendarId, $ownerId, $contactIds, $minTime, $maxTime, $singleEvents, $isCompleted, $orderBy, $pageToken, $maxResults, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calendarId** | **string**| Calendar ID filter param. An id returned by listCalendars. The string &#x60;primary&#x60; for the current connected user primary (TODO) calendar. The string &#x60;completed&#x60; for the current connected user completed (DONE) calendar. | [optional]
 **ownerId** | **string**| Owner ID filter param. | [optional]
 **contactIds** | [**int[]**](../Model/int.md)| Contact ID filter param. Many ids can be passed to this argument separated by coma. Ex: &#39;?contactId&#x3D;1,2,3&#39;. Any of the given contacts will be returned in the result. | [optional]
 **minTime** | **\DateTime**| Minimum (inclusive) date and time of the event start time. As defined by date-time - RFC3339 | [optional]
 **maxTime** | **\DateTime**| Maximum (exclusive) date and time of the event start time. As defined by date-time - RFC3339 | [optional]
 **singleEvents** | **bool**| Expand recurring events into occurrences. When singleEvents is true, master recurrences are not returned in list. | [optional]
 **isCompleted** | **bool**| If true, include only completed events. If false, include only TODO event. If not set or null, include both. | [optional]
 **orderBy** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsOrderByType**](../Model/.md)| Specify the order of the results. &#x60;startTime&#x60; may result in inconsistant sort when used without the &#x60;singleEvents&#x60; option. | [optional]
 **pageToken** | **string**| Token to specify which page to fetch. | [optional]
 **maxResults** | **string**| Maximum number of records for one result page.  If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional]
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsListEventResponse**](../Model/EventsListEventResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchEvent

> \Equisoft\SDK\EquisoftConnect\Model\EventsPatchEventResponse patchEvent($eventId, $eventsPatchEventPayload, $acceptLanguage)

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
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282

try {
    $result = $apiInstance->patchEvent($eventId, $eventsPatchEventPayload, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->patchEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. |
 **eventsPatchEventPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsPatchEventPayload**](../Model/EventsPatchEventPayload.md)| Event fields to update. The body of the patch request includes only the resource fields you want to modify. To delete a field, set it to null. Collections are always overridden if defined. |
 **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282 | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsPatchEventResponse**](../Model/EventsPatchEventResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## transferEventToCompleted

> \Equisoft\SDK\EquisoftConnect\Model\EventsTransferToCompletedResponse transferEventToCompleted($eventId)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| Event unique identifier. For recurrence occurrence/exception, eventId is suffixed with the original start date of the occurrence. For example 999_20180101. |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\EventsTransferToCompletedResponse**](../Model/EventsTransferToCompletedResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

