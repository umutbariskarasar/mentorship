<?php

$type = 'with_composer';

switch ( $type ) {
    case 'with_custom_autoloder':
        function custom_autoloader( $class ) {
            include 'classes/' . $class . '.php';
        }

        // register the autoloader
        spl_autoload_register( 'custom_autoloader' );
    break;

    case 'with_composer':
        require __DIR__ . '/vendor/autoload.php';
    break;
    default:
    # code...
    break;
}

$quickSort = new QuickSort();
$sorted    = $quickSort->apply( [7, 2, 1, 5, 6] );
echo json_encode($sorted);