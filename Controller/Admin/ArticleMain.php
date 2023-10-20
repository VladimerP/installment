<?php

namespace vladimerp\installment\Controller\Admin;

/**
 * @see \OxidEsales\Eshop\Application\Controller\Admin\ArticleMain
 */
class ArticleMain extends ArticleMain_parent
{
    public function save()
    {
        parent::save();
        $oConfig = $this->getConfig();
        $aParams = $oConfig->getRequestParameter('editval');
        $oArticle = oxNew(\OxidEsales\Eshop\Application\Model\Article::class);
        $oArticle->load($aParams['oxarticles__oxid']);
        $prepayment = $oArticle->oxarticles__uf_installment_prepayment->value;
        $months = $oArticle->oxarticles__uf_installment_number_of_months->value;
        try {
            if ($prepayment < 0) {
                $oArticle->oxarticles__uf_installment_prepayment->setValue(0);
                throw oxNew(\OxidEsales\Eshop\Core\Exception\ArticleInputException::class, 'ERROR_INSTALLMENT_PREPAYMENT_MUST_BE_POSITIVE');
            }
            if ($months < 0) {
                $oArticle->oxarticles__uf_installment_number_of_months->setValue(0);
                throw oxNew(\OxidEsales\Eshop\Core\Exception\ArticleInputException::class, 'ERROR_INSTALLMENT_NUMBER_OF_MONTHS_MUST_BE_POSITIVE');
            }
        } catch (\OxidEsales\Eshop\Core\Exception\ArticleInputException $oEx) {
            $oArticle->save();
            \OxidEsales\Eshop\Core\Registry::getUtilsView()->addErrorToDisplay($oEx);
        }
    }
}