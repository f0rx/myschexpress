<template>
  <!-- side nav-->
  <div class="side-nav uk-animation-slide-left-medium">
    <div class="side-nav-bg"></div>

    <!-- logo -->
    <div class="logo uk-visible@s">
      <a href="dashboard.html">
        <i class="uil-graduation-hat"></i>
      </a>
    </div>

    <ul>
      <li>
        <a href="#">
          <i class="uil-play-circle"></i>
        </a>
        <div class="side-menu-slide">
          <div class="side-menu-slide-content">
            <ul data-simplebar>
              <li>
                <a href="courses.html">
                  <i class="uil-brush-alt"></i> Web Development
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-android-alt"></i> Mobile App
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-bag-alt"></i> Business
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-window"></i> IT Software
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-palette"></i> Desings
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-megaphone"></i> Marketing
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-life-ring"></i> Life Style
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-camera"></i> Photography
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-medkit"></i> Health Fitness
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-music"></i> Music
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-shopping-cart-alt"></i> Ecommerce
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-utensils-alt"></i> Food cooking
                </a>
              </li>
              <li>
                <a href="courses.html">
                  <i class="uil-lightbulb-alt"></i> Teaching academy
                </a>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li>
        <!-- book -->
        <a href="book.html">
          <i class="uil-book-alt"></i>
          <span class="tooltips">Book</span>
        </a>
      </li>
      <li>
        <!-- Episodes -->
        <a href="episode.html">
          <i class="uil-youtube-alt"></i>
          <span class="tooltips">Episodes</span>
        </a>
      </li>
      <li>
        <!-- Blog-->
        <a href="blog-1.html">
          <i class="uil-file-alt"></i>
          <span class="tooltips">Blog</span>
        </a>
      </li>
      <li>
        <!--  Pages -->
        <a href="#">
          <i class="uil-layers"></i>
        </a>
        <div class="side-menu-slide">
          <div class="side-menu-slide-content">
            <ul uk-accordion>
              <!-- to make it open default   class="uk-open" -->
              <li>
                <a href="#" class="uk-accordion-title">
                  <i class="uil-layers"></i> Pages
                </a>
                <div class="uk-accordion-content">
                  <a href="page-pricing.html">Pricing</a>
                  <a href="page-faq.html">faq</a>
                  <a href="page-term.html">term</a>
                  <a href="page-privacy.html">Privacy</a>
                  <a href="specialty-comming-soon.html">Comming soon</a>
                  <a href="specialty-maintanence.html">Maintanence</a>
                </div>
              </li>
              <li>
                <a href="#" class="uk-accordion-title">
                  <i class="uil-sign-out-alt"></i> authentication
                </a>
                <div class="uk-accordion-content">
                  <a href="form-login.html">Login</a>
                  <a href="form-register.html">Register</a>
                  <a href="form-modern-login.html">Simple Register</a>
                  <a href="form-modern-singup.html">Simple Register</a>
                </div>
              </li>
              <li>
                <a href="#" class="uk-accordion-title">
                  <i class="uil-code"></i> Development
                </a>
                <div class="uk-accordion-content">
                  <a href="development-elements.html">Elements</a>
                  <a href="development-compounents.html">Components</a>
                  <a href="development-icons.html">Icons</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li>
        <a href="#" uk-toggle="target: #searchbox; cls: is-active">
          <i class="uil-search-alt"></i>
        </a>
      </li>
    </ul>
    <ul class="uk-position-bottom">
      <li>
        <!-- Lunch information box -->
        <a href="#">
          <i class="uil-paint-tool"></i>
        </a>
        <div
          uk-drop="pos: right-bottom ;mode:click ; offset: 10;animation: uk-animation-slide-right-small"
        >
          <div class="uk-card-default rounded p-0">
            <h5 class="mb-0 p-3 px-4 bg-light">Night mode</h5>
            <div class="p-3 px-4">
              <p>Turns the light surfaces of the page dark, creating an experience ideal for night.</p>
              <div class="uk-flex">
                <p class="uk-text-small text-muted">DARK THEME</p>
                <!-- night mode button -->
                <span href="#" id="night-mode" class="btn-night-mode">
                  <label class="btn-night-mode-switch">
                    <span class="uk-switch-button"></span>
                  </label>
                </span>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <a href="#">
          <span class="icon-feather-user"></span>
        </a>
        <div
          uk-drop="pos: right-bottom ;mode:click ; offset: 10;animation: uk-animation-slide-right-small"
        >
          <div class="uk-card-default rounded p-0">
            <a href="user-profile.html" class="p-0">
              <div class="dropdown-user-details">
                <div class="dropdown-user-avatar">
                  <img src="assets/images/avatars/avatar-2.jpg" alt />
                </div>
                <div class="dropdown-user-name">
                  Richard Ali
                  <span>Students</span>
                </div>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">
                  <i class="icon-material-outline-dashboard"></i> Dashboard
                </a>
              </li>
              <li>
                <a href="user-profile-edit.html">
                  <i class="icon-feather-settings"></i> Account Settings
                </a>
              </li>
              <li>
                <a href="#" class="text-grey">
                  <i class="icon-feather-star"></i> Upgrade To Premium
                </a>
              </li>
              <li class="menu-divider"></li>
              <li>
                <a href="#">
                  <i class="icon-feather-help-circle"></i> Help
                </a>
              </li>
              <li>
                <a href="page-login.html">
                  <i class="icon-feather-log-out"></i> Sing Out
                </a>
              </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  //
};
</script>
