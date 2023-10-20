<?php

declare(strict_types=1);

namespace OxidEsales\VladimerP\Installment;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class UFMonths extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE `oxarticles` ADD `UF_INSTALLMENT_NUMBER_OF_MONTHS` TINYINT UNSIGNED NOT NULL DEFAULT 0 COMMENT "Number of installment months"');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE `oxarticles` DROP COLUMN `UF_INSTALLMENT_NUMBER_OF_MONTHS`');
    }
}