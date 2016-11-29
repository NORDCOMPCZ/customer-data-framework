<?php
/**
 * Created by PhpStorm.
 * User: mmoser
 * Date: 22.11.2016
 * Time: 13:16
 */

namespace CustomerManagementFramework\ActionTrigger\Action;

use CustomerManagementFramework\ActionTrigger\Trigger\ActionDefinitionInterface;
use CustomerManagementFramework\Model\CustomerInterface;
use Psr\Log\LoggerInterface;

interface ActionInterface {

    public function __construct(LoggerInterface $logger);

    public function process(ActionDefinitionInterface $actionDefinition, CustomerInterface $customer);
}