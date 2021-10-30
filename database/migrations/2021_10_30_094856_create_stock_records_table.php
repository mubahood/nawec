<?php

use App\Models\Contract;
use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Contract::class);
            $table->text(Administrator::class)->nullable();
            $table->text('fuel_type')->nullable();
            $table->text('title')->nullable();
            $table->text('source_type')->nullable();
            $table->text('quantity')->nullable();
            $table->tinyInteger('is_add_stock')->nullable();
            $table->bigInteger('from_tank_id')->nullable();            
            $table->bigInteger('to_tank_id')->nullable();            
            $table->text('details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_records');
    }
}
