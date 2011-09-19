<?php
/**
 * Sliim_Sniffs_Commenting_TodoSniff.
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
 * Sliim_Sniffs_Commenting_TodoSniff.
 *
 * Warns about TODO comments.
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim@mailoo.org>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 0.1
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */
class Sliim_Sniffs_Commenting_TodoSniff
extends Generic_Sniffs_Commenting_TodoSniff
{


  /**
   * Returns an array of tokens this test wants to listen for.
   * 
   * @return array
   */
  public function register()
  {
    return PHP_CodeSniffer_Tokens::$commentTokens;

  }//end register()


  /**
   * Processes this sniff, when one of its tokens is encountered.
   *
   * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
   * @param int                  $stackPtr  The position of the current token
   *                                        in the stack passed in $tokens.
   *
   * @return void
   */
  public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
  {
    $tokens = $phpcsFile->getTokens();

    $content = $tokens[$stackPtr]['content'];
    $matches = array();
    if (preg_match('|[^a-z]+todo[^a-z]+(.*)|i', $content, $matches) !== 0) {
      // Clear whitespace and some common characters not required at
      // the end of a to-do message to make the warning more informative.
      $todoMessage = trim($matches[1]);
      $todoMessage = trim($todoMessage, '[]().');
      $error       = 'Comment refers to a TODO task';
      if ($todoMessage !== '') {
        $error .= ' "' . $todoMessage . '"';
      }

      $phpcsFile->addWarning($error, $stackPtr);
    }

  }//end process()


}//end class
