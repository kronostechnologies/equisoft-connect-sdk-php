# # LegacyProvisioningUserItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orgId** | **string** | User organization id. | [optional]
**uuid** | **string** | User globally unique identifier. | [optional]
**userId** | **string** | User unique identifier. | [optional]
**displayName** | **string** | User display name. | [optional]
**firstName** | **string** | First name. | [optional]
**lastName** | **string** | Last name. | [optional]
**initials** | **string** | Initials. | [optional]
**email** | **string** | Email address used for login. | [optional]
**role** | **string** | User role. | [optional]
**lang** | **string** | User language. Organisation default lang will be used if not provided. | [optional]
**concurrentAccess** | **int** | Number of allowed concurrent accesses with this user. Default 1. | [optional]
**active** | **string** | Is the user active (N: false, Y: true). | [optional]
**locked** | **string** | Is the user locked (N: false, Y: true). | [optional]
**enableMobile** | **string** | Enable Mobile version. Default: false. | [optional]
**gender** | **string** | Gender of this user. | [optional]
**phoneWork** | **string** | Work phone number of this user. | [optional]
**phoneWorkExtension** | **string** | Extension of work phone number of this user. | [optional]
**phoneHome** | **string** | Home phone number of this user.. | [optional]
**phoneCell** | **string** | Cellphone number of this user. | [optional]
**phoneFax** | **string** | Fax phone number of this user. | [optional]
**address** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactAddress[]**](LegacyContactAddress.md) | Address of this user. | [optional]
**groups** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningGroupItem[]**](LegacyProvisioningGroupItem.md) | Groups the user is a member of. | [optional]
**externalIdentifiers** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningUserIdentifier[]**](LegacyProvisioningUserIdentifier.md) | List of identifier to uniquely identify the user. (Ex: Extranet2 or domain userId). | [optional]
**allowDelegation** | **string** | Allow the user to delegate access to his data. | [optional]
**deletable** | **string** | Can the user be deleted (N: false, Y: true). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
