<?php

use yii\db\Migration;

/**
 * Class m181115_201526_add_link_users_revies
 */
class m181115_201526_add_link_users_revies extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // creates index for column `id_city`

        $this->createIndex(
            'idx-reviews-id_author',
            'reviews',
            'id_autor'
        );
        // add foreign key for table `city`
        $this->addForeignKey(
            'fk-user-id_autor',
            'reviews',
            'id_autor',
            'users',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181115_201526_add_link_users_revies cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181115_201526_add_link_users_revies cannot be reverted.\n";

        return false;
    }
    */
}
