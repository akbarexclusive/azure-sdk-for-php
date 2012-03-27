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
 * @package   PEAR2\Tests\Unit\WindowsAzure\Services\Queue\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */

namespace PEAR2\Tests\Unit\WindowsAzure\Services\Queue\Models;
use PEAR2\WindowsAzure\Services\Queue\Models\PeekMessagesOptions;

/**
 * Unit tests for class PeekMessagesOptions
 *
 * @category  Microsoft
 * @package   PEAR2\Tests\Unit\WindowsAzure\Services\Queue\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class PeekMessagesOptionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\PeekMessagesOptions::getNumberOfMessages
     */
    public function testGetNumberOfMessages()
    {
        // Setup
        $peekMessagesOptions = new PeekMessagesOptions();
        $expected = 10;
        $peekMessagesOptions->setNumberOfMessages($expected);
        
        // Test
        $actual = $peekMessagesOptions->getNumberOfMessages();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\PeekMessagesOptions::setNumberOfMessages
     */
    public function testSetNumberOfMessages()
    {
        // Setup
        $peekMessagesOptions = new PeekMessagesOptions();
        $expected = 10;
        
        // Test
        $peekMessagesOptions->setNumberOfMessages($expected);
        
        // Assert
        $actual = $peekMessagesOptions->getNumberOfMessages();
        $this->assertEquals($expected, $actual);
    }
}

?>
