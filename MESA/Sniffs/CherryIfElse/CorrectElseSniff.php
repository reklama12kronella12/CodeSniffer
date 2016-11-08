<?php
/**
 * Mesa_Sniffs_CherryIfElse_CorrectElseSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Andrej Kryzanovskij <andrejkryzanovskij@live.com>
 * @copyright
 * @version   Release: 2.7.0
 * @link      http://pear.php.net/package/PHP_CodeSniffer
  */

/**
 * Mesa_Sniffs_CherryIfElse_CorrectElseSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Andrej Kryzanovskij <andrejkryzanovskij@live.com>
 * @copyright
 * @version   Release: 2.7.0
 * @link      http://pear.php.net/package/PHP_CodeSniffer
  */

class MESA_Sniffs_CherryIfElse_CorrectElseSniff implements PHP_CodeSniffer_Sniff
{
    public function register()
    {
        return array(T_OPEN_CURLY_BRACKET);
    } // end register()

    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                         in the stack passed in $tokens.
     *
     * @return void
     */

    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$stackPtr - 2]['content'] == '}'
            || $tokens[$stackPtr- 3]['content'] == '}'
            || $tokens[$stackPtr- 1]['content'] == '}'
        ) {
            $error = "Unacceptable expression: '} {', } '\n' { ";
            $phpcsFile->addError($error, $stackPtr);
        }
    }// end process()
}//end class
