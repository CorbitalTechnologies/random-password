<?php 
	/**
	 * 
	 */
	class RandomPassword
	{
		protected $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		function __construct(argument)
		{
			 
		}

		public function RandomPassword($length = 4){
			return substr(str_shuffle($this->comb), 0, $length);
		}
	}
?>