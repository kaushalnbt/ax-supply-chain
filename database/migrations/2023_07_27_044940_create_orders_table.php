<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('order_id', 255)->primary();
            $table->integer('cust_id')->nullable()->index('cust_id');
            $table->dateTime('order_date')->index('order_date_idx');
            $table->integer('status')->nullable();
            $table->decimal('tax', 10);
            $table->decimal('discount', 10);
            $table->decimal('ship_charged', 10);
            $table->decimal('ship_discount', 10);
            $table->decimal('product_total', 10);
            $table->string('trans_type', 255)->nullable()->index('tranny_idx');
            $table->integer('main_cust_id')->nullable();
            $table->dateTime('refund_date')->nullable();
            $table->dateTime('aweber_updated')->nullable()->index('aweber_updated');
            $table->string('parent_order_id', 255)->nullable()->index('parent_order_id');
            $table->string('shipping_method', 255)->nullable();
            $table->string('gift_email', 255)->nullable()->index('gift_email_idx');
            $table->string('shipping_first_name', 255)->nullable();
            $table->string('shipping_last_name', 255)->nullable();
            $table->string('shipping_address', 255)->nullable();
            $table->string('shipping_city', 45)->nullable();
            $table->string('shipping_state', 45)->nullable();
            $table->string('shipping_zip', 45)->nullable();
            $table->string('shipping_country', 45)->nullable();
            $table->string('shipping_phone', 14)->nullable();
            $table->string('shipping_company', 255)->nullable();
            $table->string('billing_first_name', 255);
            $table->string('billing_last_name', 255);
            $table->string('billing_address', 255);
            $table->string('billing_city', 45);
            $table->string('billing_state', 45);
            $table->string('billing_zip', 45);
            $table->string('billing_country', 45);
            $table->string('billing_phone', 14)->nullable();
            $table->string('billing_company', 255)->nullable();
            $table->dateTime('ac_updated')->nullable()->index('ac_updated');
            $table->string('coupons', 255)->nullable();
            $table->decimal('order_fees', 10)->nullable();
            $table->decimal('order_fees_intl', 10)->nullable();
            $table->decimal('pick_fees', 10)->nullable();
            $table->string('fraud_filter', 50)->nullable();
            $table->text('fraud_reason')->nullable();
            $table->string('gift_logged_in_portal', 25)->nullable();
            $table->string('update_billing_url', 500)->nullable();
            $table->string('auto_order_code', 255)->nullable();
            $table->string('auto_payment_status', 100)->nullable();

            $table->index(['order_date', 'status', 'shipping_country', 'billing_country', 'product_total', 'ship_charged'], 'date_states_countries_ship_gross');
            $table->index(['order_date', 'cust_id'], 'order_date_cust_id');
            $table->index(['order_date', 'refund_date'], 'order_date_refund_date_idx');
            $table->index(['trans_type', 'order_date', 'refund_date', 'order_id', 'status'], 'trans_type_idx');
            $table->index(['order_date', 'status', 'tax', 'discount', 'ship_charged', 'product_total', 'shipping_country', 'billing_country'], 'date_status_tax_discount_ship_charge_total_countries');
            $table->index(['order_date', 'refund_date', 'trans_type'], 'trans_order_refund');
            $table->index(['status', 'order_date', 'order_id', 'ship_charged', 'product_total'], 'status_order_date_order_id_idx');
            $table->index(['order_id', 'order_date'], 'order_id_order_date');
            $table->index(['order_date', 'product_total', 'order_id'], 'order_date_total_order_id_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
