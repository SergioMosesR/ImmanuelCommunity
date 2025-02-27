<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex align-items-center text-left">
          <div class="logo">
            <img src="assets/img/logo.png" alt="Logo">
          </div>
          <div class="footer-logo">
            Immanuel Community
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> Jl. Krakatau Raya No.10, Kec. Semarang Timur, Semarang 50125</p>

            <p><i class="fas fa-building"></i> yayasan.immanuel.semarang@gmail.com</p>
            <p><i class="fas fa-phone"></i>(024) 8414207 / 8418978</p>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright" style="text-align: center; margin-top: 3rem; font-size: 15px;">
      <p>&copy; 2024 <a style="font-weight: bold; text-align:center;">Immanuel Community</a>. All Rights Reserved.</p>
    </div>
  </footer>

  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <script>
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarNav');

    navbarToggler.addEventListener('click', function() {

      this.classList.toggle('active');


      if (navbarCollapse.classList.contains('show')) {
        navbarCollapse.classList.remove('show');
      } else {
        navbarCollapse.classList.add('show');
      }
    });
  </script>

</body>


</html>
