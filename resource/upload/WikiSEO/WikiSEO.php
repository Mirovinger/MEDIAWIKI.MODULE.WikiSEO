<?php
/**
 * WikiSEO extension - Allows per page meta settings (keywords, description) and to change the title.
 * @version 1.2.1 - 2014/12/11 (based on the work of Vladimir Radulovski and Jim Wilson)
 *
 * @link https://www.mediawiki.org/wiki/Extension:WikiSEO Documentation
 * @link https://www.mediawiki.org/wiki/Extension_talk:WikiSEO Support
 * @link https://github.com/tinymighty/wiki-seo/issues Bug tracker
 * @link https://github.com/andru/wiki-seo Source Code
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 * @author Andru Vallance (Andrujhon)
 * @copyright (C) 2013 Andru Vallance
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
// Confirm MediaWiki environment.
if (!defined('MEDIAWIKI')) {
  die('This file is a MediaWiki extension and thus not a valid entry point.');
}

if (function_exists('wfLoadExtension')) {
  wfLoadExtension('WikiSEO');

  // Keep i18n globals so mergeMessageFileList.php doesn't break
  $wgExtensionMessagesFiles['WikiSEOMagic'] = __DIR__ . '/WikiSEO.i18n.magic.php';
  $wgExtensionMessagesFiles['WikiSEO'] = __DIR__ . '/i18n';
  wfWarn(
    'Deprecated PHP entry point used for WikiSEO extension. Please use wfLoadExtension instead, ' .
    'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
  );
  return;
} else {
  die('This version of the WikiSEO extension requires MediaWiki 1.25+');
}
