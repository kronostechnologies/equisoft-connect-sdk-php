# # ContactsContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**uuid** | **string** |  |
**contactType** | **string** |  |
**indOrg** | **string** |  | [optional]
**displayName** | **string** |  | [optional]
**sortName** | **string** |  | [optional]
**identification** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsIdentification**](ContactsIdentification.md) |  | [optional]
**additionalInformation** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsAdditionalInformation**](ContactsAdditionalInformation.md) |  | [optional]
**segmentation** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsSegmentation**](ContactsSegmentation.md) |  | [optional]
**addresses** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsAddress[]**](ContactsAddress.md) |  | [optional]
**phones** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsPhone[]**](ContactsPhone.md) |  | [optional]
**emails** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsEmail[]**](ContactsEmail.md) |  | [optional]
**websites** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsWebSite[]**](ContactsWebSite.md) |  | [optional]
**links** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsContactRelation[]**](ContactsContactRelation.md) | Only available for getContact. Will always be empty for listContact | [optional]
**notes** | **string** |  | [optional]
**notesAdditionalInformation** | **string** |  | [optional]
**creationDate** | **\DateTime** |  | [optional]
**lastUpdateDate** | **\DateTime** |  | [optional]
**currentMaritalStatus** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsCivilStatus**](ContactsCivilStatus.md) |  | [optional]
**currentCivilStatus** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsCivilStatus**](ContactsCivilStatus.md) |  | [optional]
**currentOccupation** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsOccupation**](ContactsOccupation.md) |  | [optional]
**investorProfile** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsInvestorProfile**](ContactsInvestorProfile.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
