<?php
if(!defined('DA_APP')){ terminate(); }

Class DA_test{
	
	
	private function show_error_default_info(){

		$str = [
		'IP: '.get_ip(),
		'URL: '.get_url(),
		'LANG: '.get_lang(),
		
		];
		
		return implode("\n",$str);
	}
	
	private function show_error($msg){
		show_error($msg);
	}
	
	private function error($msg){
		$this->show_error($this->show_error_default_info()."\n--------------------\n".$msg);
	}
	
	
	private function config(){
		
		global $da_config;
		
		
		if(empty($da_config['nick'])){
			$this->error('nick is not set');
		}
		
		
		if(empty($da_config['product']['code'])){
			$this->error('product_code is not set');
		}
		
		
		if(empty(get_lang())){
			$this->error('lang is not set');
		}


		if(!file_exists(DA_DIR.'lang/'.safe_path(get_lang()).'.php')){
			$this->error('language does not exist');
		}

		
		if(empty(get_price())){
			$this->error('product price is not set');
		}
		
		if(empty(get_price_extended())){
			$this->error('product price extension is not set');
		}
		
		
		if(empty($da_config['routing_path'])){
			$this->error('routing is not set');
		}
		
	}

	
	private function sites(){
		global $da_config;
		$sites_path = DA_DIR_SITES;
		
		foreach($da_config['routing_path'] as $k=>$v){
			if(!is_dir($sites_path.$v)){
				$this->error('site '.$sites_path.$v.' is not exists');
			}
		}
		
		
	}
		
	
	
	
	public function run(){
		$this->config();
		$this->sites();
	}
	
}
