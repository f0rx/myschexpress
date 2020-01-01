<template>
  <div :class="mClass" uk-grid>
    <div v-for="(course, index) in courses" :key="index">
      <a :href="route(course)">
        <div class="course-card">
          <div class="course-card-thumbnail">
            <img :src="`images/course/${index}.png`" />
            <span class="play-button-trigger"></span>
          </div>
          <div class="course-card-body">
            <div class="course-card-info">
              <div>
                <span class="catagroy" v-html="course.category.name"></span>
              </div>
              <div>
                <i
                  class="icon-feather-bookmark icon-small"
                  @click.prevent="bookmarkCourse(course, $event)"
                ></i>
              </div>
            </div>
            <h4 v-html="course.title"></h4>
            <p v-html="course.summary" style="text-align: justify; text-justify: auto"></p>
            <div class="course-card-footer">
              <h5>
                <i class="icon-feather-film"></i> 12 Lectures
              </h5>
              <h5>
                <i class="icon-feather-clock"></i> 25 Hours
              </h5>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      courses: []
    };
  },

  props: {
    mClass: {
      type: String,
      required: false
    },

    catCourses: {
      type: Object,
      require: false,
      default: () => null
    }
  },

  watch: {
    catCourses: {
      immediate: true, // Immediately set a watcher when page loads
      deep: true, // Watch nested properties deeply nested
      handler(newVal, oldVal) {
        let thisCategory = this.catCourses;
        // Ensure the prop "catCategories" was passed, then make a commit to vuex
        thisCategory != null
          ? this.$store.commit("setCourses", thisCategory)
          : this.$store.dispatch("fetchCourses"); // Else just do nothing
      }
    }
  },

  methods: {
    route(course) {
      // Format the route for each course
      let category_slug = course.category.slug;
      let course_slug = course.slug;
      let author_slug = course.authors[0].id;
      return `/courses/${category_slug}/${author_slug}/${course_slug}`;
    },

    bookmarkCourse(course, event) {
      console.log("Bookmark this Course - " + course.title);
      console.log(event.target);
    }
  },

  created() {
    this.courses = this.$store.state.courses;
    this.$store.subscribe((mutation, state) => {
      if (mutation.type === "setCourses" && state.courses != null)
        this.courses = state.courses; // Watch for changes and update fragment
    });

    Event.$on("selected", data => {
      // "data" here will be sth like => "Latest", "Most popular", "Discount"
      // Listen for "selected" event when user navigates tab
      if (data.includes("Latest")) {
        /*
                When user switches to "Latest" tab
                Get all in store (Because the courses in store will always be in DESC order)
                */
        this.courses = this.$store.state.courses;
        return;
      }

      let shuffle = []; // Creates empty array for map
      this.$store.state.courses.map(course => {
        /*
                Here, the real logic happens,
                For each "course" object in the store
                    loop through the "tabs" attribute
                        Push courses whose tabs[] contains the "data" parameter above
                */
        course.tabs.map(tag => {
          if (tag.includes(data)) shuffle.push(course);
        });
      });

      this.courses = shuffle; // Update the list
    });
  }
};
</script>
