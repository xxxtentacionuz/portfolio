<?php

use yii\db\Migration;

/**
 * Class m231119_213213_db_create1
 */
class m231119_213213_db_create1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `project`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `image` VARCHAR(255) NOT NULL
);
CREATE TABLE `contactMe`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `send` VARCHAR(255) NOT NULL
);
CREATE TABLE `aboutMe`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `lastname` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL
);
CREATE TABLE `features`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `jop` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL
);
CREATE TABLE `price`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `price` VARCHAR(255) NOT NULL,
    `silka` VARCHAR(255) NULL
);
CREATE TABLE `header`(
    `id` INT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `lastname` VARCHAR(255) NOT NULL,
    `job` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `header` ADD PRIMARY KEY(`id`);";
        $this->execute($sql);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231119_213213_db_create1 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231119_213213_db_create1 cannot be reverted.\n";

        return false;
    }
    */
}
