# blockmate\RiskInfoApi

All URIs are relative to https://api.blockmate.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressRiskScore()**](RiskInfoApi.md#getAddressRiskScore) | **GET** /v1/risk/score | Get address risk score |
| [**getAddressRiskScoreCase()**](RiskInfoApi.md#getAddressRiskScoreCase) | **GET** /v1/risk/score/details/{case_id} | Get address risk score case |
| [**getAddressRiskScoreDetails()**](RiskInfoApi.md#getAddressRiskScoreDetails) | **GET** /v1/risk/score/details | Get address risk score details |
| [**getMultipleAddressRiskScore()**](RiskInfoApi.md#getMultipleAddressRiskScore) | **POST** /v1/risk/score | Get multiple risk scores for addresses |
| [**getTransactionRiskScore()**](RiskInfoApi.md#getTransactionRiskScore) | **GET** /v1/risk/transaction/score | Get transaction risk score |
| [**getTransactionRiskScoreCase()**](RiskInfoApi.md#getTransactionRiskScoreCase) | **GET** /v1/risk/transaction/score/details/{case_id} | Get transaction risk score case |
| [**getTransactionRiskScoreDetails()**](RiskInfoApi.md#getTransactionRiskScoreDetails) | **GET** /v1/risk/transaction/score/details | Get transaction risk score details |


## `getAddressRiskScore()`

```php
getAddressRiskScore($address, $chain): \blockmate\Model\GetAddressRiskScore200Response
```

Get address risk score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

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

try {
    $result = $apiInstance->getAddressRiskScore($address, $chain);
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

### Return type

[**\blockmate\Model\GetAddressRiskScore200Response**](../Model/GetAddressRiskScore200Response.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

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

Get address risk score case

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$case_id = 7c656013-5e9b-4c71-8322-6562c5a9b34c; // string | Case identifier

try {
    $result = $apiInstance->getAddressRiskScoreCase($case_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getAddressRiskScoreCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **case_id** | **string**| Case identifier | |

### Return type

[**\blockmate\Model\AddressRiskReport**](../Model/AddressRiskReport.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

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

Get address risk score details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

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

try {
    $result = $apiInstance->getAddressRiskScoreDetails($address, $chain);
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

### Return type

[**\blockmate\Model\AddressRiskReport**](../Model/AddressRiskReport.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMultipleAddressRiskScore()`

```php
getMultipleAddressRiskScore($chain, $request_body): array<string,int>
```

Get multiple risk scores for addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain = btc; // string | Blockchain identifier
$request_body = array('request_body_example'); // string[] | Addresses for which risk should be returned (maximum of 5000 in one request)

try {
    $result = $apiInstance->getMultipleAddressRiskScore($chain, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getMultipleAddressRiskScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain** | **string**| Blockchain identifier | [optional] |
| **request_body** | [**string[]**](../Model/string.md)| Addresses for which risk should be returned (maximum of 5000 in one request) | [optional] |

### Return type

**array<string,int>**

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionRiskScore()`

```php
getTransactionRiskScore($transaction, $chain): \blockmate\Model\GetTransactionRiskScore200Response
```

Get transaction risk score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

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

try {
    $result = $apiInstance->getTransactionRiskScore($transaction, $chain);
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

### Return type

[**\blockmate\Model\GetTransactionRiskScore200Response**](../Model/GetTransactionRiskScore200Response.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

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

Get transaction risk score case

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\RiskInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$case_id = 7149168f-ad69-4fc9-b027-a16b0ca13081; // string | Case identifier

try {
    $result = $apiInstance->getTransactionRiskScoreCase($case_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskInfoApi->getTransactionRiskScoreCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **case_id** | **string**| Case identifier | |

### Return type

[**\blockmate\Model\TransactionRiskReport**](../Model/TransactionRiskReport.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

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

Get transaction risk score details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

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

try {
    $result = $apiInstance->getTransactionRiskScoreDetails($transaction, $chain);
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

### Return type

[**\blockmate\Model\TransactionRiskReport**](../Model/TransactionRiskReport.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
