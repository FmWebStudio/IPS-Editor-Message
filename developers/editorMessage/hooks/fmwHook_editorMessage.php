//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook15 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'topic' => 
  array (
    0 => 
    array (
      'selector' => 'div[itemtype=\'http://schema.org/Question\'] > div[data-controller=\'core.front.core.commentFeed,forums.front.topic.view, core.front.core.ignoredComments\'] > div[data-role=\'replyArea\'].cTopicPostArea.ipsBox.ipsBox_transparent.ipsAreaBackground.ipsPad.ipsSpacer_top',
      'type' => 'add_inside_start',
      'content' => '{template="editorMessage" group="plugins" location="global" app="core" params="$topic->forum_id"}',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}
