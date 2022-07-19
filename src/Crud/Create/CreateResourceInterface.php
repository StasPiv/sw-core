<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Crud\Create;

use SmartWallet\Core\Resource\ResourceOperationInterface;

interface CreateResourceInterface extends ResourceOperationInterface
{
    public function createResource(string $userId, array $data): array;
}