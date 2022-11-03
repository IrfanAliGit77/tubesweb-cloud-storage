<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/orgpolicy/v2/orgpolicy.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\OrgPolicy\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\OrgPolicy\V2\CreatePolicyRequest;
use Google\Cloud\OrgPolicy\V2\DeletePolicyRequest;
use Google\Cloud\OrgPolicy\V2\GetEffectivePolicyRequest;
use Google\Cloud\OrgPolicy\V2\GetPolicyRequest;
use Google\Cloud\OrgPolicy\V2\ListConstraintsRequest;
use Google\Cloud\OrgPolicy\V2\ListConstraintsResponse;
use Google\Cloud\OrgPolicy\V2\ListPoliciesRequest;
use Google\Cloud\OrgPolicy\V2\ListPoliciesResponse;
use Google\Cloud\OrgPolicy\V2\Policy;
use Google\Cloud\OrgPolicy\V2\UpdatePolicyRequest;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: An interface for managing organization policies.
 *
 * The Cloud Org Policy service provides a simple mechanism for organizations to
 * restrict the allowed configurations across their entire Cloud Resource
 * hierarchy.
 *
 * You can use a `policy` to configure restrictions in Cloud resources. For
 * example, you can enforce a `policy` that restricts which Google
 * Cloud Platform APIs can be activated in a certain part of your resource
 * hierarchy, or prevents serial port access to VM instances in a particular
 * folder.
 *
 * `Policies` are inherited down through the resource hierarchy. A `policy`
 * applied to a parent resource automatically applies to all its child resources
 * unless overridden with a `policy` lower in the hierarchy.
 *
 * A `constraint` defines an aspect of a resource's configuration that can be
 * controlled by an organization's policy administrator. `Policies` are a
 * collection of `constraints` that defines their allowable configuration on a
 * particular resource and its child resources.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $orgPolicyClient = new OrgPolicyClient();
 * try {
 *     $formattedParent = $orgPolicyClient->projectName('[PROJECT]');
 *     $policy = new Policy();
 *     $response = $orgPolicyClient->createPolicy($formattedParent, $policy);
 * } finally {
 *     $orgPolicyClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class OrgPolicyGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.orgpolicy.v2.OrgPolicy';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'orgpolicy.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $folderNameTemplate;

    private static $folderPolicyNameTemplate;

    private static $organizationNameTemplate;

    private static $organizationPolicyNameTemplate;

    private static $policyNameTemplate;

    private static $projectNameTemplate;

    private static $projectPolicyNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/org_policy_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/org_policy_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/org_policy_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/org_policy_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getFolderNameTemplate()
    {
        if (self::$folderNameTemplate == null) {
            self::$folderNameTemplate = new PathTemplate('folders/{folder}');
        }

        return self::$folderNameTemplate;
    }

    private static function getFolderPolicyNameTemplate()
    {
        if (self::$folderPolicyNameTemplate == null) {
            self::$folderPolicyNameTemplate = new PathTemplate('folders/{folder}/policies/{policy}');
        }

        return self::$folderPolicyNameTemplate;
    }

    private static function getOrganizationNameTemplate()
    {
        if (self::$organizationNameTemplate == null) {
            self::$organizationNameTemplate = new PathTemplate('organizations/{organization}');
        }

        return self::$organizationNameTemplate;
    }

    private static function getOrganizationPolicyNameTemplate()
    {
        if (self::$organizationPolicyNameTemplate == null) {
            self::$organizationPolicyNameTemplate = new PathTemplate('organizations/{organization}/policies/{policy}');
        }

        return self::$organizationPolicyNameTemplate;
    }

    private static function getPolicyNameTemplate()
    {
        if (self::$policyNameTemplate == null) {
            self::$policyNameTemplate = new PathTemplate('projects/{project}/policies/{policy}');
        }

        return self::$policyNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (self::$projectNameTemplate == null) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getProjectPolicyNameTemplate()
    {
        if (self::$projectPolicyNameTemplate == null) {
            self::$projectPolicyNameTemplate = new PathTemplate('projects/{project}/policies/{policy}');
        }

        return self::$projectPolicyNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'folder' => self::getFolderNameTemplate(),
                'folderPolicy' => self::getFolderPolicyNameTemplate(),
                'organization' => self::getOrganizationNameTemplate(),
                'organizationPolicy' => self::getOrganizationPolicyNameTemplate(),
                'policy' => self::getPolicyNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'projectPolicy' => self::getProjectPolicyNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a folder
     * resource.
     *
     * @param string $folder
     *
     * @return string The formatted folder resource.
     */
    public static function folderName($folder)
    {
        return self::getFolderNameTemplate()->render([
            'folder' => $folder,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_policy resource.
     *
     * @param string $folder
     * @param string $policy
     *
     * @return string The formatted folder_policy resource.
     */
    public static function folderPolicyName($folder, $policy)
    {
        return self::getFolderPolicyNameTemplate()->render([
            'folder' => $folder,
            'policy' => $policy,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a organization
     * resource.
     *
     * @param string $organization
     *
     * @return string The formatted organization resource.
     */
    public static function organizationName($organization)
    {
        return self::getOrganizationNameTemplate()->render([
            'organization' => $organization,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_policy resource.
     *
     * @param string $organization
     * @param string $policy
     *
     * @return string The formatted organization_policy resource.
     */
    public static function organizationPolicyName($organization, $policy)
    {
        return self::getOrganizationPolicyNameTemplate()->render([
            'organization' => $organization,
            'policy' => $policy,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a policy
     * resource.
     *
     * @param string $project
     * @param string $policy
     *
     * @return string The formatted policy resource.
     */
    public static function policyName($project, $policy)
    {
        return self::getPolicyNameTemplate()->render([
            'project' => $project,
            'policy' => $policy,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_policy resource.
     *
     * @param string $project
     * @param string $policy
     *
     * @return string The formatted project_policy resource.
     */
    public static function projectPolicyName($project, $policy)
    {
        return self::getProjectPolicyNameTemplate()->render([
            'project' => $project,
            'policy' => $policy,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - folder: folders/{folder}
     * - folderPolicy: folders/{folder}/policies/{policy}
     * - organization: organizations/{organization}
     * - organizationPolicy: organizations/{organization}/policies/{policy}
     * - policy: projects/{project}/policies/{policy}
     * - project: projects/{project}
     * - projectPolicy: projects/{project}/policies/{policy}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'orgpolicy.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a Policy.
     *
     * Returns a `google.rpc.Status` with `google.rpc.Code.NOT_FOUND` if the
     * constraint does not exist.
     * Returns a `google.rpc.Status` with `google.rpc.Code.ALREADY_EXISTS` if the
     * policy already exists on the given Cloud resource.
     *
     * Sample code:
     * ```
     * $orgPolicyClient = new OrgPolicyClient();
     * try {
     *     $formattedParent = $orgPolicyClient->projectName('[PROJECT]');
     *     $policy = new Policy();
     *     $response = $orgPolicyClient->createPolicy($formattedParent, $policy);
     * } finally {
     *     $orgPolicyClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The Cloud resource that will parent the new Policy. Must be in one of the
     *                             following forms:
     *                             * `projects/{project_number}`
     *                             * `projects/{project_id}`
     *                             * `folders/{folder_id}`
     *                             * `organizations/{organization_id}`
     * @param Policy $policy       Required. `Policy` to create.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\OrgPolicy\V2\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function createPolicy($parent, $policy, array $optionalArgs = [])
    {
        $request = new CreatePolicyRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setPolicy($policy);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreatePolicy', Policy::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes a Policy.
     *
     * Returns a `google.rpc.Status` with `google.rpc.Code.NOT_FOUND` if the
     * constraint or Org Policy does not exist.
     *
     * Sample code:
     * ```
     * $orgPolicyClient = new OrgPolicyClient();
     * try {
     *     $formattedName = $orgPolicyClient->policyName('[PROJECT]', '[POLICY]');
     *     $orgPolicyClient->deletePolicy($formattedName);
     * } finally {
     *     $orgPolicyClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the policy to delete.
     *                             See `Policy` for naming rules.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deletePolicy($name, array $optionalArgs = [])
    {
        $request = new DeletePolicyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeletePolicy', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets the effective `Policy` on a resource. This is the result of merging
     * `Policies` in the resource hierarchy and evaluating conditions. The
     * returned `Policy` will not have an `etag` or `condition` set because it is
     * a computed `Policy` across multiple resources.
     * Subtrees of Resource Manager resource hierarchy with 'under:' prefix will
     * not be expanded.
     *
     * Sample code:
     * ```
     * $orgPolicyClient = new OrgPolicyClient();
     * try {
     *     $formattedName = $orgPolicyClient->policyName('[PROJECT]', '[POLICY]');
     *     $response = $orgPolicyClient->getEffectivePolicy($formattedName);
     * } finally {
     *     $orgPolicyClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The effective policy to compute. See `Policy` for naming rules.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\OrgPolicy\V2\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getEffectivePolicy($name, array $optionalArgs = [])
    {
        $request = new GetEffectivePolicyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetEffectivePolicy', Policy::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a `Policy` on a resource.
     *
     * If no `Policy` is set on the resource, NOT_FOUND is returned. The
     * `etag` value can be used with `UpdatePolicy()` to update a
     * `Policy` during read-modify-write.
     *
     * Sample code:
     * ```
     * $orgPolicyClient = new OrgPolicyClient();
     * try {
     *     $formattedName = $orgPolicyClient->policyName('[PROJECT]', '[POLICY]');
     *     $response = $orgPolicyClient->getPolicy($formattedName);
     * } finally {
     *     $orgPolicyClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the policy. See `Policy` for naming requirements.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\OrgPolicy\V2\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getPolicy($name, array $optionalArgs = [])
    {
        $request = new GetPolicyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetPolicy', Policy::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists `Constraints` that could be applied on the specified resource.
     *
     * Sample code:
     * ```
     * $orgPolicyClient = new OrgPolicyClient();
     * try {
     *     $formattedParent = $orgPolicyClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $orgPolicyClient->listConstraints($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $orgPolicyClient->listConstraints($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $orgPolicyClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The Cloud resource that parents the constraint. Must be in one of the
     *                             following forms:
     *                             * `projects/{project_number}`
     *                             * `projects/{project_id}`
     *                             * `folders/{folder_id}`
     *                             * `organizations/{organization_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listConstraints($parent, array $optionalArgs = [])
    {
        $request = new ListConstraintsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListConstraints', $optionalArgs, ListConstraintsResponse::class, $request);
    }

    /**
     * Retrieves all of the `Policies` that exist on a particular resource.
     *
     * Sample code:
     * ```
     * $orgPolicyClient = new OrgPolicyClient();
     * try {
     *     $formattedParent = $orgPolicyClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $orgPolicyClient->listPolicies($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $orgPolicyClient->listPolicies($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $orgPolicyClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The target Cloud resource that parents the set of constraints and policies
     *                             that will be returned from this call. Must be in one of the following
     *                             forms:
     *                             * `projects/{project_number}`
     *                             * `projects/{project_id}`
     *                             * `folders/{folder_id}`
     *                             * `organizations/{organization_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listPolicies($parent, array $optionalArgs = [])
    {
        $request = new ListPoliciesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListPolicies', $optionalArgs, ListPoliciesResponse::class, $request);
    }

    /**
     * Updates a Policy.
     *
     * Returns a `google.rpc.Status` with `google.rpc.Code.NOT_FOUND` if the
     * constraint or the policy do not exist.
     * Returns a `google.rpc.Status` with `google.rpc.Code.ABORTED` if the etag
     * supplied in the request does not match the persisted etag of the policy
     *
     * Note: the supplied policy will perform a full overwrite of all
     * fields.
     *
     * Sample code:
     * ```
     * $orgPolicyClient = new OrgPolicyClient();
     * try {
     *     $policy = new Policy();
     *     $response = $orgPolicyClient->updatePolicy($policy);
     * } finally {
     *     $orgPolicyClient->close();
     * }
     * ```
     *
     * @param Policy $policy       Required. `Policy` to update.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\OrgPolicy\V2\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function updatePolicy($policy, array $optionalArgs = [])
    {
        $request = new UpdatePolicyRequest();
        $requestParamHeaders = [];
        $request->setPolicy($policy);
        $requestParamHeaders['policy.name'] = $policy->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdatePolicy', Policy::class, $optionalArgs, $request)->wait();
    }
}
