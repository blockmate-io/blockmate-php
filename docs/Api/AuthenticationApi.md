# blockmate\AuthenticationApi

All URIs are relative to https://api.blockmate.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userAPIAuthenticateDeveloper()**](AuthenticationApi.md#userAPIAuthenticateDeveloper) | **GET** /v1/auth/developer | Authenticate developer |
| [**userAPIAuthenticateProject()**](AuthenticationApi.md#userAPIAuthenticateProject) | **GET** /v1/auth | Authenticate project |


## `userAPIAuthenticateDeveloper()`

```php
userAPIAuthenticateDeveloper(): \blockmate\Model\UserAPIAuthenticateProject200Response
```

Authenticate developer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userAPIAuthenticateDeveloper();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userAPIAuthenticateDeveloper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\blockmate\Model\UserAPIAuthenticateProject200Response**](../Model/UserAPIAuthenticateProject200Response.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userAPIAuthenticateProject()`

```php
userAPIAuthenticateProject(): \blockmate\Model\UserAPIAuthenticateProject200Response
```

Authenticate project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userAPIAuthenticateProject();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userAPIAuthenticateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\blockmate\Model\UserAPIAuthenticateProject200Response**](../Model/UserAPIAuthenticateProject200Response.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
