# blockmate\AddressNameAndCategoryInfoApi

All URIs are relative to https://api.blockmate.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressNameInfoMulti()**](AddressNameAndCategoryInfoApi.md#getAddressNameInfoMulti) | **POST** /v1/addressname/multi | Get address name and category info for multiple addresses |
| [**getAddressNameInfoSingle()**](AddressNameAndCategoryInfoApi.md#getAddressNameInfoSingle) | **GET** /v1/addressname/simple | Get address name and category info for single address |


## `getAddressNameInfoMulti()`

```php
getAddressNameInfoMulti($chain, $request_body): array<string,\blockmate\Model\GetAddressNameInfoMulti200ResponseValue>
```

Get address name and category info for multiple addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AddressNameAndCategoryInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain = btc; // string | Blockchain identifier
$request_body = array('request_body_example'); // string[] | Addresses for which name and category should be returned (maximum of 5000 in one request)

try {
    $result = $apiInstance->getAddressNameInfoMulti($chain, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressNameAndCategoryInfoApi->getAddressNameInfoMulti: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain** | **string**| Blockchain identifier | |
| **request_body** | [**string[]**](../Model/string.md)| Addresses for which name and category should be returned (maximum of 5000 in one request) | [optional] |

### Return type

[**array<string,\blockmate\Model\GetAddressNameInfoMulti200ResponseValue>**](../Model/GetAddressNameInfoMulti200ResponseValue.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressNameInfoSingle()`

```php
getAddressNameInfoSingle($address, $chain): \blockmate\Model\GetAddressNameInfoSingle200Response
```

Get address name and category info for single address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AddressNameAndCategoryInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = bc1qjl7k0dpcsw3djmzq25qv6peavgxysq95pcduuq; // string | Address for which name and category should be returned
$chain = btc; // string | Blockchain identifier

try {
    $result = $apiInstance->getAddressNameInfoSingle($address, $chain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressNameAndCategoryInfoApi->getAddressNameInfoSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Address for which name and category should be returned | |
| **chain** | **string**| Blockchain identifier | |

### Return type

[**\blockmate\Model\GetAddressNameInfoSingle200Response**](../Model/GetAddressNameInfoSingle200Response.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
