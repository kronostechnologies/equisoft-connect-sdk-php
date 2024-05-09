# # LegacyProvisioningUserPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name. | [optional]
**lastName** | **string** | Last name. | [optional]
**email** | **string** | Email address used for login. | [optional]
**lang** | **string** | User language. Organisation default lang will be used if not provided. | [optional]
**role** | **string** | User role. | [optional]
**concurrentAccess** | **int** | Number of allowed concurrent accesses with this user. Default: 1. | [optional]
**password** | **string** | This option does nothing. | [optional]
**noPassword** | **string** | This option does nothing. | [optional]
**requirePasswordChange** | **string** | This option does nothing. | [optional]
**enableMobile** | **string** | This option does nothing. | [optional]
**allowDelegation** | **string** | Allow the user to delegate access to his data (false, true. Default: false). | [optional]
**gender** | **string** | Gender of this user. | [optional]
**phoneWork** | **string** | Work phone number of this user. | [optional]
**phoneWorkExtension** | **string** | Extension of work phone number of this user. | [optional]
**phoneHome** | **string** | Home phone number of this user. | [optional]
**phoneCell** | **string** | Cellphone number of this user. | [optional]
**phoneFax** | **string** | Fax phone number of this user. | [optional]
**phoneMain** | **string** | The phone type to be the main phone number. Default: work. | [optional]
**address** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactAddress[]**](LegacyContactAddress.md) | Address of this user. | [optional]
**noFNA** | **string** | Skip Equisoft Plan (false, true. Default: false). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
