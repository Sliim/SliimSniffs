<?php
/**
 * Sliim_Sniffs_Commenting_FixmeSniff.
 *
 * PHP version 5
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim.faast@gmail.com>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 0.1
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */

/**
 * Sliim_Sniffs_Commenting_FixmeSniff.
 *
 * Warns about FIXME comments.
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim.faast@gmail.com>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 0.1
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */
class Sliim_Sniffs_Commenting_FixmeSniff
extends Generic_Sniffs_Commenting_TodoSniff
{
  /**
   * Returns an array of tokens this test wants to listen for.
   * 
   * @return array
   */
  public function register() {
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
  public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    $content = $tokens[$stackPtr]['content'];
    $matches = array();
    if (preg_match('|[^a-z]+fixme[^a-z]+(.*)|i', $content, $matches) !== 0) {
      // Clear whitespace and some common characters not required at
      // the end of a fix-me message to make the warning more informative.
      $message = trim($matches[1]);
      $message = trim($message, '[]().');
      $error   = 'Comment refers to a FIXME task';
      if ($message !== '') {
        $error .= ' "' . $message . '"';
      }

      $phpcsFile->addWarning($error, $stackPtr);
    }

  }//end process()

}//end class