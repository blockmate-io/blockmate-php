# blockmate

Blockmate API OpenAPI documentation


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/blockmate/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ProjectToken
$config = blockmate\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = blockmate\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new blockmate\Api\AccountProviderInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_provider = onchain/btc; // string | URL value from account_providers method
$connect_account_request = new \blockmate\Model\ConnectAccountRequest(); // \blockmate\Model\ConnectAccountRequest | OK

try {
    $result = $apiInstance->connectAccount($account_provider, $connect_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountProviderInfoApi->connectAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.blockmate.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountProviderInfoApi* | [**connectAccount**](docs/Api/AccountProviderInfoApi.md#connectaccount) | **POST** /v1/{account_provider}/connect | Connect new account
*AccountProviderInfoApi* | [**deleteAccount**](docs/Api/AccountProviderInfoApi.md#deleteaccount) | **DELETE** /v1/{account_provider}/account/{account_id} | Delete account
*AccountProviderInfoApi* | [**getAccountHint**](docs/Api/AccountProviderInfoApi.md#getaccounthint) | **GET** /v1/{account_provider}/connect | Get account hint
*AddressNameAndCategoryInfoApi* | [**getAddressNameInfoMulti**](docs/Api/AddressNameAndCategoryInfoApi.md#getaddressnameinfomulti) | **POST** /v1/addressname/multi | Get address name and category info for multiple addresses
*AddressNameAndCategoryInfoApi* | [**getAddressNameInfoSingle**](docs/Api/AddressNameAndCategoryInfoApi.md#getaddressnameinfosingle) | **GET** /v1/addressname/simple | Get address name and category info for single address
*AggregatedInfoApi* | [**accountProviderHintsList**](docs/Api/AggregatedInfoApi.md#accountproviderhintslist) | **GET** /v1/aggregate/account_provider_hints | Get list of account providers hints
*AggregatedInfoApi* | [**accountProvidersList**](docs/Api/AggregatedInfoApi.md#accountproviderslist) | **GET** /v1/aggregate/account_providers | Get list of account providers
*AggregatedInfoApi* | [**accounts**](docs/Api/AggregatedInfoApi.md#accounts) | **GET** /v1/aggregate/accounts | List accounts
*AggregatedInfoApi* | [**balance**](docs/Api/AggregatedInfoApi.md#balance) | **GET** /v1/aggregate/balance | Get balance
*AggregatedInfoApi* | [**nFTMetadata**](docs/Api/AggregatedInfoApi.md#nftmetadata) | **GET** /v1/aggregate/nft_metadata | Get NFT metadata
*AggregatedInfoApi* | [**transactions**](docs/Api/AggregatedInfoApi.md#transactions) | **GET** /v1/aggregate/transactions | Get transactions
*AnalyticsApi* | [**getAccountAnalytics**](docs/Api/AnalyticsApi.md#getaccountanalytics) | **GET** /v1/analytics/{account_provider}/account/{account_id}/stats | Get analytics focused on gaming for specified account and provider
*AnalyticsApi* | [**getProjectAnalytics**](docs/Api/AnalyticsApi.md#getprojectanalytics) | **GET** /v1/analytics/project/stats | Get analytics focused on gaming for whole project
*AnalyticsApi* | [**getProviderAnalytics**](docs/Api/AnalyticsApi.md#getprovideranalytics) | **GET** /v1/analytics/{account_provider}/stats | Get analytics focused on gaming for specified provider
*AnalyticsApi* | [**getUserAnalytics**](docs/Api/AnalyticsApi.md#getuseranalytics) | **GET** /v1/analytics/user/stats | Get analytics focused on gaming for this user
*AuthenticationApi* | [**userAPIAuthenticateDeveloper**](docs/Api/AuthenticationApi.md#userapiauthenticatedeveloper) | **GET** /v1/auth/developer | Authenticate developer
*AuthenticationApi* | [**userAPIAuthenticateProject**](docs/Api/AuthenticationApi.md#userapiauthenticateproject) | **GET** /v1/auth | Authenticate project
*ENSApi* | [**getAddressFromDomain**](docs/Api/ENSApi.md#getaddressfromdomain) | **GET** /v1/ens/addressFromDomain | Get address for specified ENS domain
*ENSApi* | [**getDomainFromAddress**](docs/Api/ENSApi.md#getdomainfromaddress) | **GET** /v1/ens/domainFromAddress | Get domain and metadata for specified ENS address
*ExchangeRateInfoApi* | [**getCurrentExchangeRate**](docs/Api/ExchangeRateInfoApi.md#getcurrentexchangerate) | **GET** /v1/exchangerate/current | Get current exchange rate
*ExchangeRateInfoApi* | [**getHistoricalExchangeRate**](docs/Api/ExchangeRateInfoApi.md#gethistoricalexchangerate) | **GET** /v1/exchangerate/history | Get historical exchange rate
*RiskInfoApi* | [**getAddressRiskScore**](docs/Api/RiskInfoApi.md#getaddressriskscore) | **GET** /v1/risk/score | Get address risk score
*RiskInfoApi* | [**getAddressRiskScoreCase**](docs/Api/RiskInfoApi.md#getaddressriskscorecase) | **GET** /v1/risk/score/details/{case_id} | Get address risk score case
*RiskInfoApi* | [**getAddressRiskScoreDetails**](docs/Api/RiskInfoApi.md#getaddressriskscoredetails) | **GET** /v1/risk/score/details | Get address risk score details
*RiskInfoApi* | [**getTransactionRiskScore**](docs/Api/RiskInfoApi.md#gettransactionriskscore) | **GET** /v1/risk/transaction/score | Get transaction risk score
*RiskInfoApi* | [**getTransactionRiskScoreCase**](docs/Api/RiskInfoApi.md#gettransactionriskscorecase) | **GET** /v1/risk/transaction/score/details/{case_id} | Get transaction risk score case
*RiskInfoApi* | [**getTransactionRiskScoreDetails**](docs/Api/RiskInfoApi.md#gettransactionriskscoredetails) | **GET** /v1/risk/transaction/score/details | Get transaction risk score details
*UserManagementApi* | [**authUser**](docs/Api/UserManagementApi.md#authuser) | **GET** /v1/users/{id}/auth | Authenticate user
*UserManagementApi* | [**createUser**](docs/Api/UserManagementApi.md#createuser) | **POST** /v1/users | Create user
*UserManagementApi* | [**deleteUser**](docs/Api/UserManagementApi.md#deleteuser) | **DELETE** /v1/users/{id} | Delete user
*UserManagementApi* | [**getUser**](docs/Api/UserManagementApi.md#getuser) | **GET** /v1/users/{id} | Get user
*UserManagementApi* | [**listUsers**](docs/Api/UserManagementApi.md#listusers) | **GET** /v1/users | List users
*UserManagementApi* | [**updateUser**](docs/Api/UserManagementApi.md#updateuser) | **POST** /v1/users/{id} | Update user

## Models

- [Account](docs/Model/Account.md)
- [AccountProvider](docs/Model/AccountProvider.md)
- [AccountProviderHint](docs/Model/AccountProviderHint.md)
- [AccountProviderHintFields](docs/Model/AccountProviderHintFields.md)
- [AddressRiskReport](docs/Model/AddressRiskReport.md)
- [AddressRiskReportDetails](docs/Model/AddressRiskReportDetails.md)
- [Amount](docs/Model/Amount.md)
- [Analytics](docs/Model/Analytics.md)
- [Analytics1](docs/Model/Analytics1.md)
- [AuthUser200Response](docs/Model/AuthUser200Response.md)
- [Balance200Response](docs/Model/Balance200Response.md)
- [BalanceResponse](docs/Model/BalanceResponse.md)
- [BalanceResponseAccountsInner](docs/Model/BalanceResponseAccountsInner.md)
- [BalanceResponseAccountsInnerState](docs/Model/BalanceResponseAccountsInnerState.md)
- [ConnectAccount200Response](docs/Model/ConnectAccount200Response.md)
- [ConnectAccount400Response](docs/Model/ConnectAccount400Response.md)
- [ConnectAccount405Response](docs/Model/ConnectAccount405Response.md)
- [ConnectAccountRequest](docs/Model/ConnectAccountRequest.md)
- [CreateUserRequest](docs/Model/CreateUserRequest.md)
- [DeleteAccount404Response](docs/Model/DeleteAccount404Response.md)
- [DeleteUser200Response](docs/Model/DeleteUser200Response.md)
- [DeleteUser404Response](docs/Model/DeleteUser404Response.md)
- [ExchangeRate](docs/Model/ExchangeRate.md)
- [GetAccountHint200Response](docs/Model/GetAccountHint200Response.md)
- [GetAccountHint200ResponseFields](docs/Model/GetAccountHint200ResponseFields.md)
- [GetAccountHint403Response](docs/Model/GetAccountHint403Response.md)
- [GetAccountHint404Response](docs/Model/GetAccountHint404Response.md)
- [GetAddressFromDomain200Response](docs/Model/GetAddressFromDomain200Response.md)
- [GetAddressNameInfoSingle200Response](docs/Model/GetAddressNameInfoSingle200Response.md)
- [GetAddressRiskScore200Response](docs/Model/GetAddressRiskScore200Response.md)
- [GetDomainFromAddress200Response](docs/Model/GetDomainFromAddress200Response.md)
- [GetDomainFromAddress200ResponseMetadata](docs/Model/GetDomainFromAddress200ResponseMetadata.md)
- [GetDomainFromAddress200ResponseMetadataAttributesInner](docs/Model/GetDomainFromAddress200ResponseMetadataAttributesInner.md)
- [GetDomainFromAddress200ResponseMetadataAttributesInnerValue](docs/Model/GetDomainFromAddress200ResponseMetadataAttributesInnerValue.md)
- [GetTransactionRiskScore200Response](docs/Model/GetTransactionRiskScore200Response.md)
- [GetUser404Response](docs/Model/GetUser404Response.md)
- [Metadata](docs/Model/Metadata.md)
- [MetadataAttributesInner](docs/Model/MetadataAttributesInner.md)
- [Movement](docs/Model/Movement.md)
- [NFTMetadata200ResponseValue](docs/Model/NFTMetadata200ResponseValue.md)
- [NftContractMetadata](docs/Model/NftContractMetadata.md)
- [NftId](docs/Model/NftId.md)
- [NftIdTokenMetadata](docs/Model/NftIdTokenMetadata.md)
- [NftMedia](docs/Model/NftMedia.md)
- [NftSpamInfo](docs/Model/NftSpamInfo.md)
- [NftTokenUri](docs/Model/NftTokenUri.md)
- [OwnedNft](docs/Model/OwnedNft.md)
- [OwnedNftContract](docs/Model/OwnedNftContract.md)
- [OwnedNftMedia](docs/Model/OwnedNftMedia.md)
- [RiskReportCategory](docs/Model/RiskReportCategory.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionRiskReport](docs/Model/TransactionRiskReport.md)
- [Transactions200Response](docs/Model/Transactions200Response.md)
- [Transactions200ResponseAccountsInner](docs/Model/Transactions200ResponseAccountsInner.md)
- [User](docs/Model/User.md)
- [UserAPIAuthenticateProject200Response](docs/Model/UserAPIAuthenticateProject200Response.md)
- [UserAPIAuthenticateProject400Response](docs/Model/UserAPIAuthenticateProject400Response.md)
- [UserAPIAuthenticateProject401Response](docs/Model/UserAPIAuthenticateProject401Response.md)

## Authorization

### ProjectJWT

- **Type**: Bearer authentication (JWT)


### ProjectToken

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header



### UserJWT

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
