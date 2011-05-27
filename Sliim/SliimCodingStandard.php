<?php
/**
 * PHP_CodeSniffer_Standards_Sliim_SliimCodingStandard
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

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
  throw new PHP_CodeSniffer_Exception(
    'Class PHP_CodeSniffer_Standards_CodingStandard not found'
    );
}

/**
 * PHP_CodeSniffer_Standards_Sliim_SliimCodingStandard
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
 *
 * @package PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_Sliim_SliimCodingStandard
extends PHP_CodeSniffer_Standards_CodingStandard
{

  /**
   * Return a list of external sniffs to include with this standard.
   *
   * The standard can include the whole standards or individual Sniffs.
   *
   * @return array
   */
  public function getIncludedSniffs() {
    return array(
        'Generic/Sniffs/Files/LineLengthSniff.php',
        'Generic/Sniffs/Classes/',
        'Generic/Sniffs/Formatting/',
        'Generic/Sniffs/NamingConventions/',
        'Generic/Sniffs/Functions/OpeningFunctionBraceKernighanRitchieSniff.php',
        'Generic/Sniffs/CodeAnalysis/',
        'Generic/Sniffs/WhiteSpace/DisallowTabIndentSniff.php',

        'PEAR/Sniffs/Commenting/InlineCommentSniff.php',
        'PEAR/Sniffs/Commenting/FunctionCommentSniff.php',
        'PEAR/Sniffs/Files/LineEndingsSniff.php',
        'PEAR/Sniffs/Files/IncludingFileSniff.php',
        'PEAR/Sniffs/Classes/',
        'PEAR/Sniffs/NamingConventions/ValidClassNameSniff.php',
        'PEAR/Sniffs/Functions/',
        'PEAR/Sniffs/WhiteSpace/ObjectOperatorIndentSniff.php',
        'PEAR/Sniffs/WhiteSpace/ScopeClosingBraceSniff.php',

        'Squiz/Sniffs/Arrays/',
        'Squiz/Sniffs/Classes/DuplicatePropertySniff.php',
        'Squiz/Sniffs/Operators/',
        'Squiz/Sniffs/Objects/ObjectInstantiationSniff.php',
        'Squiz/Sniffs/Strings/',
        'Squiz/Sniffs/PHP/',
        'Squiz/Sniffs/WhiteSpace/',
        'Squiz/Sniffs/ControlStructures/',

        'Zend/Sniffs/NamingConventions/ValidVariableNameSniff.php',
        'Zend/Sniffs/Debug/CodeAnalyzerSniff.php'

    );
  }

  /**
   * Return a list of external sniffs to exclude from this standard.
   *
   * Including a whole standards above, individual Sniffs can then be removed here.
   *
   * @return array
   */
  public function getExcludedSniffs() {
    return array(
      'PEAR/Sniffs/Functions/FunctionDeclarationSniff.php',
      'PEAR/Sniffs/ControlStructures/InlineControlStructureSniff.php',

      'Squiz/Sniffs/PHP/EmbeddedPhpSniff.php',
      'Squiz/Sniffs/PHP/ForbiddenFunctionsSniff.php',
      'Squiz/Sniffs/Operators/ComparisonOperatorUsageSniff.php',
      'Squiz/Sniffs/Strings/ConcatenationSpacingSniff.php',
      'Squiz/Sniffs/WhiteSpace/ScopeIndentSniff.php',
      'Squiz/Sniffs/WhiteSpace/FunctionSpacingSniff.php',
      'Squiz/Sniffs/WhiteSpace/FunctionClosingBraceSpaceSniff.php',
      'Squiz/Sniffs/WhiteSpace/FunctionOpeningBraceSpaceSniff.php',
      'Squiz/Sniffs/ControlStructures/SwitchDeclarationSniff.php',
      'Squiz/Sniffs/ControlStructures/InlineIfDeclarationSniff.php'
    );
  }

}
