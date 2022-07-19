<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Crud\Update;

use SmartWallet\Core\Resource\ResourceOperationInterface;

interface UpdateResourceInterface extends ResourceOperationInterface
{
    public function updateResource(string $userId, string $resourceId, array $data = []): array;
}