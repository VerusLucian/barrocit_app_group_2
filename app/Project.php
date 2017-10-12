<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "tbl_projects";

    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    /* if project completed is true, dont tell status... weirdo*/
    /*
     * niet gestart X
     * Bezig !
     * Stop !
     * Fisnish !
     */
    public function status()
    {
        if ($this->completed != 1)
        {
            return $this->customer->status();
        }
        else
        {
            return 2;
        }
    }
}
