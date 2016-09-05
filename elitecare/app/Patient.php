<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use Eloquence;

    protected $searchableColumns = ['name' => 40,
                                                     'registration_no' => 10,
                                                      'phone_number' => 40] ;

    protected $dates = ['birth_date'] ;
    protected $fillable = ['registration_no', 'name', 'birth_date', 'sex', 'phone_number', 'email', 'address'];

    public function treatments(){
        return $this->hasMany('App\Treatment') ;
    }

}
