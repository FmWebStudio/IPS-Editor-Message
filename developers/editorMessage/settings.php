//<?php

$form->add( new \IPS\Helpers\Form\Translatable( 'editorMessage_messageContent', NULL, TRUE, array( 'app' => 'core', 'key' => 'editorMessage_messageContentLang', 'editor' => array( 'app' => 'core', 'key' => 'Admin', 'autoSaveKey' => 'editorMessage_messageContent', 'minimize' => 'editorMessage_messageContentPlaceholder' ) ) ) );
$form->add( new \IPS\Helpers\Form\Select( 'editorMessage_type', \IPS\Settings::i()->editorMessage_type, FALSE, array( 'options' => array( 'information' => 'editorMessage_typeInformation', 'success' => 'editorMessage_typeSuccess', 'warning' => 'editorMessage_typeWarning', 'error' => 'editorMessage_typeError' ) ) ) );
$form->add( new \IPS\Helpers\Form\Select( 'editorMessage_groups', \IPS\Settings::i()->editorMessage_groups == 'all' ? "all" : explode( ',', \IPS\Settings::i()->editorMessage_groups ), FALSE, array( 'options' => \IPS\Member\Group::groups( TRUE ), 'parse' => 'normal', 'multiple' => true, 'unlimited' => 'all', 'unlimitedLang' => 'all_groups' ), NULL, NULL, NULL, 'editorMessage_groups' ) );
$form->add( new \IPS\Helpers\Form\Node( 'editorMessage_forums', isset( \IPS\Settings::i()->editorMessage_forums ) ? \IPS\Settings::i()->editorMessage_forums : 0, FALSE, array( 'class' => '\IPS\forums\Forum', 'permissionCheck' => 'view', 'multiple' => true ) ) );

if ( $values = $form->values() )
{
	$form->saveAsSettings();
    \IPS\Lang::saveCustom( 'core', 'editorMessage_messageContentLang', $values['editorMessage_messageContent'] );
    
	return TRUE;
}

return $form;