<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    private $locale;
    protected $table = 'blogs_';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->locale = app()->getLocale();
        $this->table = $this->table . $this->locale;
    }
}
