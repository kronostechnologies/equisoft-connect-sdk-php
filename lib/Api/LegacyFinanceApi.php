<?php
/**
 * LegacyFinanceApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Equisoft /connect API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\EquisoftConnect\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Equisoft\SDK\EquisoftConnect\ApiException;
use Equisoft\SDK\EquisoftConnect\Configuration;
use Equisoft\SDK\EquisoftConnect\HeaderSelector;
use Equisoft\SDK\EquisoftConnect\ObjectSerializer;

/**
 * LegacyFinanceApi Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LegacyFinanceApi
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
     * Operation getAccountStatement
     *
     * Get Account Statement information for a contact.
     *
     * @param  int $contactId Contact Id (required)
     * @param  bool $includeUnmanagedAssets Include unmagned assets, by default false (optional)
     *
     * @throws \Equisoft\SDK\EquisoftConnect\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse|\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse|\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
     */
    public function getAccountStatement($contactId, $includeUnmanagedAssets = null)
    {
        list($response) = $this->getAccountStatementWithHttpInfo($contactId, $includeUnmanagedAssets);
        return $response;
    }

    /**
     * Operation getAccountStatementWithHttpInfo
     *
     * Get Account Statement information for a contact.
     *
     * @param  int $contactId Contact Id (required)
     * @param  bool $includeUnmanagedAssets Include unmagned assets, by default false (optional)
     *
     * @throws \Equisoft\SDK\EquisoftConnect\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse|\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse|\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountStatementWithHttpInfo($contactId, $includeUnmanagedAssets = null)
    {
        $request = $this->getAccountStatementRequest($contactId, $includeUnmanagedAssets);

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
                    if ('\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAccountStatementAsync
     *
     * Get Account Statement information for a contact.
     *
     * @param  int $contactId Contact Id (required)
     * @param  bool $includeUnmanagedAssets Include unmagned assets, by default false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountStatementAsync($contactId, $includeUnmanagedAssets = null)
    {
        return $this->getAccountStatementAsyncWithHttpInfo($contactId, $includeUnmanagedAssets)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccountStatementAsyncWithHttpInfo
     *
     * Get Account Statement information for a contact.
     *
     * @param  int $contactId Contact Id (required)
     * @param  bool $includeUnmanagedAssets Include unmagned assets, by default false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountStatementAsyncWithHttpInfo($contactId, $includeUnmanagedAssets = null)
    {
        $returnType = '\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse';
        $request = $this->getAccountStatementRequest($contactId, $includeUnmanagedAssets);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'getAccountStatement'
     *
     * @param  int $contactId Contact Id (required)
     * @param  bool $includeUnmanagedAssets Include unmagned assets, by default false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAccountStatementRequest($contactId, $includeUnmanagedAssets = null)
    {
        // verify the required parameter 'contactId' is set
        if ($contactId === null || (is_array($contactId) && count($contactId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $contactId when calling getAccountStatement'
            );
        }

        $resourcePath = '/apps/api/kronos.finance.getAccountStatement';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($contactId !== null) {
            if('form' === 'form' && is_array($contactId)) {
                foreach($contactId as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['contact_id'] = ObjectSerializer::toString($contactId);
            }
        }
        // query params
        if ($includeUnmanagedAssets !== null) {
            if('form' === 'form' && is_array($includeUnmanagedAssets)) {
                foreach($includeUnmanagedAssets as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['include_unmanaged_assets'] = ObjectSerializer::toString($includeUnmanagedAssets);
            }
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getLiabilities
     *
     * Get Liabilities information for a contact.
     *
     * @param  int $contactId Contact Id (required)
     *
     * @throws \Equisoft\SDK\EquisoftConnect\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse|\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse|\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
     */
    public function getLiabilities($contactId)
    {
        list($response) = $this->getLiabilitiesWithHttpInfo($contactId);
        return $response;
    }

    /**
     * Operation getLiabilitiesWithHttpInfo
     *
     * Get Liabilities information for a contact.
     *
     * @param  int $contactId Contact Id (required)
     *
     * @throws \Equisoft\SDK\EquisoftConnect\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse|\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse|\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLiabilitiesWithHttpInfo($contactId)
    {
        $request = $this->getLiabilitiesRequest($contactId);

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
                    if ('\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLiabilitiesAsync
     *
     * Get Liabilities information for a contact.
     *
     * @param  int $contactId Contact Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLiabilitiesAsync($contactId)
    {
        return $this->getLiabilitiesAsyncWithHttpInfo($contactId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLiabilitiesAsyncWithHttpInfo
     *
     * Get Liabilities information for a contact.
     *
     * @param  int $contactId Contact Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLiabilitiesAsyncWithHttpInfo($contactId)
    {
        $returnType = '\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse';
        $request = $this->getLiabilitiesRequest($contactId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'getLiabilities'
     *
     * @param  int $contactId Contact Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLiabilitiesRequest($contactId)
    {
        // verify the required parameter 'contactId' is set
        if ($contactId === null || (is_array($contactId) && count($contactId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $contactId when calling getLiabilities'
            );
        }

        $resourcePath = '/apps/api/kronos.finance.getLiabilities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($contactId !== null) {
            if('form' === 'form' && is_array($contactId)) {
                foreach($contactId as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['contact_id'] = ObjectSerializer::toString($contactId);
            }
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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