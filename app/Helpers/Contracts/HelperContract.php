<?php
namespace App\Helpers\Contracts;

Interface HelperContract
{
        public function sendEmail($to,$subject,$data,$view,$type);
        public function createUser($data);
        public function addLeads($data);
        public function addSmtpConfig($data);
        public function getSmtpConfig();
        public function getLeads();
        public function hasKey($arr,$key);
        public function updateSmtpConfig($data);
        public function bombNext($data);
        public function setNextLead();
        public function getNextLead();
		public function getSections($dt, $titles);
}        
 ?>