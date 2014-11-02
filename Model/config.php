<?php

class Config
{
	public static function Get($path = null)
	{
		if($path)
		{
			$config = $GLOBALS['config'];
			$path = explode('/', $config);

			foreach ($path as $bit) 
			{
				if(isset($config[$bit]))
				{
					$config = $config[$bit];
				}
				
			}
		}

		return false;
	}
}