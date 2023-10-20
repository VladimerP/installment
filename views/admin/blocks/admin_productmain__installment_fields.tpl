[{$smarty.block.parent}]

<tr>
    <td class="edittext">
        [{oxmultilang ident="INSTALLMENT_ACTIVE"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="hidden" name="editval[oxarticles__uf_active_installment]" value="0">
        <input class="edittext" type="checkbox" name="editval[oxarticles__uf_active_installment]" value='1' [{if $edit->oxarticles__uf_active_installment->value == 1}]checked[{/if}] [{$readonly}]>
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="INSTALLMENT_PREPAYMENT"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__uf_installment_prepayment->fldmax_length}]" name="editval[oxarticles__uf_installment_prepayment]" value="[{$edit->oxarticles__uf_installment_prepayment->value}]" [{$readonly}]>
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="INSTALLMENT_NUMBER_OF_MONTHS"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__uf_installment_number_of_months->fldmax_length}]" name="editval[oxarticles__uf_installment_number_of_months]" value="[{$edit->oxarticles__uf_installment_number_of_months->value}]" [{$readonly}]>
    </td>
</tr>