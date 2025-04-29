# # MovementMovementPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementMovementType**](MovementMovementType.md) |  | [optional]
**date** | **string** | Movement date. | [optional]
**sourceDatabase** | **string** | Source database full name. |
**destinationDatabase** | **string** | Destination database full name. |
**users** | **string[]** | List of users id. |
**options** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementOptions**](MovementOptions.md) |  | [optional]
**userTuples** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementUserTuplePayload[]**](MovementUserTuplePayload.md) | User tuples. |
**sourceUser** | **string** | Source user id. |
**sourceDistributionList** | **string** | Source distribution list. | [optional]
**destinationUser** | **string** | Destination user id. |
**transferOption** | **string** | Transfer option. |
**capsilFile** | **string** | Path to the Capsil file. | [optional]
**univerisFile** | **string** | Path to the Univeris file. Deprecated: Univeris file is not supported anymore and will be removed in a future version. | [optional]
**dataphileFile** | **string** | Path to the Dataphile. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
