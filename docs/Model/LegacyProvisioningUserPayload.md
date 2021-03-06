# # LegacyProvisioningUserPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name | [optional]
**lastName** | **string** | Last name | [optional]
**email** | **string** | Email address used for login | [optional]
**lang** | **string** | User language. Organisation default lang will be used if not provided. Accepts FR or EN. | [optional]
**role** | **string** | User role. Accepts USER or ADMIN | [optional]
**concurrentAccess** | **int** | Number of allowed concurrent accesses with this user. Default 1. | [optional]
**password** | **string** | User initial password. A random password will be set if none is specified and noPassword option is not used. | [optional]
**noPassword** | **string** | Disable password authentication. Accepts true or false. Default false | [optional]
**requirePasswordChange** | **string** | The user will be ask to define a new password on the first login Accepts true or false. Default true | [optional]
**enableMobile** | **string** | Enable Mobile version. Deprecated: the mobile is not enabled per user anymore. Accepts true or false. Default false | [optional]
**externalIdentifiers** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyProvisioningUserIdentifier[]**](LegacyProvisioningUserIdentifier.md) | List of identifier to uniquely identify the user. | [optional]
**allowDelegation** | **string** | Allow the user to delegate access to his data Accepts true or false. Default false | [optional]
**gender** | **string** | Gender of this user. Accepts M or F. | [optional]
**phoneWork** | **string** | Work phone number of this user | [optional]
**phoneWorkExtension** | **string** | Extension of work phone number of this user. | [optional]
**phoneHome** | **string** | Home phone number of this user. | [optional]
**phoneCell** | **string** | Cellphone number of this user. | [optional]
**phoneFax** | **string** | Fax phone number of this user. | [optional]
**phoneMain** | **string** | The phone type to be the main phone number. Accepts fax, cell, home, work. Default work | [optional]
**address** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactAddress[]**](LegacyContactAddress.md) | Address of this user. | [optional]
**noFNA** | **string** | Accepts true or false. Default false | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
