# blockmate\UserManagementApi

All URIs are relative to https://api.blockmate.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authUser()**](UserManagementApi.md#authUser) | **GET** /v1/users/{id}/auth | Authenticate user |
| [**createUser()**](UserManagementApi.md#createUser) | **POST** /v1/users | Create user |
| [**deleteUser()**](UserManagementApi.md#deleteUser) | **DELETE** /v1/users/{id} | Delete user |
| [**getUser()**](UserManagementApi.md#getUser) | **GET** /v1/users/{id} | Get user |
| [**listUsers()**](UserManagementApi.md#listUsers) | **GET** /v1/users | List users |
| [**updateUser()**](UserManagementApi.md#updateUser) | **POST** /v1/users/{id} | Update user |


## `authUser()`

```php
authUser($id): \blockmate\Model\AuthUser200Response
```

Authenticate user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4301140e-d639-11ec-9120-00155d03ab64; // string | User id

try {
    $result = $apiInstance->authUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->authUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User id | |

### Return type

[**\blockmate\Model\AuthUser200Response**](../Model/AuthUser200Response.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($create_user_request): \blockmate\Model\User
```

Create user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_user_request = new \blockmate\Model\CreateUserRequest(); // \blockmate\Model\CreateUserRequest | User

try {
    $result = $apiInstance->createUser($create_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_user_request** | [**\blockmate\Model\CreateUserRequest**](../Model/CreateUserRequest.md)| User | [optional] |

### Return type

[**\blockmate\Model\User**](../Model/User.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($id): \blockmate\Model\DeleteUser200Response
```

Delete user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4301140e-d639-11ec-9120-00155d03ab64; // string | User id

try {
    $result = $apiInstance->deleteUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User id | |

### Return type

[**\blockmate\Model\DeleteUser200Response**](../Model/DeleteUser200Response.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($id): \blockmate\Model\User
```

Get user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4301140e-d639-11ec-9120-00155d03ab64; // string | User id

try {
    $result = $apiInstance->getUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User id | |

### Return type

[**\blockmate\Model\User**](../Model/User.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers(): \blockmate\Model\User[]
```

List users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\blockmate\Model\User[]**](../Model/User.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($id, $create_user_request): \blockmate\Model\User
```

Update user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4301140e-d639-11ec-9120-00155d03ab64; // string | User id
$create_user_request = new \blockmate\Model\CreateUserRequest(); // \blockmate\Model\CreateUserRequest | User

try {
    $result = $apiInstance->updateUser($id, $create_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User id | |
| **create_user_request** | [**\blockmate\Model\CreateUserRequest**](../Model/CreateUserRequest.md)| User | [optional] |

### Return type

[**\blockmate\Model\User**](../Model/User.md)

### Authorization

[ProjectToken](../../README.md#ProjectToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
