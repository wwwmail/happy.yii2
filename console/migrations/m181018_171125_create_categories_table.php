<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categories`.
 */
class m181018_171125_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('categories', array(
            'id' => 'int(11) not null auto_increment',
            'parent_id' => 'int(11) default 0',
            'title' => 'varchar(55) default null',
            'alias' => 'varchar(100) default null',
            'seo_title' => 'varchar(255) default null',
            'seo_description'=> 'varchar(360) default null',
            'type_id' => 'int(2) default null', 
            'active' => 'int(1) default 0',
            'primary key(id)'           
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categories');
    }
}
