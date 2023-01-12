# blockmate\AnalyticsApi

All URIs are relative to https://api.blockmate.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccountAnalytics()**](AnalyticsApi.md#getAccountAnalytics) | **GET** /v1/analytics/{account_provider}/account/{account_id}/stats | Get analytics focused on gaming for specified account and provider |
| [**getProjectAnalytics()**](AnalyticsApi.md#getProjectAnalytics) | **GET** /v1/analytics/project/stats | Get analytics focused on gaming for whole project |
| [**getProviderAnalytics()**](AnalyticsApi.md#getProviderAnalytics) | **GET** /v1/analytics/{account_provider}/stats | Get analytics focused on gaming for specified provider |
| [**getUserAnalytics()**](AnalyticsApi.md#getUserAnalytics) | **GET** /v1/analytics/user/stats | Get analytics focused on gaming for this user |


## `getAccountAnalytics()`

```php
getAccountAnalytics($account_provider, $account_id): \blockmate\Model\Analytics
```

Get analytics focused on gaming for specified account and provider

Get analytics focused on gaming for specified account and provider. All empty values are omitted from the response. Values are recalculated once per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_provider = onchain/btc; // string | URL value from account_providers method
$account_id = 163b6df1-dc0b-4086-8922-6068fe1e653d; // string | Account ID

try {
    $result = $apiInstance->getAccountAnalytics($account_provider, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAccountAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_provider** | **string**| URL value from account_providers method | |
| **account_id** | **string**| Account ID | |

### Return type

[**\blockmate\Model\Analytics**](../Model/Analytics.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectAnalytics()`

```php
getProjectAnalytics(): array<string,\blockmate\Model\Analytics>
```

Get analytics focused on gaming for whole project

Get analytics focused on gaming for whole project. All empty values are omitted from the response. Values are recalculated once per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: ProjectJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProjectAnalytics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getProjectAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**array<string,\blockmate\Model\Analytics>**](../Model/Analytics.md)

### Authorization

[ProjectJWT](../../README.md#ProjectJWT), [UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderAnalytics()`

```php
getProviderAnalytics($account_provider): array<string,\blockmate\Model\Analytics>
```

Get analytics focused on gaming for specified provider

Get analytics focused on gaming for specified provider. All empty values are omitted from the response. Values are recalculated once per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_provider = onchain/btc; // string | URL value from account_providers method

try {
    $result = $apiInstance->getProviderAnalytics($account_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getProviderAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_provider** | **string**| URL value from account_providers method | |

### Return type

[**array<string,\blockmate\Model\Analytics>**](../Model/Analytics.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAnalytics()`

```php
getUserAnalytics(): array<string,\blockmate\Model\Analytics>
```

Get analytics focused on gaming for this user

Get analytics focused on gaming for this user. All empty values are omitted from the response. Values are recalculated once per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: UserJWT
$config = blockmate\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new blockmate\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserAnalytics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getUserAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**array<string,\blockmate\Model\Analytics>**](../Model/Analytics.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
