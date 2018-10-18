<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tags_to_greetings`.
 */
class m181018_182859_create_tags_to_greetings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tags_to_greetings', array(
            'id' => 'int(11) not null auto_increment',
            'tag_id'=> 'int(11) default null',
            'greeting_id' => 'int(11) default null',
            'primary key(id)'
            
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tags_to_greetings');
    }
}
