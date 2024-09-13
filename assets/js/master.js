$(document).ready(
    function(){
        windowHeight = jQuery(window).innerHeight();
        HeaderHeight = jQuery("header").innerHeight();
        jQuery('#background-video').css('height', (windowHeight-HeaderHeight)+'px');
        // jQuery('.FullWidthHeight').css('height', (windowHeight)+'px');
        
        jQuery(window).scroll(function () {
          var scroll = jQuery(window).scrollTop();
      
          if (scroll >= 100) {
            jQuery("body").addClass("StickHeader");
          } else {
            jQuery("body").removeClass("StickHeader");
          }
        });
  
        if (jQuery(window).width() < 1000) {
            jQuery(".ImageSwitcher")
            .fadeOut(400, function() {
              jQuery(this).attr('src',jQuery(this).attr('data-mobile'));
            })
            .fadeIn(400);
        }
        else {
          jQuery(".ImageSwitcher")
            .fadeOut(400, function() {
              jQuery(this).attr('src',jQuery(this).attr('data-desktop'));
            })
            .fadeIn(400);
        }
          
    }
  );

  $(document).ready(function(){
  
            $(".MenuButton , .CloseButton1 ,.MenuActive1 ").click(function () {
                jQuery("body").toggleClass("menuPopupActivated");
                windowHeight = jQuery(window).innerHeight();
                PopupHeaderHeight1= jQuery(".PopUpHeaderBoxWrap1").innerHeight();
                PopuuFooterHeight1= jQuery(".PopUpFooterBoxWrap1").innerHeight();
                totalGap = PopupHeaderHeight1 + PopuuFooterHeight1;
                jQuery('.PopupContentBox1').css('height', (windowHeight - totalGap )+'px');
                
            });
            $(".contactPopupButton , .contactPopupClose , .Contactusnow").click(function () {
                jQuery("body").toggleClass("contactPopupActivated");
                
                windowHeight = jQuery(window).innerHeight();
                PopupHeaderHeight2= jQuery(".PopUpHeaderBoxWrap2").innerHeight();
                PopuuFooterHeight2= jQuery(".PopUpFooterBoxWrap2").innerHeight();
                totalGap = PopupHeaderHeight2 + PopuuFooterHeight2;
                jQuery('.PopupContentBox2').css('height', (windowHeight - totalGap )+'px');
                
            });
            
  });

  $(document).ready(function () {
    // Initially show the first tab content and add an active class to the first tab
    $('.TabItemContent').hide(); // Hide all tab contents
    $('.TabItemContent[data-tab="1"]').show(); // Show the first tab content
    $('.TabItem[data-tab="1"]').addClass('active'); // Mark the first tab as active

    // On clicking a tab item
    $('.TabItem').click(function () {
        var tabId = $(this).data('tab'); // Get the tab id from data-tab attribute

        // Remove active class from all tabs and hide all contents
        $('.TabItem').removeClass('active');
        $('.TabItemContent').hide();

        // Add active class to the clicked tab and show the related content
        $(this).addClass('active');
        $('.TabItemContent[data-tab="' + tabId + '"]').show();
    });
});


$(".team").slick({
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 4,
  slidesToScroll: 1,
  loop: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2,
        centerMode: true,
      },
    },
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
      },
    },
  ],
});
$(".TabItemsMobie").slick({
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 4,
  slidesToScroll: 1,
  loop: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        centerMode: true,
      },
    },
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
      },
    },
  ],
});
$(".GalleryItemSlider").slick({
  dots: true,
  infinite: false,
  speed: 1500,
  slidesToShow: 5,
  slidesToScroll: 3,
  loop: false,
  arrows: true,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        centerMode: true,
      },
    },
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        loop: true,
        infinite: true,
      },
    },
  ],
});





let visibleItems = 12;
let currentFilter = "All List";

function renderGalleryItems(filter) {
  const galleryItemsContainer = $(".galleryItems");
  galleryItemsContainer.empty();

  const filteredItems = mediaList.filter((item) => {
    return filter === "All List" || item.categories.includes(filter);
  });

  const itemsToShow = filteredItems.slice(0, visibleItems);
  itemsToShow.forEach((item) => {
    const itemElement = `
      <div class="col-md-3">
        <a class="VidBoxLink" href="${item.LinkURL}" data-fancybox="group">
          <div class="GalleryVideoBox position-relative">
            <img class="GalleryThumbImage ImageSwitcher w-100 bd-20" src="${item.ThumbURL}" />
            ${item.URLtype === "video" ? '<div class="VideoPlayButton">&nbsp;</div>' : ""}
          </div>
        </a>
      </div>
    `;
    galleryItemsContainer.append(itemElement);
  });

  if (visibleItems >= filteredItems.length) {
    $(".LoadMoreButton").hide();
  } else {
    $(".LoadMoreButton").show();
  }
}

function resetScrollPosition() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

$(".GalleryFilterItemButton").on("click", function () {
  $(".GalleryFilterItemButton").removeClass("active");
  $(this).addClass("active");
  currentFilter = $(this).data("filter");
  visibleItems = 12;
  renderGalleryItems(currentFilter);
  resetScrollPosition();
});

$(".LoadMoreButton").on("click", function () {
  visibleItems += 8;
  renderGalleryItems(currentFilter);
});

$(document).ready(function () {
  renderGalleryItems(currentFilter);
});