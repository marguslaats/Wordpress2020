/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery('.soundcloud_play_button_color').wpColorPicker();
jQuery(document).ready(function() {
  jQuery(".pg_profile_tab").click(function() {
    jQuery(this).children(".pm-slab-buttons").children('span').toggleClass("dashicons-arrow-up");  
    jQuery(this).next(".pg_profile_tab-setting").slideToggle();
  });
});