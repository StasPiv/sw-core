<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Crud\Read;

use SmartWallet\Core\Resource\ResourceOperationInterface;

interface ReadResourceInterface extends ResourceOperationInterface
{
    public function readResource(string $userId): array;
}