jQuery(document).ready(function($) {

jQuery(document).on("click", '#quick-add-button', function() {


  const options = {
      method: 'GET',
      headers: {
          Accept: 'application/json',
          Authorization: 'Bearer 357fab73-44bd-a2d8-8ac0-b81b7dc6ac6d'
      }
  };

  fetch('https://sandbox.dev.clover.com/v3/merchants/VE1TKEVCT7761/categories', options)
      .then(response => response.json())
      .then(response => add_update_item_category(response))
      .catch(err => console.error(err));


});


/**
* 
* Clove API Category Sync Button Click Function Called
*/

function add_update_item_category(data) {
    //alert(ajaxurl_manual);
    alert(JSON.stringify(data));
  jQuery.ajax({
      type: "POST",
      url: ajaxurl_manual,
      data: {
          data: data,
          action: "AddUpdateItemCategory", // Passed api response to this function on WP
      },
      beforeSend: function(msg) {
          $("#clover_api_categories_sync_btn").text("Clover API Categories Sync- working").prop('disabled', true).css({ "opacity": ".4", "cursor": "default" });
      },
      success: function(result) {
          $("#clover_api_categories_sync_btn").text("Clover API Categories Sync").prop('disabled', false).css({ "opacity": "1", "cursor": "pointer" });
      },
  });
}


});



