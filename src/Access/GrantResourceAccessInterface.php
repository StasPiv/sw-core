<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Access;

use SmartWallet\Core\Resource\ResourceOperationInterface;

interface GrantResourceAccessInterface extends ResourceOperationInterface
{
    public function grantAccessToResource(string $userId, string $resourceId, string $userForAccessId, string $accessType = 'owner',): bool;

    public function grantAccessToResourceType(string $userId, string $userForAccessId, string $accessType = 'owner',): bool;

    public function removeAccessToResource(string $userId, string $resourceId, string $userForAccessId, string $accessType = 'owner',): bool;

    public function removeAccessToResourceType(string $userId, string $userForAccessId, string $accessType = 'owner',): bool;
}