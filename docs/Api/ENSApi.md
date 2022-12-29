# blockmate\ENSApi

All URIs are relative to https://api.blockmate.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressFromDomain()**](ENSApi.md#getAddressFromDomain) | **GET** /v1/ens/addressFromDomain | Get address for specified ENS domain |
| [**getDomainFromAddress()**](ENSApi.md#getDomainFromAddress) | **GET** /v1/ens/domainFromAddress | Get domain and metadata for specified ENS address |


## `getAddressFromDomain()`

```php
getAddressFromDomain($domain): \blockmate\Model\GetAddressFromDomain200Response
```

Get address for specified ENS domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\ENSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = alice.eth; // string | ENS domain for which Ethereum address should be returned

try {
    $result = $apiInstance->getAddressFromDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ENSApi->getAddressFromDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| ENS domain for which Ethereum address should be returned | |

### Return type

[**\blockmate\Model\GetAddressFromDomain200Response**](../Model/GetAddressFromDomain200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainFromAddress()`

```php
getDomainFromAddress($address): \blockmate\Model\GetDomainFromAddress200Response
```

Get domain and metadata for specified ENS address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\ENSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 0xcd2e72aebe2a203b84f46deec948e6465db51c75; // string | Ethereum address for which domain and metadata should be returned

try {
    $result = $apiInstance->getDomainFromAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ENSApi->getDomainFromAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Ethereum address for which domain and metadata should be returned | |

### Return type

[**\blockmate\Model\GetDomainFromAddress200Response**](../Model/GetDomainFromAddress200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
