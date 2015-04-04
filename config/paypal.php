<?php
return array(
    // set your paypal credential
    'client_id' => 'AcT3DS8a-SmTEtSl9hNcwyscoLypndD9q5L0YcfxmaUavz3p_xwFNRE-OauO',
    'secret' => 'ENv8_RCXMfhcrzdSfAWjLWDiD_GJSD-Gbm5q2Pj92vIuobCtgLpR3SUxqAhZ',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);