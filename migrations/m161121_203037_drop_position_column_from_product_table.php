<?php

use yii\db\Migration;

/**
 * Handles dropping position from table `product`.
 */
class m161121_203037_drop_position_column_from_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('product', 'description');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('product', 'description', $this->string());
    }
}
