<?php

use PhpDeal\ZF2\PhpDealModule\Factory;

return [
    'service_manager' => [
        'abstract_factories' => [
            Factory\AbstractAspectFactory::class
        ]
    ],
    'goaop_aspect' => [
        PhpDeal\Aspect\InvariantCheckerAspect::class,
        PhpDeal\Aspect\PostconditionCheckerAspect::class,
        PhpDeal\Aspect\PreconditionCheckerAspect::class
    ]
];
