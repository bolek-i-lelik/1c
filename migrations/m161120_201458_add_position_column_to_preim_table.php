<?php

use yii\db\Migration;

/**
 * Handles adding position to table `preim`.
 */
class m161120_201458_add_position_column_to_preim_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('preim', 'image', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('preim', 'image');
    }
}
