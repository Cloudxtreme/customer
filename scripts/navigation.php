<?php
/**
* Navigation active links
*/
class navigation
{
	
	function __construct($page)
	{
		return $this->page = "$page";
	}

	public function active($page)
	{
		if ($page==$this->page) {
			if ($page=='user') {
				return 'active';
			}else {
				return 'class="active"';
			}
		}
	}
}
?>