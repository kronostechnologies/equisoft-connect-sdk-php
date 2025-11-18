# # ContactsCreateAdditionalInformationPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isDeceased** | **bool** |  | [optional]
**deceasedDate** | **\DateTime** |  | [optional]
**isSmoker** | **bool** |  | [optional]
**smokerEndDate** | **\DateTime** |  | [optional]
**birthDate** | **\DateTime** |  | [optional]
**language** | **int** | Refer to the values provided by the FieldValue endpoint with fieldName CONTACT_LANG. | [optional]
**organizationDateCreated** | **\DateTime** |  | [optional]
**organizationDateClosed** | **\DateTime** |  | [optional]
**numberOfEmployees** | **int** | Refer to the values provided by the FieldValue endpoint with fieldName ORG_NB_EMPLOYEE. | [optional]
**companyValue** | **int** | Refer to the values provided by the FieldValue endpoint with fieldName ORG_COMPANY_VALUE. | [optional]
**annualGrowth** | **int** | Refer to the values provided by the FieldValue endpoint with fieldName ORG_ANNUAL_GROWTH. | [optional]
**companyStage** | **int** | Refer to the values provided by the FieldValue endpoint with fieldName ORG_COMPANY_STAGE. | [optional]
**revenue** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsCreateRevenuePayload**](ContactsCreateRevenuePayload.md) |  | [optional]
**netProfits** | **int** | Refer to the values provided by the FieldValue endpoint with fieldName ORG_NET_PROFIT. | [optional]
**incorporationLocation** | **int** | Refer to the values provided by the FieldValue endpoint with fieldName ORG_INCORPORATION_LOCATION. | [optional]
**payroll** | **int** | Refer to the values provided by the FieldValue endpoint with fieldName ORG_PAYROLL. | [optional]
**endOfFinancialYear** | **string** | Only support full month name in English in uppercase (JANUARY, FEBRUARY, etc.) | [optional]
**registrationNumbers** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsCreateRegistrationNumbersPayload**](ContactsCreateRegistrationNumbersPayload.md) |  | [optional]
**knownSince** | **\DateTime** |  | [optional]
**endDate** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
