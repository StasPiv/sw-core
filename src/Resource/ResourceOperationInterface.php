<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Resource;

interface ResourceOperationInterface
{
    public function getResourceType(): string;
}