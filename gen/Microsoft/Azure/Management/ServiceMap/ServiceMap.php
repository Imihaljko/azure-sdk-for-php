<?php
namespace Microsoft\Azure\Management\ServiceMap;
final class ServiceMap
{
    /**
     * @param \Microsoft\Rest\RunTimeInterface $_runTime
     * @param string $subscriptionId
     */
    public function __construct(
        \Microsoft\Rest\RunTimeInterface $_runTime,
        $subscriptionId
    )
    {
        $_client = $_runTime->createClientFromData(
            self::_SWAGGER_OBJECT_DATA,
            ['subscriptionId' => $subscriptionId]
        );
        $this->_Machines_group = new \Microsoft\Azure\Management\ServiceMap\Machines($_client);
        $this->_Processes_group = new \Microsoft\Azure\Management\ServiceMap\Processes($_client);
        $this->_Ports_group = new \Microsoft\Azure\Management\ServiceMap\Ports($_client);
        $this->_ClientGroups_group = new \Microsoft\Azure\Management\ServiceMap\ClientGroups($_client);
        $this->_Maps_group = new \Microsoft\Azure\Management\ServiceMap\Maps($_client);
        $this->_Summaries_group = new \Microsoft\Azure\Management\ServiceMap\Summaries($_client);
        $this->_MachineGroups_group = new \Microsoft\Azure\Management\ServiceMap\MachineGroups($_client);
    }
    /**
     * @return \Microsoft\Azure\Management\ServiceMap\Machines
     */
    public function getMachines()
    {
        return $this->_Machines_group;
    }
    /**
     * @return \Microsoft\Azure\Management\ServiceMap\Processes
     */
    public function getProcesses()
    {
        return $this->_Processes_group;
    }
    /**
     * @return \Microsoft\Azure\Management\ServiceMap\Ports
     */
    public function getPorts()
    {
        return $this->_Ports_group;
    }
    /**
     * @return \Microsoft\Azure\Management\ServiceMap\ClientGroups
     */
    public function getClientGroups()
    {
        return $this->_ClientGroups_group;
    }
    /**
     * @return \Microsoft\Azure\Management\ServiceMap\Maps
     */
    public function getMaps()
    {
        return $this->_Maps_group;
    }
    /**
     * @return \Microsoft\Azure\Management\ServiceMap\Summaries
     */
    public function getSummaries()
    {
        return $this->_Summaries_group;
    }
    /**
     * @return \Microsoft\Azure\Management\ServiceMap\MachineGroups
     */
    public function getMachineGroups()
    {
        return $this->_MachineGroups_group;
    }
    /**
     * @var \Microsoft\Azure\Management\ServiceMap\Machines
     */
    private $_Machines_group;
    /**
     * @var \Microsoft\Azure\Management\ServiceMap\Processes
     */
    private $_Processes_group;
    /**
     * @var \Microsoft\Azure\Management\ServiceMap\Ports
     */
    private $_Ports_group;
    /**
     * @var \Microsoft\Azure\Management\ServiceMap\ClientGroups
     */
    private $_ClientGroups_group;
    /**
     * @var \Microsoft\Azure\Management\ServiceMap\Maps
     */
    private $_Maps_group;
    /**
     * @var \Microsoft\Azure\Management\ServiceMap\Summaries
     */
    private $_Summaries_group;
    /**
     * @var \Microsoft\Azure\Management\ServiceMap\MachineGroups
     */
    private $_MachineGroups_group;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'management.azure.com',
        'paths' => [
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines' => ['get' => [
                'operationId' => 'Machines_ListByWorkspace',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'live',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'boolean'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'timestamp',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => '$top',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/MachineCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}' => ['get' => [
                'operationId' => 'Machines_Get',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'timestamp',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/machine']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/liveness' => ['get' => [
                'operationId' => 'Machines_GetLiveness',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Liveness']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/connections' => ['get' => [
                'operationId' => 'Machines_ListConnections',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ConnectionCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/processes' => ['get' => [
                'operationId' => 'Machines_ListProcesses',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'live',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'boolean'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'timestamp',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ProcessCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/ports' => ['get' => [
                'operationId' => 'Machines_ListPorts',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/PortCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/machineGroups' => ['get' => [
                'operationId' => 'Machines_ListMachineGroupMembership',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/MachineGroupCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/processes/{processName}' => ['get' => [
                'operationId' => 'Processes_Get',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'processName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'timestamp',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/process']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/processes/{processName}/liveness' => ['get' => [
                'operationId' => 'Processes_GetLiveness',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'processName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Liveness']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/processes/{processName}/acceptingPorts' => ['get' => [
                'operationId' => 'Processes_ListAcceptingPorts',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'processName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/PortCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/processes/{processName}/connections' => ['get' => [
                'operationId' => 'Processes_ListConnections',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'processName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ConnectionCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/ports/{portName}' => ['get' => [
                'operationId' => 'Ports_Get',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'portName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/port']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/ports/{portName}/liveness' => ['get' => [
                'operationId' => 'Ports_GetLiveness',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'portName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/Liveness']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/ports/{portName}/acceptingProcesses' => ['get' => [
                'operationId' => 'Ports_ListAcceptingProcesses',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'portName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ProcessCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machines/{machineName}/ports/{portName}/connections' => ['get' => [
                'operationId' => 'Ports_ListConnections',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'machineName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'portName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ConnectionCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/clientGroups/{clientGroupName}' => ['get' => [
                'operationId' => 'ClientGroups_Get',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'clientGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/clientGroup']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/clientGroups/{clientGroupName}/membersCount' => ['get' => [
                'operationId' => 'ClientGroups_GetMembersCount',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'clientGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ClientGroupMembersCount']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/clientGroups/{clientGroupName}/members' => ['get' => [
                'operationId' => 'ClientGroups_ListMembers',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'clientGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => '$top',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/ClientGroupMembersCollection']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/generateMap' => ['post' => [
                'operationId' => 'Maps_Generate',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'request',
                        'in' => 'body',
                        'required' => TRUE,
                        '$ref' => '#/definitions/MapRequest'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/MapResponse']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/summaries/machines' => ['get' => [
                'operationId' => 'Summaries_GetMachines',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'workspaceName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2015-11-01-preview']
                    ],
                    [
                        'name' => 'startTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    [
                        'name' => 'endTime',
                        'in' => 'query',
                        'required' => FALSE,
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/MachinesSummary']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machineGroups' => [
                'get' => [
                    'operationId' => 'MachineGroups_ListByWorkspace',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'workspaceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-11-01-preview']
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/MachineGroupCollection']]]
                ],
                'post' => [
                    'operationId' => 'MachineGroups_Create',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'workspaceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-11-01-preview']
                        ],
                        [
                            'name' => 'machineGroup',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/machineGroup'
                        ]
                    ],
                    'responses' => ['201' => ['schema' => ['$ref' => '#/definitions/machineGroup']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.OperationalInsights/workspaces/{workspaceName}/features/serviceMap/machineGroups/{machineGroupName}' => [
                'get' => [
                    'operationId' => 'MachineGroups_Get',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'workspaceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-11-01-preview']
                        ],
                        [
                            'name' => 'machineGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/machineGroup']]]
                ],
                'put' => [
                    'operationId' => 'MachineGroups_Update',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'workspaceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-11-01-preview']
                        ],
                        [
                            'name' => 'machineGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'machineGroup',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/machineGroup'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/machineGroup']]]
                ],
                'delete' => [
                    'operationId' => 'MachineGroups_Delete',
                    'parameters' => [
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'workspaceName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2015-11-01-preview']
                        ],
                        [
                            'name' => 'machineGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['204' => []]
                ]
            ]
        ],
        'definitions' => [
            'Resource' => ['properties' => [
                'id' => ['type' => 'string'],
                'type' => ['type' => 'string'],
                'name' => ['type' => 'string']
            ]],
            'ResourceReference' => ['properties' => [
                'id' => ['type' => 'string'],
                'type' => ['type' => 'string'],
                'name' => ['type' => 'string']
            ]],
            'ref:machine' => ['properties' => []],
            'ProcessReference_properties' => ['properties' => ['machine' => ['$ref' => '#/definitions/ref:machine']]],
            'ref:process' => ['properties' => ['properties' => ['$ref' => '#/definitions/ProcessReference_properties']]],
            'PortReference_properties' => ['properties' => [
                'machine' => ['$ref' => '#/definitions/ref:machine'],
                'ipAddress' => ['type' => 'string'],
                'portNumber' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ]
            ]],
            'ref:port' => ['properties' => ['properties' => ['$ref' => '#/definitions/PortReference_properties']]],
            'MachineReferenceWithHints_properties' => ['properties' => [
                'displayNameHint' => ['type' => 'string'],
                'osFamilyHint' => [
                    'type' => 'string',
                    'enum' => [
                        'unknown',
                        'windows',
                        'linux',
                        'solaris',
                        'aix'
                    ]
                ]
            ]],
            'ref:machinewithhints' => ['properties' => ['properties' => ['$ref' => '#/definitions/MachineReferenceWithHints_properties']]],
            'CoreResource' => ['properties' => ['etag' => ['type' => 'string']]],
            'Timezone' => ['properties' => ['fullName' => ['type' => 'string']]],
            'AgentConfiguration' => ['properties' => [
                'agentId' => ['type' => 'string'],
                'dependencyAgentId' => ['type' => 'string'],
                'dependencyAgentVersion' => ['type' => 'string'],
                'dependencyAgentRevision' => ['type' => 'string'],
                'rebootStatus' => [
                    'type' => 'string',
                    'enum' => [
                        'unknown',
                        'rebooted',
                        'notRebooted'
                    ]
                ],
                'clockGranularity' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ]
            ]],
            'MachineResourcesConfiguration' => ['properties' => [
                'physicalMemory' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'cpus' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'cpuSpeed' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'cpuSpeedAccuracy' => [
                    'type' => 'string',
                    'enum' => [
                        'actual',
                        'estimated'
                    ]
                ]
            ]],
            'Ipv4NetworkInterface' => ['properties' => [
                'ipAddress' => ['type' => 'string'],
                'subnetMask' => ['type' => 'string']
            ]],
            'Ipv6NetworkInterface' => ['properties' => ['ipAddress' => ['type' => 'string']]],
            'NetworkConfiguration' => ['properties' => [
                'ipv4Interfaces' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/Ipv4NetworkInterface']
                ],
                'ipv6Interfaces' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/Ipv6NetworkInterface']
                ],
                'defaultIpv4Gateways' => [
                    'type' => 'array',
                    'items' => ['type' => 'string']
                ],
                'macAddresses' => [
                    'type' => 'array',
                    'items' => ['type' => 'string']
                ],
                'dnsNames' => [
                    'type' => 'array',
                    'items' => ['type' => 'string']
                ]
            ]],
            'OperatingSystemConfiguration' => ['properties' => [
                'family' => [
                    'type' => 'string',
                    'enum' => [
                        'unknown',
                        'windows',
                        'linux',
                        'solaris',
                        'aix'
                    ]
                ],
                'fullName' => ['type' => 'string'],
                'bitness' => [
                    'type' => 'string',
                    'enum' => [
                        '32bit',
                        '64bit'
                    ]
                ]
            ]],
            'VirtualMachineConfiguration' => ['properties' => [
                'virtualMachineType' => [
                    'type' => 'string',
                    'enum' => [
                        'unknown',
                        'hyperv',
                        'ldom',
                        'lpar',
                        'vmware',
                        'virtualPc',
                        'xen'
                    ]
                ],
                'nativeMachineId' => ['type' => 'string'],
                'virtualMachineName' => ['type' => 'string'],
                'nativeHostMachineId' => ['type' => 'string']
            ]],
            'HypervisorConfiguration' => ['properties' => [
                'hypervisorType' => [
                    'type' => 'string',
                    'enum' => [
                        'unknown',
                        'hyperv'
                    ]
                ],
                'nativeHostMachineId' => ['type' => 'string']
            ]],
            'Machine_properties' => ['properties' => [
                'timestamp' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'monitoringState' => [
                    'type' => 'string',
                    'enum' => [
                        'monitored',
                        'discovered'
                    ]
                ],
                'virtualizationState' => [
                    'type' => 'string',
                    'enum' => [
                        'unknown',
                        'physical',
                        'virtual',
                        'hypervisor'
                    ]
                ],
                'displayName' => ['type' => 'string'],
                'computerName' => ['type' => 'string'],
                'fullyQualifiedDomainName' => ['type' => 'string'],
                'bootTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'timezone' => ['$ref' => '#/definitions/Timezone'],
                'agent' => ['$ref' => '#/definitions/AgentConfiguration'],
                'resources' => ['$ref' => '#/definitions/MachineResourcesConfiguration'],
                'networking' => ['$ref' => '#/definitions/NetworkConfiguration'],
                'operatingSystem' => ['$ref' => '#/definitions/OperatingSystemConfiguration'],
                'virtualMachine' => ['$ref' => '#/definitions/VirtualMachineConfiguration'],
                'hypervisor' => ['$ref' => '#/definitions/HypervisorConfiguration']
            ]],
            'machine' => ['properties' => ['properties' => ['$ref' => '#/definitions/Machine_properties']]],
            'ProcessDetails' => ['properties' => [
                'persistentKey' => ['type' => 'string'],
                'poolId' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'firstPid' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'description' => ['type' => 'string'],
                'companyName' => ['type' => 'string'],
                'internalName' => ['type' => 'string'],
                'productName' => ['type' => 'string'],
                'productVersion' => ['type' => 'string'],
                'fileVersion' => ['type' => 'string'],
                'commandLine' => ['type' => 'string'],
                'executablePath' => ['type' => 'string'],
                'workingDirectory' => ['type' => 'string']
            ]],
            'ProcessUser' => ['properties' => [
                'userName' => ['type' => 'string'],
                'userDomain' => ['type' => 'string']
            ]],
            'Process_properties' => ['properties' => [
                'timestamp' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'monitoringState' => [
                    'type' => 'string',
                    'enum' => [
                        'monitored',
                        'discovered'
                    ]
                ],
                'machine' => ['$ref' => '#/definitions/ResourceReference'],
                'executableName' => ['type' => 'string'],
                'displayName' => ['type' => 'string'],
                'startTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'role' => [
                    'type' => 'string',
                    'enum' => [
                        'webServer',
                        'appServer',
                        'databaseServer',
                        'ldapServer',
                        'smbServer'
                    ]
                ],
                'details' => ['$ref' => '#/definitions/ProcessDetails'],
                'user' => ['$ref' => '#/definitions/ProcessUser'],
                'clientOf' => ['$ref' => '#/definitions/ResourceReference'],
                'acceptorOf' => ['$ref' => '#/definitions/ResourceReference']
            ]],
            'process' => ['properties' => ['properties' => ['$ref' => '#/definitions/Process_properties']]],
            'Port_properties' => ['properties' => [
                'monitoringState' => [
                    'type' => 'string',
                    'enum' => [
                        'monitored',
                        'discovered'
                    ]
                ],
                'machine' => ['$ref' => '#/definitions/ResourceReference'],
                'displayName' => ['type' => 'string'],
                'ipAddress' => ['type' => 'string'],
                'portNumber' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ]
            ]],
            'port' => ['properties' => ['properties' => ['$ref' => '#/definitions/Port_properties']]],
            'ClientGroup_properties' => ['properties' => ['clientsOf' => ['$ref' => '#/definitions/ResourceReference']]],
            'clientGroup' => ['properties' => ['properties' => ['$ref' => '#/definitions/ClientGroup_properties']]],
            'ClientGroupMember_properties' => ['properties' => [
                'ipAddress' => ['type' => 'string'],
                'port' => ['$ref' => '#/definitions/ref:port'],
                'processes' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/ref:process']
                ]
            ]],
            'ClientGroupMember' => ['properties' => ['properties' => ['$ref' => '#/definitions/ClientGroupMember_properties']]],
            'MachineGroup_properties' => ['properties' => [
                'displayName' => ['type' => 'string'],
                'machines' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/ref:machinewithhints']
                ]
            ]],
            'machineGroup' => ['properties' => ['properties' => ['$ref' => '#/definitions/MachineGroup_properties']]],
            'Summary' => ['properties' => []],
            'MachineCountsByOperatingSystem' => ['properties' => [
                'windows' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'linux' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ]
            ]],
            'MachinesSummaryProperties' => ['properties' => [
                'total' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'live' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'os' => ['$ref' => '#/definitions/MachineCountsByOperatingSystem']
            ]],
            'MachinesSummary' => ['properties' => ['properties' => ['$ref' => '#/definitions/MachinesSummaryProperties']]],
            'Relationship' => ['properties' => []],
            'ConnectionProperties' => ['properties' => [
                'serverPort' => ['$ref' => '#/definitions/ref:port'],
                'failureState' => [
                    'type' => 'string',
                    'enum' => [
                        'ok',
                        'failed',
                        'mixed'
                    ]
                ]
            ]],
            'rel:connection' => ['properties' => ['properties' => ['$ref' => '#/definitions/ConnectionProperties']]],
            'AcceptorProperties' => ['properties' => [
                'source' => ['$ref' => '#/definitions/ref:port'],
                'destination' => ['$ref' => '#/definitions/ref:process'],
                'startTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'endTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ]
            ]],
            'rel:acceptor' => ['properties' => ['properties' => ['$ref' => '#/definitions/AcceptorProperties']]],
            'MachineCollection' => ['properties' => [
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/machine']
                ],
                'nextLink' => ['type' => 'string']
            ]],
            'ProcessCollection' => ['properties' => [
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/process']
                ],
                'nextLink' => ['type' => 'string']
            ]],
            'PortCollection' => ['properties' => [
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/port']
                ],
                'nextLink' => ['type' => 'string']
            ]],
            'ClientGroupMembersCollection' => ['properties' => [
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/ClientGroupMember']
                ],
                'nextLink' => ['type' => 'string']
            ]],
            'ConnectionCollection' => ['properties' => [
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/rel:connection']
                ],
                'nextLink' => ['type' => 'string']
            ]],
            'MachineGroupCollection' => ['properties' => [
                'value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/machineGroup']
                ],
                'nextLink' => ['type' => 'string']
            ]],
            'SummaryProperties' => ['properties' => [
                'startTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'endTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ]
            ]],
            'RelationshipProperties' => ['properties' => [
                'source' => ['$ref' => '#/definitions/ResourceReference'],
                'destination' => ['$ref' => '#/definitions/ResourceReference'],
                'startTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'endTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ]
            ]],
            'MapNodes' => ['properties' => [
                'machines' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/machine']
                ],
                'processes' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/process']
                ],
                'Ports' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/port']
                ],
                'ClientGroups' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/clientGroup']
                ]
            ]],
            'MapEdges' => ['properties' => [
                'connections' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/rel:connection']
                ],
                'acceptors' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/rel:acceptor']
                ]
            ]],
            'Map' => ['properties' => [
                'nodes' => ['$ref' => '#/definitions/MapNodes'],
                'edges' => ['$ref' => '#/definitions/MapEdges']
            ]],
            'Liveness' => ['properties' => [
                'startTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'endTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'live' => ['type' => 'boolean']
            ]],
            'MapRequest' => ['properties' => [
                'startTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'endTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ]
            ]],
            'map:single-machine-dependency' => ['properties' => ['machineId' => ['type' => 'string']]],
            'map:machine-group-dependency' => ['properties' => [
                'machineGroupId' => ['type' => 'string'],
                'filterProcesses' => ['type' => 'boolean']
            ]],
            'MapResponse' => ['properties' => [
                'startTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'endTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'map' => ['$ref' => '#/definitions/Map']
            ]],
            'ClientGroupMembersCount' => ['properties' => [
                'startTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'endTime' => [
                    'type' => 'string',
                    'format' => 'date-time'
                ],
                'groupId' => ['type' => 'string'],
                'count' => [
                    'type' => 'integer',
                    'format' => 'int32'
                ],
                'accuracy' => [
                    'type' => 'string',
                    'enum' => [
                        'actual',
                        'estimated'
                    ]
                ]
            ]],
            'Error' => ['properties' => [
                'code' => ['type' => 'string'],
                'message' => ['type' => 'string']
            ]],
            'ErrorResponse' => ['properties' => ['error' => ['$ref' => '#/definitions/Error']]]
        ]
    ];
}