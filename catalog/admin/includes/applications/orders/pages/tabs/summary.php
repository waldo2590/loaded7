<?php
/*
  $Id: summary.php v1.0 2013-01-01 datazen $

  LoadedCommerce, Innovative eCommerce Solutions
  http://www.loadedcommerce.com

  Copyright (c) 2013 Loaded Commerce, LLC

  @author     LoadedCommerce Team
  @copyright  (c) 2013 LoadedCommerce Team
  @license    http://loadedcommerce.com/license.html
*/
?>
          <div id="section_orders_summary">
            <h3 class="show-below-768 margin-left margin-top no-margin-bottom">Summary</h3>
            <div class="columns with-padding">
              <div class="new-row-mobile six-columns twelve-columns-mobile">
                <fieldset>
                  <legend class="small-margin-bottom">
                    <span class="icon-user icon-anthracite"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_customer'); ?></strong></span>
                  </legend>
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Name</td>
                        <td class="align-left pad-5 width-66 bold">Sal Iozzia</td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Company Name</td>
                        <td class="align-left pad-5 width-66 bold"><small class="tag orange-bg">B2B</small></td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">City, State</td>
                        <td class="align-left pad-5 width-66 bold">Atlanta, GA USA</td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Customer Group</td>
                        <td class="align-left pad-5 width-66 bold">Retail</td>
                      </tr>
                    </tbody>
                  </table>
                </fieldset>
              </div>
              <div class="new-row-mobile six-columns twelve-columns-mobile">
                <fieldset>
                  <legend class="small-margin-bottom">
                    <span class="icon-credit-card icon-anthracite"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_payment'); ?></strong></span>
                  </legend>
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Method</td>
                        <td class="align-left pad-5 width-66 bold">Credit Card via Loaded Payments</td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Details</td>
                        <td class="align-left pad-5 width-66 bold">Sal Iozzia - Visa - 4111</td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Payment State</td>
                        <td class="align-left pad-5 width-66 bold">PAID</td>
                      </tr>
                    </tbody>
                  </table>
                </fieldset>
              </div>
            </div>
            <div class="columns with-padding large-pull-top">
              <div class="new-row-mobile six-columns twelve-columns-mobile">
                <fieldset>
                  <legend class="small-margin-bottom">
                    <span class="icon-info-round icon-anthracite"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_info'); ?></strong></span>
                  </legend>
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Addresses</td>
                        <td class="align-left pad-5 width-66 bold">Mixed</td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Date Ordered</td>
                        <td class="align-left pad-5 width-66 bold">2013/08/04</td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Purchase Order</td>
                        <td class="align-left pad-5 width-66 bold"><small class="tag orange-bg">B2B</small></td>
                      </tr>
                    </tbody>
                  </table>
                </fieldset>
              </div>
              <div class="new-row-mobile six-columns twelve-columns-mobile">
                <fieldset>
                  <legend class="small-margin-bottom">
                    <span class="icon-dropbox icon-anthracite"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_shipping'); ?></strong></span>
                  </legend>
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Method</td>
                        <td class="align-left pad-5 width-66 bold">FedEx</td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Type</td>
                        <td class="align-left pad-5 width-66 bold">Next Day Air</td>
                      </tr>
                      <tr>
                        <td class="align-right pad-5 width-33 bold grey">Shipping State</td>
                        <td class="align-left pad-5 width-66 bold">Backordered</td>
                      </tr>
                    </tbody>
                  </table>
                </fieldset>
              </div>
            </div>
            <div class="columns">
              <div class="twelve-columns">
                <div class="field-drop-tabs field-drop-tabs-no-left button-height black-inputs">
                  <div class="columns">
                    <div class="six-columns twelve-columns-mobile new-row-mobile">Left Side</div>
                    <div class="six-columns twelve-columns-mobile new-row-mobile ">Right Side</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns with-padding">
              <div class="twelve-columns mid-margin-bottom large-pull-top">
                <fieldset>
                  <legend class="mid-margin-bottom">
                    <span class="icon-list icon-anthracite"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_products_ordered'); ?></strong></span>
                  </legend>
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <thead class="bbottom-anthracite">
                      <tr>
                        <th align="left" class="orders-products-listing-th hide-below-480">SKU/Model</th>
                        <th align="left" class="orders-products-listing-th">Product Name</th>
                        <th align="center" class="orders-products-listing-th hide-below-480">Fullfillment</th>
                        <th align="right" class="orders-products-listing-th hide-below-480 pad-right-10">Qty</th>
                        <th align="right" class="orders-products-listing-th hide-below-480">Total</th>
                        <th align="right" class="orders-products-listing-th show-below-480">Details</th>
                      </tr>
                    </thead>
                    <tbody class="mid-margin-bottom">
                    <?php
                      $Qordersproducts = array(array('id' => '24', 'model' => 'Floral001RL', 'name' => 'Floral Dress - Red - Large', 'stock' => 'In Stock', 'qty' => '2', 'total' => '250.00'),
                                               array('id' => '25', 'model' => 'Watch001', 'name' => 'Mens Watch', 'stock' => 'Shipped', 'qty' => '1', 'total' => '100.00'),
                                               array('id' => '26', 'model' => 'GC124GIFT', 'name' => 'Gift Certificate $125', 'stock' => '-', 'qty' => '1', 'total' => '125.00'),
                                               array('id' => '27', 'model' => 'Floral001GXL', 'name' => 'Floral Dress - Green - Large', 'stock' => 'Out of Stock', 'qty' => '1', 'total' => '125.00')); 
                      foreach ($Qordersproducts as $products) {
                      ?>
                      <tr id="orderProductsRow_<?php echo $products['id']; ?>" class="bbottom-grey">
                        <td align="left" class="orders-products-listing-td hide-below-480"><?php echo $products['model']; ?></td>
                        <td align="left" class="orders-products-listing-td"><?php echo $products['name']; ?></td>
                        <td align="center" class="orders-products-listing-td hide-below-480"><small class="tag red-bg"><?php echo $products['stock']; ?></small></td>
                        <td align="right" class="orders-products-listing-td hide-below-480 pad-right-10"><?php echo $products['qty']; ?></td>
                        <td align="right" class="orders-products-listing-td hide-below-480">$<?php echo $products['total']; ?></td>
                        <td align="right" class="orders-products-listing-td show-below-480"><i title="Product Details" class="icon-info-round icon-blue mid-margin-right cursor-pointer" onclick="orderProductDetails(<?php echo $products['id']; ?>);"></li></td>
                      </tr>
                      <?php
                        }
                      ?>
                      <tr>
                        <td class="hide-below-480"></td>
                        <td class="hide-below-480"></td>
                        <td class="hide-below-480"></td>
                        <td class="no-wrap pad-right-10 pad-top-10 bolder" align="right">Product Sub Total</td>
                        <td class="pad-top-10 bolder" align="right">$600.00</td>
                        <td class="show-below-480"></td>
                      </tr>
                    </tbody>
                  </table>
                </fieldset>
              </div>
            </div>
            <div class="columns">
              <div class="twelve-columns large-pull-top">
                <div class="columns with-padding mid-margin-top">
                  <div class="six-columns twelve-columns-mobile hide-below-768">
                    <fieldset>
                      <legend class="margin-bottom">
                        <span class="icon-chat icon-size2 icon-anthracite mid-margin-left"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_recent_messages'); ?></strong></span>
                      </legend>
                      <div class="with-small-padding silver-bg">
                        <div class="small-margin-top">
                          <span class="float-right green-bg with-min-padding">Comment</span>
                          <span class="icon-user icon-size2 icon-anthracite small-margin-left">
                            <span>
                              Sal Iozzia <small class="anthracite small-margin-left">2013/08/07</small>
                            </span>
                          </span>
                        </div>
                        <p class="edit-order-summary-block with-small-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula est ut interdum fringilla. Curabitur lobortis libero ut sagittis fermentum. Donec eu tortor ut elit condimentum iaculis. Nulla semper diam ut mi volutpat pharetra.</p>
                      </div>
                      <div class="with-small-padding">
                        <div class="small-margin-top">
                          <span class="float-right orange-bg with-min-padding">Message</span>
                          <span>
                            <img src="images/prod-mini.png" alt="Comment Image" />
                            <span class="small-margin-left">
                              John Nickelback <small class="anthracite small-margin-left">2013/08/05</small>
                            </span>
                          </span>
                        </div>
                        <p class="edit-order-summary-block with-small-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula est ut interdum fringilla. Curabitur lobortis libero ut sagittis fermentum. Donec eu tortor ut elit condimentum iaculis. Nulla semper diam ut mi volutpat pharetra.</p>
                      </div>
                      <div class="with-small-padding grey-bg">
                        <div class="small-margin-top">
                          <span class="float-right anthracite-bg with-min-padding">Note</span>
                          <span>
                            <img src="images/prod-mini.png" alt="Comment Image" />
                            <span class="small-margin-left">
                              Jane Quarterback <small class="anthracite small-margin-left">sent 2013/08/02</small>
                            </span>
                          </span>
                        </div>
                        <p class="edit-order-summary-block with-small-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula est ut interdum fringilla. Curabitur lobortis libero ut sagittis fermentum. Donec eu tortor ut elit condimentum iaculis. Nulla semper diam ut mi volutpat pharetra.</p>
                      </div>
                      <div class="with-small-padding">
                        <div class="small-margin-top">
                          <i class="icon-mail"></i> <span class="small-margin-left">2 Additional Messages</span>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="six-columns twelve-columns-mobile">
                    <div class="columns">
                      <div class="twelve-columns">
                        <fieldset>
                          <legend class="small-margin-bottom">
                            <span class="icon-credit-card icon-size2 icon-anthracite"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_order_totals'); ?></strong></span>
                          </legend>
                          <div class="large-margin-left">
                            <table width="100%" cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td class="align-right pad-5 width-75">Coupon 10% Off</td>
                                  <td class="align-right pad-5 width-25">-$62.50</td>
                                </tr>
                                <tr>
                                  <td class="align-right pad-5 width-75">Shipping Fee - FedEx</td>
                                  <td class="align-right pad-5 width-25">$25.00</td>
                                </tr>
                                <tr>
                                  <td class="align-right pad-5 width-75">Tax</td>
                                  <td class="align-right pad-5 width-25">$10.00</td>
                                </tr>
                                <tr>
                                  <td class="align-right pad-5 width-75 bold btop-grey">Grand Total</td>
                                  <td class="align-right pad-5 width-25 bold btop-grey">$572.50</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </fieldset>
                      </div>
                      <div class="twelve-columns">
                        <fieldset>
                          <legend class="small-margin-bottom">
                            <span class="icon-credit-card icon-size2 icon-anthracite"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_last_payment'); ?></strong></span>
                          </legend>
                          <div class="large-margin-left">
                            <table width="100%" cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td class="align-right pad-5 width-75">2013/08/07 Credit Card 2345</td>
                                  <td class="align-right pad-5 width-25">$572.50</td>
                                </tr>
                                <tr>
                                  <td class="align-right pad-5 width-75 bold btop-grey">Balance</td>
                                  <td class="align-right pad-5 width-25 bold btop-grey">$0.00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <!-- duplicate messages for mobile AFTER totals :: START -->
                  <div class="six-columns twelve-columns-mobile show-below-768">
                    <fieldset>
                      <legend class="margin-bottom">
                        <span class="icon-chat icon-size2 icon-anthracite mid-margin-left"><strong class="small-margin-left"><?php echo $lC_Language->get('orders_summary_recent_messages'); ?></strong></span>
                      </legend>
                      <div class="with-small-padding silver-bg">
                        <div class="small-margin-top">
                          <span class="float-right green-bg with-min-padding">Comment</span>
                          <span class="icon-user icon-size2 icon-anthracite small-margin-left">
                            <span>
                              Sal Iozzia <small class="anthracite small-margin-left">2013/08/07</small>
                            </span>
                          </span>
                        </div>
                        <p class="edit-order-summary-block with-small-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula est ut interdum fringilla. Curabitur lobortis libero ut sagittis fermentum. Donec eu tortor ut elit condimentum iaculis. Nulla semper diam ut mi volutpat pharetra.</p>
                      </div>
                      <div class="with-small-padding">
                        <div class="small-margin-top">
                          <span class="float-right orange-bg with-min-padding">Message</span>
                          <span>
                            <img src="images/prod-mini.png" alt="Comment Image" />
                            <span class="small-margin-left">
                              John Nickelback <small class="anthracite small-margin-left">2013/08/05</small>
                            </span>
                          </span>
                        </div>
                        <p class="edit-order-summary-block with-small-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula est ut interdum fringilla. Curabitur lobortis libero ut sagittis fermentum. Donec eu tortor ut elit condimentum iaculis. Nulla semper diam ut mi volutpat pharetra.</p>
                      </div>
                      <div class="with-small-padding grey-bg">
                        <div class="small-margin-top">
                          <span class="float-right anthracite-bg with-min-padding">Note</span>
                          <span>
                            <img src="images/prod-mini.png" alt="Comment Image" />
                            <span class="small-margin-left">
                              Jane Quarterback <small class="anthracite small-margin-left">sent 2013/08/02</small>
                            </span>
                          </span>
                        </div>
                        <p class="edit-order-summary-block with-small-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula est ut interdum fringilla. Curabitur lobortis libero ut sagittis fermentum. Donec eu tortor ut elit condimentum iaculis. Nulla semper diam ut mi volutpat pharetra.</p>
                      </div>
                      <div class="with-small-padding">
                        <div class="small-margin-top">
                          <i class="icon-mail"></i> <span class="small-margin-left">2 Additional Messages</span>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <!-- duplicate messages for mobile AFTER totals :: END -->
                </div>
              </div>
            </div>
          </div>