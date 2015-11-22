<?php

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers(array(
        'align_double_arrow',
        'align_equals',
        'concat_with_spaces',
        'ordered_use',
        'extra_empty_lines',
        'multiline_array_trailing_comma',
        'phpdoc_order',
        'phpdoc_params',
        'remove_lines_between_uses',
        'return'
        'single_array_no_trailing_comma',
        'short_array_syntax',
        'single_quote',
        'standardize_not_equal',
        'unused_use',
        'whitespacy_lines',
    ))
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__)
    )
;
