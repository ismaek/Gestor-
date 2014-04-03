<?php

namespace Padel\AmigoBundle\Admin;

use  Sonata\AdminBundle\Admin\Admin ; 
use  Sonata\AdminBundle\Datagrid\ListMapper ; 
use  Sonata\AdminBundle\Datagrid\DatagridMapper ; 
use  Sonata\AdminBundle\Form\FormMapper ;
use  Sonata\AdminBundle\Show\ShowMapper ;

class UserAdmin extends Admin{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username',       'text',     array('label' => 'Usuario'))
            ->add('dni',            'text',     array('required' => false, 'label' => 'DNI'))
            ->add('name',           'text',     array('required' => false, 'label' => 'Nombre'))
            ->add('surname',        'text',     array('required' => false, 'label' => 'Apellidos'))
            ->add('mobilePhone',    'text',     array('required' => false, 'label' => 'Telefono Movil'))
            ->add('nivel',          'text',     array('required' => false, 'label' => 'Nivel'))
            ->add('nivelChecked',   'checkbox', array('required' => false, 'label' => 'Nivel Comprobado'))   
            ->add('lockEmail',      'checkbox', array('required' => false, 'label' => 'Permite Mailing'))
            ->add('type',           'text',     array('required' => false, 'label' => 'Tipo'))
//            ->add('image','file',array('label' => 'Imagen'))
            ->add('email',          'text',     array('required' => false, 'label' => 'Email'))
            ->add('enabled',        'checkbox', array('required' => false, 'label' => 'Habilitado'))
            ->add('password',       'text',     array('required' => false, 'label' => 'Password'))
            ->add('locked',         'checkbox', array('required' => false, 'label' => 'Bloquedao'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('dni')
            ->add('name')
            ->add('surname')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('username')
            ->add('dni')
            ->add('name')
            ->add('surname')
            ->add('mobilePhone')
            ->add('email')
        ;
    }

}