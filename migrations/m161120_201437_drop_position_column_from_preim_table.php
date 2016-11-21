<?php

use yii\db\Migration;

/**
 * Handles dropping position from table `preim`.
 */
class m161120_201437_drop_position_column_from_preim_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('preim', 'image');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('preim', 'image', $this->string());
    }
}
