<?php
namespace OXY\Bundle\MenuBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use OXY\Bundle\MenuBundle\DependencyInjection\OXYMenuExtension;

class OXYMenuBundle extends Bundle
{

    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new OXYMenuExtension();
        }

        return $this->extension ?: null;
    }
    
}
