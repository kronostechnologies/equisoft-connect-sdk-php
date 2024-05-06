# # LegacyProvisioningUserListOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orgId** | **string** | Organisation for which we want to list users. | [optional]
**active** | **string** | Filter active users (false, true). | [optional]
**locked** | **string** | Filter locked users (false, true). | [optional]
**loggedInSince** | **string** | Filter users that logged in since specified date. loggedInSince, loggedInAtDate and didnotLoginSince are exclusive, only one can be used | [optional]
**loggedInAtDate** | **string** | Filter users that logged in at a specific date. | [optional]
**didnotLoginSince** | **string** | Filter users that did not log in on and after the speficied date.loggedInSince, loggedInAtDate and didnotLoginSince are exclusive, only one can be used | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
