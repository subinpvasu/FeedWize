<?php
ob_start();
/*
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  AdWords API integration
 */
require_once dirname(__DIR__).'/libraries/Credentials.php';
require_once dirname(__DIR__).'/libraries/Advertising.php';

use Adwords\Advertising;
class Processor {
    protected $advertising;
    protected $debug = false;
    
    public function __construct()
    {
        
        
        $arr = [
            'OAUTH2' => [
                'developerToken' => Credentials::$DEVELOPER_TOKEN,
                'clientId' => Credentials::$CLIENT_ID,
                'clientSecret' => Credentials::$CLIENT_SECRET,
                'refreshToken' => Credentials::$REFRESH_TOKEN,
            ]
        ];

        $this->advertising = new Advertising($arr,  Credentials::$MASTER_ID);
    }
 
    public function modify_account($account,$status,$leave_some)
    {
            $session = $this->advertising->createSession($account);
            return $this->advertising->ModifyAccount($this->advertising->getAdwordsServices(),$session,$status,$leave_some); 
    }
    public function list_campaign($account)
    {
            $session = $this->advertising->createSession($account);
            return $this->advertising->ListCampaignStatuses($this->advertising->getAdwordsServices(),$session); 
    }
}

