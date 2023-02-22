# # EventsPatchEventPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** | Subject/Title of the Event. | [optional]
**start** | [**\Equisoft\SDK\EquisoftConnect\Model\DateOrDateTime**](DateOrDateTime.md) |  | [optional]
**end** | [**\Equisoft\SDK\EquisoftConnect\Model\DateOrDateTime**](DateOrDateTime.md) |  | [optional]
**allDay** | **bool** | Indicate if the event is an all-day event or a timed event. | [optional]
**initialDate** | **string** | Date the Event was initially scheduled. As defined by full-date - RFC3339 | [optional]
**description** | **string** | Public description of the Event. | [optional]
**internalNotes** | **string** | Internal notes on the Event. Not synced on remote sources. | [optional]
**location** | **string** | Location of the event in free-text form. | [optional]
**type** | **string** | Event type | [optional]
**categoryId** | **int** | ID of the field value to use as category. | [optional]
**subCategoryId** | **int** | ID of the field value to use as sub-category. | [optional]
**priority** | **int** | Importance/Priority of an event or task. 5 is the most important. | [optional]
**visibility** | **string** | Confidentiality level of the Event (private or not). [NORMAL, PRIVATE] | [optional]
**contactIds** | **int[]** | Allow to link the event to one or many contacts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
