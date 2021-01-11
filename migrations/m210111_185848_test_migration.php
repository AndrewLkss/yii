<?php

use yii\db\Migration;

/**
 * Class m210111_185848_test_migration
 */
class m210111_185848_test_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    // public function safeUp()
    // {

    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeDown()
    // {
    //     echo "m210111_185848_test_migration cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
            $this->createTable('new', [
            'id' => $this->primaryKey(),
            'title' => $this->string(12)->notNull()->unique(),
            'body' => $this->text()
        ]);
    }

    public function down()
    {
          $this->dropTable('new');

        return false;
    }
    
}
