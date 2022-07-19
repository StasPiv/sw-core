<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Access;

use SmartWallet\Core\Resource\ResourceOperationInterface;

interface CheckResourceAccessInterface extends ResourceOperationInterface
{
    public function checkAccessToResourceType(string $userId, string $accessType): bool;

    public function checkAccessToResource(string $userId, string $accessType, string $resourceId): bool;
}