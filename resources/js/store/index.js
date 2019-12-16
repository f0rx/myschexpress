import Vue from "vue";
import Vuex from "vuex";
import MyPlugin from "../assets/custom-plugins";
import states from "./states";
import mutations from "./mutations";
import actions from "./actions";
import getters from "./getters";

Vue.use(MyPlugin);
Vue.use(Vuex);

export default new Vuex.Store({
    state: states,
    mutations: mutations,
    actions: actions,
    getters: getters,
    modules: {}
});
