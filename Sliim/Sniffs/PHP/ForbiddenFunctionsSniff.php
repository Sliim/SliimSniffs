<?php
/**
 * Sliim_Sniffs_PHP_ForbiddenFunctionsSniff.
 *
 * PHP version 5
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim@mailoo.org>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 0.1
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */

/**
 * Sliim_Sniffs_PHP_ForbiddenFunctionsSniff.
 *
 * Discourages the use of alias functions that are kept in PHP for compatibility
 * with older versions. Can be used to forbid the use of any function.
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim@mailoo.org>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 0.1
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */
class Sliim_Sniffs_PHP_ForbiddenFunctionsSniff
extends Generic_Sniffs_PHP_ForbiddenFunctionsSniff
{

    /**
     * A list of forbidden functions with their alternatives.
     *
     * The value is NULL if no alternative exists. IE, the
     * function should just not be used.
     *
     * @var array(string => string|null)
     */
    protected $forbiddenFunctions = array(
                                     'sizeof'     => 'count',
                                     'delete'     => 'unset',
                                     'ereg'       => 'preg_match',
                                     'print'      => 'echo',
                                     'key_exists' => 'array_key_exists',
                                    );
}//end class
