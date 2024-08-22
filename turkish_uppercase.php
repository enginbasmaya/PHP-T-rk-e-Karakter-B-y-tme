<?php
function turkish_uppercase($_TEXT_) {  
	$_SEARCH_ = array('ı','i','ş','ö','ğ','ç','ü');  
	$_REPLACE_ = array('I','İ','Ş','Ö','Ğ','Ç','Ü');  
	$_TEXT_=str_replace($_SEARCH_, $_REPLACE_, $_TEXT_);  
	$_TEXT_ = strtoupper($_TEXT_);  
	return $_TEXT_;  
}  