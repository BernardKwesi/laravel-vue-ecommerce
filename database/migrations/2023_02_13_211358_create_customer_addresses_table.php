<?php

use App\Models\Country;
use App\Models\Customer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            
            $table->id();
            $table->string('type', 45); 
            $table->foreignIdFor(Customer::class,'customer_id');
            $table->foreignIdFor(Country::class,'country_code');
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('city',255);
            $table->string('state',45)->nullable();
            $table->string('zipcode', 45);
           
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
}
