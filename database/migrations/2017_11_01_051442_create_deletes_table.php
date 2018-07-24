  <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deletes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('PurchaseOrderNo');
            $table->date('PODate');
            $table->string('No');
            $table->string('itemDescription',200);
            $table->string('Make');
            $table->string('Quantity');
            $table->string('Rate');
            $table->string('Gross');
            $table->string('Tax');
            $table->string('NetAmount');
            $table->string('RTax');
            $table->string('Type');
            $table->string('ChalanNo');
            $table->date('ChalanDate');
            $table->date('ReceivedOn');
            $table->string('ReceivedBy');
            $table->string('FinancialYear');
            $table->string('CurrentStatus');
            $table->string('ItemLocation');
            $table->date('EntryDate');
            $table->rememberToken();

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
        Schema::dropIfExists('deletes');
    }
}
