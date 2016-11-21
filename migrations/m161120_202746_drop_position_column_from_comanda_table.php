<?php

use yii\db\Migration;

/**
 * Handles dropping position from table `comanda`.
 */
class m161120_202746_drop_position_column_from_comanda_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('comanda', 'image');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('comanda', 'image', $this->string());
    }
}
