# # MovementMovement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementMovementType**](MovementMovementType.md) |  | [optional]
**id** | **int** | Unique numerical identifier. | [optional]
**status** | **string** | Movement status. | [optional]
**availableAction** | **string** | Available action. | [optional]
**scheduledDate** | **string** | Scheduled date. | [optional]
**processedDate** | **string** | Processed date. | [optional]
**addedDate** | **string** | Added date. | [optional]
**addedBy** | [**OneOfMovementUser**](OneOfMovementUser.md) | Added by. | [optional]
**cancelledDate** | **string** | Cancelled date. | [optional]
**cancelledBy** | [**OneOfMovementUser**](OneOfMovementUser.md) | Cancelled by. | [optional]
**sourceDatabase** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementDatabase**](MovementDatabase.md) |  |
**destinationDatabase** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementDatabase**](MovementDatabase.md) |  |
**users** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUser[]**](MovementUser.md) | List of users. |
**userTuples** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUserTuple[]**](MovementUserTuple.md) | List of user tuples. |
**sourceUser** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUser**](MovementUser.md) |  |
**destinationUser** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUser**](MovementUser.md) |  |
**accessCode** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementGatewayAccessCode**](MovementGatewayAccessCode.md) |  |
**sourceDistributionList** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementDistributionList**](MovementDistributionList.md) |  | [optional]
**datagatewayAccessMappings** | **array<string,string>** | Data gateway access mapping. | [optional]
**transferOption** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementTransferOption**](MovementTransferOption.md) |  |
**capsil** | **bool** | Is Capsil. | [optional]
**univeris** | **bool** | Is Univeris. Deprecated: Univeris is not supported anymore and will be removed from future versions). | [optional]
**dataphile** | **bool** | Is Dataphile. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
