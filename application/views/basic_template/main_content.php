<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
      <?php echo $sidebar_nav; ?>
      <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-bg-lightblue-v10-opacity-0_5 g-pa-20">
          <div class="row justify-content-center">
              <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30 d-flex">
                <!-- Panel -->
                <a href="<?php echo base_url('digital/recados'); ?>" class="btn btn-sm u-btn-outline-lightred u-btn-hover-v2-1 g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-2 rounded-0" style="background-color: white;border-color:white; padding-right: 18em">
                <div class=" h-100 g-brd-gray-light-v7 g-rounded-3">
                  <div class="card-block g-font-weight-300 g-pa-20">
                    <div class="media">
                      <div class="d-flex g-mr-15">
                        <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-teal-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                          <i class="hs-admin-check-box g-absolute-centered"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                          <span class="g-font-size-24 g-line-height-1 g-color-black"><b>RECADOS</b></span>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
                <!-- End Panel -->
              </div>
              <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30 d-flex">
                <!-- Panel -->
                <a href="<?php echo base_url('digital/recados'); ?>" class="btn btn-sm u-btn-outline-lightred u-btn-hover-v2-1 g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-2 rounded-0" style="background-color: white;border-color:white; padding-right: 18em">
                <div class="h-100 g-rounded-3">
                  <div class="card-block g-font-weight-300 g-pa-20">
                    <div class="media">
                      <div class="d-flex g-mr-15">
                        <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightred-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                          <i class="hs-admin-user g-absolute-centered"></i>
                        </div>
                      </div>

                      <div class="media-body align-self-center">
                          <span class="g-font-size-24 g-line-height-1 g-color-black"><b>TECNICOS</b></span> 
                      </div>
                    </div>
                  </div>
                </div>
              </a>
                <!-- End Panel -->
              </div>

            <!-- Statistic Card -->
            <div class="col-xl-12">
              <!-- Statistic Card -->
              <div class="card g-brd-gray-light-v7 u-card-v1 g-pa-15 g-pa-25-30--md g-mb-30">
                <header class="media g-mb-30">
                  <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Project statistics</h3>

                  <div class="media-body d-flex justify-content-end">
                    <div id="rangePickerWrapper2" class="d-flex align-items-center u-datepicker-right u-datepicker--v3 g-pr-10">
                      <input id="rangeDatepicker2" class="g-font-size-12 g-font-size-default--md" type="text" data-rp-wrapper="#rangePickerWrapper2" data-rp-type="range" data-rp-date-format="d M Y" data-rp-default-date='["01 Jan 2016", "31 Dec 2017"]'>
                      <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v3"></i>
                    </div>

                    <a class="d-flex align-items-center hs-admin-panel u-link-v5 g-font-size-20 g-color-gray-light-v3 g-color-lightblue-v3--hover g-ml-5 g-ml-30--md" href="#!"></a>
                  </div>
                </header>

                <section>
                  <ul class="list-unstyled d-flex g-mb-45">
                    <li class="media">
                      <div class="d-flex align-self-center g-mr-8">
                        <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v4"></span>
                      </div>

                      <div class="media-body align-self-center g-font-size-12 g-font-size-default--md">Total hits</div>
                    </li>
                    <li class="media g-ml-5 g-ml-35--md">
                      <div class="d-flex align-self-center g-mr-8">
                        <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-darkblue-v2"></span>
                      </div>

                      <div class="media-body align-self-center g-font-size-12 g-font-size-default--md">Unique visits</div>
                    </li>
                    <li class="media g-ml-5 g-ml-35--md">
                      <div class="d-flex align-self-center g-mr-8">
                        <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightred-v2"></span>
                      </div>

                      <div class="media-body align-self-center g-font-size-12 g-font-size-default--md">New orders</div>
                    </li>
                  </ul>

                  <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="300px" data-mobile-height="180px" data-high="5000000" data-low="0" data-offset-x="30" data-offset-y="50" data-postfix=" m" data-is-show-area="true" data-is-show-line="false"
                  data-is-show-point="true" data-is-full-width="true" data-is-stack-bars="true" data-is-show-axis-x="true" data-is-show-axis-y="true" data-is-show-tooltips="true" data-tooltip-description-position="right" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
                  data-align-text-axis-x="center" data-fill-opacity=".7" data-fill-colors='["#e62154","#3dd1e8","#1d75e5"]' data-stroke-color="#e1eaea" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="10"
                  data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#e62154","#3dd1e8","#1d75e5"]' data-series='[
              [
                {"meta": "Orders", "value": 300000},
                {"meta": "Orders", "value": 500000},
                {"meta": "Orders", "value": 700000},
                {"meta": "Orders", "value": 1100000},
                {"meta": "Orders", "value": 800000},
                {"meta": "Orders", "value": 800000},
                {"meta": "Orders", "value": 1000000},
                {"meta": "Orders", "value": 2300000},
                {"meta": "Orders", "value": 700000},
                {"meta": "Orders", "value": 300000},
                {"meta": "Orders", "value": 600000},
                {"meta": "Orders", "value": 300000}
              ],
              [
                {"meta": "Hits", "value": 300000},
                {"meta": "Hits", "value": 300000},
                {"meta": "Hits", "value": 300000},
                {"meta": "Hits", "value": 300000},
                {"meta": "Hits", "value": 300000},
                {"meta": "Hits", "value": 3300000},
                {"meta": "Hits", "value": 500000},
                {"meta": "Hits", "value": 500000},
                {"meta": "Hits", "value": 800000},
                {"meta": "Hits", "value": 1100000},
                {"meta": "Hits", "value": 1500000},
                {"meta": "Hits", "value": 300000}
              ],
              [
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 2300000},
                {"meta": "Visits", "value": 1000000},
                {"meta": "Visits", "value": 500000},
                {"meta": "Visits", "value": 500000},
                {"meta": "Visits", "value": 500000},
                {"meta": "Visits", "value": 1000000},
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 300000}
              ]
            ]' data-labels='["Jan", "Feb", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'></div>
                </section>
              </div>
              <!-- End Statistic Card -->
            </div>
            <!-- End Statistic Card -->
          </div>
        </div>

<?php echo $footer; ?>
      </div>
    </div>
</main>