<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Access;

use SmartWallet\Core\Resource\ResourceOperationInterface;

interface GrantResourceAccessInterface extends ResourceOperationInterface
{
    public function grantAccessToResource(string $userId, string $resourceId, string $userForAccessId, string $accessType = 'owner',): bool;
}