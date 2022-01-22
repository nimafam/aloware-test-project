import {api} from "boot/axios";

export function fetchComments({commit}, postId) {
  api.get(`/article/comments/${postId}`)
    .then(response => {
      const payload = response.data.comments

      commit('ADD_COMMENT', payload)
    }).catch(error => console.log(error))
}

export function addComment({commit, dispatch}, payload) {
  api.post(`/comment/store/${payload.postId}`, payload)
    .then(response => {
      const comment = response.data.comment

      commit('ADD_COMMENT', comment)
      dispatch('fetchComments', comment.commentable_id)
    }).catch(error => console.log(error))
}

export function addReply({commit, dispatch}, payload) {
    api.post(`/reply/store/${payload.comment_id}`, payload)
      .then(response => {
        const comment = response.data.comment

        commit('ADD_COMMENT', comment)
        dispatch('fetchComments', payload.postId)
      }).catch(error => console.log(error))
  }
