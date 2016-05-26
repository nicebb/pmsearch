<?php
/**
*
* Search PM folders [English]
*
* @package language
* @version $Id: pm_search.php 6 2009-11-15 08:32:26Z jari $
* @copyright (c) 2009 Jari Kanerva tumba25@gmail.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'DATE' => 'Дата',

	'RECEIVED_AT' => 'Получено',

	'SENDER' => 'Отправитель',
	'BOTH' => 'Везде',

	'PM_SEARCH_EXPLAIN' => 'Поставьте + перед словом, которое должно быть найдено, и - перед словом, которого быть не должно.',

	'SEARCH_ALL_WORDS' => 'Искать все слова',
	'SEARCH_ANY_WORD' => 'Искать любое слово',

	'PM_SEARCH_IN_FOLDERS' => 'Искать в этих папках',
	'PM_SEARCH_IN_FOLDERS_EXPLAIN' => 'Выберите папки, в которых нужно искать сообщения.',
	'PM_SEARCH_ALL_WORDS' => 'Искать все слова',
	'PM_SEARCH_ALL_WORDS_EXPLAIN' => 'Выберите Да, чтобы искать по всем словам (равнозначно установке + перед каждым словом). Выберите Нет, чтобы искать любое слово, и используйте + перед словами, которые должны быть найдены.',
	'PM_SEARCH_WITHIN' => 'Где искать',
	'PM_SEARCH_WORD_ONLY' => 'Искать слова целиком',
	'PM_SEARCH_WORD_ONLY_EXPLAIN' => 'Искать только полностью совпадающие слова. Выберите Нет, чтобы искать совпадение по подстроке.',
	'PM_SEARCH_EXACT_QUERY' => 'Искать фразу целиком',
	'PM_SEARCH_EXACT_QUERY_EXPLAIN' => 'Выберите Да, чтобы найти точную фразу целиком. Знаки + и - не учитываются.',
	'PM_SEARCH_CASE' => 'Регистрозависимый поиск',
	'PM_SEARCH_CASE_EXPLAIN' => 'Выберите Да, чтобы учитывать регистр слов.',
	'PM_SEARCH_AUTHOR' => 'Искать по получателю или отправителю',
	'PM_SEARCH_AUTHOR_EXPLAIN' => 'Поиск по отправителю или получателю будет искать отправителя в ЛС, адресованных вам и получателя в ЛС, написанных вами.<br />Чтобы указать нескольких получателей или отправителей, напишите их через запятую.',

	'SEARCH_PM_FOLDERS' => 'Искать ЛС…',

	'UCP_PM_SEARCH' => 'Поиск по ЛС',

	'NO_AUTH_PM_SEARCH' => 'У вас нет прав на поиск по ЛС.',
));
