<?php

/**
 * TITLE
 *
 * SUBTITLE
 *
 * @author David Wingfield <dwingfield@cohere.com>
 */

namespace greeny\MailLibrary;

use Exception;

/**
 * TITLE
 *
 * SUBTITLE
 *
 * @author David Wingfield <dwingfield@cohere.com>
 * @todo Document
 */
class MailException extends Exception {

}

/**
 * TITLE
 *
 * SUBTITLE
 *
 * @author David Wingfield <dwingfield@cohere.com>
 */
class DriverException extends MailException {

}

class ConnectionException extends MailException {

}

class MailboxException extends MailException {

}

class FilterException extends MailException {

}

class InvalidFilterValueException extends FilterException {

}

class NotImplementedException extends MailException {

}
