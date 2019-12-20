<?php
namespace Coomm\Jpush;

require __DIR__ . '/Jpush.php';
use JPush\Client as JPush;

class Lite {
	//appkey
	private $appkey="";
	//mastersecret
	private $mastersecret="";	
	
	public $client;
	/**
     * SMS_Lite 构造方法初始化配置
     *
     * @param  $cofAddress string 配置文件地址
     * @param  $debug      bool   是否开启调试模式
     */
    public function __construct($config = null) {
        

        if ($config === NULL) {
            //获得配置项
            $config = \PhalApi\DI()->config->get('app.Jpush');
			$this->appkey=$config['appkey'];
			$this->mastersecret=$config['mastersecret'];
        }

        $this->client = new JPush($this->appkey, $this->mastersecret);
    }  
	
}