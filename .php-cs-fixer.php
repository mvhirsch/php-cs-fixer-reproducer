<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_first',
            'sort_algorithm' => 'alpha',
        ],
    ])
    ->setFinder($finder)
;