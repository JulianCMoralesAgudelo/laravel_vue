require("./bootstrap");

window.Vue = require("vue").default;

import VueRouter from "vue-router";
Vue.use(VueRouter);

import Form from "./components/Tasks/Form.vue";
import Task from "./components/Tasks/Lists.vue";

const routes = [
    {
        path: "/form",
        component: Form,
    },
    {
        path: "/",
        component: Task,
    },
];

const router = new VueRouter({ routes });
const app = new Vue({
    el: "#app",
    router: router,
});
