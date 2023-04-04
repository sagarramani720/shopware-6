CREATE TABLE `first_test_demo` (
    `name` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3) NULL,
    `first_test_demo_id` BINARY(16) NOT NULL,
    `language_id` BINARY(16) NOT NULL,
    PRIMARY KEY (`first_test_demo_id`,`language_id`),
    KEY `fk.first_test_demo.first_test_demo_id` (`first_test_demo_id`),
    KEY `fk.first_test_demo.language_id` (`language_id`),
    CONSTRAINT `fk.first_test_demo.first_test_demo_id` FOREIGN KEY (`first_test_demo_id`) REFERENCES `first_test_demo` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT `fk.first_test_demo.language_id` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;