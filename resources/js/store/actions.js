const actions = {
    fetchCourses: async ({ commit }) => {
        let courses = await axios.get("/courses/all");
        commit("setCourses", courses.data);
    }
};

export default actions;
