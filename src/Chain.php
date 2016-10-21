<?php

namespace Brofist\Flysystem\Adapter;

use League\Flysystem\AdapterInterface;
use League\Flysystem\Config;

class Chain implements AdapterInterface
{
    /**
     * @var array[AdapterInterface]
     */
    private $adapters = [];

    public function __construct(array $adapters = [])
    {
        foreach ($adapters as $adapter) {
            $this->append($adapter);
        }
    }

    /**
     * @return Chain
     */
    public function append(AdapterInterface $adapter)
    {
        $this->adapters[] = $adapter;

        return $this;
    }

    public function write($path, $contents, Config $config)
    {
        $results = [];

        foreach ($this->adapters as $adapter) {
            $results[] = $adapter->write($path, $contents, $config);
        }

        return array_unique($results) === [true];
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function writeStream($path, $resource, Config $config)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function update($path, $contents, Config $config)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function updateStream($path, $resource, Config $config)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function rename($path, $newpath)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function copy($path, $newpath)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function delete($path)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function deleteDir($dirname)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function createDir($dirname, Config $config)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setVisibility($path, $visibility)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    public function has($path)
    {
        $results = [];

        foreach ($this->adapters as $adapter) {
            $results[] = $adapter->has($path);
        }

        return array_unique($results) === [true];
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function read($path)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function readStream($path)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function listContents($directory = '', $recursive = false)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function getMetadata($path)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function getSize($path)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function getMimetype($path)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function getTimestamp($path)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function getVisibility($path)
    {
        throw new \RuntimeException(sprintf('"%s" not implemented', __METHOD__));
    }
}
