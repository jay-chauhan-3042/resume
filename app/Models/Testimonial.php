<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblTestimonials';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'testimonialName', 'testimonialDescription', 'testimonialImage', 'testimonialDate',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'testimonialDate' => 'CURRENT_TIMESTAMP',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'testimonialDate',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($testimonial) {
            $testimonial->testimonialDate = $testimonial->freshTimestamp();
        });
    }
}
