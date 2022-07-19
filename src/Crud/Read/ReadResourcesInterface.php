<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Crud\Read;

use SmartWallet\Core\Resource\ResourceOperationInterface;

interface ReadResourcesInterface extends ResourceOperationInterface
{
    public function readResources(string $userId, array $filter): array;
}