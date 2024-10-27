<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\country;
use App\Models\state;
use App\Models\expensetransaction;

class branch extends Authenticatable
{
    use HasFactory;

    protected $table = 'tbl_branch'; // Specify the table name if different

    protected $fillable = [
        'branch_name',
        'mobile',
        'role',
        'email',
        'gst',
        'branch_address_one',
        'branch_address_two',
        'fax',
        'city_id',
        'state_id',
        'country_id',
        'city',
        'zip',
        'password',
        'status',
    ];

    /**
     * Get the city that the branch belongs to.
     */
    // public function city()
    // {
    //     return $this->belongsTo(City::class, 'city_id', 'id');
    // }

    /**
     * Get the state that the branch belongs to.
     */
    public function state()
    {
        return $this->belongsTo(state::class, 'state_id', 'state_id');
    }

    /**
     * Get the country that the branch belongs to.
     */
    public function country()
    {
        return $this->belongsTo(country::class, 'country_id', 'country_id');
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class, 'branch_id');
    }
    public function purchases()
    {
        return $this->hasMany(purchase::class, 'branch_id', 'id');
    }

    /**
     * Get the sales associated with the branch.
     */
    public function sales()
    {
        return $this->hasMany(sale::class, 'branch_id', 'id');
    }

    /**
     * Get the sales where this branch is the billing branch.
     */
    public function billingSales()
    {
        return $this->hasMany(sale::class, 'billing_branch_id', 'id');
    }

    public function salesItems()
    {
        return $this->hasMany(SalesItem::class, 'branch_id', 'id');
    }

    // Define the one-to-many relationship with ExpenseTransaction
    public function expenseTransactions()
    {
        return $this->hasMany(expensetransaction::class, 'branch_id');
    }
    // Define the relationship to LotStock
    public function lotStocks()
    {
        return $this->hasMany(LotStock::class, 'branch_id');
    }
}
