<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{

    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_number', 50);
            $table->date('invoice_Date')->nullable();
            $table->date('Due_date')->nullable();       //    تاريخ الاستحقاق او الدفع
            $table->string('product', 50);              //  after chosse section
            $table->bigInteger('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->decimal('Amount_collection',8,2)->nullable();;
            $table->decimal('Amount_Commission',8,2);
            $table->decimal('Discount',8,2);           // الخصم
            $table->decimal('Value_VAT',8,2);
            $table->string('Rate_VAT', 999);           //  الضريبة المضافة
            $table->decimal('Total',8,2);
            $table->string('Status', 50);
            $table->integer('Value_Status');
            $table->text('note')->nullable();
            $table->date('Payment_Date')->nullable();
            $table->softDeletes();                     //  to use archife
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
