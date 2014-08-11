<?php

class Sup extends Eloquent 
{
	protected $fillable = [];

	public function sender()
	{
		return $this->belongsTo('User');
	}

	public function recievers()
	{
		return $this->belongsToMany('User')->withTimestamps();
	}
}