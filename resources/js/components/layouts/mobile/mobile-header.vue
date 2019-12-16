<template>
    <!-- mobile header -->
    <div class="mobile-header nav-overlay">
        <!-- menu icon -->
        <span
            class="btn-mobile"
            uk-toggle="target: #wrapper ; cls: mobile-active"
        ></span>

        <a href="dashboard.html" class="logo">
            <i class="uil-graduation-hat"></i> Courseplus
        </a>

        <!-- icon search-->
        <a
            class="uk-navbar-toggle"
            uk-search-icon
            uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
            href="#"
        ></a>
    </div>
</template>

<script>
export default {
    //
};
</script>
