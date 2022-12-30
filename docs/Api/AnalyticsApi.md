# blockmate\AnalyticsApi

All URIs are relative to https://api.blockmate.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAnalytics()**](AnalyticsApi.md#getAnalytics) | **GET** /v1/analytics/{account_provider}/account/{account_id}/stats | Get analytics focused on gaming |


## `getAnalytics()`

```php
getAnalytics($account_provider, $account_id): \blockmate\Model\GetAnalytics200Response
```

Get analytics focused on gaming

Get analytics focused on gaming. All empty values are omitted from the response. Values are recalculated once per day.

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
    $result = $apiInstance->getAnalytics($account_provider, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_provider** | **string**| URL value from account_providers method | |
| **account_id** | **string**| Account ID | |

### Return type

[**\blockmate\Model\GetAnalytics200Response**](../Model/GetAnalytics200Response.md)

### Authorization

[UserJWT](../../README.md#UserJWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
