(function() {

  var $imgs = $('#gallery img');                  // Store all images
  var $buttons = $('#tab-btn');                   // Store buttons element
  var tagged = {};                                // Create tagged object

  $imgs.each(function() {                         // Loop through images and
    var img = this;                               // Store img in variable
    var tags = $(this).data('tags');              // Get this element's tags

    if (tags) {                                   // If the element had tags
      tags.split(',').forEach(function(tagName) { // Split at comma and

        if (tagged[tagName] == null) {            // If object doesn't have tag
          tagged[tagName] = [];                   // Add empty array to object
        }
        tagged[tagName].push(img);                // Add the image to the array
      });
    }
  });

 /* $('<button/>', {                                 // Create empty button
    text: 'Show All',                              // Add text 'show all'
    class: 'active',                               // Make it active
    click: function() {                            // Add onclick handler to
      $(this)                                      // Get the clicked on button
        .addClass('tab-active')                        // Add the class of active
        .siblings()                                // Get its siblings
        .removeClass('tab-active');                    // Remove active from siblings
      $imgs.hide().fadeIn(500);                 // Show all images
    }
  }).appendTo($buttons);                           // Add to buttons
*/
  $.each(tagged, function(tagName) {               // For each tag name
    $('<button/>', {                               // Create empty button
      text: tagName,                              // Add tag name
      class: 'tab-btn',
      click: function() {                          // Add click handler
        $(this)                                    // The button clicked on
          .addClass('tab-active')                      // Make clicked item active
          .siblings()                              // Get its siblings
          .removeClass('tab-active');                  // Remove active from siblings
        $imgs                                      // With all of the images
          .hide()                                  // Hide them
          .filter(tagged[tagName])
          .fadeIn(700);                 // Find ones with this tag
                                         // Show just those images
      }
    }).appendTo($buttons);                         // Add to the buttons
  });

}());

$(document).ready(function(){

    $('.popupBox').click(function(){
    $('#getQuote').modal('show')
    });
    
});