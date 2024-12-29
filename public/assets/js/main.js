/**
* Template Name: iLanding
* Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
* Updated: Nov 12 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function () {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function (swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function (e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();

// Active tabs in reservation page
const tabs = document.querySelectorAll('.nav-link');
const tabContents = document.querySelectorAll('.tab-pane');

tabs.forEach(tab => {
  tab.addEventListener('click', function () {
    const target = document.querySelector(tab.getAttribute('data-bs-target'));

    if (target.classList.contains('show')) {
      // If the content is shown, hide it
      target.classList.remove('show', 'active');
    } else {
      // If the content is hidden, show it
      tabContents.forEach(content => content.classList.remove('show', 'active'));
      target.classList.add('show', 'active');
    }
  });
});

// open tooltip
document.addEventListener('DOMContentLoaded', function () {
  var tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  var tooltipList = [...tooltipTriggerList].map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
});

// check seat <= 5
const checkboxes = document.querySelectorAll(".checkbox-select-seat");
let selectedSeats = 0;

checkboxes.forEach((checkbox) => {
  checkbox.addEventListener("change", (event) => {
    if (event.target.checked) {
      selectedSeats++;
    } else {
      selectedSeats--;
    }

    if (selectedSeats > 5) {
      Swal.fire({
        position: "top-end",
        icon: "warning",
        title: "Chỉ chọn tối đa 5 chỗ ngồi",
        showConfirmButton: false,
        timer: 2000,
      });
      event.target.checked = false;
      selectedSeats--;
    }
  });
});

// logout
document.getElementById('logoutLink').addEventListener('click', function (event) {
  event.preventDefault();
  Swal.fire({
    title: "Bạn có muốn đăng xuất?",
    text: "Đăng xuất sẽ xóa các tiến trình chưa hoàn thành.",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Đăng xuất"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = event.target.href;
    }
  });
});
// Hiển thị hình ảnh page giao hàng
// Lắng nghe sự kiện khi chọn file
document.getElementById('select-image').addEventListener('change', function (e) {
  const files = e.target.files;
  const previewContainer = document.getElementById('image-preview');

  // Xóa hình ảnh cũ nếu có
  previewContainer.innerHTML = '';

  // Kiểm tra số lượng file
  if (files.length < 1) {
    alert('Bạn phải chọn ít nhất một hình ảnh');
    return;
  } else if (files.length > 5) {
    alert('Bạn chỉ có thể chọn tối đa 5 hình ảnh');
    return;
  }

  // Hiển thị ảnh
  for (let i = 0; i < files.length; i++) {
    const file = files[i];

    // Kiểm tra xem file có phải là hình ảnh không
    if (file.type.startsWith('image/')) {
      const reader = new FileReader();

      reader.onload = function (event) {
        const imgElement = document.createElement('img');
        imgElement.src = event.target.result;
        imgElement.classList.add('img-thumbnail');
        imgElement.style.width = '100px'; // Thay đổi kích thước ảnh hiển thị
        imgElement.style.marginRight = '10px'; // Khoảng cách giữa các ảnh
        previewContainer.appendChild(imgElement);
      }

      reader.readAsDataURL(file);
    } else {
      alert('Vui lòng chỉ chọn tệp hình ảnh.');
    }
  }
});

// select input type radio and get display suitable input
document.querySelectorAll('input[name="deliveryType"]').forEach(radio => {
  radio.addEventListener('change', function() {
      const stationRow = document.getElementById('stationRow');
      const addressRow = document.getElementById('addressRow');

      // Kiểm tra nếu radio "Giao hàng đến trạm nhận" được chọn
      if (document.getElementById('deliveryToStation').checked) {
          stationRow.style.display = 'table-row'; // Hiển thị trạm nhận
          addressRow.style.display = 'none'; // Ẩn địa chỉ giao tận nơi
      }

      // Kiểm tra nếu radio "Giao tận nơi" được chọn
      if (document.getElementById('deliveryToAddress').checked) {
          stationRow.style.display = 'none'; // Ẩn trạm nhận
          addressRow.style.display = 'table-row'; // Hiển thị địa chỉ giao tận nơi
      }
  });
});

