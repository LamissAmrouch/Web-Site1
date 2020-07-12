
/* for adding active class in header */
$(document).ready(function(){
    //delete elemnt which was activ
    var todelete= $('ul.nav li.active');
    todelete.removeClass('active');
    // Get current path and find target link
    var path =window.location.pathname.split("/").pop();
    // Account for home page with empty path
    if ( path == '') {
      path ='/BZ-Algeria/index.php';
    }
    else if (path == 'index.php' || path == 'index-ar.php'){
        path ='/BZ-Algeria/'+path;
    }
    else{
      path ='/BZ-Algeria/'+window.location.pathname.split("/")[2]+'/'+path;
    }
    console.log(path);
    // Add active class to target link
    var target = $('ul.nav li a[href="'+path+'"]').parents('li');
    target.addClass('active');
  });

  /* for gallery */
  $(function() {
    $('.grid-ga a').Chocolat();
  });
  $(document).ready(function() {
    $("#owl-demo2").owlCarousel({
      items : 1,
      lazyLoad : false,
      autoPlay : true,
      navigation : false,
      navigationText :  false,
      pagination : true,
    });
  });

/* var language; 
function getLanguage() {
(localStorage.getItem('language') == null) ? setLanguage('en') : false;
$.ajax({ 
  url:  '/language/' +  localStorage.getItem('language') + '.json', 
  dataType: 'json', 
  async: false, 
  dataType: 'json', 
  success: function (lang) { language = lang;
                              console.log("success") } });
}

function setLanguage(lang) {
localStorage.setItem('language', lang);
}

$('.but').click(function(){
    getLanguage();
    $('#div1').text(language.date);
 });

$(document).ready(function(){

});

$('.header li a').each(function(){
    $(this).text() =  "ahaha";
}); */