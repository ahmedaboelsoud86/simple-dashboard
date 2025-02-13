  <!-- CoreUI and necessary plugins-->
  <script src="{{ asset('assets/vendors/js/coreui.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/i18next/js/i18next.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/i18next-http-backend/js/i18nextHttpBackend.js') }}"></script>
  <script src="{{ asset('assets/vendors/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.js') }}">
  </script>
  <script src="{{ asset('assets/js/i18next.js') }}"></script>
  <script>
      const header = document.querySelector('header.header');

      document.addEventListener('scroll', () => {
          if (header) {
              header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
          }
      });
  </script>
  <!-- Plugins and scripts required by this view-->
