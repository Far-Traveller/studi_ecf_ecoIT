<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
//            IdField::new('id'),
//            TextField::new('title'),
//            TextEditorField::new('description'),
             TextField::new('pseudo'),
             TextField::new('firstname'),
             TextField::new('lastname'),
             TextField::new('email'),
             TextField::new('password')->hideOnIndex(),
             ChoiceField::new('roles')->setChoices([
                 'admin' => 'ROLE_ADMIN',
                 'instructor' => 'ROLE_INSTRUCTOR',
                 'learner' => 'ROLE_LEARNER'
             ])->allowMultipleChoices(),
         ];
    }

}
