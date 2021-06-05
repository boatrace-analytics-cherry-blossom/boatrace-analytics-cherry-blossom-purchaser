<?php

return [
    'Purchaser' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Purchaser')->constructor(
        \DI\get('MainPurchaser')
    ),
    'MainPurchaser' => function ($container) {
        return $container->get('\Boatrace\Analytics\Cherry\Blossom\MainPurchaser');
    },
    'ChromeOptions' => function ($container) {
        return $container->get('\Facebook\WebDriver\Chrome\ChromeOptions');
    },
];
