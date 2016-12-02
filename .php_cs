<?php

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers(array(
        // Symfony
        'extra_empty_lines',              // Removes extra empty lines.
        'blankline_after_open_tag',       // Ensure there is no code on the same line as the PHP open tag and it is followed by a blankline.
        'multiline_array_trailing_comma', // PHP multi-line arrays should have a trailing comma.
        'new_with_braces',                // All instances created with new keyword must be followed by braces.
        'phpdoc_params',                  // All items of the @param, @throws, @return, @var, and @type phpdoc tags must be aligned vertically.
        'phpdoc_separation',              // Annotations in phpdocs should be grouped together so that annotations of the same type immediately follow each other, and annotations of a different type are separated by a single blank line.
        'remove_lines_between_uses',      // Removes line breaks between use statements.
        'return',                         // An empty line feed should precede a return statement.
        'single_array_no_trailing_comma', // PHP single-line arrays should not have trailing comma.
        'single_quote',                   // Convert double quotes to single quotes for simple strings.
        'standardize_not_equal',          // Replace all <> with !=.
        'unused_use',                     // Unused use statements must be removed.
        'whitespacy_lines',               // Remove trailing whitespace at the end of blank lines.

        // contrib
        'align_double_arrow',                         // Align double arrow symbols in consecutive lines.
        'align_equals',                               // Align equals symbols in consecutive lines.
        'concat_with_spaces',                         // Concatenation should be used with at least one whitespace around.
        'logical_not_operators_with_successor_space', // Logical NOT operators (!) should have one trailing whitespace.
        'ordered_use',                                // Ordering use statements.
        'phpdoc_order',                               // Annotations in phpdocs should be ordered so that param annotations come first, then throws annotations, then return annotations.
        'short_array_syntax',                         // PHP arrays should use the PHP 5.4 short-syntax.
    ))
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(getcwd())
    )
;
