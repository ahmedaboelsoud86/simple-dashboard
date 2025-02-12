<footer class="footer px-4">
    <div><a href="https://coreui.io">CoreUI </a><a
            href="https://coreui.io/product/bootstrap-dashboard-template/">Bootstrap Admin Template</a> © 2024
        creativeLabs.</div>
    <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI PRO UI Components</a>
    </div>
</footer>
</div>
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
<script src="{{ asset('assets/vendors/chart/js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendors/chart/js/coreui-chartjs.js') }}"></script>
<script src="{{ asset('assets/vendors/utils/js/index.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script></script>

</body>

</html>
