import { createRouter, createWebHashHistory } from "vue-router";
import Layout from "@/Layouts/AppLayout.vue";

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: "/",
            component: Layout,
            children: [
                {
                    path: "/",
                    name: "dashboard",
                    component: () => import("@/Pages/Dashboard.vue"),
                },
                {
                    path: "/blog",
                    name: "blog",
                    component: () => import("@/Pages/Blog.vue"),
                },
                {
                    path: "/about",
                    name: "about",
                    component: () => import("@/Pages/About.vue"),
                }
            ],
        },
    ],
});

export default router;
