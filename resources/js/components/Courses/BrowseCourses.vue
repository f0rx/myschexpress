<template>
  <div :class="xClass" uk-grid>
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
            <p v-html="course.summary"></p>
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
    xClass: {
      type: String,
      required: false
    },

    coursesProp: {
      type: Array,
      require: false
    }
  },

  watch: {
    coursesProp: {
      handler(val) {
        console.log("watching...", val);
      },
      deep: true
      // Next task watch this prop so that fetchCourses action can update if this property is not empty
      // Start NPM WATCH
    }
  },

  methods: {
    route(course) {
      // Format the route for each course
      let category_slug = course.category.slug;
      let course_slug = course.slug;
      let author_slug = course.authors[0].id;
      return `${process.env.MIX_BASE_URL}/courses/${category_slug}/${author_slug}/${course_slug}`;
    },

    bookmarkCourse(course, event) {
      console.log("Bookmark this Course - " + course.title);
      console.log(event.target);
    }
  },

  created() {
    this.$store.subscribe((mutation, state) => {
      if (mutation.type === "setCourses" && state.courses != null) {
        this.courses =
          this.coursesProp != null ? this.coursesProp : state.courses;
      }
    });

    Event.$on("selected", data => {
      if (data.includes("Latest")) {
        this.courses = this.$store.state.courses;
        return;
      }

      let shuffle = [];
      this.$store.state.courses.map(course => {
        course.tabs.map(tag => {
          if (tag.includes(data)) shuffle.push(course);
        });
      });

      this.courses = shuffle;
    });
  }
};
</script>
