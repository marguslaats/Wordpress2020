<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
$path =  plugin_dir_url(__FILE__);
$textdomain = $this->profile_magic;
$pg_function = new Profile_Magic_Basic_Functions($this->profile_magic, $this->version);
?>

<div class="pmagic pg-wide-wrap pg-extensions">
    

    <div class="pg-scblock "> 

        <div class="pg-scblock pg-scpagetitle">
            <b><?php _e("ProfileGrid",'profilegrid-user-profiles-groups-and-communities'); ?></b> <span class="pg-blue"><?php _e("Extensions",'profilegrid-user-profiles-groups-and-communities'); ?></span>
            <div class="pg-scblock-mg-logo"><img src="<?php echo $path;?>images/mg-logo.png"></div>
        </div> 
        <div class="pg-exts-bundle-banner dbfl"><a href="https://profilegrid.co/extensions/" target="_blank"><img src="<?php echo $path; ?>images/extensions-bundle-banner.jpg" class="" alt=""></a></div>
        <div class="pg-ext-list" id="the-list">

            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a href="<?php echo $pg_function->pg_get_title_link('GROUPWALL');?>" class=" open-plugin-details-modal" target="_blank">
                               <?php _e('Group Wall','profilegrid-user-profiles-groups-and-communities');?>

                            <img src="<?php echo $path; ?>images/pg-groupwall.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                           <?php $pg_function->pg_get_extension_button('GROUPWALL');?>
                        </ul></div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("A brand new ProfileGrid extension that adds social activity to your User Groups. Now users can create new posts, comment on other users' posts and browse Group timeline. Group wall is accessible from Group page as a new tab.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            
             <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('STRIPE');?>">
                               <?php _e('Stripe Payment System','profilegrid-user-profiles-groups-and-communities');?>

                            <img src="<?php echo $path; ?>images/stripe-logo.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('STRIPE');?>
                        </ul>
                    </div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e('Start accepting credit cards on your site for Group memberships and registrations by integrating popular Stripe payment gateway.','profilegrid-user-profiles-groups-and-communities');?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
                <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('DISPLAY_NAME');?>">
                               <?php _e("User Display Name","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/display_name.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('DISPLAY_NAME');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Now take complete control of your users' display names. Mix and match patterns and add predefined suffixes and prefixes. There's a both global and per group option allowing display names in different groups stand out!","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
                 <div class="plugin-card pg-ext-card ">
        
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a href="<?php echo $pg_function->pg_get_title_link('GROUP_PHOTOS');?>" class="open-plugin-details-modal">
                               <?php _e("Group Photos","profilegrid-user-profiles-groups-and-communities");?> 

                            <img src="<?php echo $path; ?>images/group-photos.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('GROUP_PHOTOS');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Allow your users to create and share Photo Albums within their Groups. There's also an option for public photos. Users can enlarge and comment on different photos. ","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a href="https://profilegrid.co/extensions/" target="_blank"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('CUSTOM_PROFILE_SLUG');?>">
                              <?php _e("Custom Profile Slugs","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/userid_slug.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('CUSTOM_PROFILE_SLUG');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Define how your user profile URL's will appear to site visitors and search engines. Take control of your user profile permalinks and add dynamic slugs.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('CUSTOM_GROUP_FIELDS');?>">
                            <?php _e("Custom Group Fields","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/group-custom-fields.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('CUSTOM_GROUP_FIELDS');?>
                        </ul>			</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Create and add custom fields to groups too! Now your user groups can have more detailed information and personality just like your user profile pages.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
                <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('GEOLOCATION');?>">
                              <?php _e("Geolocation","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/geolocation.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('GEOLOCATION');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Generate maps showing locations of all users or specific groups using simple shortcodes. Get location data from registration form.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            
            
                <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('FRONTEND_GROUP');?>">
                              <?php _e("Frontend Group Creator","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/frontend-group.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('FRONTEND_GROUP');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Allow registered users to create new Groups on front end. These Groups behave and work just like regular ProfileGrid groups.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            
              
            
            
            
            
                <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('BBPRESS');?>" style="text-transform:none;">
                           <?php _e("bbPress Integration","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/bbpress.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                       <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('BBPRESS');?>
                        </ul>			</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Integrate ProfileGrid user profile properties and sign up system with the ever popular bbPress community forums plugin.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            
            
            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('WOOCOMMERCE');?>">
                            <?php _e("WooCommerce Integration","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-woocommerce.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('WOOCOMMERCE');?>
                        </ul>					</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Combine the power of ProfileGrid's user groups with WooCommerce cart to provide your users ultimate shopping experience.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            
            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('MAILCHIMP');?>">
                            <?php _e("MailChimp Integration","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-mailchimp.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('MAILCHIMP');?>
                        </ul>					</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Assign ProfileGrid users to MailChimp lists with custom field mapping and options for users to manage subscriptions.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
      
           <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('SOCIALLOGIN');?>">
                              <?php _e("Social Login","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/social-connect.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('SOCIALLOGIN');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Allow your users to sign up and login using their favourite social network accounts. Social accounts can be managed from Profile settings.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('CUSTOM_TAB');?>">
                              <?php _e("Custom Profile Tabs","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/custom-profile-tab.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('CUSTOM_TAB');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Add personalized tabs in user profiles to suit your business or industry. Add user authored content from any custom post type or shortcode (or add specific content) with different privacy levels. Open doors to endless possibilities - Integrate user profiles with other plugins supporting custom post or shortcode format.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                    </div>
                </div>

            </div>
            
            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('FRONTEND_GROUP_MANAGER');?>">
                              <?php _e("Advanced Group Manager","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/frontend-group-manager.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('FRONTEND_GROUP_MANAGER');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Offer more power and control to your Group Managers. They can edit Groups, approve membership requests, moderate blogs, manage users, etc. from a dedicated frontend Group management area.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
            
            
             <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('ADVANCED_WOOCOMMERCE');?>">
                              <?php _e("WooCommerce Extensions Integration","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-woo-advanced-icon.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('ADVANCED_WOOCOMMERCE');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Enhance the power of ProfileGrid's integration with WooCommerce by adding in integrations with WooCommerce extensions.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>

            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('MULTI_ADMINS');?>">
                              <?php _e("Multi Group Managers","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/multi-admins.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('MULTI_ADMINS');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Don't stay limited to just one Manager per Group. Unlock the ability to have more than one Managers for your ProfileGrid User Groups now. With all of them sharing the same level of control.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
            
             <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('MYCRED');?>" style="text-transform: none;">
                              <?php _e("myCRED Integration","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-mycred-integration.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('MYCRED');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Integrate popular points system for WordPress with ProfileGrid to reward your users. Display ranks and badges on user profile pages, give incentive for activities on site or penalize based on pre-set rules.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
            
            
            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('EVENTS');?>" style="text-transform: none;">
                              <?php _e("EventPrime Integration","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-ep-integration.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('EVENTS');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Create ProfileGrid Group Events by Integrating ProfileGrid User Groups with EventPrime Events.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
            
            
             <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('WISHLIST');?>" style="text-transform: none;">
                              <?php _e("WooCommerce Wishlist","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-wishlist-woocommerce.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('WISHLIST');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Add WooCommerce products to your Wishlist and manage it completely from your ProfileGrid User Profile.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
            
            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('INSTAGRAM');?>" style="text-transform: none;">
                              <?php _e("Instagram Integration","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-instagram.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('INSTAGRAM');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Show Instagram tab on User Profile page with user’s Instagram photos displayed in the tab.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
            
             <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('USER_PROFILE_LABELS');?>" style="text-transform: none;">
                              <?php _e("ProfileGrid Profile Labels","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-user-labels.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('USER_PROFILE_LABELS');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Allow user to add Profile Labels to their User Profiles as an additional way to convey their interests and/or designation.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>

            <div class="plugin-card pg-ext-card">
                <div class="plugin-card-top">
                    <div class="name column-name">
                        <h3>
                            <a target="_blank"  href="<?php echo $pg_function->pg_get_title_link('LOGIN_LOGOUT_MENU');?>" style="text-transform: none;">
                              <?php _e("ProfileGrid Login/Logout Menu Extensions","profilegrid-user-profiles-groups-and-communities");?>

                            <img src="<?php echo $path; ?>images/pg-logout-icon.png" class="plugin-icon" alt="">
                            </a>
                        </h3>
                    </div>
                    <div class="action-links">
                        <ul class="plugin-action-buttons">
                            <?php $pg_function->pg_get_extension_button('LOGIN_LOGOUT_MENU');?>
                        </ul>				</div>
                    <div class="desc column-description">
                        <p class="pg-col-desc"><?php _e("Now you can add contextual login menu item to your website menu(s) with few simple clicks. The menu item changes based on user login state. Additionally, you have option to add User Profile, User Groups and Password Recovery items too.","profilegrid-user-profiles-groups-and-communities");?></p>
                        <p class="authors"> <cite><?php _e('By','profilegrid-user-profiles-groups-and-communities');?> <a target="_blank" href="https://profilegrid.co/extensions/"><?php _e('ProfileGrid','profilegrid-user-profiles-groups-and-communities');?></a></cite></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
        </div>


    </div>


</div>
