window.Vue = require("vue");
import VueRouter from "vue-router";

Vue.use(VueRouter);
Vue.config.productionTip = false;
window.Event = new Vue();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context("./", true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
            .split("/")
            .pop()
            .split(".")[0],
        files(key).default
    )
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import routes from "./routes";
import store from "./store";
import plugins from "./assets/custom-plugins";

Vue.use(plugins);

const router = new VueRouter({
    base: process.env.MIX_BASE_URL,
    mode: "history",
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition; // Return a saved position if one's available
        } else if (to.hash) {
            return { selector: to.hash }; // Return a hash if set
        } else {
            return { x: 0, y: 0 }; // Return to the top
        }
    }
});

new Vue({
    el: "#wrapper",
    router,
    store,
    created() {
        // this.$store.dispatch("fetchCourses");
    }
});
