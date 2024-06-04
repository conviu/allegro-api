<?php
/**
 * ResponsiblePersonsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Api;

use AllegroApi\Configuration;
use AllegroApi\DebugPlugin;
use AllegroApi\Exception\ApiException;
use AllegroApi\HeaderSelector;
use AllegroApi\ObjectSerializer;
use GuzzleHttp\Psr7\MultipartStream;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\RedirectPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\Common\PluginClientFactory;
use Http\Client\Exception\HttpException;
use Http\Client\HttpAsyncClient;
use Http\Discovery\HttpAsyncClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\RequestFactory;
use Http\Promise\Promise;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use function sprintf;


/**
 * ResponsiblePersonsApi Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResponsiblePersonsApi
{
    /**
     * @var PluginClient
     */
    protected $httpClient;

    /**
     * @var PluginClient
     */
    protected $httpAsyncClient;

    /**
     * @var UriFactoryInterface
     */
    protected $uriFactory;

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
     * @var RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    protected $streamFactory;

    public function __construct(
        ClientInterface $httpClient = null,
        Configuration $config = null,
        HttpAsyncClient $httpAsyncClient = null,
        UriFactoryInterface $uriFactory = null,
        RequestFactoryInterface $requestFactory = null,
        StreamFactoryInterface $streamFactory = null,
        HeaderSelector $selector = null,
        ?array $plugins = null,
        $hostIndex = 0
    ) {
        $this->config = $config ?? (new Configuration())->setHost('https://api.allegro.pl');
        $this->requestFactory = $requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = $streamFactory ?? Psr17FactoryDiscovery::findStreamFactory();

        $plugins = $plugins ?? [
            new RedirectPlugin(['strict' => true]),
            new ErrorPlugin(),
        ];

        if ($this->config->getDebug()) {
            $plugins[] = new DebugPlugin(fopen($this->config->getDebugFile(), 'ab'));
        }

        $this->httpClient = (new PluginClientFactory())->createClient(
            $httpClient ?? Psr18ClientDiscovery::find(),
            $plugins
        );

        $this->httpAsyncClient = (new PluginClientFactory())->createClient(
            $httpAsyncClient ?? HttpAsyncClientDiscovery::find(),
            $plugins
        );

        $this->uriFactory = $uriFactory ?? Psr17FactoryDiscovery::findUriFactory();

        $this->headerSelector = $selector ?? new HeaderSelector();

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
     * Operation responsiblePersonsGET
     *
     * Get the list of responsible persons
     *
     *
     * @return \AllegroApi\Model\ResponsiblePersonsGET200Response
     *@throws \InvalidArgumentException
     * @throws \AllegroApi\Exception\ApiException on non-2xx response
     */
    public function responsiblePersonsGET()
    {
        [$response] = $this->responsiblePersonsGETWithHttpInfo();
        return $response;
    }

    /**
     * Operation responsiblePersonsGETWithHttpInfo
     *
     * Get the list of responsible persons
     *
     *
     * @return array of \AllegroApi\Model\ResponsiblePersonsGET200Response, HTTP status code, HTTP response headers (array of strings)
     *@throws \InvalidArgumentException
     * @throws \AllegroApi\Exception\ApiException on non-2xx response
     */
    public function responsiblePersonsGETWithHttpInfo()
    {
        $request = $this->responsiblePersonsGETRequest();

        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (HttpException $e) {
                $response = $e->getResponse();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $response->getStatusCode(),
                        (string) $request->getUri()
                    ),
                    $request,
                    $response,
                    $e
                );
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $request,
                    null,
                    $e
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    if ('\AllegroApi\Model\ResponsiblePersonsGET200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ResponsiblePersonsGET200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\ResponsiblePersonsGET200Response';
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
                        '\AllegroApi\Model\ResponsiblePersonsGET200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation responsiblePersonsGETAsync
     *
     * Get the list of responsible persons
     *
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function responsiblePersonsGETAsync()
    {
        return $this->responsiblePersonsGETAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation responsiblePersonsGETAsyncWithHttpInfo
     *
     * Get the list of responsible persons
     *
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function responsiblePersonsGETAsyncWithHttpInfo()
    {
        $returnType = '\AllegroApi\Model\ResponsiblePersonsGET200Response';
        $request = $this->responsiblePersonsGETRequest();

        return $this->httpAsyncClient->sendAsyncRequest($request)
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
                function (HttpException $exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $exception->getRequest(),
                        $exception->getResponse(),
                        $exception
                    );
                }
            );
    }

    /**
     * Create request for operation 'responsiblePersonsGET'
     *
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function responsiblePersonsGETRequest()
    {

        $resourcePath = '/sale/responsible-persons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.allegro.public.v1+json'],
            '',
            $multipart
        );

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
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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

        $operationHost = $this->config->getHost();

        $uri = $this->createUri($operationHost, $resourcePath, $queryParams);

        return $this->createRequest('GET', $uri, $headers, $httpBody);
    }

    /**
     * Operation responsiblePersonsPOST
     *
     * Create responsible person
     *
     * @param  \AllegroApi\Model\CreateResponsiblePersonRequest $create_responsible_person_request create_responsible_person_request (required)
     *
     * @return \AllegroApi\Model\ResponsiblePersonResponse
     *@throws \InvalidArgumentException
     * @throws \AllegroApi\Exception\ApiException on non-2xx response
     */
    public function responsiblePersonsPOST($create_responsible_person_request)
    {
        [$response] = $this->responsiblePersonsPOSTWithHttpInfo($create_responsible_person_request);
        return $response;
    }

    /**
     * Operation responsiblePersonsPOSTWithHttpInfo
     *
     * Create responsible person
     *
     * @param  \AllegroApi\Model\CreateResponsiblePersonRequest $create_responsible_person_request (required)
     *
     * @return array of \AllegroApi\Model\ResponsiblePersonResponse, HTTP status code, HTTP response headers (array of strings)
     *@throws \InvalidArgumentException
     * @throws \AllegroApi\Exception\ApiException on non-2xx response
     */
    public function responsiblePersonsPOSTWithHttpInfo($create_responsible_person_request)
    {
        $request = $this->responsiblePersonsPOSTRequest($create_responsible_person_request);

        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (HttpException $e) {
                $response = $e->getResponse();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $response->getStatusCode(),
                        (string) $request->getUri()
                    ),
                    $request,
                    $response,
                    $e
                );
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $request,
                    null,
                    $e
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 201:
                    if ('\AllegroApi\Model\ResponsiblePersonResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ResponsiblePersonResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\ResponsiblePersonResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ResponsiblePersonResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation responsiblePersonsPOSTAsync
     *
     * Create responsible person
     *
     * @param  \AllegroApi\Model\CreateResponsiblePersonRequest $create_responsible_person_request (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function responsiblePersonsPOSTAsync($create_responsible_person_request)
    {
        return $this->responsiblePersonsPOSTAsyncWithHttpInfo($create_responsible_person_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation responsiblePersonsPOSTAsyncWithHttpInfo
     *
     * Create responsible person
     *
     * @param  \AllegroApi\Model\CreateResponsiblePersonRequest $create_responsible_person_request (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function responsiblePersonsPOSTAsyncWithHttpInfo($create_responsible_person_request)
    {
        $returnType = '\AllegroApi\Model\ResponsiblePersonResponse';
        $request = $this->responsiblePersonsPOSTRequest($create_responsible_person_request);

        return $this->httpAsyncClient->sendAsyncRequest($request)
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
                function (HttpException $exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $exception->getRequest(),
                        $exception->getResponse(),
                        $exception
                    );
                }
            );
    }

    /**
     * Create request for operation 'responsiblePersonsPOST'
     *
     * @param  \AllegroApi\Model\CreateResponsiblePersonRequest $create_responsible_person_request (required)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function responsiblePersonsPOSTRequest($create_responsible_person_request)
    {
        // verify the required parameter 'create_responsible_person_request' is set
        if ($create_responsible_person_request === null || (is_array($create_responsible_person_request) && count($create_responsible_person_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_responsible_person_request when calling responsiblePersonsPOST'
            );
        }

        $resourcePath = '/sale/responsible-persons';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.allegro.public.v1+json'],
            'application/vnd.allegro.public.v1+json',
            $multipart
        );

        // for model (json/xml)
        if (isset($create_responsible_person_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($create_responsible_person_request));
            } else {
                $httpBody = $create_responsible_person_request;
            }
        } elseif (count($formParams) > 0) {
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
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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

        $operationHost = $this->config->getHost();

        $uri = $this->createUri($operationHost, $resourcePath, $queryParams);

        return $this->createRequest('POST', $uri, $headers, $httpBody);
    }

    /**
     * Operation responsiblePersonsPUT
     *
     * Update responsible person
     *
     * @param  string $id Responsible person ID. (required)
     * @param  \AllegroApi\Model\UpdateResponsiblePersonRequest $update_responsible_person_request update_responsible_person_request (required)
     *
     * @return \AllegroApi\Model\ResponsiblePersonResponse
     *@throws \InvalidArgumentException
     * @throws \AllegroApi\Exception\ApiException on non-2xx response
     */
    public function responsiblePersonsPUT($id, $update_responsible_person_request)
    {
        [$response] = $this->responsiblePersonsPUTWithHttpInfo($id, $update_responsible_person_request);
        return $response;
    }

    /**
     * Operation responsiblePersonsPUTWithHttpInfo
     *
     * Update responsible person
     *
     * @param  string $id Responsible person ID. (required)
     * @param  \AllegroApi\Model\UpdateResponsiblePersonRequest $update_responsible_person_request (required)
     *
     * @return array of \AllegroApi\Model\ResponsiblePersonResponse, HTTP status code, HTTP response headers (array of strings)
     *@throws \InvalidArgumentException
     * @throws \AllegroApi\Exception\ApiException on non-2xx response
     */
    public function responsiblePersonsPUTWithHttpInfo($id, $update_responsible_person_request)
    {
        $request = $this->responsiblePersonsPUTRequest($id, $update_responsible_person_request);

        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (HttpException $e) {
                $response = $e->getResponse();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $response->getStatusCode(),
                        (string) $request->getUri()
                    ),
                    $request,
                    $response,
                    $e
                );
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $request,
                    null,
                    $e
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    if ('\AllegroApi\Model\ResponsiblePersonResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ResponsiblePersonResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\ResponsiblePersonResponse';
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
                        '\AllegroApi\Model\ResponsiblePersonResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation responsiblePersonsPUTAsync
     *
     * Update responsible person
     *
     * @param  string $id Responsible person ID. (required)
     * @param  \AllegroApi\Model\UpdateResponsiblePersonRequest $update_responsible_person_request (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function responsiblePersonsPUTAsync($id, $update_responsible_person_request)
    {
        return $this->responsiblePersonsPUTAsyncWithHttpInfo($id, $update_responsible_person_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation responsiblePersonsPUTAsyncWithHttpInfo
     *
     * Update responsible person
     *
     * @param  string $id Responsible person ID. (required)
     * @param  \AllegroApi\Model\UpdateResponsiblePersonRequest $update_responsible_person_request (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function responsiblePersonsPUTAsyncWithHttpInfo($id, $update_responsible_person_request)
    {
        $returnType = '\AllegroApi\Model\ResponsiblePersonResponse';
        $request = $this->responsiblePersonsPUTRequest($id, $update_responsible_person_request);

        return $this->httpAsyncClient->sendAsyncRequest($request)
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
                function (HttpException $exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $exception->getRequest(),
                        $exception->getResponse(),
                        $exception
                    );
                }
            );
    }

    /**
     * Create request for operation 'responsiblePersonsPUT'
     *
     * @param  string $id Responsible person ID. (required)
     * @param  \AllegroApi\Model\UpdateResponsiblePersonRequest $update_responsible_person_request (required)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function responsiblePersonsPUTRequest($id, $update_responsible_person_request)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling responsiblePersonsPUT'
            );
        }
        // verify the required parameter 'update_responsible_person_request' is set
        if ($update_responsible_person_request === null || (is_array($update_responsible_person_request) && count($update_responsible_person_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_responsible_person_request when calling responsiblePersonsPUT'
            );
        }

        $resourcePath = '/sale/responsible-persons/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.allegro.public.v1+json'],
            'application/vnd.allegro.public.v1+json',
            $multipart
        );

        // for model (json/xml)
        if (isset($update_responsible_person_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($update_responsible_person_request));
            } else {
                $httpBody = $update_responsible_person_request;
            }
        } elseif (count($formParams) > 0) {
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
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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

        $operationHost = $this->config->getHost();

        $uri = $this->createUri($operationHost, $resourcePath, $queryParams);

        return $this->createRequest('PUT', $uri, $headers, $httpBody);
    }


    /**
     * @param string $method
     * @param string|UriInterface $uri
     * @param array $headers
     * @param string|StreamInterface|null $body
     *
     * @return RequestInterface
     */
    protected function createRequest(string $method, $uri, array $headers = [], $body = null): RequestInterface
    {
        if ($this->requestFactory instanceof RequestFactory) {
            return $this->requestFactory->createRequest(
                $method,
                $uri,
                $headers,
                $body
            );
        }

        if (is_string($body) && '' !== $body && null === $this->streamFactory) {
            throw new \RuntimeException('Cannot create request: A stream factory is required to create a request with a non-empty string body.');
        }

        $request = $this->requestFactory->createRequest($method, $uri);

        foreach ($headers as $key => $value) {
            $request = $request->withHeader($key, $value);
        }

        if (null !== $body && '' !== $body) {
            $request = $request->withBody(
                is_string($body) ? $this->streamFactory->createStream($body) : $body
            );
        }

        return $request;
    }

    private function createUri(
        string $operationHost,
        string $resourcePath,
        array $queryParams
    ): UriInterface {
        $parsedUrl = parse_url($operationHost);

        $host = $parsedUrl['host'] ?? null;
        $scheme = $parsedUrl['scheme'] ?? null;
        $basePath = $parsedUrl['path'] ?? null;
        $port = $parsedUrl['port'] ?? null;
        $user = $parsedUrl['user'] ?? null;
        $password = $parsedUrl['pass'] ?? null;

        $uri = $this->uriFactory->createUri($basePath . $resourcePath)
            ->withHost($host)
            ->withScheme($scheme)
            ->withPort($port)
            ->withQuery(ObjectSerializer::buildQuery($queryParams));

        if ($user) {
            $uri = $uri->withUserInfo($user, $password);
        }

        return $uri;
    }
}
