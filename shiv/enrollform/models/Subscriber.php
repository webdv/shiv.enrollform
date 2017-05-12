<?php namespace Shiv\EnrollForm\Models;

use Model;
use Illuminate\Support\MessageBag;

/**
 * Subscriber Model
 */
class Subscriber extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'shiv_enrollform_subscribers';

    public $rules = [];    
    
    // protected $validator = Validator::make(Input::all(), $rules);
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
