<?php
/**
 * Sliim_Sniffs_Files_LineLengthSniff.
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
 * Sliim_Sniffs_Files_LineLengthSniff.
 *
 * Checks all lines in the file, and throws warnings if they are over 80
 * characters in length and errors if they are over 100. Both these
 * figures can be changed by extending this sniff in your own standard.
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim@mailoo.org>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 0.1
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */
class Sliim_Sniffs_Files_LineLengthSniff extends Generic_Sniffs_Files_LineLengthSniff
{

  /**
   * The limit that the length of a line should not exceed.
   *
   * @var int
   */
  public $lineLimit = 100;

  /**
   * The limit that the length of a line must not exceed.
   *
   * Set to zero (0) to disable.
   *
   * @var int
   */
  public $absoluteLineLimit = 130;

}