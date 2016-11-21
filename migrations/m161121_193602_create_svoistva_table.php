<?php

use yii\db\Migration;

/**
 * Handles the creation for table `svoistva`.
 */
class m161121_193602_create_svoistva_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('svoistva', [
            'id' => $this->primaryKey(),
            'code' => $this->string(),
            'name' => $this->string(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('svoistva');
    }
}
