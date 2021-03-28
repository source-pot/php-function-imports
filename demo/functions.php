<?php

function log_output($msg, $level=0) {
    echo str_repeat('>', $level).$msg.PHP_EOL;
}

function log_error($msg, $level) {
    log_output('ERROR: '.$msg, $level);
}

function log_debug($msg, $level) {
    log_output('DEBUG: '.$msg, $level);
}