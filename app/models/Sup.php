<?php

/**
 * Sup
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $uuid
 * @property string $content
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $sender
 * @property-read \Illuminate\Database\Eloquent\Collection|\User[] $recievers
 * @method static \Illuminate\Database\Query\Builder|\Sup whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Sup whereUserId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Sup whereUuid($value) 
 * @method static \Illuminate\Database\Query\Builder|\Sup whereContent($value) 
 * @method static \Illuminate\Database\Query\Builder|\Sup whereType($value) 
 * @method static \Illuminate\Database\Query\Builder|\Sup whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Sup whereUpdatedAt($value) 
 */
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