# blockmate\AggregatedInfoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountProviderHintsList()**](AggregatedInfoApi.md#accountProviderHintsList) | **GET** /v1/aggregate/account_provider_hints | Get list of account providers hints |
| [**accountProvidersList()**](AggregatedInfoApi.md#accountProvidersList) | **GET** /v1/aggregate/account_providers | Get list of account providers |
| [**accounts()**](AggregatedInfoApi.md#accounts) | **GET** /v1/aggregate/accounts | List accounts |
| [**balance()**](AggregatedInfoApi.md#balance) | **GET** /v1/aggregate/balance | Get balance |
| [**transactions()**](AggregatedInfoApi.md#transactions) | **GET** /v1/aggregate/transactions | Get transactions |


## `accountProviderHintsList()`

```php
accountProviderHintsList(): \blockmate\Model\AccountProviderHint
```
### URI(s):
- https://aisp-api.blockmate.io Call
Get list of account providers hints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AggregatedInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->accountProviderHintsList($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregatedInfoApi->accountProviderHintsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\AccountProviderHint**](../Model/AccountProviderHint.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountProvidersList()`

```php
accountProvidersList(): \blockmate\Model\AccountProvider
```
### URI(s):
- https://aisp-api.blockmate.io Call
Get list of account providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AggregatedInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->accountProvidersList($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregatedInfoApi->accountProvidersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\AccountProvider**](../Model/AccountProvider.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accounts()`

```php
accounts(): \blockmate\Model\Account[]
```
### URI(s):
- https://aisp-api.blockmate.io Call
List accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AggregatedInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->accounts($hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregatedInfoApi->accounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\Account[]**](../Model/Account.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `balance()`

```php
balance($currency): \blockmate\Model\Balance200Response
```
### URI(s):
- https://aisp-api.blockmate.io Call
Get balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AggregatedInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = USD; // string | Currency to convert to.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->balance($currency, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregatedInfoApi->balance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| Currency to convert to. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\Balance200Response**](../Model/Balance200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactions()`

```php
transactions($since, $until, $limit, $cursor, $currency, $account_filter): \blockmate\Model\Transactions200Response
```
### URI(s):
- https://aisp-api.blockmate.io Call
Get transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AggregatedInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$since = Wed Jan 01 01:00:00 CET 2020; // \DateTime | Set time from which the transactions will be get.
$until = Sat Feb 01 01:00:00 CET 2020; // \DateTime | Set time to which the transactions will be get. The default value is the actual date.
$limit = 10; // float | Limit the number of the transactions in the response. Default page size is 50.
$cursor = 'cursor_example'; // string | Specify on requesting the next page. Use the `page_cursor` from the previous response.
$currency = USD; // string | Currency to convert to.
$account_filter = 497f6eca-6276-4993-bfeb-53cbbbba6f08; // string | Filter results to only provided account. When omitted, it returns all transactions from all accounts.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->transactions($since, $until, $limit, $cursor, $currency, $account_filter, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregatedInfoApi->transactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **since** | **\DateTime**| Set time from which the transactions will be get. | [optional] |
| **until** | **\DateTime**| Set time to which the transactions will be get. The default value is the actual date. | [optional] |
| **limit** | **float**| Limit the number of the transactions in the response. Default page size is 50. | [optional] |
| **cursor** | **string**| Specify on requesting the next page. Use the &#x60;page_cursor&#x60; from the previous response. | [optional] |
| **currency** | **string**| Currency to convert to. | [optional] |
| **account_filter** | **string**| Filter results to only provided account. When omitted, it returns all transactions from all accounts. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\Transactions200Response**](../Model/Transactions200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
