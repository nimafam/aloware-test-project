import {api} from "boot/axios";

export function fetchBlog({commit}, postId) {
  api.get(`/article/${postId}`)
    .then(response => {
      const payload = response.data.blog

      commit('SHOW_BLOG', payload)
    }).catch(error => console.log(error))
}

export function listBlogs({commit}) {
  api.get(`/articles`)
    .then(response => {
      const payload = response.data.blogs

      commit('LIST_BLOGS', payload)
    }).catch(error => console.log(error))
}

