$(".tab-btn").first().addClass( "tab-active" );

/*chenge packages*/
$(".website-package, .cms-website-package, .seo-package, .e-commerce-package, .social-media-package, .content-writing-package").hide();

$(document).on('click','.package-tab',function(){
  $('.package-tab-active').addClass("package-tab");
  $('.package-tab').removeClass("package-tab-active");
  $(this).removeClass("package-tab");
  $(this).addClass('package-tab-active');
  var id = $(this).attr("id");
  if(id=="logo")
  {
    $(".logo-package").show();
    $(".website-package, .cms-website-package, .seo-package, .e-commerce-package, .social-media-package, .content-writing-package").hide();
  }
  if(id=="cms-website")
  {
    $(".cms-website-package").show();
    $(".website-package, .logo-package, .seo-package, .e-commerce-package, .social-media-package, .content-writing-package").hide();
  }
  if(id=="website")
  {
    $(".website-package").show();
    $(".logo-package, .cms-website-package, .seo-package, .e-commerce-package, .social-media-package, .content-writing-package").hide();
  }
  if(id=="seo")
  {
    $(".seo-package").show();
    $(".website-package, .logo-package, .cms-website-package, .e-commerce-package, .social-media-package, .content-writing-package").hide();
  }
  if(id=="e-commerce")
  {
    $(".e-commerce-package").show();
    $(".website-package, .logo-package, .seo-package, .cms-website-package, .social-media-package, .content-writing-package").hide();
  }
  if(id=="content-writing")
  {
    $(".content-writing-package").show();
    $(".website-package, .logo-package, .seo-package, .cms-website-package, .social-media-package, .e-commerce-package").hide();
  }
  if(id=="social-media")
  {
    $(".social-media-package").show();
    $(".website-package, .logo-package, .seo-package, .cms-website-package, .e-commerce-package, .content-writing-package").hide();
  }
});
