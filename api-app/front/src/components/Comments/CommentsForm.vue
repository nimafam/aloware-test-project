<template>

  <q-form @submit.stop="submitComment">
    <div class="column">
      <q-editor
          :toolbar="[
                  ['bold', 'italic', 'strike', 'underline'],
                  ['link', 'unlink'],
                  ['undo', 'redo']
                ]"
          v-model="newComment"
          min-height="5rem"
          label="Comments"/>
    </div>

    <div class="row justify-end">
      <q-btn
          :loading="submitting"
          color="grey-8"
          label="Send"
          type="submit"
          class="q-mt-md"
      >
        <q-icon
            name="send"
            class="q-ml-sm"/>
        <template v-slot:loading>
          <q-spinner-facebook
              color="white"
          />
        </template>
      </q-btn>
    </div>
  </q-form>

</template>

<script>
import {mapActions} from 'vuex'

export default {
  props: {
    type: {
      required: true,
      type: String
    },
    commentId: {
      required: false,
      type: Number
    }
  },
  data() {
    return {
      newComment: '',
      submitting: false
    }
  },
  methods: {
    ...mapActions('comments', ['addReply', 'addComment', 'fetchComments']),
    submitComment() {
      this.submitting = true
      let comment = {}

      if (this.type === 'comment') {
        comment = {
          postId: this.$route.params.postId,
          userId: '1',
          comment: this.newComment,
        }

        this.addComment(comment)

      } else {
        comment = {
          postId: this.$route.params.postId,
          userId: '1',
          comment_id: this.commentId,
          comment: this.newComment,
        }
        this.addReply(comment)
      }

      this.submitting = false
      this.newComment = ''

    },
  }
}
</script>

<style scoped>

</style>
