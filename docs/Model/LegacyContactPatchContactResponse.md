# # LegacyContactPatchContactResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stat** | **string** | Status of the request that has been made. Can be &#39;ok&#39; or &#39;fail&#39;. | [optional]
**errorCode** | **string** | If the request has failed, this element will contain the error code related to the problem encountered. | [optional]
**errorMsg** | **string** | If the request has failed, this element will contain the error message related to the problem encountered. | [optional]
**addresses** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactAddress[]**](LegacyContactAddress.md) | Contact addresses. | [optional]
**emails** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactEmail[]**](LegacyContactEmail.md) | Emails Details. | [optional]
**phones** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactPhone[]**](LegacyContactPhone.md) | Phones Details. | [optional]
**webSites** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactWebSite[]**](LegacyContactWebSite.md) | Emails Details. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
