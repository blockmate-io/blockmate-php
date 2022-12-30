<?php
/**
 * AnalyticsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  blockmate
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blockmate
 *
 * Blockmate API OpenAPI documentation
 *
 * The version of the OpenAPI document: 0.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace blockmate\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use blockmate\ApiException;
use blockmate\Configuration;
use blockmate\HeaderSelector;
use blockmate\ObjectSerializer;

/**
 * AnalyticsApi Class Doc Comment
 *
 * @category Class
 * @package  blockmate
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AnalyticsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAnalytics
     *
     * Get analytics focused on gaming
     *
     * @param  string $account_provider URL value from account_providers method (required)
     * @param  string $account_id Account ID (required)
     *
     * @throws \blockmate\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \blockmate\Model\GetAnalytics200Response|\blockmate\Model\UserAPIAuthenticateProject400Response|\blockmate\Model\UserAPIAuthenticateProject401Response
     */
    public function getAnalytics($account_provider, $account_id)
    {
        list($response) = $this->getAnalyticsWithHttpInfo($account_provider, $account_id);
        return $response;
    }

    /**
     * Operation getAnalyticsWithHttpInfo
     *
     * Get analytics focused on gaming
     *
     * @param  string $account_provider URL value from account_providers method (required)
     * @param  string $account_id Account ID (required)
     *
     * @throws \blockmate\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \blockmate\Model\GetAnalytics200Response|\blockmate\Model\UserAPIAuthenticateProject400Response|\blockmate\Model\UserAPIAuthenticateProject401Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAnalyticsWithHttpInfo($account_provider, $account_id)
    {
        $request = $this->getAnalyticsRequest($account_provider, $account_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
            
                case 200:
                    if ('\blockmate\Model\GetAnalytics200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\blockmate\Model\GetAnalytics200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\blockmate\Model\GetAnalytics200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
            
                case 400:
                    if ('\blockmate\Model\UserAPIAuthenticateProject400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\blockmate\Model\UserAPIAuthenticateProject400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\blockmate\Model\UserAPIAuthenticateProject400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 401:
                    if ('\blockmate\Model\UserAPIAuthenticateProject401Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\blockmate\Model\UserAPIAuthenticateProject401Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\blockmate\Model\UserAPIAuthenticateProject401Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            }

            $returnType = '\blockmate\Model\GetAnalytics200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\blockmate\Model\GetAnalytics200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
            
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\blockmate\Model\UserAPIAuthenticateProject400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\blockmate\Model\UserAPIAuthenticateProject401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            }
            throw $e;
        }
    }

    /**
     * Operation getAnalyticsAsync
     *
     * Get analytics focused on gaming
     *
     * @param  string $account_provider URL value from account_providers method (required)
     * @param  string $account_id Account ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAnalyticsAsync($account_provider, $account_id)
    {
        return $this->getAnalyticsAsyncWithHttpInfo($account_provider, $account_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAnalyticsAsyncWithHttpInfo
     *
     * Get analytics focused on gaming
     *
     * @param  string $account_provider URL value from account_providers method (required)
     * @param  string $account_id Account ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAnalyticsAsyncWithHttpInfo($account_provider, $account_id)
    {
        $returnType = '\blockmate\Model\GetAnalytics200Response';
        $request = $this->getAnalyticsRequest($account_provider, $account_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAnalytics'
     *
     * @param  string $account_provider URL value from account_providers method (required)
     * @param  string $account_id Account ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAnalyticsRequest($account_provider, $account_id)
    {

        // verify the required parameter 'account_provider' is set
        if ($account_provider === null || (is_array($account_provider) && count($account_provider) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_provider when calling getAnalytics'
            );
        }

        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling getAnalytics'
            );
        }

        $resourcePath = '/v1/analytics/{account_provider}/account/{account_id}/stats';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account_provider !== null) {
            $resourcePath = str_replace(
                '{' . 'account_provider' . '}',
                ObjectSerializer::toPathValue($account_provider),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'account_id' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
