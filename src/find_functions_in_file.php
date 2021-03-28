<?php

/**
 * Loads a single file and returns a json array of all functions in that file.
 * Best called in a separate instance of PHP so only the bare minimum of user
 * functions are loaded.
 * 
 * Example output:
 * [
 *   "str_to_upper",
 *   "str_to_lower",
 * ]
 */


// first arg is script name, so as long as we have more than 2 args, the second one should be the filename to load
$filename = false;
if( $argc > 1 ) {
    $filename = $argv[1];
}

if( $filename === false ) {
    echo 'ERROR: No filename given' . PHP_EOL;
    exit;
}

// make no assumptions over where the file is, must be given relative to current working directory
if( !file_exists( $filename ) ) {
    echo 'ERROR: File not found: ' . $filename . PHP_EOL;
    exit;
}

include $filename;

$functions = get_defined_functions()['user'];

$response = [];
foreach( $functions as $fn )
{
    $rf = new ReflectionFunction($fn);
    $response[$fn] = [
        'file'  => $rf->getFileName(),
        'start_line' => $rf->getStartLine(),
        'end_line'   => $rf->getEndLine()
    ];
}

echo json_encode($response);
