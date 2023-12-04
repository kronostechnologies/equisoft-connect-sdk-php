# # ContactsContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Contact unique numeric identifier |
**uuid** | **string** | Contact unique string identifier |
**contactType** | **string** | Contact type (&#39;CUS&#39;,&#39;OTHER&#39;) |
**displayName** | **string** | Contact complete name (\&quot;[Last name] [First Name]\&quot;) or company Name for &#39;Organization&#39; contact | [optional]
**sortName** | **string** | Contact sort name | [optional]
**notes** | **string** | Contact notes | [optional]
**notesAdditionalInformation** | **string** | Contact additional information related to the notes | [optional]
**creationDate** | **\DateTime** | Creation time. As defined by date-time - RFC3339 | [optional]
**lastUpdateDate** | **\DateTime** | Last update time. As defined by date-time - RFC3339 | [optional]
**identification** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactIdentification**](ContactContactIdentification.md) |  | [optional]
**additionalInformation** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactAdditionalInformation**](ContactContactAdditionalInformation.md) |  | [optional]
**currentMaritalStatus** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactMaritalStatus**](ContactContactMaritalStatus.md) |  | [optional]
**currentCivilStatus** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactMaritalStatus**](ContactContactMaritalStatus.md) |  | [optional]
**currentOccupation** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactOccupation**](ContactContactOccupation.md) |  | [optional]
**segmentation** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactSegmentation**](ContactContactSegmentation.md) |  | [optional]
**addresses** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactAddress[]**](ContactContactAddress.md) | List of contact&#39;s addresses | [optional]
**phones** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactPhone[]**](ContactContactPhone.md) | List of contact&#39;s phones | [optional]
**emails** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactEmail[]**](ContactContactEmail.md) | List of contact&#39;s emails | [optional]
**websites** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactContactWebsite[]**](ContactContactWebsite.md) | List of contact&#39;s websites | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
