<?
/*

Attempts to load a function (the actual plan text code of that function).

*/

function load_function_from_file(string $fn, string $filename, int $start_line, int $end_line): string
{
    if( !$file = fopen($filename,'r') )
    {
        echo 'ERROR: unable to open file ' . $filename . 'PHP_EOL';
        return '';
    }

}




/*

foreach( $functions as $function) {

    $rf = new ReflectionFunction($function);
    // expect line endings in the same format as the host machine
    // e.g. for a windows host, expect \r\n, on linux expect \n
    // TODO we should attempt to determine line endings for the file and use that
    if( !($file = fopen($filename, 'r')) ) {
        echo 'ERROR: Unable to open file' . PHP_EOL;
    }

    $line_number = 1;
    $fn = [];
    while( ($line = fgets($file)) !== false && $line_number++ <= $rf->getEndLine() ) {
        if( $line_number > $rf->getStartLine() ) {
            $fn[] = $line;
        }
    }

    echo implode($fn) . PHP_EOL;
}
*/
