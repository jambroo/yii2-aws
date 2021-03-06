<?php

namespace jambroo\aws\view\exception;

use Aws\Common\Exception\AwsExceptionInterface;
use InvalidArgumentException;

/**
 * Exception thrown when an invalid CloudFront domain is passed
 */
class InvalidSchemeException extends InvalidArgumentException implements AwsExceptionInterface
{
}
