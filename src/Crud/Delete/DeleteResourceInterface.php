<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Crud\Delete;

use SmartWallet\Core\Resource\ResourceOperationInterface;

interface DeleteResourceInterface extends ResourceOperationInterface
{
    public function deleteResource(string $userId, string $resourceId): bool;
}