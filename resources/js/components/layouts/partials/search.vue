<template>
    <!-- search overlay-->
    <div id="searchbox">
        <div class="search-overlay"></div>

        <div class="search-input-wrapper">
            <div class="search-input-container">
                <div class="search-input-control">
                    <span
                        class="icon-feather-x btn-close uk-animation-scale-up"
                        uk-toggle="target: #searchbox; cls: is-active"
                    ></span>
                    <div class=" uk-animation-slide-bottom">
                        <input type="text" name="search" autofocus required />
                        <p class="search-help">
                            Type the name of the Course and book you are looking
                            for
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    //
};
</script>
