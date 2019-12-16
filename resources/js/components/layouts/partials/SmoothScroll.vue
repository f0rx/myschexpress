<template>
    <div class="grid-slider-header">
        <div>
            <h4 class="uk-text-truncate">
                {{ text }}
                <a :href="link" class="text-success">{{ highlight }}</a>
            </h4>
        </div>
        <div class="grid-slider-header-link">
            <a :href="link" class="button transparent uk-visible@m">
                View all
            </a>
            <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
            <a href="#" class="slide-nav-next" uk-slider-item="next"></a>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        text: { type: String, required: true, default: () => "" },
        highlight: { type: String, required: true, default: () => "" },
        link: { type: String, required: true, default: () => "#" }
    }
};
</script>
