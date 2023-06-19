<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%application}}`.
 */
class m230527_123456_create_application_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{%application}}', [
            'id' => $this->primaryKey(),
            'last_name' => $this->string()->notNull(),
            'first_name' => $this->string()->notNull(),
            'patronymic' => $this->string(),
            'birth_date' => $this->date(),
            'birth_place' => $this->string(),
            'citizenship' => $this->string(),
            'foreign_resident' => $this->boolean(),
            'passport_series' => $this->string(10),
            'passport_number' => $this->string(10),
            'issued_by' => $this->string(),
            'issue_date' => $this->date(),
            'division_code' => $this->string(),
            'passport_scan' => $this->string(),
            'passport_copy' => $this->string(),
            'snils_number' => $this->string(),
            'snils_scan' => $this->string(),
            'priority_right' => $this->boolean(),
            'priority_document' => $this->string(),
            'submission_date' => $this->date(),
            'user_id' => $this->integer(),
        ]);

        // Добавьте индекс и внешний ключ для связи с таблицей пользователей (если необходимо)
        $this->createIndex('idx-application-user_id', '{{%application}}', 'user_id');
        $this->addForeignKey('fk-application-user_id', '{{%application}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        // Удаление таблицы заявок
        $this->dropTable('{{%application}}');
    }
}
