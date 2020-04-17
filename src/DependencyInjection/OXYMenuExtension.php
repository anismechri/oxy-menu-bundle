<?php

namespace OXY\Bundle\MenuBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class OXYMenuExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
       
    }

    public function getAlias(): string
    {
        return 'bxi_menu';
    }
}
