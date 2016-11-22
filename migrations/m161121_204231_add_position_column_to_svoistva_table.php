<?php

use yii\db\Migration;

/**
 * Handles adding position to table `svoistva`.
 */
class m161121_204231_add_position_column_to_svoistva_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('svoistva', 'product_id', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('svoistva', 'product_id');
    }
}
