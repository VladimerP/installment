[{$smarty.block.parent}]

[{if $oDetailsProduct->hasInstallment()}]
[{oxstyle include=$oViewConf->getModuleUrl("installment", "out/src/css/installment.css")}]
  <!-- Button trigger modal -->
  <p>
    <button type="button" class="btn btn-primary installment-btn-banner img-bt" data-toggle="modal" data-target="#exampleModal">
    </button>
  </p>

  <!-- Modal -->
  <div class="modal fade installment-modal-color" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog installment-modal-dialog-position" role="document">
      <div class="modal-content installment-content">
        <div class="modal-header installment-modal-header-background">
          <p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </p>
          <h2 class="modal-title" id="exampleModalLabel">[{oxmultilang ident="UF_INSTALLMENT_TITLE"}]</h2>
        </div>
        <div class="modal-body block-installment-info">
          <p>
            [{oxmultilang ident="UF_INSTALLMENT_PRICE"}]
            <span class="price">
              [{$oDetailsProduct->oxarticles__oxprice->value}]
              [{$currency->sign}]
            </span>
          </p>
          <p>
            [{oxmultilang ident="UF_INSTALLMENT_PREPAYMENT"}]
            [{$oDetailsProduct->oxarticles__uf_installment_prepayment->value}]
            [{$currency->sign}]
          </p>
          <p>
            [{$oDetailsProduct->getInfoInstallmentPrice()}]
            [{$currency->sign}]
            [{oxmultilang ident="UF_INSTALLMENT_MONTHLY"}]
            <span class="installment-space"></span>
            [{$oDetailsProduct->oxarticles__uf_installment_number_of_months->value}]
          </p>
        </div>
      </div>
    </div>
  </div>
[{/if}]