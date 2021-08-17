<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class UnverifiedInstaller extends Model
{
    use HasFactory;
  	
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $table = "unverified_installers";
    protected $fillable = [ 
        'first_name','last_name','email','phone','mobile','username','password','companyabn','companyname','formdate','todate','companywebsite','postaladdress','unit_type','unit_number','street_number','street_name','street_type','suburb','state','postcode','cecaccnumber','licensenumber','cecdesignernumber','serole','signature','proofidentity','created_by','updated_by'
    ];
}