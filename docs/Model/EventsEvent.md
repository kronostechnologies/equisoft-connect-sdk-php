# # EventsEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique numerical identifier. |
**subject** | **string** | Subject/Title of the Event. |
**start** | [**\Equisoft\SDK\EquisoftConnect\Model\DateOrDateTime**](DateOrDateTime.md) |  |
**end** | [**\Equisoft\SDK\EquisoftConnect\Model\DateOrDateTime**](DateOrDateTime.md) |  |
**allDay** | **bool** | Indicate if the event is an all-day event or a timed event. |
**isCompleted** | **bool** | Is the event part of a completed/done calendar. |
**initialDate** | **string** | Date the Event was initially scheduled. As defined by full-date - RFC3339. | [optional]
**description** | **string** | Public description of the Event. | [optional]
**internalNotes** | **string** | Internal notes on the Event. Not synced on remote sources. | [optional]
**location** | **string** | Location of the event in free-text form. | [optional]
**type** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsEventType**](EventsEventType.md) |  |
**category** | [**\Equisoft\SDK\EquisoftConnect\Model\FieldValue**](FieldValue.md) | Event category | [optional]
**subCategory** | [**\Equisoft\SDK\EquisoftConnect\Model\FieldValue**](FieldValue.md) | Event sub category | [optional]
**recurrenceRule** | **string** | The recurrence rule for this event. The recurrence is a string conform to RFC 5545 (see RRULE http://tools.ietf.org/html/rfc5545#section-3.8.5.3). | [optional]
**recurringEventId** | **string** | For an instance of recurring event, ID of the master event. | [optional]
**originalStartDate** | **string** | For an instance of recurring event, original start date of the event according to the recurrence rule. This uniquely identify the occurrence and can be different from start date. | [optional]
**priority** | **int** | Importance/Priority of an event or task. 5 is the most important. |
**visibility** | [**\Equisoft\SDK\EquisoftConnect\Model\EventsVisibilityType**](EventsVisibilityType.md) |  |
**creationTime** | **\DateTime** | Creation time. As defined by date-time - RFC3339. | [optional]
**updateTime** | **\DateTime** | Date time of last modification. As defined by date-time - RFC3339. | [optional]
**calendarId** | **int** | ID of the calendar owning this Event. If owned by many users, calendarId will be: - The primary (or completed depending on state) calendar ID of the connected user if the user is one of the owners. - Any primary (or completed depending on state) completed calendar ID of one of the owners. |
**color** | **string** | Hex color of this event background | [optional]
**textColor** | **string** | Hex text color of this event | [optional]
**contactIds** | **int[]** | IDs of the contacts linked to this Event. | [optional]
**documentIds** | **int[]** | IDs of the documents linked to this Event. | [optional]
**accessRights** | [**\Equisoft\SDK\EquisoftConnect\Model\AccessRights**](AccessRights.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
