# # TasksTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique numerical identifier. |
**subject** | **string** | Subject/Title of the Event. |
**isCompleted** | **bool** | Is the task completed/done. |
**dueDate** | **\DateTime** | Date the task is expected to be done. As defined by full-date - RFC3339. | [optional]
**initialDate** | **\DateTime** | Date the task was initially started. As defined by full-date - RFC3339. | [optional]
**completedDate** | **\DateTime** | Date the task was completed / done. As defined by full-date - RFC3339. | [optional]
**description** | **string** | Public description of the Event. | [optional]
**category** | [**\Equisoft\SDK\EquisoftConnect\Model\FieldValue**](FieldValue.md) |  | [optional]
**subCategory** | [**\Equisoft\SDK\EquisoftConnect\Model\FieldValue**](FieldValue.md) |  | [optional]
**priority** | **int** | Importance/Priority of an event or task. 5 is the most important. |
**visibility** | [**\Equisoft\SDK\EquisoftConnect\Model\TasksVisibilityType**](TasksVisibilityType.md) |  |
**creationTime** | **\DateTime** | Creation time. As defined by date-time - RFC3339. | [optional]
**updateTime** | **\DateTime** | Date time of last modification. As defined by date-time - RFC3339. | [optional]
**completionTime** | **\DateTime** | Completion time. As defined by date-time - RFC3339. | [optional]
**contactIds** | **int[]** | IDs of the contacts linked to this Task. | [optional]
**documentIds** | **int[]** | IDs of the documents linked to this Task. | [optional]
**accessRights** | [**\Equisoft\SDK\EquisoftConnect\Model\AccessRights**](AccessRights.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
