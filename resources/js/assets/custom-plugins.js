import Vue from "vue";
import mixin from "./mixin";
import helpers from "./helpers";

export default Plugin.install = () => {
    Vue.mixin(mixin);
    Vue.prototype.$helper = helpers;
};
