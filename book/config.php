<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2016, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL      = 'http://localhost:8888/shockscuts/book';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST       = 'localhost';
    const DB_NAME       = 'shockscuts';
    const DB_USERNAME   = 'mshockley';
    const DB_PASSWORD   = 'b4rb3rcuts';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = FALSE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = 'shockdabarber';
    const GOOGLE_CLIENT_ID      = '466211290788-s0a4b7quopnk0qe7ervbphtsrf9erkal.apps.googleusercontent.com';
    const GOOGLE_CLIENT_SECRET  = 'burJiY9Bn96Ir3SV0j8cBYOl';
    const GOOGLE_API_KEY        = 'AIzaSyBOlFMxWlhHzzGiq5N4HHKrSKwkeBBM2iE';
}

/* End of file config.php */
/* Location: ./config.php */
