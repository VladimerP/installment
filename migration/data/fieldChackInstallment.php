<?php

declare(strict_types=1);

namespace OxidEsales\VladimerP\Installment;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class UFActive extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE `oxarticles` ADD `UF_ACTIVE_INSTALLMENT` TINYINT(1) DEFAULT 0 COMMENT "Active installment"');

    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE `oxarticles` DROP COLUMN `UF_ACTIVE_INSTALLMENT`');
    }
}