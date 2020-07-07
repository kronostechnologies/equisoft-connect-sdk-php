# # TasksCreateTaskPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ownerIds** | **int[]** | Ids of the owner users of the task. | [optional] 
**isCompleted** | **bool** | Is the task completed. | [optional] 
**subject** | **string** | Subject/Title of the Event. | 
**dueDate** | **string** | Date the task is expected to be done. As defined by full-date - RFC3339 | [optional] 
**initialDate** | **string** | Date the task was initially started. As defined by full-date - RFC3339 | [optional] 
**completedDate** | **string** | Date the task was completed / done. As defined by full-date - RFC3339 | [optional] 
**description** | **string** | Public description of the Event. | [optional] 
**internalNotes** | **string** | Internal notes on the Event. Not synced on remote sources. | [optional] 
**categoryId** | **int** | ID of the field value to use as category. | [optional] 
**subCategoryId** | **int** | ID of the field value to use as sub-category. | [optional] 
**priority** | **int** | Importance/Priority of an event or task. 5 is the most important. | [optional] 
**visibility** | **string** | Confidentiality level of the Event (private or not). [NORMAL, PRIVATE] | [optional] 
**contactIds** | **int[]** | Allow to link the task to one or many contacts. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


