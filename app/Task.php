<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
    * The attributes that are mass assignable
    *
    * @var array
    */

    protected $fillable = ['title', 'description', 'priority'];

    public function user(){

    	return $this->belongsTo(User::class);

    }

    /**
    * Returns a human readable priority 
    *
    * @return String $priority
    */

    public function priorityReadable(){

    	$priorities = [
    		1 => 'Critical',
    		2 => 'High',
    		3 => 'Medium',
    		4 => 'Low'

    	];

    	$priority = $priorities[$this->priority];
    	return $priority;

    }


    /**
    * Returns a color based on priority
    *
    * @return String $color
    */

    public function priorityColor(){

    	$colors = [

    		1 => 'danger',
    		2 => 'warning',
    		3 => 'info',
    		4 => 'success'

    	];

    	$color = $colors[$this->priority];
    	return $color;

    }


    /**
    * Returns a color based on priority
    *
    * @return String $bgcolor
    */

    public function priorityBgColor(){

    	$bgcolors = [

    		1 => 'bg-danger',
    		2 => 'bg-warning',
    		3 => 'bg-info',
    		4 => 'bg-success'

    	];

    	$bgcolor = $bgcolors[$this->priority];
    	return $bgcolor;

    }

}
