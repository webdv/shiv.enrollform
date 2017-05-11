<?php namespace Shiv\EnrollForm\Models;

use Model;

/**
 * Subscriber Model
 */
class Subscriber extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'shiv_enrollform_subscribers';

    public $rules = [
    'first_name'                    => 'required|between:4,16',
    'last_name'                     => 'between:4,16',
    'email'                         => 'required|email',
    'phone'                         => 'required|numeric',
    'interested_in'                 => 'required|between:4,32',
    'is_subscriber'                 => 'boolean',
    'comment'                       => 'between:2,32',
    ];    

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['first_name','last_name','email','phone','interested_in','is_subscriber','comment'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
