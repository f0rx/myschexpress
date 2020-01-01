const mutations = {
    setTags: (state, payload) => (state.tags = payload),

    setCategories: (state, payload) => (state.categories = payload),

    setCourses: (state, payload) => {
        // Because i'm using Babel, i can seperate "data" property & "paginator" properties from the "payload"
        // & into different variables
        let { data, ...paginator } = payload;
        let courses = data;

        state.courses = courses;
        state.paginator = paginator;

        // courses.map(course => {
        //     if (state.categories.some(item => item.id === course.category.id))
        //         // Filter the array and skip existing categories
        //         return;
        //     state.categories.push(course.category);
        // });
    }
};

export default mutations;
