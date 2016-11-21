<?php

use yii\db\Migration;

/**
 * Handles adding position to table `partners`.
 */
class m161120_192448_add_position_column_to_partners_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('partners', 'logo', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('partners', 'logo');
    }
}
