<?php
namespace Microsoft\Azure\Management\Sql\_2014_04_01;
final class DatabaseThreatDetectionPolicies
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_Get_operation = $_client->createOperation('DatabaseThreatDetectionPolicies_Get');
        $this->_CreateOrUpdate_operation = $_client->createOperation('DatabaseThreatDetectionPolicies_CreateOrUpdate');
    }
    /**
     * Gets a database's threat detection policy.
     * @param string $resourceGroupName
     * @param string $serverName
     * @param string $databaseName
     * @return array
     */
    public function get(
        $resourceGroupName,
        $serverName,
        $databaseName
    )
    {
        return $this->_Get_operation->call([
            'resourceGroupName' => $resourceGroupName,
            'serverName' => $serverName,
            'databaseName' => $databaseName
        ]);
    }
    /**
     * Creates or updates a database's threat detection policy.
     * @param string $resourceGroupName
     * @param string $serverName
     * @param string $databaseName
     * @param array $parameters
     * @return array
     */
    public function createOrUpdate(
        $resourceGroupName,
        $serverName,
        $databaseName,
        array $parameters
    )
    {
        return $this->_CreateOrUpdate_operation->call([
            'resourceGroupName' => $resourceGroupName,
            'serverName' => $serverName,
            'databaseName' => $databaseName,
            'parameters' => $parameters
        ]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_Get_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateOrUpdate_operation;
}