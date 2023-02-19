import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Login from "../views/auth/Login.vue";
import Register from "../views/auth/Register.vue";
import ForgottenPassword from "../views/auth/Forgot-Password.vue";
import ResetPassword from "../views/auth/Reset-Password.vue";
const routes = [
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/register",
        name: "register",
        component: Register,
    },
    {
        path: "/forgotten-Password",
        name: "forgotten-password",
        component: ForgottenPassword,
    },
    {
        path: "/reset-password/token",
        name: "reset-password",
        component: ResetPassword,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
