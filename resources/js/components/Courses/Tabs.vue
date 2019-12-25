<template>
  <div>
    <li
      v-for="(tag, index) in tags"
      :key="index"
      :class="{'uk-active': tag.active}"
      @click="tabIsSelected(tag)"
    >
      <a href="#" v-html="tag.name"></a>
    </li>
  </div>
</template>

<<script>
export default {
    data() {
        return {
            tags: []
        }
    },

    methods: {
        tabIsSelected(tag){
            this.tags.map(el => el.active = false) // Default all tabs to not-active
            tag.active = true; // Set the currently selected tab as active
            Event.$emit('selected', tag.name) // Emit a "selected" event to indicate a change of tab
        }
    },

    created() {
        this.$store.subscribe((mutation, state) => {
            if (mutation.type === "setCourses" && state.tags != null) {
                let self = this;
                state.tags.map(tag => {
                    self.tags.push({name: tag, active: false}) // Push all other tags from the store
                });
                this.tags[0].active = true // Set the first tag as active
            }
        });
    },
}
</script>
