<?php

/**
 * Javascript renderer for the device telemetry stack.
 * 
 * This may be called directly or used to generate a single Javascript build
 * file that may be used for the device telemetry stack.
 * 
 * @package     DTS
 * @author      Eric Bollens
 * @copyright   Copyright (c) 2012 UC Regents
 * @license     BSD
 * @version     20120131
 */

/**
 * Require the DTS library file.
 */
require_once(dirname(dirname(__FILE__)).'/src/lib.php');

/**
 * Set document headers.
 * 
 * @todo add Cache-Control header
 * @todo add Expires header
 */
header('Content-Type: text/javascript');

/**
 * Instantiate and render the DTS object via the DTS_Instance static utility.
 */
echo DTS_Instance::render();