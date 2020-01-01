const actions = {
    fetchCourses: ({ commit, state }) => {
        axios.get("/courses/all").then(({ data }) => {
            if (Array.isArray(state.courses) && !state.courses.length)
                commit("setCourses", data);
        });
    },

    fetchCategories: ({ commit, state }) => {
        axios.get("/categories").then(({ data }) => {
            commit("setTags", data.tags);
            commit("setCategories", data.categories);
        });
    },

    fetchNextCourses: ({ commit }, payload) => {
        let route =
            payload.category != undefined
                ? `courses/${payload.category.slug}/u/0?page=${payload.page}`
                : `courses/all?page=${payload.page}`;
        axios.get(route).then(({ data }) => {
            commit("setCourses", data);
        });
    }
};

export default actions;
