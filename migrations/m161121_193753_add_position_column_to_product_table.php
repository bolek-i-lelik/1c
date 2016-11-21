<?php

use yii\db\Migration;

/**
 * Handles adding position to table `product`.
 */
class m161121_193753_add_position_column_to_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('product', 'group', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('product', 'group');
    }
}
