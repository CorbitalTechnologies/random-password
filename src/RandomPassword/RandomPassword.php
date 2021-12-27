<?php
namespace Corbital\RandomPassword; 
	/**
	 * 
	 */
	class RandomPassword
	{
		protected $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		function __construct()
		{
			 
		}

		public function RandomPassword($length = 4){
			return substr(str_shuffle($this->comb), 0, $length);
		}
	}
?>