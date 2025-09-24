let menuBtn =
    '<div class="menu_small"><span></span><span></span><span></span></div>',
  menuWrap = '<div class="menu_wrap"><div class="__block"></div></div>',
  visibled = '<div class="__visited" onclick="menuClose()"></div>',
  overEl = '<div class="overflow_element" onclick="closeBox()"></div>';

headerFixed = function () {
  if (window.scrollY > 1) {
    $("body").addClass("change");
  } else {
    $("body").removeClass("change");
  }
};

menuHideShow = function(){
  $('.menu_hide').on('click', function(){
    $('body').toggleClass('toggle_menu');
    if($('body').hasClass('toggle_menu')){
      $('.submenu').removeClass('open');
      $(document).on('mouseleave', '.sidebar_wrap', function(){
        $('.is_sub').removeClass('open');
      });
    }
  });
}

mobileMenu = function () {
  if ($(window).innerWidth() < 991) {
    if (
      $(".mobile_menu").find("div.menu_small").length === 0 ||
      $(".mobile_menu").find("div.menu_small") === ""
    ) {
      $(".mobile_menu").prepend(menuBtn);
      if($('.menu_wrap').length === 0){
        $("body").prepend(menuWrap);
        $(".header_menu > ul").appendTo(".menu_wrap .__block");
      }
    }
  } else {
    $(".menu_wrap .__block > ul").appendTo(".header_menu");
    $(".menu_small, .menu_wrap").remove();
    $("html").removeClass("__visible_page");
    $("body").removeClass("visibled");
  }
};

toastClose = function () {
  $(".form_toast").removeClass("show");
};
loaderView = function () {
  $(".form_loader").addClass("load");
};

submenuView = function(){
  const __this = $(this);
  __this.parent().toggleClass('open');
}

$('.is_sub p').click(submenuView);

menuClose = function () {
  $(".__visited, .search_visited").remove();
  $("html").removeClass("__visible_page");
  $(".menu_small, .menu_wrap").removeClass("open");
  $("body").removeClass("show");
};

miniTable = function (fullModal, a, b, parentId) {
  $(".minSize").click(function () {
    if (a === b && a != "" && b != "") {
      var closeId = $(this).parent().attr("id"),
        closeSplit = ([] = closeId.split("-")),
        csId = closeSplit[0] + closeSplit[1],
        csdNull = csId.split("f");
      $("html").removeClass("overhide");
      $("#" + fullModal).removeClass("show");
      csdNull[1] === b
        ? $(this)
            .next()
            .appendTo(
              $("#" + parentId)
                .find(".section_content")
                .children()
            )
        : "";
    }
  });
  $(document).keyup(function (e) {
    if (e.key === "Escape") {
      if (a === b && a != "" && b != "") {
        $("html").removeClass("overhide");
        $("#" + fullModal).removeClass("show");
        $("#" + fullModal + " .table_wrap").appendTo(
          $("#" + parentId)
            .find(".section_content")
            .children()
        );
      }
    }
  });
};

removeItem = function (id, routeName) {
  if (id && id != "") {
    $("#isRemove").addClass("fade show");
    $("#recordId").val(id);
    $("#deleteRecord").attr("action", routeName);
  }
};

closeModal = function () {
  $("#isRemove").removeClass("fade show");
};

var allSection = document.getElementsByClassName("form_section");
sectionCollapse = function () {
  if ($(".section_line").find("span")) {
    $(allSection).each(function () {
      if (!$(this).hasClass("hide")) {
        $(this).addClass("hide");
        $(".section_content").hide();
        $(".collapse_btn").text("Дэлгэх");
      } else {
        $(this).removeClass("hide");
        $(".section_content").show();
        $(".collapse_btn").text("Хураах");
      }
    });
  }
};

searchItemFunc = function () {
  const cardMain = document.getElementsByClassName("card_main"),
    searchItem = document.getElementsByClassName("search_item"),
    tsubmit = $(".table_search_form .__border_btn");
  var totalSum = 0,
    itemLength = searchItem.length,
    itemWidth;

  $(searchItem).each(function (index, value) {
    var __this = this;
    totalSum = totalSum + $(value).innerWidth() + 10;
    itemWidth = parseInt(totalSum - 13 + $(tsubmit).innerWidth() + 95);

    if (itemWidth > $(cardMain).innerWidth()) {
      if (index - 1) {
        $(__this).appendTo(".so_list");
      }
    } else {
      $(__this).appendTo(".search_items");
    }
  });

  if (itemWidth >= $(cardMain).innerWidth()) {
    $(".search_items").addClass("more");
    $(".search_other_item").show();
  } else {
    $(".search_other_item").hide();
    $(".search_items").removeClass("more");
  }
};

$(window).resize(function () {
  mobileMenu();
  searchItemFunc();
});

let sideItem = $(".form_section");

$(window).scroll(function () {
  headerFixed();
});

// $( document ).on( "click", ".pink_menu a", function(e) {
//     e.preventDefault();
//     $('.pink_menu').animate({
//         scrollTop: $(this).offset().top - 200
//     }, 800);
// });

menuScroll = function(){
  // $("a.page-scroll").first().addClass("selected");
  $('a.page-scroll[href*="#"]:not([href="#"])').on("click", function (event) {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      event.preventDefault();
      $("a.page-scroll").removeClass("selected");
      var target = $(this.hash);
      if (target.length) {
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if ($(window).innerWidth() < 640) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            100
          );
          return false;
        } else {
          $("html, body").animate(
            {
              scrollTop: target.offset().top - 57,
            },
            100
          );
          return false;
        }
      }
    }
  });
  
}

$(document).ready(function () {
  headerFixed();
  mobileMenu();
  menuHideShow();
  menuScroll();

  var sUrl = $('.page-scroll');
  $(window).scroll(function () {
      var header = $('.kfc_header'), hh = $(header).height(), scMenu = $('.__main_content_category'), dimg = $('.kfc_home_slider'), ch = $('.__main_content_header h1').height(), dimgh = dimg.height(), scbl = $(this).scrollTop(), st = $(window).scrollTop();

      sUrl.each(function () {
          var target = $(this.hash);
              if(target.length >= 1) {
              if (target.offset().top - 146 <= scbl) {
                  $(this).parent().siblings().removeClass('selected');
                  $(this).parent().addClass('selected');
              }
          }
      });
  });

  const name = $('.account_btn p').text();
  $('.account_btn .user_slice').text(name.slice(0, 1));

  document.querySelectorAll('[role="progressbar"]').forEach(bar => {
    const value = parseInt(bar.getAttribute('aria-valuenow'), 10);
    if (value <= 75) {
      bar.classList.add('warning');
    }
    if (value <= 50) {
      bar.classList.remove('warning');
      bar.classList.add('danger');
    }
  });

  if($('body').find('.form_date').length > 0){
    $.datetimepicker.setLocale('mn');
    $('.form_date').datetimepicker({
      datepicker: true,
      timepicker: false,
      format:'Y.m.d'
    });
  }

  if($('body').find('.form_time').length > 0){
    $.datetimepicker.setLocale('mn');
    $('.form_time').datetimepicker({
      datepicker: true,
      timepicker: true,
      format:'Y.m.d H:i',
      formatTime: 'H:i',
    });
  }

  var fullBtn = document.getElementsByClassName("full_size"),
    isTrue = 0;
  $(".full_modal").each(function (key, value) {
    var fullModal = ([] = value.id);
    if (fullModal && fullModal != "") {
      var bodyId = ([] = fullModal.split("f"));
      var sb = bodyId[0] + bodyId[1].split("-"),
        sbr = sb.replace(",", "");
      $(fullBtn).click(function () {
        var parentId = $(this).parent().parent().parent().attr("id");
        var splitId = ([] = parentId.split("-")),
          btnId = splitId[0] + splitId[1],
          isTrue = 1;
        if (sbr === btnId && sbr != "" && btnId != "") {
          $("html").addClass("overhide");
          $("#" + fullModal).addClass("show");
          $(this)
            .parent()
            .parent()
            .next()
            .find(".table_wrap")
            .appendTo("#" + fullModal);
        }
        if (isTrue === 1) {
          miniTable(fullModal, sbr, btnId, parentId);
        }
      });
    }
  });

  $("#regId").inputmask({
    alias: "Regex",
    regex: "^(([а-яА-Я]{2})[0-9]{8})$",
  });

  $("#regNum").inputmask({
    alias: "Regex",
    regex: "^([0-9]{10})$",
  });

  $(".register_number").inputmask({
    alias: "Regex",
    regex: "^(([а-яА-Я]{2})[0-9]{8})$",
  });

  $(".input_year").inputmask({
    alias: "Regex",
    regex: "^([0-9]{4})$",
  });

  $(".phone_number").inputmask({
    alias: "Regex",
    regex: "^([0-9]{8})$",
  });

  $(".input_email").inputmask({
    alias: "Regex",
    regex: "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$",
  });

  var searchBtn = $(".search_more_btn"),
    dropList = true;
  $(searchBtn).click(function () {
    $(this).toggleClass("active");
    $(this).next().toggleClass("view");
    dropList = true;
  });

  var thisDrop = true;
  $('.account_btn').on('click', function(){
    if($(this).hasClass('show')){
      thisDrop = false;
      $(this).removeClass('show');
    }
    thisDrop = true;
    $(this).toggleClass('show');
  });

  $(document).on('click', 'html', function(){
    if(!thisDrop){
      $('.account_btn').removeClass('show');
    }
    thisDrop = false;
  });

  $(searchBtn)
    .next()
    .click(function () {
      dropList = true;
    });

  $(document).on("click", "html", function () {
    if (!dropList) {
      searchBtn.removeClass("active");
      searchBtn.next().removeClass("view");
    }
    dropList = false;
  });

  let statusFilter = document.querySelectorAll(".card_status a");

  statusFilter.forEach((selectButton) => {
    selectButton.addEventListener("click", (e) => {
      let button = e.currentTarget;
      statusFilter.forEach(
        (btn) => btn !== button && btn.classList.remove("selected")
      );
      button.classList.toggle("selected");
    });
  });

  $(".checkAll").change(function () {
    var checkboxes = $(this).closest("table").find(":checkbox");
    checkboxes.prop("checked", $(this).is(":checked"));
  });

  $(document).on("click", ".menu_small", function (e) {
    let mwrap = $(".menu_wrap");
    e.preventDefault();
    $("html").toggleClass("__visible_page");
    $(this).toggleClass("open");
    $(".__header_main").toggleClass("open");
    $(mwrap).toggleClass("open");
    if ($("body").find(".__visited").length === 0) {
      $(visibled).appendTo("body");
    } else {
      $(".__visited").remove();
    }
  });

  $('.student_box h2').on('click', function() {
    $(this).parent().toggleClass('show');
  });

  $(".section_head").on("click", function () {
    $(this).parent().toggleClass("is_view");
  });
  $(".section_title").on("click", function () {
    $(this).toggleClass("active");
    $(this).next().toggleClass("hide");
    if ($(this).next().hasClass("hide")) {
      if ($(".tool_tab_head").children("active")) {
        $(".icon").removeClass("active");
      }
      $(".tool_tab_main").hide();
    }
  });

  if ($(".menu_link").find("p").hasClass("active")) {
    $(".submenu").show();
    $(".menu_link .active").parent().addClass("show");
  }

  $(".menu_link>p").click(function (e) {
    e.preventDefault();
    let $this = $(this);
    if ($this.parent().hasClass("show")) {
      $this.parent().removeClass("show");
      $this.next().slideUp(300);
    } else {
      $(".menu_link>h3").parent().removeClass("show");
      $(".submenu").slideUp(300);
      $this.parent().removeClass("show");
      $this.parent().toggleClass("show");
      $this.next().slideToggle(300);
    }
  });

  $(".form_section .section_line span").click(function (e) {
    e.preventDefault();
    let $this = $(this);
    $this.parent().parent().toggleClass("hide");
    $this.parent().next().slideToggle(150);
  });

  $('.other_add_item').click(function(){
    if($(this).parents('.other_add_cont').length){
      $(this).parent().toggleClass('open');
    }
    $(this).toggleClass('selected');
  });

  $("input[type=radio]").click(function () {
    var previousValue = $(this).data("storedValue");
    if (previousValue) {
      $(this).prop("checked", !previousValue);
      $(this).data("storedValue", !previousValue);
    } else {
      $(this).data("storedValue", true);
      $("input[type=radio]:not(:checked)").data("storedValue", false);
    }
  });
});
