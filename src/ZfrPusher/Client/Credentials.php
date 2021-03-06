<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ZfrPusher\Client;

/**
 * @author Michaël Gallego <mic.gallego@gmail.com>
 * @licence MIT
 */
class Credentials
{
    /**
     * Application identifier
     *
     * @var int
     */
    protected $appId;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var string
     */
    protected $cluster;

    /**
     * @param int    $appId
     * @param string $key
     * @param string $secret
     */
    public function __construct($appId, $key, $secret, $cluster = 'us')
    {
        $this->appId   = (int) $appId;
        $this->key     = (string) $key;
        $this->secret  = (string) $secret;
        $this->cluster = (string) $cluster;
    }

    /**
     * Get application id
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Get the key part of the security token
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Get the secret part of the security token
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Get the cluster(region)
     * 
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }
}
