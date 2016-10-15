<?php
    namespace Core;

    class abstract Model
    {
        public static $message_error = 0;

        public static function getError()
        {
            return self::$message_error;
        }
    }