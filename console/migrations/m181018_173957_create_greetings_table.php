<?php

use yii\db\Migration;

/**
 * Handles the creation of table `greetings`.
 */
class m181018_173957_create_greetings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('greetings', array(
            'id' => 'int(11) not null auto_increment',
            'category_id' => 'int(11) default null',
            'text' => 'text',
            'active' => 'int(1) default 0',
            'primary key(id)'
            
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('greetings');
    }
}
