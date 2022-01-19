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
export default {
  data() {
    return {
      newComment: '',
      submitting: false
    }
  },
  methods: {
    submitComment() {
      this.submitting = true
      let comment = {
        id: '12',
        created_at: Date.now(),
        comment: this.newComment,
        user: {
          id: '15',
          first_name: 'Nima',
          last_name: 'Mirkhani',
          username: 'nimche',
          avatar: ''
        }
      }

      setTimeout(() => {
        this.submitting = false


        this.comments.push(comment)

      }, 2000)
    }
  }
}
</script>

<style scoped>

</style>
