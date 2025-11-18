# Equisoft\SDK\EquisoftConnect\ContactsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContact()**](ContactsApi.md#createContact) | **POST** /crm/api/v1/contacts | Create a contact |
| [**getByUuid()**](ContactsApi.md#getByUuid) | **GET** /crm/api/v1/contacts/{contactUuid} | Get contact by Uuid |
| [**listContact()**](ContactsApi.md#listContact) | **GET** /crm/api/v1/contacts | List contact |
| [**listContactDocument()**](ContactsApi.md#listContactDocument) | **GET** /crm/api/v1/contacts/{contactUuid}/documents | List contact documents |
| [**listContactInvestment()**](ContactsApi.md#listContactInvestment) | **GET** /crm/api/v1/contacts/{contactUuid}/investmentAccounts | List contact investments |
| [**patchContact()**](ContactsApi.md#patchContact) | **PATCH** /crm/api/v1/contacts/{contactUuid} | Update a contact |


## `createContact()`

```php
createContact($contactsCreateContactPayload): \Equisoft\SDK\EquisoftConnect\Model\ContactsTemporaryContact
```

Create a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactsCreateContactPayload = new \Equisoft\SDK\EquisoftConnect\Model\ContactsCreateContactPayload(); // \Equisoft\SDK\EquisoftConnect\Model\ContactsCreateContactPayload

try {
    $result = $apiInstance->createContact($contactsCreateContactPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactsCreateContactPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactsCreateContactPayload**](../Model/ContactsCreateContactPayload.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\ContactsTemporaryContact**](../Model/ContactsTemporaryContact.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByUuid()`

```php
getByUuid($contactUuid, $acceptLanguage): \Equisoft\SDK\EquisoftConnect\Model\ContactsLegacyContact
```

Get contact by Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactUuid = 'contactUuid_example'; // string | Contact unique identifier.
$acceptLanguage = 'acceptLanguage_example'; // string | Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282.

try {
    $result = $apiInstance->getByUuid($contactUuid, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactUuid** | **string**| Contact unique identifier. | |
| **acceptLanguage** | **string**| Specify preferred language for returned data. Format is https://tools.ietf.org/html/rfc3282. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\ContactsLegacyContact**](../Model/ContactsLegacyContact.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContact()`

```php
listContact($search, $ids, $name, $classIds, $classNames, $lastName, $firstName, $nickname, $middleName, $userEmail, $individual, $organization, $sort, $sortDesc, $active, $excludeDeceased, $mailGroupNames, $mailGroupIds, $anniversary, $anniversaryStartDate, $anniversaryEndDate, $pageToken, $maxResults, $withCount): \Equisoft\SDK\EquisoftConnect\Model\ContactsListContactResponse
```

List contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search value for the contact.
$ids = array(56); // int[] | Filter by id.
$name = 'name_example'; // string | Filter by last name or first name.
$classIds = array(56); // int[] | Filter by the class unique id.
$classNames = array('classNames_example'); // string[] | Filter by the class unique system name.
$lastName = 'lastName_example'; // string | Filter by last name.
$firstName = 'firstName_example'; // string | Filter by first name.
$nickname = 'nickname_example'; // string | Filter by nickname.
$middleName = 'middleName_example'; // string | Filter by middle name.
$userEmail = 'userEmail_example'; // string | Filter by exact user email.
$individual = True; // bool | Filter by individual only. Default: false.
$organization = True; // bool | Filter by organization only. Default: false.
$sort = 'NO_SORT'; // string | Sort by (NO_SORT|NAME). Default: NO_SORT.
$sortDesc = True; // bool | Sort in descending order (\"sort\" must be specified). Default: false.
$active = True; // bool | Return only the active contacts. Default: false.
$excludeDeceased = True; // bool | Set to true to exclude contact that are deceased.
$mailGroupNames = array('mailGroupNames_example'); // string[] | Return only contacts in the specified mail group system names.
$mailGroupIds = array(56); // int[] | Return only contacts in the specified mail group ids.
$anniversary = True; // bool | Returns only contacts that their anniversary is today.
$anniversaryStartDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Returns only contacts whose anniversary occurs on this date or after.
$anniversaryEndDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Returns only contacts whose anniversary occurs on this date or before.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.
$withCount = True; // bool | If true, will also return the count of all possible results (without pagination).

try {
    $result = $apiInstance->listContact($search, $ids, $name, $classIds, $classNames, $lastName, $firstName, $nickname, $middleName, $userEmail, $individual, $organization, $sort, $sortDesc, $active, $excludeDeceased, $mailGroupNames, $mailGroupIds, $anniversary, $anniversaryStartDate, $anniversaryEndDate, $pageToken, $maxResults, $withCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search value for the contact. | [optional] |
| **ids** | [**int[]**](../Model/int.md)| Filter by id. | [optional] |
| **name** | **string**| Filter by last name or first name. | [optional] |
| **classIds** | [**int[]**](../Model/int.md)| Filter by the class unique id. | [optional] |
| **classNames** | [**string[]**](../Model/string.md)| Filter by the class unique system name. | [optional] |
| **lastName** | **string**| Filter by last name. | [optional] |
| **firstName** | **string**| Filter by first name. | [optional] |
| **nickname** | **string**| Filter by nickname. | [optional] |
| **middleName** | **string**| Filter by middle name. | [optional] |
| **userEmail** | **string**| Filter by exact user email. | [optional] |
| **individual** | **bool**| Filter by individual only. Default: false. | [optional] |
| **organization** | **bool**| Filter by organization only. Default: false. | [optional] |
| **sort** | **string**| Sort by (NO_SORT|NAME). Default: NO_SORT. | [optional] [default to &#39;NO_SORT&#39;] |
| **sortDesc** | **bool**| Sort in descending order (\&quot;sort\&quot; must be specified). Default: false. | [optional] |
| **active** | **bool**| Return only the active contacts. Default: false. | [optional] |
| **excludeDeceased** | **bool**| Set to true to exclude contact that are deceased. | [optional] |
| **mailGroupNames** | [**string[]**](../Model/string.md)| Return only contacts in the specified mail group system names. | [optional] |
| **mailGroupIds** | [**int[]**](../Model/int.md)| Return only contacts in the specified mail group ids. | [optional] |
| **anniversary** | **bool**| Returns only contacts that their anniversary is today. | [optional] |
| **anniversaryStartDate** | **\DateTime**| Returns only contacts whose anniversary occurs on this date or after. | [optional] |
| **anniversaryEndDate** | **\DateTime**| Returns only contacts whose anniversary occurs on this date or before. | [optional] |
| **pageToken** | **string**| Token to specify which page to fetch. | [optional] |
| **maxResults** | **string**| Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional] |
| **withCount** | **bool**| If true, will also return the count of all possible results (without pagination). | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\ContactsListContactResponse**](../Model/ContactsListContactResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactDocument()`

```php
listContactDocument($contactUuid, $pageToken, $maxResults): \Equisoft\SDK\EquisoftConnect\Model\DocumentsListDocumentResponse
```

List contact documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactUuid = 'contactUuid_example'; // string | Contact unique identifier.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.

try {
    $result = $apiInstance->listContactDocument($contactUuid, $pageToken, $maxResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listContactDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactUuid** | **string**| Contact unique identifier. | |
| **pageToken** | **string**| Token to specify which page to fetch. | [optional] |
| **maxResults** | **string**| Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DocumentsListDocumentResponse**](../Model/DocumentsListDocumentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactInvestment()`

```php
listContactInvestment($contactUuid, $pageToken, $maxResults): \Equisoft\SDK\EquisoftConnect\Model\InvestmentsListAccountResponse
```

List contact investments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactUuid = 'contactUuid_example'; // string | Contact unique identifier.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.

try {
    $result = $apiInstance->listContactInvestment($contactUuid, $pageToken, $maxResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listContactInvestment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactUuid** | **string**| Contact unique identifier. | |
| **pageToken** | **string**| Token to specify which page to fetch. | [optional] |
| **maxResults** | **string**| Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\InvestmentsListAccountResponse**](../Model/InvestmentsListAccountResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchContact()`

```php
patchContact($contactUuid, $contactPatchContactPayload): \Equisoft\SDK\EquisoftConnect\Model\ContactsContact
```

Update a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactUuid = 'contactUuid_example'; // string | Contact unique identifier.
$contactPatchContactPayload = new \Equisoft\SDK\EquisoftConnect\Model\ContactPatchContactPayload(); // \Equisoft\SDK\EquisoftConnect\Model\ContactPatchContactPayload

try {
    $result = $apiInstance->patchContact($contactUuid, $contactPatchContactPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->patchContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactUuid** | **string**| Contact unique identifier. | |
| **contactPatchContactPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\ContactPatchContactPayload**](../Model/ContactPatchContactPayload.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\ContactsContact**](../Model/ContactsContact.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
