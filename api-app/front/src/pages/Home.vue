<template>
  <q-page class="q-pa-md">
    <div class="row justify-center">
      <div class="col-4 q-pa-md"
           v-for="blog in blogs"
           :key="blog.id"
      >
        <q-card
          flat
          bordered
        >
          <q-card-section class="row justify-center">
            <q-img
              src=""
              :ratio="1"
            />
            <div class="text-h6">{{ blog.title }}</div>
          </q-card-section>
          <q-separator inset />
          <q-card-section>
            <q-btn
              color="primary"
              icon="visibility"
              label="Read more"
              :to="'/articles/' + blog.id"
            />
          </q-card-section>
        </q-card>

      </div>
    </div>
  </q-page>
</template>

<script>
import {mapGetters, mapActions} from 'vuex'

export default {
  methods: {
    ...mapActions('blog', ['listBlogs']),
  },
  mounted() {
    this.listBlogs()
  },
  computed: {
    ...mapGetters('blog', ['blogs']),
    imageUrl: () => {
      const type = ["people", "nature", "tech"];

      const random = Math.floor(Math.random() * type.length);

      return `https://placeimg.com/300/200/${type[random]}/grayscale`
    },
  }
}
</script>

<style scoped>

</style>
