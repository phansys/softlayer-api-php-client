<?php

// Use PHP-CS-Fixer 2+ if it is available
if (\class_exists('PhpCsFixer\Config', false)) {
    return PhpCsFixer\Config::create()
        ->setUsingCache(true)
        ->setRiskyAllowed(true)
        ->setRules(array(
            '@Symfony' => true,
            'array_syntax' => array('syntax' => 'long'),
            'binary_operator_spaces' => array(
                'align_double_arrow' => false,
                'align_equals' => false,
            ),
            'blank_line_after_opening_tag' => true,
            'ordered_imports' => true,
            'php_unit_construct' => true,
        ))
        ->setFinder(
            PhpCsFixer\Finder::create()->in(__DIR__)
        )
    ;
}

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->fixers(array(
        'newline_after_open_tag',
        'ordered_use',
        'php_unit_construct',
        'long_array_syntax',
        'unalign_double_arrow',
        'unalign_equals',
    ))
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__)
    )
;
