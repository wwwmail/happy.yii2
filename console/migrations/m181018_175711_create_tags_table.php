<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tags`.
 */
class m181018_175711_create_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tags', array(
            'id' => 'int(11) not null auto_increment',
            'parent_id'=> 'int(11) default null',
            'title' => 'varchar(50) default null',
            'type_id' => 'int(11) default null',
            'primary key(id)'
            
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tags');
    }
}
