<template>
    <!-- overlay seach on mobile-->
    <div
        class="nav-overlay uk-navbar-left uk-flex-1 bg-grey uk-light p-3"
        hidden
    >
        <div class="uk-navbar-item uk-width-expand">
            <form class="uk-search uk-search-navbar uk-width-1-1">
                <input
                    class="uk-search-input"
                    type="search"
                    placeholder="Search..."
                    autofocus
                />
            </form>
        </div>
        <a
            class="uk-navbar-toggle"
            uk-close
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
