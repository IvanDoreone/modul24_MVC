<?php
class View
{
	function generate($content_view, $template_view, $data = null)
	{
		include 'view/'.$template_view;
       // include 'view/'.$content_view;
	}
}