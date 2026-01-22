
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.4.0
* @link https://tabler.io
* Copyright 2018-2025 The Tabler Authors
* Copyright 2018-2025 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <meta name="msapplication-TileColor" content="#066fd1" />
    <meta name="theme-color" content="#066fd1" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <meta
      name="description"
      content="Tabler is packed with beautifully crafted components and powerful features. Jump in and start building a stunning dashboard — all for free!"
    />
    <meta name="canonical" content="https://preview.tabler.io/layout-fluid.html" />
    <meta name="twitter:image:src" content="https://preview.tabler.io/static/og.png" />
    <meta name="twitter:site" content="@tabler_ui" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI." />
    <meta
      name="twitter:description"
      content="Tabler is packed with beautifully crafted components and powerful features. Jump in and start building a stunning dashboard — all for free!"
    />
    <meta property="og:image" content="https://preview.tabler.io/static/og.png" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:site_name" content="Tabler" />
    <meta property="og:type" content="object" />
    <meta property="og:title" content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI." />
    <meta property="og:url" content="https://preview.tabler.io/static/og.png" />
    <meta
      property="og:description"
      content="Tabler is packed with beautifully crafted components and powerful features. Jump in and start building a stunning dashboard — all for free!"
    />
    <!-- BEGIN PAGE LEVEL STYLES -->
    <!-- <link href="./dist/libs/jsvectormap/dist/jsvectormap.css?1759774806" rel="stylesheet" /> -->
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <!-- <link
      href="./dist/css/tabler-flags.min.css?1759774806"
      rel="stylesheet"
      integrity="sha384-kmvP0hkBXZ2hMSZlbvE1Q2HIXzPCQRL3ijUeqNiwaPd2nl2Aks+s3gW+V5fAHOX9"
    />
    <link
      href="./dist/css/tabler-socials.min.css?1759774806"
      rel="stylesheet"
      integrity="sha384-eWmz8gyiLzrDw3JcT/PJxjGyKizQjvByfHqocjrMMkIrbKFCnOuP/qMwAz3bHmsC"
    />
    <link
      href="./dist/css/tabler-payments.min.css?1759774806"
      rel="stylesheet"
      integrity="sha384-xWIXbKxPLGG/ZEGUKxDjJn3xmUgd2PC2CSZUKJ4PyTse49DiuvJx2WT5wSNJRyw9"
    />
    <link
      href="./dist/css/tabler-vendors.min.css?1759774806"
      rel="stylesheet"
      integrity="sha384-+X7+c/noY2B9ieq9daEaVStkUhIFyJTO5T6Occ6jZisx57sbECetvloLqcvGahUv"
    />
    <link
      href="./dist/css/tabler-marketing.min.css?1759774806"
      rel="stylesheet"
      integrity="sha384-4dAlYnPzCom9yeC/5++PFq2FG/szJRlUPsDSrjZ3EWP8IAzK7g7rrsnSfqrS67Se"
    />
    <link
      href="./dist/css/tabler-themes.min.css?1759774806"
      rel="stylesheet"
      integrity="sha384-jTe/MdN6BlY4S3eYe6Qw++yTjuezmVnxWp/l7GAG1qXGC+jttphHqsAN/bGPvJOk"
    /> -->
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN DEMO STYLES -->
        <!-- <link href="./preview/css/demo.min.css?1759774806" rel="stylesheet" integrity="sha384-BUDq2P684xwRBf0GDlySvob+KJg4ko8y2K7njgvYBscmEuqoVVqJ75zcTDozwkFA" /> -->
    <!-- END DEMO STYLES -->
    <!-- BEGIN CUSTOM FONT -->
    <style>
      @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
  </head>
  <body class="layout-fluid">
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('js/tabler-theme.min.js') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
      <!-- BEGIN NAVBAR  -->
        @include('layout.navbar')
      <!-- END NAVBAR  -->
      <div class="page-wrapper">
        <!-- BEGIN PAGE HEADER -->
        @include('layout.header')
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <!-- <div class="page-body">
            <div class="container-xl"> -->
                @yield('content')
            <!-- </div>
        </div> -->
        <!-- END PAGE BODY -->
        <!--  BEGIN FOOTER  -->
        @include('layout.footer')
        <!--  END FOOTER  -->
      </div>
    </div>
    <!-- BEGIN PAGE MODALS -->
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="example-text-input" placeholder="Your report name" />
            </div>
            <label class="form-label">Report type</label>
            <div class="form-selectgroup-boxes row mb-3">
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked />
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Simple</span>
                      <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                    </span>
                  </span>
                </label>
              </div>
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="report-type" value="1" class="form-selectgroup-input" />
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Advanced</span>
                      <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                    </span>
                  </span>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="mb-3">
                  <label class="form-label">Report url</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text"> https://tabler.io/reports/ </span>
                    <input type="text" class="form-control ps-0" value="report-01" autocomplete="off" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Visibility</label>
                  <select class="form-select">
                    <option value="1" selected>Private</option>
                    <option value="2">Public</option>
                    <option value="3">Hidden</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Client name</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Reporting period</label>
                  <input type="date" class="form-control" />
                </div>
              </div>
              <div class="col-lg-12">
                <div>
                  <label class="form-label">Additional information</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal"> Cancel </a>
            <a href="#" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
              <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="icon icon-2"
              >
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
              </svg>
              Create new report
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE MODALS -->
    <!-- BEGIN PAGE LIBRARIES -->
    <!-- <script src="./dist/libs/apexcharts/dist/apexcharts.min.js?1759774806" defer></script>
    <script src="./dist/libs/jsvectormap/dist/jsvectormap.min.js?1759774806" defer></script>
    <script src="./dist/libs/jsvectormap/dist/maps/world.js?1759774806" defer></script>
    <script src="./dist/libs/jsvectormap/dist/maps/world-merc.js?1759774806" defer></script> -->
    <!-- END PAGE LIBRARIES -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('dist/js/tabler.min.js') }}" defer integrity="sha384-pku3birjgGovaJ9ngF7SaxKkF/eYUvBjiMJ+jTtWbNesIj2Rud2K63+4JD7EF4gk"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN DEMO SCRIPTS -->
        <!-- <script src="./preview/js/demo.min.js?1759774806" defer></script> -->
    <!-- END DEMO SCRIPTS -->
    <!-- <script src="https://scripts.tabler.io/banner.js" defer data-tblr-ref="tabler-preview-top-banner"></script> -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts &&
          new ApexCharts(document.getElementById("sparkline-bounce-rate-1"), {
            chart: {
              type: "line",
              fontFamily: "inherit",
              height: 24,
              animations: {
                enabled: false,
              },
              sparkline: {
                enabled: true,
              },
            },
            tooltip: {
              enabled: false,
            },
            stroke: {
              width: 2,
              lineCap: "round",
            },
            series: [
              {
                color: "var(--tblr-primary)",
                data: [17, 24, 20, 10, 5, 1, 4, 18, 13],
              },
            ],
          }).render();
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts &&
          new ApexCharts(document.getElementById("sparkline-bounce-rate-2"), {
            chart: {
              type: "line",
              fontFamily: "inherit",
              height: 24,
              animations: {
                enabled: false,
              },
              sparkline: {
                enabled: true,
              },
            },
            tooltip: {
              enabled: false,
            },
            stroke: {
              width: 2,
              lineCap: "round",
            },
            series: [
              {
                color: "var(--tblr-primary)",
                data: [13, 11, 19, 22, 12, 7, 14, 3, 21],
              },
            ],
          }).render();
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts &&
          new ApexCharts(document.getElementById("sparkline-bounce-rate-3"), {
            chart: {
              type: "line",
              fontFamily: "inherit",
              height: 24,
              animations: {
                enabled: false,
              },
              sparkline: {
                enabled: true,
              },
            },
            tooltip: {
              enabled: false,
            },
            stroke: {
              width: 2,
              lineCap: "round",
            },
            series: [
              {
                color: "var(--tblr-primary)",
                data: [10, 13, 10, 4, 17, 3, 23, 22, 19],
              },
            ],
          }).render();
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts &&
          new ApexCharts(document.getElementById("sparkline-bounce-rate-4"), {
            chart: {
              type: "line",
              fontFamily: "inherit",
              height: 24,
              animations: {
                enabled: false,
              },
              sparkline: {
                enabled: true,
              },
            },
            tooltip: {
              enabled: false,
            },
            stroke: {
              width: 2,
              lineCap: "round",
            },
            series: [
              {
                color: "var(--tblr-primary)",
                data: [6, 15, 13, 13, 5, 7, 17, 20, 19],
              },
            ],
          }).render();
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts &&
          new ApexCharts(document.getElementById("sparkline-bounce-rate-5"), {
            chart: {
              type: "line",
              fontFamily: "inherit",
              height: 24,
              animations: {
                enabled: false,
              },
              sparkline: {
                enabled: true,
              },
            },
            tooltip: {
              enabled: false,
            },
            stroke: {
              width: 2,
              lineCap: "round",
            },
            series: [
              {
                color: "var(--tblr-primary)",
                data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14],
              },
            ],
          }).render();
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts &&
          new ApexCharts(document.getElementById("sparkline-bounce-rate-6"), {
            chart: {
              type: "line",
              fontFamily: "inherit",
              height: 24,
              animations: {
                enabled: false,
              },
              sparkline: {
                enabled: true,
              },
            },
            tooltip: {
              enabled: false,
            },
            stroke: {
              width: 2,
              lineCap: "round",
            },
            series: [
              {
                color: "var(--tblr-primary)",
                data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14],
              },
            ],
          }).render();
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var themeConfig = {
          theme: "light",
          "theme-base": "gray",
          "theme-font": "sans-serif",
          "theme-primary": "blue",
          "theme-radius": "1",
        };
        var url = new URL(window.location);
        var form = document.getElementById("offcanvasSettings");
        var resetButton = document.getElementById("reset-changes");
        var checkItems = function () {
          for (var key in themeConfig) {
            var value = window.localStorage["tabler-" + key] || themeConfig[key];
            if (!!value) {
              var radios = form.querySelectorAll(`[name="${key}"]`);
              if (!!radios) {
                radios.forEach((radio) => {
                  radio.checked = radio.value === value;
                });
              }
            }
          }
        };
        form.addEventListener("change", function (event) {
          var target = event.target,
            name = target.name,
            value = target.value;
          for (var key in themeConfig) {
            if (name === key) {
              document.documentElement.setAttribute("data-bs-" + key, value);
              window.localStorage.setItem("tabler-" + key, value);
              url.searchParams.set(key, value);
            }
          }
          window.history.pushState({}, "", url);
        });
        resetButton.addEventListener("click", function () {
          for (var key in themeConfig) {
            var value = themeConfig[key];
            document.documentElement.removeAttribute("data-bs-" + key);
            window.localStorage.removeItem("tabler-" + key);
            url.searchParams.delete(key);
          }
          checkItems();
          window.history.pushState({}, "", url);
        });
        checkItems();
      });
    </script>
    <!-- END PAGE SCRIPTS -->
  </body>
</html>
