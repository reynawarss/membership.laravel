<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    const TABLE ='plans';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'stripe_name',
        'stripe_id',
        'price',
        'abbreviation',

    ];

    protected $casts = [
        'price' => PriceCast::class,
    ];
    public function getRoutekeyName()
    {
        return 'name';
    }
    
    public function id(): int
    {
        return $this->id;
    }
    public function name(): string
    {
        return $this->name;
    }
    public function stripeName(): string
    {
        return $this->stripe_name;
    }
    public function stripeId(): string
    {
        return $this->stripe_id;
    }
    public function price(): string
    {
        return '$'. $this->price;
    }
    public function abbreviation(): string
    {
        return $this->abbreviation;
    }

}
