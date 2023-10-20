<?php

declare(strict_types=1);

namespace OxidEsales\VladimerP\Installment;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class UFPrice extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE `oxarticles` ADD `UF_INSTALLMENT_PREPAYMENT` DOUBLE UNSIGNED NOT NULL DEFAULT 0 COMMENT "Article prepayment"');

    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE `oxarticles` DROP COLUMN `UF_INSTALLMENT_PREPAYMENT`');
    }
}