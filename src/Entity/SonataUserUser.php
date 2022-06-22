<?php


namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Sonata\UserBundle\Entity\BaseUser;

#[Entity]
#[Table(name: 'sonata_user__user')]
class SonataUserUser extends BaseUser
{
    #[Id]
    #[GeneratedValue]
    #[Column(type: 'integer')]
    protected $id;
}
