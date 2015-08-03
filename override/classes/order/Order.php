<?php

class Order extends OrderCore
{
	public static function generateReference()
	{
		return strtoupper(Tools::passwdGen(9, 'NUMERIC'));
	}
}
