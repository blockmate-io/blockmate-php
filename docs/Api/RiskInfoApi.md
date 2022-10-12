# blockmate\RiskInfoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressRiskScore()**](RiskInfoApi.md#getAddressRiskScore) | **GET** /v1/risk/score | Get address risk score |
| [**getAddressRiskScoreCase()**](RiskInfoApi.md#getAddressRiskScoreCase) | **GET** /v1/risk/score/details/{case_id} | Get address risk score case |
| [**getAddressRiskScoreDetails()**](RiskInfoApi.md#getAddressRiskScoreDetails) | **GET** /v1/risk/score/details | Get address risk score details |
| [**getTransactionRiskScore()**](RiskInfoApi.md#getTransactionRiskScore) | **GET** /v1/risk/transaction/score | Get transaction risk score |
| [**getTransactionRiskScoreCase()**](RiskInfoApi.md#getTransactionRiskScoreCase) | **GET** /v1/risk/transaction/score/details/{case_id} | Get transaction risk score case |
| [**getTransactionRiskScoreDetails()**](RiskInfoApi.md#getTransactionRiskScoreDetails) | **GET** /v1/risk/transaction/score/details | Get transaction risk score details |


## `getAddressRiskScore()`

```php
getAddressRiskScore($address, $chain): \blockmate\Model\GetAddressRiskScore200Response
```
### URI(s):
- https://risk-api.blockmate.io Call
Get address risk score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = bc1qjl7k0dpcsw3djmzq25qv6peavgxysq95pcduuq; // string | Address for which risk should be returned
$chain = btc; // string | Blockchain identifier

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getAddressRiskScore($address, $chain, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getAddressRiskScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Address for which risk should be returned | [optional] |
| **chain** | **string**| Blockchain identifier | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\GetAddressRiskScore200Response**](../Model/GetAddressRiskScore200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressRiskScoreCase()`

```php
getAddressRiskScoreCase($case_id): \blockmate\Model\AddressRiskReport
```
### URI(s):
- https://risk-api.blockmate.io Call
Get address risk score case

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$case_id = 7c656013-5e9b-4c71-8322-6562c5a9b34c; // string | Case identifier

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getAddressRiskScoreCase($case_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getAddressRiskScoreCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **case_id** | **string**| Case identifier | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\AddressRiskReport**](../Model/AddressRiskReport.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressRiskScoreDetails()`

```php
getAddressRiskScoreDetails($address, $chain): \blockmate\Model\AddressRiskReport
```
### URI(s):
- https://risk-api.blockmate.io Call
Get address risk score details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = bc1qjl7k0dpcsw3djmzq25qv6peavgxysq95pcduuq; // string | Address for which risk should be returned
$chain = btc; // string | Blockchain identifier

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getAddressRiskScoreDetails($address, $chain, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getAddressRiskScoreDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Address for which risk should be returned | [optional] |
| **chain** | **string**| Blockchain identifier | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\AddressRiskReport**](../Model/AddressRiskReport.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionRiskScore()`

```php
getTransactionRiskScore($transaction, $chain): \blockmate\Model\GetTransactionRiskScore200Response
```
### URI(s):
- https://risk-api.blockmate.io Call
Get transaction risk score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction = 0638e15482e9d0fdb08920666390a546f32dd6ab15ffc81ed97e67b73b0d7205; // string | Transaction hash for which risk should be returned
$chain = btc; // string | Blockchain identifier

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getTransactionRiskScore($transaction, $chain, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getTransactionRiskScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction** | **string**| Transaction hash for which risk should be returned | [optional] |
| **chain** | **string**| Blockchain identifier | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\GetTransactionRiskScore200Response**](../Model/GetTransactionRiskScore200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionRiskScoreCase()`

```php
getTransactionRiskScoreCase($case_id): \blockmate\Model\TransactionRiskReport
```
### URI(s):
- https://risk-api.blockmate.io Call
Get transaction risk score case

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$case_id = 7149168f-ad69-4fc9-b027-a16b0ca13081; // string | Case identifier

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getTransactionRiskScoreCase($case_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getTransactionRiskScoreCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **case_id** | **string**| Case identifier | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\TransactionRiskReport**](../Model/TransactionRiskReport.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionRiskScoreDetails()`

```php
getTransactionRiskScoreDetails($transaction, $chain): \blockmate\Model\TransactionRiskReport
```
### URI(s):
- https://risk-api.blockmate.io Call
Get transaction risk score details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction = 0638e15482e9d0fdb08920666390a546f32dd6ab15ffc81ed97e67b73b0d7205; // string | Transaction hash for which risk should be returned
$chain = btc; // string | Blockchain identifier

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getTransactionRiskScoreDetails($transaction, $chain, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getTransactionRiskScoreDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction** | **string**| Transaction hash for which risk should be returned | [optional] |
| **chain** | **string**| Blockchain identifier | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\TransactionRiskReport**](../Model/TransactionRiskReport.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
