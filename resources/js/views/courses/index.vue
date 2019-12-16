<template>
    <div>
        @{{ message }}
        <router-link :to="{ name: 'courses.show' }"
            ><a>url to single course</a></router-link
        >
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: "This is courses.index"
        };
    }
};
</script>
