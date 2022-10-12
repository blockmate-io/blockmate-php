# blockmate\AddressNameAndCategoryInfoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressNameInfo()**](AddressNameAndCategoryInfoApi.md#getAddressNameInfo) | **GET** /v1/addressname/simple | Get address name and category info |


## `getAddressNameInfo()`

```php
getAddressNameInfo($address, $chain): \blockmate\Model\GetAddressNameInfo200Response
```
### URI(s):
- https://data-api.blockmate.io Call
Get address name and category info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AddressNameAndCategoryInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = bc1qjl7k0dpcsw3djmzq25qv6peavgxysq95pcduuq; // string | Address for wich name and category should be returned
$chain = btc; // string | Blockchain identifier

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getAddressNameInfo($address, $chain, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressNameAndCategoryInfoApi->getAddressNameInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Address for wich name and category should be returned | |
| **chain** | **string**| Blockchain identifier | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\blockmate\Model\GetAddressNameInfo200Response**](../Model/GetAddressNameInfo200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
