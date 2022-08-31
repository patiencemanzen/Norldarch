<?php
    namespace App\Utilities\Constants;

    class HttpStatuses {

        /**
         * Request has been accepted for processing,
         * but the processing has not been completed
         */
        const ACCEPTED = '202';

        /**
         * The operation changed the processing states
         */
        const REDIRECT = '302';

        /**
         * The server can not process the request due to
         * an apparent client error
         */
        const BAD_REQUEST = "400";

        /**
         * use when authentication is required and has failed
         * or has not yet been provided
         */
        const UNAUTHORIZED = "401";

        /**
         * The requested resource could not be found
         */
        const NOT_FOUND = "404";

        /**
         *  When the operation goes well
         */
        const OK = "200";

        /**
         * where given values created
         */
        const CREATED = "201";

        /**
         * when an unexpected condition was encountered
         * and no more specific message is suitable.
         */
        const SERVER_ERROR = "500";

    }
