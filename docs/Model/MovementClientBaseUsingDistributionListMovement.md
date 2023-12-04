# # MovementClientBaseUsingDistributionListMovement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [default to 'CLIENTBASE_USING_DISTLIST']
**id** | **int** | Unique numerical identifier. | [optional]
**status** | **string** | Movement status. | [optional]
**availableAction** | **string** | Available action. | [optional]
**scheduledDate** | **string** | Scheduled date. | [optional]
**processedDate** | **string** | Processed date. | [optional]
**addedDate** | **string** | Added date. | [optional]
**addedBy** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUser**](MovementUser.md) |  | [optional]
**cancelledDate** | **string** | Cancelled date. | [optional]
**cancelledBy** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUser**](MovementUser.md) |  | [optional]
**sourceDatabase** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementDatabase**](MovementDatabase.md) |  |
**sourceUser** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUser**](MovementUser.md) |  |
**sourceDistributionList** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementDistributionList**](MovementDistributionList.md) |  | [optional]
**destinationDatabase** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementDatabase**](MovementDatabase.md) |  |
**destinationUser** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUser**](MovementUser.md) |  |
**datagatewayAccessMappings** | **array<string,string>** | Data gateway access mapping. | [optional]
**transferOption** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementTransferOption**](MovementTransferOption.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
