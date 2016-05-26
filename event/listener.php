<?php

namespace nicebb\pmsearch\event;

class listener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => 'user_setup',
			'core.permissions' => 'add_permissions',
		);
	}

	public function user_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'nicebb/pmsearch',
			'lang_set' => 'mods/pm_search',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_pm_search'] = array('lang' => 'ACL_U_PM_SEARCH', 'cat' => 'pm');
		$event['permissions'] = $permissions;
	}

}
