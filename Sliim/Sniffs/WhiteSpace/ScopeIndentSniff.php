<?php
/**
 * Sliim_Sniffs_Whitespace_ScopeIndentSniff.
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

if (class_exists('Generic_Sniffs_WhiteSpace_ScopeIndentSniff', true) === false) {
  $error = 'Class Generic_Sniffs_WhiteSpace_ScopeIndentSniff not found';
  throw new PHP_CodeSniffer_Exception($error);
}

/**
 * Sliim_Sniffs_Whitespace_ScopeIndentSniff.
 *
 * Checks that control structures are structured correctly, and their content
 * is indented correctly.
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim@mailoo.org>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 0.1
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */
class Sliim_Sniffs_WhiteSpace_ScopeIndentSniff
extends Generic_Sniffs_WhiteSpace_ScopeIndentSniff
{

  /**
   * The number of spaces code should be indented.
   *
   * @var int
   */
  protected $indent = 2;

}//end class
