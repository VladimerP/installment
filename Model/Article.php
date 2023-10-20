<?php
namespace vladimerp\installment\Model;

/**
 * @see \OxidEsales\Eshop\Application\Model\Article
 */
class Article extends Article_parent
{
    public function getInfoInstallmentPrice()
    {
        $price = $this->oxarticles__oxprice->value;
        $prepayment = $this->oxarticles__uf_installment_prepayment->value;
        $months = $this->oxarticles__uf_installment_number_of_months->value;
        if ($months == 0) {
            return $price - $prepayment;
        }
        $monthlyInstallmentPrice = ($price - $prepayment) / $months;
        $monthlyInstallmentPrice = round($monthlyInstallmentPrice, 2);
        return $monthlyInstallmentPrice;
    }

    public function hasInstallment()
    {
        return $this->oxarticles__uf_active_installment->value == 1;
    }
}