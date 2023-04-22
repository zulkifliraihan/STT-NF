-- CreateTable
CREATE TABLE `Datacovids` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `total_kasus` INTEGER NOT NULL,
    `total_sembuh` INTEGER NOT NULL,
    `total_meninggal` INTEGER NOT NULL,
    `total_dirawat` INTEGER NOT NULL,
    `total_vaccined` INTEGER NOT NULL,
    `country` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
    `updated_at` TIMESTAMP(0) NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
