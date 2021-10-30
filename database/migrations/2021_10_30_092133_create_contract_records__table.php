<?php

use App\Models\Contract;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_records_', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->foreignIdFor(Contract::class);
            $table->text('title')->nullable();
            $table->text('fuel_type')->nullable();
            $table->text('quantity')->nullable();
            $table->text('details')->nullable();
            $table->text('delivery_note')->nullable();
            $table->text('goods_received_note')->nullable();
            $table->text('recorded_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_records_');
    }
}
