<?php

use yii\db\Migration;

/**
 * Handles adding position to table `product`.
 */
class m161121_203111_add_position_column_to_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('product', 'description', $this->string(2000));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('product', 'description');
    }
}
