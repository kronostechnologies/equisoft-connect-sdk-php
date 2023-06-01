# # LegacyProvisioningLoginLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**datetime** | **string** | Log datetime. | [optional]
**service** | **string** | Service accessed. | [optional]
**userId** | **int** | User unique ID. | [optional]
**userEmail** | **string** | User email address. | [optional]
**userIdentifier** | **string** | Identifier used for login. | [optional]
**action** | **string** | Session opening action: LOGIN : Normal login. OPEN_EXISTING : Existing session was found and used. BUMP : Existing session was found and bumped. DONT_BUMP : Existing session was found but the user refused to bump it. LOGOUT : Normal logout. ERROR : An error prevented the login. See errorMessage. | [optional]
**errorMessage** | **string** | Login error message. | [optional]
**remoteIP** | **string** | IP address of the user. | [optional]
**host** | **string** | Server where the session was created. | [optional]
**loginURI** | **string** | URI from which the session was created. | [optional]
**concurrentAccesses** | **int** | Number of concurrent accesses at login. | [optional]
**userAgent** | **string** | Used browser user agent. | [optional]
**assumedUserId** | **int** | Assumed user unique ID. | [optional]
**assumedUserEmail** | **string** | Assumed user email. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
