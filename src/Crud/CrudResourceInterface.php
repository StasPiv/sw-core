<?php

declare(strict_types = 1);

namespace SmartWallet\Core\Crud;

use SmartWallet\Core\Crud\Create\CreateResourceInterface;
use SmartWallet\Core\Crud\Delete\DeleteResourceInterface;
use SmartWallet\Core\Crud\Read\ReadResourceInterface;
use SmartWallet\Core\Crud\Read\ReadResourcesInterface;
use SmartWallet\Core\Crud\Update\UpdateResourceInterface;

interface CrudResourceInterface extends
    CreateResourceInterface,
    ReadResourceInterface,
    ReadResourcesInterface,
    UpdateResourceInterface,
    DeleteResourceInterface
{
}