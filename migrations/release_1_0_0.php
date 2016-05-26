<?php

namespace nicebb\pmsearch\migrations;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	function update_data()
	{
		return array(
			array('permission.add', array('u_pm_search', true)),
			array('module.add', array(
				'ucp',
				'UCP_PM',
				array(
					'module_basename' => '\nicebb\pmsearch\ucp\ucp_pmsearch_module',
					'module_mode' => 'search',
					'module_auth' => 'acl_u_pm_search',
				),
			)),
		);
	}
}