<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
final class ParentId
{
    protected string $entityName;
    protected string $entityId;

    public function __construct(string $entityName, string $entityId)
    {
        $this->entityName = $entityName;
        $this->entityId = $entityId;
    }
}