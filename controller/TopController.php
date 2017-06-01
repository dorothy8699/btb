<?php
require './core/MySmarty.class.php';
require dirname(__FILE__) . '/../vendor/autoload.php';
require dirname(__FILE__) . '/../lib/Coincheck/Coincheck.php';
require dirname(__FILE__) . '/../lib/Coincheck/Ticker.php';
require dirname(__FILE__) . '/../lib/Coincheck/Trade.php';
require dirname(__FILE__) . '/../lib/Coincheck/Send.php';
require dirname(__FILE__) . '/../lib/Coincheck/Transfer.php';
require dirname(__FILE__) . '/../lib/Coincheck/Account.php';
require dirname(__FILE__) . '/../lib/Coincheck/BankAccount.php';
require dirname(__FILE__) . '/../lib/Coincheck/Borrow.php';
require dirname(__FILE__) . '/../lib/Coincheck/Deposit.php';
require dirname(__FILE__) . '/../lib/Coincheck/Leverage.php';
require dirname(__FILE__) . '/../lib/Coincheck/Order.php';
require dirname(__FILE__) . '/../lib/Coincheck/OrderBook.php';
require dirname(__FILE__) . '/../lib/Coincheck/Withdraw.php';
require dirname(__FILE__) . '/../lib/Coincheck/Rate.php';


use Coincheck\Coincheck;

/**
 * function init
 *
 * @author Dorothy <koueig@gmail.com> 2016-06-06
 */

class TopController
{
	private $coincheck;

	public function __construct(){
		$this->coincheck = new Coincheck(Consts::$access_key, Consts::$secret_key);
	}

	public function init(){
		$result = $this->getTransaction();
		$smarty = new MySmarty();
		$smarty -> assign('rate',$result['rate']);
		$smarty -> assign('last',$result['last']);
		$smarty -> assign('bid',$result['bid']);
		$smarty -> assign('ask',$result['ask']);
		$smarty -> assign('high',$result['high']);
		$smarty -> assign('low',$result['low']);
		$smarty -> assign('btc',$result['btc']);
		$smarty -> assign('jpy',$result['jpy']);
		$smarty -> assign('jpy_reserved',$result['jpy_reserved']);
		$smarty -> assign('btc_reserved',$result['btc_reserved']);
		session_start();
		$_SESSION['recode'] = array();
		$smarty->display('top.tpl');

	}

	public function polling(){
		$result = $this->getTransaction();
		sleep(1);
		session_start();

		if(!isset($_SESSION['recode'])) $_SESSION['recode'] = array();
		$memo = $_SESSION['recode'];

		if(count($memo)>50) array_pop($memo);
		array_push($memo,$result['bid']);
		$_SESSION['recode'] = $memo;

		$count = count($_SESSION['recode']);
		$total = 0;
		foreach($_SESSION['recode'] as $recode){
			$total = $total + $recode;
		}
		$average = floor($total/$count);
		$max = max($_SESSION['recode']);
		$min = min($_SESSION['recode']);
		//$buyValue = floor(($min + $average)/2);
		//$sellValue = floor(($max + $average)/2);
		$buyValue = $average - 1000;
		$sellValue = $average + 1000;

		if($result['jpy'] > 3000){
			$this->goBuy($result,$buyValue);
			sleep(1);
		}

		if($result['btc'] > 0.01){
			$this->goSell($result,$sellValue);
			sleep(1);
		}
		$result['buyValue'] = $buyValue;
		$result['sellValue'] = $sellValue;
		echo json_encode($result);
		
	}

	private function getTransaction(){
		$result = $this->coincheck->ticker->all();
		$rateArr = $this->coincheck->rate->all();
		$accountArr = $this->coincheck->account->balance();
		$result['rate'] = $rateArr['rate'];
		$result['jpy'] = $accountArr['jpy'];
		$result['btc'] = $accountArr['btc'];
		$result['jpy_reserved'] = $accountArr['jpy_reserved'];
		$result['btc_reserved'] = $accountArr['btc_reserved'];
		return $result;
	}

	private function goBuy($result,$value){
		//if($result['bid'] < $value){
			$amount = $this->getAmount();
			$coincheck = new Coincheck(Consts::$access_key, Consts::$secret_key);
			$res = $coincheck->order->create(array(
				"rate" => $value,
				"amount" => $amount,
				"order_type" => "buy",
				"pair" => "btc_jpy"
			));
		//}
		return;
	}

	private function goSell($result,$value){
		//if($result['ask'] > $value){
			$amount = $this->getAmount();
			$coincheck = new Coincheck(Consts::$access_key, Consts::$secret_key);
			$res = $coincheck->order->create(array(
			    "rate" => $value,
				"amount" => $amount,
				"order_type" => "sell",
				"pair" => "btc_jpy"
			));
		//}

		return;
	}

	private function getAmount(){
		$value = rand(5000,13000)/1000000;
		$count = rand(2,9);
		$amount = round($value,$count);
		return $amount;
	}


}