# # EventsCreateEventPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** | Subject/Title of the Event. |
**start** | [**\Equisoft\SDK\EquisoftConnect\Model\DateOrDateTime**](DateOrDateTime.md) |  |
**end** | [**\Equisoft\SDK\EquisoftConnect\Model\DateOrDateTime**](DateOrDateTime.md) |  | [optional]
**allDay** | **bool** | Indicate if the event is an all-day event or a timed event. |
**initialDate** | **string** | Date the Event was initially scheduled. As defined by full-date - RFC3339. | [optional]
**description** | **string** | Public description of the Event. | [optional]
**location** | **string** | Location of the event in free-text form. | [optional]
**type** | **string** | Event type | [optional]
**categoryId** | **int** | ID of the field value to use as category. | [optional]
**subCategoryId** | **int** | ID of the field value to use as sub-category. | [optional]
**priority** | **int** | Importance/Priority of an event or task. 5 is the most important. | [optional]
**visibility** | **string** | Confidentiality level of the Event (private or not). [NORMAL, PRIVATE] | [optional]
**contactIds** | **int[]** | Allow to link the event to one or many contacts. | [optional]
**calendarId** | **string** | Calendar the Event will be created for. - A numerical ID returned by listCalendars. - The string \&quot;primary\&quot; for the current connected user primary (\&quot;TODO\&quot;) calendar. - The string \&quot;completed\&quot; for the current connected user completed (\&quot;DONE\&quot;) calendar. The &#x60;calendarId&#x60; parameter can&#39;t be used with the &#x60;ownerId&#x60; parameter. | [optional]
**ownerIds** | **int[]** | For local legacy events, &#x60;ownerIds&#x60; can be used instead of calendarId to create an Event for many user at once. - Cannot be used with &#x60;calendarId&#x60;. - Cannot be used for users with remote calendar (Exchange, Microsoft, Outlook.com). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
