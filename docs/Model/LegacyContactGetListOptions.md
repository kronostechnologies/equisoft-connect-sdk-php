# # LegacyContactGetListOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filterById** | **string** | Filter by id. | [optional]
**filterByName** | **string** | Filter by first char of last name or first name. | [optional]
**filterByClassId** | **string** | Filter by the class unique id or the class unique system name. | [optional]
**filterByLastName** | **string** | Filter by first char of last name. | [optional]
**filterByFirstName** | **string** | Filter by first char of first name. | [optional]
**filterByNickName** | **string** | Filter by first char of nickname. | [optional]
**filterByMiddleName** | **string** | Filter by first char of middle name. | [optional]
**filterByRank** | **string** | Filter by first char of rank. (Industrial Alliance only). | [optional]
**filterByUser** | **string** | Filter by exact username. | [optional]
**filterByIndividual** | **string** | Filter by individual only. Default: false. | [optional]
**filterByOrganization** | **string** | Filter by organization only. Default: false. | [optional]
**limit** | **int** | Limit result to N record(s). | [optional]
**offset** | **int** | Return results skipping N first rows (\&quot;limit\&quot; must be specified for offset to works). | [optional]
**sortBy** | **string** | Sort by (NO_SORT|NAME). Default: NO_SORT. | [optional]
**sortDesc** | **bool** | Sort in descending order (\&quot;sortBy\&quot; must be specified). Default: false. | [optional]
**active** | **bool** | Return only the active contacts. Default: false. | [optional]
**mailGroup** | **string** | Return only contacts in the specified mail group. This can be the id of the mail group or the system name. | [optional]
**excludeDeceased** | **bool** | Set to true to exclude contact that are deceased. | [optional]
**anniversary** | **bool** | Returns only contacts that their anniversary is today. | [optional]
**anniversaryRange** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyDateRange**](LegacyDateRange.md) |  | [optional]
**excludeFNA** | **bool** | Exclude contacts linked to Equisoft/plan. Default: false. | [optional]
**search** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyContactOptionGetListSearch**](LegacyContactOptionGetListSearch.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
