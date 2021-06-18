<?php

namespace Umbrella\CoreBundle\Widget\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;

class RowDeleteLinkType extends RowLinkType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver
            ->setDefault('xhr', true)
            ->setDefault('title', 'action.delete')
            ->setDefault('icon', 'mdi mdi-delete')
            ->setDefault('confirm', 'message.delete_confirm');
    }
}
