<?php

class CWS_PLT_Test_Default_Options extends CWS_PLT_TestCase {
	function test_default_options() {
		$this->assertEquals( 3, get_option( 'txfx_plt_schema_version' ) );
	}
}
