<?php

class Order extends OrderCore
{
	public static function generateReference()
	{
		return Tools::passwdGen(9, 'NUMERIC');
	}
}
