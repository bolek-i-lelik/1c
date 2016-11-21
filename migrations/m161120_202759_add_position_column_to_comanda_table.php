<?php

use yii\db\Migration;

/**
 * Handles adding position to table `comanda`.
 */
class m161120_202759_add_position_column_to_comanda_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('comanda', 'image', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('comanda', 'image');
    }
}
