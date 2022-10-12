# blockmate\AccountProviderInfoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**connectAccount()**](AccountProviderInfoApi.md#connectAccount) | **POST** /v1/{account_provider}/connect | Connect new account |
| [**deleteAccount()**](AccountProviderInfoApi.md#deleteAccount) | **DELETE** /v1/{account_provider}/account/{account_id} | Delete account |
| [**getAccountHint()**](AccountProviderInfoApi.md#getAccountHint) | **GET** /v1/{account_provider}/connect | Get account hint |


## `connectAccount()`

```php
connectAccount($account_provider, $connect_account_request): \blockmate\Model\ConnectAccount200Response
```
### URI(s):
- https://aisp-api.blockmate.io Call
Connect new account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\AccountProviderInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_provider = onchain/btc; // string | URL value from account_providers method
$connect_account_request = new \blockmate\Model\ConnectAccountRequest(); // \blockmate\Model\ConnectAccountRequest | OK

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->connectAccount($account_provider, $connect_account_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountProviderInfoApi->connectAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_provider** | **string**| URL value from account_providers method | |
| **connect_account_request** | [**\blockmate\Model\ConnectAccountRequest**](../Model/ConnectAccountRequest.md)| OK | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\ConnectAccount200Response**](../Model/ConnectAccount200Response.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccount()`

```php
deleteAccount($account_provider, $account_id)
```
### URI(s):
- https://aisp-api.blockmate.io Call
Delete account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AccountProviderInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_provider = onchain/btc; // string | URL value from account_providers method
$account_id = 163b6df1-dc0b-4086-8922-6068fe1e653d; // string | Account ID

$hostIndex = 0;
$variables = [
];

try {
    $apiInstance->deleteAccount($account_provider, $account_id, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling AccountProviderInfoApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_provider** | **string**| URL value from account_providers method | |
| **account_id** | **string**| Account ID | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountHint()`

```php
getAccountHint($account_provider): \blockmate\Model\GetAccountHint200Response
```
### URI(s):
- https://aisp-api.blockmate.io Call
Get account hint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AccountProviderInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_provider = onchain/btc; // string | URL value from account_providers method

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getAccountHint($account_provider, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountProviderInfoApi->getAccountHint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_provider** | **string**| URL value from account_providers method | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\GetAccountHint200Response**](../Model/GetAccountHint200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
