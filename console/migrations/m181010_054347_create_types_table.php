<?php

use yii\db\Migration;

/**
 * Handles the creation of table `types`.
 */
class m181010_054347_create_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('types', array(
            'id' => 'int(11) not null auto_increment',
            'title' => 'varchar(55) default null',
            'active' => 'int(1) default null',
            'primary key(id)'
            
        ));
  
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('types');
    }
}
