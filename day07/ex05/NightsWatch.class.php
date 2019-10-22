<?php
class NightsWatch
{
	function fight(){}
	function recruit($who)
	{
		if (get_class($who) != "MaesterAemon")
			$who::fight();
	}
}
?>