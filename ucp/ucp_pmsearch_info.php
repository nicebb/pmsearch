<?php

namespace nicebb\pmsearch\ucp;

class ucp_pmsearch_info
{
	function module()
	{
		return array(
			'filename' => '\nicebb\pmsearch\ucp\ucp_pmsearch_module',
			'title' => 'UCP_PM_SEARCH',
			'version' => '1.0.0',
			'modes' => array(
				'search' => array(
					'title' => 'UCP_PM_SEARCH',
					'cat' => array('UCP_PM'),
					'auth' => 'acl_u_pm_search',
				),
			),
		);
	}
}
