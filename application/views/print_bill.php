<!-- Winter Breeze -->
<!-- Common Base Styling -->
<?php 
$primary_font = "Verdana";
$primary_font_color = "#000";
$primary_font_size = "12px";
$secondary_font = "Verdana";
$secondary_font_color = "#444";
$theme_color = "#303336";

?>
<script type="text/javascript">
    $.get("https://fonts.googleapis.com/css?family={{ primary_font | replace: " ", "+" }}:300,400,700").done(function(response) {
        var pFontCss = response.replace(/ local\(.+?\)\,/g,"");
        var pStyle = document.createElement('style');
        var pHead = document.head || document.getElementsByTagName('head')[0];
        pStyle.type = 'text/css';
        pStyle.id = 'font-primary-33363';
        if (pStyle.styleSheet){
          pStyle.styleSheet.cssText = pFontCss;
        } else {
          pStyle.appendChild(document.createTextNode(pFontCss));
        }
        pHead.appendChild(pStyle);
      });
  <?php if ($secondary_font != '' && $secondary_font != "primary_font"){?>
    <script>
      $.get("https://fonts.googleapis.com/css?family={{ secondary_font | replace: " ", "+" }}:300,400,700").done(function(response) {
        var sFontCss = response.replace(/ local\(.+?\)\,/g,"");
        var sStyle = document.createElement('style');
        var sHead = document.head || document.getElementsByTagName('head')[0];
        sStyle.type = 'text/css';
        sStyle.id = 'font-secondary-33363';
        if (sStyle.styleSheet){
          sStyle.styleSheet.cssText = sFontCss;
        } else {
          sStyle.appendChild(document.createTextNode(sFontCss));
        }
        sHead.appendChild(sStyle);
      });
    </script>
   <?php } ?>
</script>
<script>
    $(function () {
         if (navigator.userAgent.indexOf('Safari') != -1 &&
         navigator.userAgent.indexOf('Chrome') == -1) {
             $("body").addClass("safari");
         }
       });
</script>
<style type="text/css">
    /* ### BASE - PAGE SIZING AND MARGIN SETUP NORMALIZATION ACROSS BROWSERS ### */
      @page {
        margin: 12mm !important;
        margin-top: 12mm !important;
        margin-right: 12mm !important;
        margin-bottom: 12mm !important;
        margin-left: 12mm !important;
      }
      @media print {
        .safari {
          padding-top: 15px;
          box-sizing: border-box;
        }
    /*    * {
          overflow: visible !important;
        }*/
        .printer-preview-content .printer-preview-content {
          padding-right: 10px;
          box-sizing: border-box;
        }
    /*    .printer-inline-preview .printer-preview-content .printer-preview-content {
          page-break-before: always;
        }
        .printer-inline-preview-first .printer-preview-content .printer-preview-content {
          page-break-before: avoid !important;
        }*/
      }
      @media screen {
        .printer-preview-content {
          padding: 16px 0;
          min-height: 800px;
          /* background-image: url(http://basehold.it/i/16) */
        }
        .printer-preview-content .printer-preview-content {
          margin-right: auto;
          margin-left: auto;
          max-width: 620px;
        }
      }
      @media screen,print {
    
        /* ### BASE - TYPOGRAPHY AND REMOVAL OF STANDARD SHOPIFY STYLING ### */
        .printer-preview-content .t33363 * {
          color:  <?php $secondary_font_color;?>;
          font-family: <?php $primary_font;?>;
          font-size: <?php $primary_font_size; ?>;
          font-weight: 400;
          line-height: 16px;
          text-rendering: optimizeLegibility;
          margin: 0 0 0 0;
          padding: 0 0 0 0;
          -webkit-print-color-adjust: exact;
          overflow: visible !important;
        }
        .printer-preview-content .t33363 h1 {
          font-size: 28px;
          line-height: 32px;
        }
        .printer-preview-content .t33363 h2 {
          font-size: 18px;
          line-height: 32px;
        }
        .printer-preview-content .t33363 h3 {
          font-size: 14px;
          line-height: 16px;
        }
        .printer-preview-content .t33363 h1,
        .printer-preview-content .t33363 h2,
        .printer-preview-content .t33363 h3 {
          margin-bottom: 16px;
        }
        .printer-preview-content .t33363 b,
        .printer-preview-content .t33363 b * {
          font-weight: bold;
        }
        .printer-preview-content .t33363 .text-right {
          text-align: right;
        }
        .printer-preview-content .t33363 .text-center {
          text-align: center;
        }
        .printer-preview-content .t33363 .no-wrap {
          white-space: nowrap;
        }
    
        /* ### BASE - GRID AND RE-USABLE LAYOUT COMPONENTS ### */
        .printer-preview-content .t33363 .row {
          width: 100%;
          display: block;
          clear: both;
        }
        .printer-preview-content .t33363 .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .printer-preview-content .t33363 .col-xs-1,
        .printer-preview-content .t33363 .col-xs-2,
        .printer-preview-content .t33363 .col-xs-3,
        .printer-preview-content .t33363 .col-xs-4,
        .printer-preview-content .t33363 .col-xs-5,
        .printer-preview-content .t33363 .col-xs-6,
        .printer-preview-content .t33363 .col-xs-7,
        .printer-preview-content .t33363 .col-xs-8,
        .printer-preview-content .t33363 .col-xs-9,
        .printer-preview-content .t33363 .col-xs-10,
        .printer-preview-content .t33363 .col-xs-11,
        .printer-preview-content .t33363 .col-xs-12 {
          float: left;
          min-height: 1px;
          margin-bottom: 32px;
        }
        .printer-preview-content .t33363 .col-xs-12 {
          width: 100%;
        }
        .printer-preview-content .t33363 .col-xs-11 {
          width: 91.66666667%;
        }
        .printer-preview-content .t33363 .col-xs-10 {
          width: 83.33333333%;
        }
        .printer-preview-content .t33363 .col-xs-9 {
          width: 75%;
        }
        .printer-preview-content .t33363 .col-xs-8 {
          width: 66.66666667%;
        }
        .printer-preview-content .t33363 .col-xs-7 {
          width: 58.33333333%;
        }
        .printer-preview-content .t33363 .col-xs-6 {
          width: 50%;
        }
        .printer-preview-content .t33363 .col-xs-5 {
          width: 41.66666667%;
        }
        .printer-preview-content .t33363 .col-xs-4 {
          width: 33.33333333%;
        }
        .printer-preview-content .t33363 .col-xs-3 {
          width: 25%;
        }
        .printer-preview-content .t33363 .col-xs-2 {
          width: 16.66666667%;
        }
        .printer-preview-content .t33363 .col-xs-1 {
          width: 8.33333333%;
        }
        .printer-preview-content .t33363 .col-no-margin {
          margin-bottom: 0 !important;
        }
        .printer-preview-content .t33363 .clear-fix {
          clear: both;
        }
        .printer-preview-content .t33363 .half-margin-top {
          margin-top: 8px !important;
        }
        .printer-preview-content .t33363 .half-margin-bottom {
          margin-bottom: 8px !important;
        }
        .printer-preview-content .t33363 .margin-top {
          margin-top: 16px !important;
        }
        .printer-preview-content .t33363 .margin-bottom {
          margin-bottom: 16px !important;
        }
        .printer-preview-content .t33363 .double-margin-top {
          margin-top: 32px !important;
        }
        .printer-preview-content .t33363 .double-margin-bottom {
          margin-bottom: 32px !important;
        }
    
        /* ### BASE - TABLE STYLING ### */
        .printer-preview-content .t33363 table,
        .printer-preview-content .t33363 .table {
          width: 100%;
          max-width: 100%;
          background-color: transparent;
          border-collapse: collapse;
        }
        .printer-preview-content .t33363 table thead {
          display: table-row-group;
        }
        .printer-preview-content .t33363 table tbody tr {
          page-break-inside:avoid !important;
          page-break-after:auto !important;
        }
        .printer-preview-content .t33363 table tbody tr td {
          page-break-inside:avoid !important;
        }
        .printer-preview-content .t33363 th {
          white-space: nowrap;
          text-align: left;
          vertical-align: middle;
          border-top: 0;
          border-bottom: 0;
        }
        .printer-preview-content .t33363 td {
          vertical-align: middle;
          border-top: 0;
          border-bottom: 0;
        }
        .printer-preview-content .t33363 .order-table tbody > tr:nth-child(odd) td {
          background-color: #f9f9f9;
        }
        .printer-preview-content .t33363 .pricing-table tbody > tr:nth-child(even) > td {
          background-color: #f9f9f9;
        }
        .printer-preview-content .t33363 .pricing-table tbody > tr > td.pricing-table-title {
          word-break: break-all;
        }
        .printer-preview-content .t33363 th.order-table-qty {
          width: 10%;
        }
        .printer-preview-content .t33363 th.order-table-price {
          width: 10%;
        }
        .printer-preview-content .t33363 th.order-table-item-total,
        .printer-preview-content .t33363 th.order-table-reason {
          width: 12%;
        }
        .printer-preview-content .t33363 th.order-table-return-comments {
          width: 30%;
        }
        .printer-preview-content .t33363 .pricing-table-text {
          text-align: right;
          white-space: nowrap;
        }
    
        /* ### BASE - PRODUCT IMAGE SIZING TO RETAIN LINE HEIGHT RYTHM) ### */
        .printer-preview-content .t33363 .product-image-wrapper {
          width: 64px;
          max-height: 64px;
        }
        .printer-preview-content .t33363 .product-image {
          padding: 0 4px;
          page-break-inside:avoid !important;
          max-width: 64px;
        }
    
        /* ### BASE - LISTS RESET ### */
        .printer-preview-content .t33363 ul {
          list-style: none;
        }
        .printer-preview-content .t33363 li {
          color: <?php echo $secondary_font_color; ?>;
          list-style: none;
        }
    
        /* ### BASE - LOGO ### */
        .printer-preview-content .t33363 .logo-wrapper {
          display: inline-block;
          width: 100%;
        }
        .printer-preview-content .t33363 .logo {
          float: left;
          padding-right: 15px;
          max-width: 100%;
          max-height: 108.0px;
        }
    
        /* ### BASE - BARCODE ### */
        .printer-preview-content .t33363 .order-number-barcode,
        .printer-preview-content .t33363 .product-barcode {
          display: block;
        }
    
        /* ### BASE - ADDITONAL COMMON SHARED TYPOGRAPHY AND ALIGNMENT ### */
        .printer-preview-content .t33363 .address {
          margin-right: 5%;
        }
        .printer-preview-content .t33363 .notes-title,
        .printer-preview-content .t33363 .return-codes {
          margin: 8px 0;
        }
        /* ### BASE - HORIZONTAL RULE MARKS ### */
        .printer-preview-content .t33363 hr {
          background: <?php echo $theme_color;?>;
          border-top: 0;
          border: 0;
          height: 2px;
          width: 100%;
          margin-bottom: -2px;
        }
    
      }
</style>
<!-- Template Specific Styling -->
<style type="text/css">
    @media screen,print {
    
      /* ### DESIGN SPECIFIC - TYPOGRAPHY ### */
      .printer-preview-content .t33363 h1 {
        font-family: '{{ secondary_font }}';
        font-weight: bold;
        color: <?php echo $theme_color;?>;
      }
      .printer-preview-content .t33363 h2 {
        font-family: <?php echo $secondary_font;?>;
      }
      .printer-preview-content .t33363 h3 {
        font-family:<?php echo $secondary_font;?>;
        color: <?php echo $theme_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - LOGO POSITIONING ### */
      .printer-preview-content .t33363 .logo {
        float: right;
        padding-right: 0;
        margin-bottom: 16px;
      }
    
      /* ### DESIGN SPECIFIC - STORE DETAILS ### */
      .printer-preview-content .t33363 .shop-block {
        text-align: center;
      }
      .printer-preview-content .t33363 .shop-block .shop-address-block b,
      .printer-preview-content .t33363 .shop-block .shop-address-block b * {
        color:  <?php echo $primary_font_color;?>;
      }
      .printer-preview-content .t33363 .shop-block .shop-domain {
        color: <?php echo $theme_color;?>;
      }
    
      .printer-preview-content .t33363 .shop-return-address b,
      .printer-preview-content .t33363 .shop-return-address b * {
        color:  <?php echo $primary_font_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - ORDER DETAILS ### */
      .printer-preview-content .t33363 .order-details-title {
        display: inline-block;
        font-weight: bold;
        color:  <?php echo $primary_font_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - BILL TO AND SHIP TO ADDRESS ### */
      .printer-preview-content .t33363 .address-title {
        font-weight: bold;
        color:  <?php echo $primary_font_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - TABLE HEADER ### */
      .printer-preview-content .t33363 .order-table thead tr th {
        padding-left: 4px;
        padding-right: 4px;
        border-top: 2px solid <?php echo $theme_color;?>;
        padding-top: 6px;
        border-bottom: 2px solid #d3d3d3;
        padding-bottom:6px;
        font-weight: bold;
        color: <?php echo $theme_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - TABLE BODY (SHARED) ### */
      .printer-preview-content .t33363 .order-table tbody tr td,
      .printer-preview-content .t33363 .pricing-table tbody tr td {
        padding-left: 4px;
        padding-right: 4px;
        border-top: 0;
        padding-top: 8px;
        border-bottom: 1px solid #d3d3d3;
        padding-bottom:7px;
      }
      /* ### DESIGN SPECIFIC - ORDER TABLE SPECIFIC ### */
      .printer-preview-content .t33363 .order-table tbody > tr > td.line-item-description,
      .printer-preview-content .t33363 .order-table tbody > tr > td.line-item-qty {
        font-weight: bold;
        color: <?php echo $primary_font_color;?>;
      }
      .printer-preview-content .t33363 .order-table tbody > tr > td.line-item-description p.line-item-sku {
        font-weight: normal;
      }
      /* ### DESIGN SPECIFIC - PRICING TABLE SPECIFIC ### */
      .printer-preview-content .t33363 .pricing-table tbody > tr.pricing-table-total-row > td {
        border-top: 2px solid <?php echo $theme_color;?>;
        border-bottom: 2px solid <?php echo $theme_color;?>;
        padding-bottom:6px;
      }
      .printer-preview-content .t33363 .pricing-table tbody > tr > td.pricing-table-title,
      .printer-preview-content .t33363 .pricing-table tbody > tr > td.pricing-table-title span {
        font-weight: bold;
        color: <?php echo $primary_font_color;?>;
      }
      .printer-preview-content .t33363 .pricing-table tbody > tr.pricing-table-total-row .pricing-table-title,
      .printer-preview-content .t33363 .pricing-table tbody > tr.pricing-table-total-row .pricing-table-text {
        font-weight: bold;
        color: <?php echo $primary_font_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - ORDER NOTES ### */
      .printer-preview-content .t33363 .notes-title {
        font-weight: bold;
        color:<?php echo $primary_font_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - RETURN FORM REASON CODES ### */
      .printer-preview-content .t33363 .return-codes b,
      .printer-preview-content .t33363 .return-code b * {
        font-weight: bold;
        color: <?php echo $primary_font_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - THANK YOU MESSAGE ### */
      .printer-preview-content .t33363 .thanks-text {
        text-align: center;
        font-weight: bold;
        color: <?php echo $theme_color;?>;
      }
      .printer-preview-content .t33363 .thanks-text * {
        font-weight: bold;
        color: <?php echo $theme_color;?>;
      }
    
      /* ### DESIGN SPECIFIC - GIFT MESSAGE ### */
      .printer-preview-content .t33363 .gift-text {
        text-align: center;
        font-weight: bold;
        width: 80%;
        margin: 0 10%;
        padding-bottom:16px;
        font-size: 18px;
      }
      .printer-preview-content .t33363 .gift-text * {
        font-weight: bold;
        font-size: 18px;
      }
      .printer-preview-content .t33363 .gift-text svg {
        padding-bottom:8px;
      }
    
      /* ### DESIGN SPECIFIC - TERMS AND CONDITIONS ### */
      .printer-preview-content .t33363 .terms-text {
        font-size: 10px;
        text-align: center;
      }
      .printer-preview-content .t33363 .terms-text * {
        font-size: 10px;
      }
    
      /* ### DESIGN SPECIFIC - SOCIAL ICONS ### */
      .printer-preview-content .t33363 .social-icons {
        display: inline;
        width: 20px;
        margin: 8px 4px;
      }
    
    }
</style>
<div class="container">
<div class="printer-preview-content" contenteditable="true" spellcheck="false" title="Click to edit text (changes will be printed but not saved)">
    <div class="t33363">
        <div class="row">
            <div id="header-row">
                <div class="col-xs-6">
                    <div class="template-title">
                        <h1 class="editable" data-key="template_type_name"></h1>
                    </div>
                    <ul class="order-details">
                        <li class="order-details-invoice">
                            <span class="order-details-title editable" data-key="invoice_number">Order#</span>
                             <b><strong style="font-size: 3em;"> #1005 </strong> </b>
                        </li>
                        <li class="order-details-date">
                            <span class="order-details-title editable" data-key="date">Order Date</span>
                            <span class="order-details-text">Jan 09 01:24 PM</span>
                        </li>


                       <!-- {% if transactions != blank %}-->
                            <li class="order-details-payment">
                                <span class="order-details-title editable" data-key="payment_method">Payment</span>
                                <span class="order-details-text">
                                 Interac e-Transfer</span>
                            </li>
                      <!--{% endif %}-->



            <li class="order-details-shipping">
                <span class="order-details-title editable" data-key="shipping_method">Shipping</span>
                <span class="order-details-text">Ground Service</span>
            </li>
          Ground Service® Delivery to businesses by 5 pm
          and residences by 8 pm. Ordering deadline: 2 pm today.
          Typical (Not Guaranteed) delivery time: (2 Business Days).
            <li class="order-details-total-weight">
                <span class="order-details-title editable" data-key="total_weight">Total Weight</span>
                <span class="order-details-text">13.608 kg</span>
            </li>
            <li class="order-details-email">
                <span class="order-details-title editable" data-key="customer_email">Email</span>
                <span class="order-details-text">ruturajkalal@gmail.com</span>
            </li>
        </ul>
      </div>

          <div class="col-xs-6 col-no-margin">
                <div class="logo-wrapper">
                    <img alt="Logo" class="logo" src="https://d1sv15muvzgtp9.cloudfront.net/api/file/A6cnIyS8Tn66Ba0T8zdr/convert?fit=max&h=600&w=1200" />
                </div>
                <div style="width:100px; height:20px; float: right; margin-top: 10px; border:1px solid #000;"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2">
            <div class="address-title bill-to-title editable" data-key="bill_to">CUSTOMER</div>
        </div>
        <div class="col-xs-4">
            <ul class="address">
              
                    <li>Ruturaj Kalal</li>
                    <li>Klisty</li>
                    <li>Unit 201- 233 Capel Street Sarnia Sarnia</li>
                    <!--{% if billing_address.address2 != blank %}-->
                     <!--   <li>{{ billing_address.address2 }}</li>-->
                    <!--{% endif %}-->
                    <li>ON N7T 6T6</li>
                    <!--{% if shop.country != billing_address.country %}
                        <li>{{ billing_address.country }}</li>
                    {% endif %}-->
                    <li><span class="editable" data-key="tel">Tel:</span> Tel: 15193314090</li>
                   
            </ul>
        </div>
        <div class="col-xs-2">
          
                <div class="address-title ship-to-title editable" data-key="ship_to">RECIPIENT</div>
          
        </div>
        <div class="col-xs-4">
            <ul class="address">
               
                    <li>Ruturaj Kalal</li>
                    <li>Klisty</li>
                    <li>Unit 201- 233 Capel Street Sarnia</li>
                    <li>Sarnia, ON N7T 6T6</li>
                    <li></li>
                    <li></li>
                    <li><span class="editable" data-key="tel">Tel:</span>15193314090</li>
              
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-no-margin">
            <table class="order-table table">
                <thead>
                    <tr>
                        <th colspan=2 class="order-table-title editable" data-key="item">Item</th>
                        <th class="order-table-qty text-center editable" data-key="qty">Qty</th>
                        <th class="order-table-price text-right editable" data-key="price">Price</th>
                        <th class="order-table-item-total text-right editable" data-key="item_total">Total</th>
                    </tr>
                </thead>
                <tbody>
                 
                        <tr>
                             <td class="product-image-wrapper">
                              <img class="product-image" src="{{ line_item.image | img_url: 'small' }}"/>{% endif %}</td>
                            <td class="line-item-description">
                                <p style="font-weight: bold;">
                                   

                                    </p>
                               

                                            <p class="line-item-property"><br>
                                            </p>
                                            <a href="{{ p.last }}" target="_blank"><img src="{{ p.last }}" alt="{{ p.first }}" width="60" border="0" style="width: 60px; height: auto !important;"></a>
                                      

                                            <p class="line-item-property">
                                            </p>
                                        

                            </td>
                            <td class="text-center line-item-qty">× 1</td>
                            <td class="text-right no-wrap line-item-price">
                                <p>$50</p>
                            </td>
                            <td class="text-right no-wrap line-item-line-price">$50</td>
                        </tr>
            
                       
                                <!-- row display -->
                                <tr>
                                    <td> </td>
                                    <td class="line-item-description"><p><b>1</b></p></td>
                                    <td class="text-center line-item-qty">× 5</td>
                                    <td class="text-right no-wrap line-item-price"><s>50</s></td>
                                    <td>50 </td>
                                </tr>
                         
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="notes">
               
                    <div class="notes-title editable" data-key="order_notes">Notes</div>
            
                <div class="notes-text">
                        <br>
                        <b>cvvccxv:</b> </div>
                </div>
            </div>
            <div class="col-xs-4">
                <table class="pricing-table table">
                    <tbody>
                      <!--
                        {% for discount in discounts %}
                            <tr>
                                <td class="pricing-table-title"><span class="editable" data-key="discount">Discounts</span>{% if discount.code != blank %} "{{ discount.code }}"{% endif %}</td>
                                    <td class="pricing-table-text">{{ discount.savings | money }}</td>
                                </tr>
                            {% endfor %}
                          -->
                            <tr>
                                <td class="pricing-table-title editable" data-key="subtotal">Subtotal</td>
                                <td class="pricing-table-text">$500</td>
                            </tr>
                            <tr>
                                <td class="pricing-table-title editable" data-key="shipping_handling">Shipping</td>
                                <td class="pricing-table-text">$20</td>
                            </tr>
                           
                                <tr>
                                    <td class="pricing-table-title editable" data-key="total_tax">Sales Tax</td>
                                    <td class="pricing-table-text">$50</td>
                                </tr>
                           
                            <tr class="pricing-table-total-row">
                                <td class="pricing-table-title editable" data-key="total">Total</td>
                                <td class="pricing-table-text">$500</td>
                            </tr>

                            <!--{% assign total_refunds =  0.0 %}
                            {% for transaction in transactions %}
                                {% if transaction.kind == "refund" and transaction.status == "success" %}
                                    <tr>
                                        <td class="pricing-table-title editable" data-key="refund">Refund</td>
                                        <td class="pricing-table-text">-{{ transaction.amount | money }}</td>
                                        {% assign total_refunds = total_refunds | plus: transaction.amount %}
                                    </tr>
                                {% endif %}
                            {% endfor %}-->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 margin-bottom">
                    <div class="thanks-text full-editable" data-key="thanks">
                        <p>
                            <p><br>
                            </p>
                        </p>
                    </div>
                    <div class="terms-text full-editable" data-key="terms_and_conditions">
                        <p>
                            <p><br>
                            </p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 shop-block col-no-margin">
                    <div class="shop-address-block full-editable" data-key="shop_block">
                        <p><br>
                        </p>
                    </div>
                    <div class="shop-social">
                    </div>
                    <div class="shop-domain editable" data-key="shop_domain">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>