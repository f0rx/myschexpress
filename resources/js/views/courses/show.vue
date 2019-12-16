<template>
    <div>
        @{{ message }}
        <router-link :to="{ name: 'courses.index' }"
            ><a>url to root</a></router-link
        >
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: "This is courses.show"
        };
    }
};
</script>
