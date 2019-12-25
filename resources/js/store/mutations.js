const mutations = {
    setCourses: (state, payload) => {
        let courses = payload.courses;
        state.courses = courses;
        state.tags = payload.tags;
        courses.map(course => {
            if (state.categories.some(item => item.id === course.category.id))
                // Filter the array and skip existing categories
                return;
            state.categories.push(course.category);
        });

        state.featuredCourse = courses.filter(
            item => item.is_featured == true
        )[0];
    }
};

export default mutations;
