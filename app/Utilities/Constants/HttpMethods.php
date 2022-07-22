<?php
    namespace App\Utilities\Constants;

    class HttpMethods {

        /**
         * Used to delete a resource identified by filters or ID.
         */
        const DELETE = "DELETE";

        /**
         * Can be Used to modify resources.
         */
        const UPDATE = "PUT";

        /**
         * Used to create subordinate resources.
         */
        const POST = "POST";

        /**
         * Read (or retrieve) a representation of a resource.
         */
        const GET = "GET";
    }
