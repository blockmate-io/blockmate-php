# blockmate\ExchangeRateInfoApi

All URIs are relative to https://api.blockmate.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCurrentExchangeRate()**](ExchangeRateInfoApi.md#getCurrentExchangeRate) | **GET** /v1/exchangerate/current | Get current exchange rate |
| [**getHistoricalExchangeRate()**](ExchangeRateInfoApi.md#getHistoricalExchangeRate) | **GET** /v1/exchangerate/history | Get historical exchange rate |


## `getCurrentExchangeRate()`

```php
getCurrentExchangeRate($pairs): \blockmate\Model\ExchangeRate[]
```

Get current exchange rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\ExchangeRateInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pairs = ETH/USD,BTC/EUR; // string | Currency pairs for which exchange rate should be returned (max 20 per request)

try {
    $result = $apiInstance->getCurrentExchangeRate($pairs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeRateInfoApi->getCurrentExchangeRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pairs** | **string**| Currency pairs for which exchange rate should be returned (max 20 per request) | |

### Return type

[**\blockmate\Model\ExchangeRate[]**](../Model/ExchangeRate.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricalExchangeRate()`

```php
getHistoricalExchangeRate($pair, $days): \blockmate\Model\ExchangeRate[]
```

Get historical exchange rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\ExchangeRateInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pair = ETH/USD; // string | Currency pair for which exchange rates should be returned
$days = 2022-06-30,2022-06-29; // string | Historical dates for which exchange rates should be returned (max 40 per request)

try {
    $result = $apiInstance->getHistoricalExchangeRate($pair, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeRateInfoApi->getHistoricalExchangeRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**| Currency pair for which exchange rates should be returned | |
| **days** | **string**| Historical dates for which exchange rates should be returned (max 40 per request) | |

### Return type

[**\blockmate\Model\ExchangeRate[]**](../Model/ExchangeRate.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
