CREATE TABLE `first_test_demo` (
    `id` BINARY(16) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `active` TINYINT(1) NULL DEFAULT '0',
    `country_id` BINARY(16) NULL,
    `country_state_id` BINARY(16) NULL,
    `media_id` LONGTEXT NULL,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3) NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;