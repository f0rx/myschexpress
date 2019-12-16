<template>
    <div>
        <h1>Demo App</h1>

        <p>
            <router-link :to="{ name: 'courses.index' }">Courses</router-link> |
            <router-link :to="{ name: 'courses.show' }"
                >Courses Single</router-link
            >
        </p>

        <div class="container">
            <router-view :key="$route.fullPath"></router-view>
        </div>
    </div>
</template>

<script>
export default {
    //
};
</script>
