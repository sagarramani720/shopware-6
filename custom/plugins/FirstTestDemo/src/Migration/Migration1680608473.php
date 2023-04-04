<?php declare(strict_types=1);

namespace FirstTestDemo\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1680608473 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1680608473;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement("CREATE TABLE IF NOT EXISTS`first_test_demo` (
            `id` BINARY(16) NOT NULL,
            `name` VARCHAR(255) NOT NULL,
            `city` VARCHAR(255) NOT NULL,
            `active` TINYINT(1) NULL DEFAULT '0',
            `country_id` BINARY(16) NULL,
            `country_state_id` BINARY(16) NULL,
            `media_id` BINARY(16) NULL,
            `product_id` BINARY(16) NULL,
            `language_id` BINARY(16) NOT NULL,
            `created_at` DATETIME(3),
            `updated_at` DATETIME(3),
            PRIMARY KEY(`id`,`language_id`),
            KEY `fk.first_test_demo.country_id` (`country_id`),
            KEY `fk.first_test_demo.country_state_id` (`country_state_id`),
            KEY `fk.first_test_demo.product_id` (`product_id`),
            Key `fk.first_test_demo.media_id` (`media_id`),
            CONSTRAINT `fk.first_test_demo.country_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
            CONSTRAINT `fk.first_test_demo.country_state_id` FOREIGN KEY (`country_state_id`) REFERENCES `country_state` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
            CONSTRAINT `fk.first_test_demo.product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
            CONSTRAINT `fk.first_test_demo.media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
            CONSTRAINT `fk.first_test_demo.language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
