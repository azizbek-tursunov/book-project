<?php

declare(strict_types=1);

namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserCreateAction extends AbstractController
{
    public function __invoke(User $data): void
    {
        print $data->getEmail();
        print $data->getPassword();
        exit;
    }
}