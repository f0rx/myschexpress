let index = require("../views/courses/index.vue").default;
let show = require("../views/courses/show.vue").default;
let AppName = "MySchExpress";

const routes = [
    {
        path: "/",
        component: () => import("../views/courses/show.vue")
    },

    {
        path: "/",
        component: {
            render(c) {
                return c("router-view");
            }
        },

        meta: {
            guest: true
        },

        children: [
            {
                path: "courses",
                component: index,
                name: "courses.index",
                meta: {
                    title: `Courses - ${AppName}`,
                    metaTags: [
                        {
                            name: "description",
                            content: "All Courses."
                        }
                    ]
                }
            },

            {
                path: `courses/show/single`,
                component: show,
                name: "courses.show",
                meta: {
                    title: `Course Detail`
                }
            }
        ]
    }
];

export default routes;
