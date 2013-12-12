<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * PHP version 5
 *
 * @category  Microsoft
 * @package   WindowsAzure\MediaServices\Internal
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 */

namespace WindowsAzure\MediaServices\Internal;
use WindowsAzure\Common\Internal\FilterableService;

/**
 * This interface has all REST APIs provided by Windows Azure for Blob service.
 *
 * @category  Microsoft
 * @package   WindowsAzure\MediaServices\Internal
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 * @see       http://msdn.microsoft.com/en-us/library/windowsazure/dd135733.aspx
 */
interface IMediaServices extends FilterableService
{
    /**
     * Create new asset
     *
     * @param WindowsAzure\MediaServices\Models\Asset   $asset  Asset data
     *
     * @return WindowsAzure\MediaServices\Models\Asset  Created asset
     */
    public function createAsset($asset);

    /**
     * Get asset
     *
     * @param WindowsAzure\MediaServices\Models\Asset|string   $asset  Asset data or asset Id
     */
    public function getAsset($asset);

    /**
     * Get asset list
     *
     */
    public function getAssetList();

    /**
     * Delete asset
     *
     * @param WindowsAzure\MediaServices\Models\Asset|string   $asset  Asset data or asset Id
     */
    public function deleteAsset($asset);

    /**
     * Create new access policy
     *
     * @param WindowsAzure\MediaServices\Models\AccessPolicy   $accessPolicy  Access policy data
     *
     * @return WindowsAzure\MediaServices\Models\AccessPolicy  Created access policy
     */
    public function createAccessPolicy($accessPolicy);

    /**
     * Delete access policy
     *
     * @param WindowsAzure\MediaServices\Models\AccessPolicy|string   $accessPolicy  Access policy data or access policy Id
     */
    public function deleteAccessPolicy($accessPolicy);

    /**
     * Create new locator
     *
     * @param WindowsAzure\MediaServices\Models\Locator   $locator  Locator data
     *
     * @return WindowsAzure\MediaServices\Models\Locator  Created locator
     */
    public function createLocator($locator);

    /**
     * Delete locator
     *
     * @param WindowsAzure\MediaServices\Models\Locator|string   $asset  Asset data or asset Id
     */
    public function deleteLocator($locator);

    /**
     * Generate file info for all files in asset
     *
     * @param WindowsAzure\MediaServices\Models\Asset|string   $asset  Asset data or asset Id
     */
    public function createFileInfos($asset);

    /**
     * Upload asset file to storage.
     *
     * @param WindowsAzure\MediaServices\Models\Locator $locator    Write locator for file upload
     * @param string                                    $name       Uploading file filename
     * @param string                                    $body       Uploading file content
     *
     * @return null
     */
    public function uploadAssetFile($locator, $name, $body);

    /**
     * Create a job.
     *
     * @param WindowsAzure\MediaServices\Models\Job $job            Job data
     * @param array                                 $inputAssets    Input assets list
     * @param array                                 $tasks          Performed tasks array (optional)
     *
     * @return array
     */
    public function createJob($job, $inputAssets, $tasks = null);

    /**
     * Get status of a job
     *
     * @param WindowsAzure\MediaServices\Models\Job|string   $job  Job data or job Id
     */
    public function getJobStatus($job);

    /**
     * Cancel a job
     *
     * @param WindowsAzure\MediaServices\Models\Job|string   $job  Job data or job Id
     */
    public function cancelJob($job);

    /**
     * Delete job
     *
     * @param WindowsAzure\MediaServices\Models\Job|string   $job  Job data or job Id
     */
    public function deleteJob($job);

    /**
     * Create a job.
     *
     * @param WindowsAzure\MediaServices\Models\JobTemplate $jobTemplate    Job template data
     * @param array                                         $taskTemplates  Performed tasks template array
     *
     * @return array
     */
    public function createJobTemplate($jobTemplate, $taskTemplates);

    /**
     * Delete job template
     *
     * @param WindowsAzure\MediaServices\Models\JobTemplate|string   $jobTemplate  Job template data or job template Id
     */
    public function deleteJobTemplate($jobTemplate);

    /**
     * Get list of all media processors asset files
     *
     * @return array
     */
    public function getMediaProcessors();

    /**
     * Get media processor by name with latest version
     *
     * @param string    $name   Media processor name
     *
     * @return WindowsAzure\MediaServices\Models\JobTemplate\MediaProcessor
     */
    public function getLatestMediaProcessor($name);
}


