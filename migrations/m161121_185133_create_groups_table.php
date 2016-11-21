<?php

use yii\db\Migration;

/**
 * Handles the creation for table `groups`.
 */
class m161121_185133_create_groups_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('groups', [
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
        $this->dropTable('groups');
    }
}
