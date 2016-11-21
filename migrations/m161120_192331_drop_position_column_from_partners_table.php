<?php

use yii\db\Migration;

/**
 * Handles dropping position from table `partners`.
 */
class m161120_192331_drop_position_column_from_partners_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('partners', 'logo');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('partners', 'logo', $this->string());
    }
}
