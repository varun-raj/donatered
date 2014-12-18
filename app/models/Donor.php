<?php

class Donor extends \Eloquent {
	protected $fillable = array('name', 'phone', 'group','pin');
	protected $table = 'donors';


}