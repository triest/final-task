<?php

use yii\db\Migration;

/**
 * Class m181116_172824_add_culumn_usrname_to_user_table
 */
class m181116_172824_add_culumn_usrname_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'username', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'username');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_172824_add_culumn_usrname_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
