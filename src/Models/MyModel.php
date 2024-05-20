<?php

namespace Example\LaravelPackageExample\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function getUpperCaseName(): string
    {
        return strtoupper($this->name);
    }
}
