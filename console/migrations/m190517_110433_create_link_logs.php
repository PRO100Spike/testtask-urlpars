<?php

use yii\db\Migration;

/**
 * Class m190517_110433_create_link_logs
 */
class m190517_110433_create_link_logs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190517_110433_create_link_logs cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('link_logs', [
            'id' => $this->primaryKey(),
            'link' => $this->text()->notNull(),
            'time' => $this->dateTime(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('link_logs');
    }
}

