<?php


namespace App\Entity;

use App\ValueObject\ParentId;

interface ProvideCommentParentId
{
    public function commentParentId(): ParentId;
}