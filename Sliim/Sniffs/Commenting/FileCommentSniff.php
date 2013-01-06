<?php
/**
 * Sliim_Sniffs_Commenting_FileCommentSniff
 *
 * PHP version 5
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim@mailoo.org>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */

if (class_exists('PHP_CodeSniffer_CommentParser_ClassCommentParser', TRUE) === FALSE) {
    throw new PHP_CodeSniffer_Exception(
        'Class PHP_CodeSniffer_CommentParser_ClassCommentParser not found'
    );
}

/**
 * Sliim_Sniffs_Commenting_FileCommentSniff
 *
 * PHP version 5
 *
 * Verifies that :
 * <ul>
 *  <li>A doc comment exists.</li>
 *  <li>There is a blank newline after the short description.</li>
 *  <li>There is a blank newline between the long and short description.</li>
 *  <li>There is a blank newline between the long description and tags.</li>
 *  <li>A PHP version is specified.</li>
 *  <li>Check the order of the tags.</li>
 *  <li>Check the indentation of each tag.</li>
 *  <li>Check required and optional tags and the format of their content.</li>
 * </ul>
 *
 * @category PHP
 * @package  CodeSniffer
 * @author   Sliim <sliim@mailoo.org>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * @link     http://www.sliim-projects.eu
 */

class Sliim_Sniffs_Commenting_FileCommentSniff
extends PEAR_Sniffs_Commenting_FileCommentSniff
{

    /**
     * Tags in correct order and related info.
     *
     * @var array
     */
    protected $tags = array(
                       'category'   => array(
                                        'required'       => FALSE,
                                        'allow_multiple' => FALSE,
                                        'order_text'     => 'precedes @package',
                                       ),
                       'package'    => array(
                                        'required'       => FALSE,
                                        'allow_multiple' => FALSE,
                                        'order_text'     => 'follows @category',
                                       ),
                       'subpackage' => array(
                                        'required'       => FALSE,
                                        'allow_multiple' => FALSE,
                                        'order_text'     => 'follows @package',
                                       ),
                       'author'     => array(
                                        'required'       => TRUE,
                                        'allow_multiple' => TRUE,
                                        'order_text'     => 'follows @subpackage (if used) or @package',
                                       ),
                       'copyright'  => array(
                                        'required'       => FALSE,
                                        'allow_multiple' => TRUE,
                                        'order_text'     => 'follows @author',
                                       ),
                       'license'    => array(
                                        'required'       => TRUE,
                                        'allow_multiple' => FALSE,
                                        'order_text'     => 'follows @copyright (if used) or @author',
                                       ),
                       'version'    => array(
                                        'required'       => FALSE,
                                        'allow_multiple' => FALSE,
                                        'order_text'     => 'follows @license',
                                       ),
                       'link'       => array(
                                        'required'       => TRUE,
                                        'allow_multiple' => TRUE,
                                        'order_text'     => 'follows @version (if used) or @license',
                                       ),
                       'see'        => array(
                                        'required'       => FALSE,
                                        'allow_multiple' => TRUE,
                                        'order_text'     => 'follows @link',
                                       ),
                       'since'      => array(
                                        'required'       => FALSE,
                                        'allow_multiple' => FALSE,
                                        'order_text'     => 'follows @see (if used) or @link',
                                       ),
                       'deprecated' => array(
                                        'required'       => FALSE,
                                        'allow_multiple' => FALSE,
                                        'order_text'     => 'follows @since (if used) or @see (if used) or @link',
                                       ),
                      );


    /**
     * Process the version tag.
     *
     * @param int $errorPos The line number where the error occurs.
     *
     * @return void
     */
    protected function processVersion($errorPos)
    {
        $version = $this->commentParser->getVersion();
        if ($version !== NULL) {
            $content = $version->getContent();
            $matches = array();
            if (empty($content) === TRUE) {
                $error = 'Content missing for @version tag in file comment';
                $this->currentFile->addError($error, $errorPos);
            }
        }

    }//end processVersion()


}//end class
