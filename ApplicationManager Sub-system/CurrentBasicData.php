<?php
	//基本資料處理
	include_once "../Repository Sub-system/ApplicationDB.php";
	class CurrentBasicData
	{
		private $Account;
		private $Email;
		private $Name;
		private $School;
		private $Department;

		private $Database;

		function __construct()
		{
			$this->Database = new ApplicationDB();
		}

		public function SetAccount($account, $currentAccount)
		{
			$account = $currentAccount;
			echo $account;
		}

		public function SetEmail($email, $currentAccount)
		{
			$Account = $currentAccount;
			$Email = $email;
		}

		public function SetName($name, $currentAccount)
		{
			$account = $currentAccount;
			$Name = $name;
		}

		public function SetSchool($school, $currentAccount)
		{
			$account = $currentAccount;
			$School = $school;
		}

		public function SetDepartment($department, $currentAccount)
		{
			$account = $currentAccount;
			$Department = $department;
		}

		public function SaveToDB()
		{
			$this->Database->SaveBasicData($this->Email,$this->Name,$this->School,$this->Department,$this->Account);
			echo "***********************Here is basic data************************";
		}
	}
?>