<template>
  <q-card
          flat
          class="q-mt-lg">
    <q-card-section>
      <div class="text-h5">
        Comments
      </div>
    </q-card-section>
    <q-card-section>
      <comment-form />
    </q-card-section>

    <q-separator/>

    <q-card-section>
      <comment-detail
        v-for="comment in comments"
        :key="comment.id"
        :comment="comment"/>
    </q-card-section>
  </q-card>

</template>

<script>
import { mapActions } from 'vuex'

export default {
  name: "CommentsList",
  props:['comment'],
  computed: {
    ...mapActions('comments', ['fetchComments'])
  },
  components: {
    'comment-form': require('components/Comments/CommentsForm.vue').default,
    'comment-detail': require('components/Comments/CommentsDetail.vue').default
  }
}
</script>

<style scoped>

</style>
