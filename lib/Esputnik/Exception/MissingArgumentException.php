<?php

namespace Esputnik\Exception;

/**
 * MissingArgumentException.
 *
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class MissingArgumentException extends ErrorException
{
    public function __construct(array $required, $code = 0, $previous = null)
    {
        if (is_string($required)) {
            $required = [$required];
        }

        parent::__construct(sprintf('One or more of required ("%s") parameters is missing!', implode('", "', $required)), $code, $previous);
    }
}
