<section class="elementor-section elementor-top-section elementor-element elementor-element-a62e894 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-sticky elementor-sticky--effects elementor-sticky--active elementor-section--handles-inside" data-id="a62e894" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}" style="position: fixed; width: 1686.25px; margin-top: 0px; margin-bottom: 0px; top: 0px;">
   <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6c1bb3f" data-id="6c1bb3f" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-3ee0c57 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="3ee0c57" data-element_type="widget" data-widget_type="image.default">
               <div class="elementor-widget-container">
                  <style>/*! elementor - v3.12.2 - 23-04-2023 */
                     .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
                  </style>
                  <img decoding="async" width="800" height="450" src="https://www.beautygates.com/renna/wp-content/uploads/2023/04/logo-4-1024x576.png" class="attachment-large size-large wp-image-11" alt="" loading="lazy" srcset="https://www.beautygates.com/renna/wp-content/uploads/2023/04/logo-4-1024x576.png 1024w, https://www.beautygates.com/renna/wp-content/uploads/2023/04/logo-4-300x169.png 300w, https://www.beautygates.com/renna/wp-content/uploads/2023/04/logo-4-768x432.png 768w, https://www.beautygates.com/renna/wp-content/uploads/2023/04/logo-4-1536x864.png 1536w, https://www.beautygates.com/renna/wp-content/uploads/2023/04/logo-4.png 1920w" sizes="(max-width: 800px) 100vw, 800px">                             
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b65e23a" data-id="b65e23a" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-67fde4f elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="67fde4f" data-element_type="widget" data-widget_type="icon-list.default">
               <div class="elementor-widget-container">
                  <link rel="stylesheet" href="https://www.beautygates.com/renna/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                  <ul class="elementor-icon-list-items elementor-inline-items">
                    <li class="elementor-icon-list-item elementor-inline-item">
                         <?php //print_r(Request::segment(2));exit(); ?>
                          <?php if (Request::segment(2) == 'en') {?>
                          <a href="{{ url('/website/'.Request::segment(2).'/languageSwitch/ar') }}" ><img height="20px" width="30px" src="{{ asset('assets/images/oman.png') }}" alt=""> AR</a>
                          <?php }else{?>
                          <a href="{{ url('/website/'.Request::segment(2).'/languageSwitch/en') }}" > <img height="20px" width="30px" src="{{ asset('assets/images/english.png') }}" alt=""> EN</a>
                          <?php } ?>
                      </li>
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="#">
                        <span class="elementor-icon-list-text">{{ __('Home') }}</span>
                        </a>
                     </li>
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="https://www.beautygates.com/renna/#Promotions">
                        <span class="elementor-icon-list-text">{{ __('Promotions') }}</span>
                        </a>
                     </li>
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="https://www.beautygates.com/renna/#Popular-Plans">
                        <span class="elementor-icon-list-text">{{ __('Popular Plans') }}</span>
                        </a>
                     </li>
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="https://www.beautygates.com/renna/#Services">
                        <span class="elementor-icon-list-text">{{ __('Services') }}</span>
                        </a>
                     </li>
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="https://www.beautygates.com/renna/#Sim-Tarrif-Plans">
                        <span class="elementor-icon-list-text">{{ __('Sim Tarrif Plans') }}</span>
                        </a>
                     </li>
                     <li class="elementor-icon-list-item elementor-inline-item">
                        <a href="https://www.beautygates.com/renna/#Benefits">
                        <span class="elementor-icon-list-text">{{ __('Benefits') }}</span>
                        </a>
                     </li>

                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6edd751" data-id="6edd751" data-element_type="column">
         <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-3a2f29b elementor-align-center elementor-widget elementor-widget-button" data-id="3a2f29b" data-element_type="widget" data-widget_type="button.default">
               <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper">
                     <a href="https://www.beautygates.com/renna/#Recharge" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                     <span class="elementor-button-content-wrapper">
                     <span class="elementor-button-text">{{ __('Recharge') }}</span>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@yield('css')
<script type="text/javascript">
   var siteUrl = '<?php echo URL::to('/');?>' + '/';
   //var publicPath = '{{ asset('/') }}';
</script>