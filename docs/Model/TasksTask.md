# # TasksTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique numerical identifier. | 
**subject** | **string** | Subject/Title of the Event. | 
**isCompleted** | **bool** | Is the task completed/done. | 
**dueDate** | **string** | Date the task is expected to be done. As defined by full-date - RFC3339 | [optional] 
**initialDate** | **string** | Date the task was initially started. As defined by full-date - RFC3339 | [optional] 
**completedDate** | **string** | Date the task was completed / done. As defined by full-date - RFC3339 | [optional] 
**description** | **string** | Public description of the Event. | [optional] 
**internalNotes** | **string** | Internal notes on the Event. Not synced on remote sources. | [optional] 
**category** | [**\Equisoft\SDK\EquisoftConnect\Model\FieldValue**](FieldValue.md) |  | [optional] 
**subCategory** | [**\Equisoft\SDK\EquisoftConnect\Model\FieldValue**](FieldValue.md) |  | [optional] 
**priority** | **int** | Importance/Priority of an event or task. 5 is the most important. | [optional] 
**visibility** | **string** | Confidentiality level of the Event (private or not). [NORMAL, PRIVATE] | [optional] 
**creationTime** | [**\DateTime**](\DateTime.md) | Creation time. As defined by date-time - RFC3339 | [optional] 
**updateTime** | [**\DateTime**](\DateTime.md) | Date time of last modification. As defined by date-time - RFC3339 | [optional] 
**completionTime** | [**\DateTime**](\DateTime.md) | Completion time. As defined by date-time - RFC3339 | [optional] 
**contactIds** | **int[]** | IDs of the contacts linked to this Task | [optional] 
**accessRights** | [**\Equisoft\SDK\EquisoftConnect\Model\AccessRights**](AccessRights.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


