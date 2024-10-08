<?php
/*
 * Copyright 2023 Google LLC
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

// [START aiplatform_v1_generated_PredictionService_StreamGenerateContent_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\ServerStream;
use Google\Cloud\AIPlatform\V1\Client\PredictionServiceClient;
use Google\Cloud\AIPlatform\V1\Content;
use Google\Cloud\AIPlatform\V1\GenerateContentRequest;
use Google\Cloud\AIPlatform\V1\GenerateContentResponse;
use Google\Cloud\AIPlatform\V1\Part;

/**
 * Generate content with multimodal inputs with streaming support.
 *
 * @param string $model The fully qualified name of the publisher model or tuned model
 *                      endpoint to use.
 *
 *                      Publisher model format:
 *                      `projects/{project}/locations/{location}/publishers/&#42;/models/*`
 *
 *                      Tuned model endpoint format:
 *                      `projects/{project}/locations/{location}/endpoints/{endpoint}`
 */
function stream_generate_content_sample(string $model): void
{
    // Create a client.
    $predictionServiceClient = new PredictionServiceClient();

    // Prepare the request message.
    $contentsParts = [new Part()];
    $content = (new Content())
        ->setParts($contentsParts);
    $contents = [$content,];
    $request = (new GenerateContentRequest())
        ->setModel($model)
        ->setContents($contents);

    // Call the API and handle any network failures.
    try {
        /** @var ServerStream $stream */
        $stream = $predictionServiceClient->streamGenerateContent($request);

        /** @var GenerateContentResponse $element */
        foreach ($stream->readAll() as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
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
    $model = '[MODEL]';

    stream_generate_content_sample($model);
}
// [END aiplatform_v1_generated_PredictionService_StreamGenerateContent_sync]
