<?php

use yii\db\Migration;

/**
 * Class m181113_175913_user
 */
class m181113_175913_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'fio'=>$this->string()->notNull(),
            'email'=>$this->string()->defaultValue(null),
            'phone'=>$this->string()->defaultValue(null),
            'date_create'=>$this->dateTime('Y-m-d H:i:s'),
            'password'=>$this->string(),

        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181113_175913_user cannot be reverted.\n";

        return false;
    }
    */
}
