<?php
/*
 * Copyright 2024 Google LLC
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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START aiplatform_v1_generated_VertexRagService_CorroborateContent_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\Client\VertexRagServiceClient;
use Google\Cloud\AIPlatform\V1\CorroborateContentRequest;
use Google\Cloud\AIPlatform\V1\CorroborateContentResponse;

/**
 * Given an input text, it returns a score that evaluates the factuality of
 * the text. It also extracts and returns claims from the text and provides
 * supporting facts.
 *
 * @param string $formattedParent The resource name of the Location from which to corroborate text.
 *                                The users must have permission to make a call in the project.
 *                                Format:
 *                                `projects/{project}/locations/{location}`. Please see
 *                                {@see VertexRagServiceClient::locationName()} for help formatting this field.
 */
function corroborate_content_sample(string $formattedParent): void
{
    // Create a client.
    $vertexRagServiceClient = new VertexRagServiceClient();

    // Prepare the request message.
    $request = (new CorroborateContentRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var CorroborateContentResponse $response */
        $response = $vertexRagServiceClient->corroborateContent($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = VertexRagServiceClient::locationName('[PROJECT]', '[LOCATION]');

    corroborate_content_sample($formattedParent);
}
// [END aiplatform_v1_generated_VertexRagService_CorroborateContent_sync]