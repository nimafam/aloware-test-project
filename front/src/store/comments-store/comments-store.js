import {api} from 'boot/axios'
const state = {
  comments: [
    // {
    //   id: '1',
    //   created_at: '2021-03-11 22:19:15',
    //   body: 'very crisp and concise overview Thank You',
    //   user: {
    //     first_name: 'John',
    //     last_name: 'Doe',
    //     username: 'johndoe',
    //     avatar: 'https://i.pravatar.cc/300?img=5'
    //   },
    //   replies: [
    //     {
    //       id: '35',
    //       created_at: '2021-03-14 15:26:30',
    //       body: 'Landlubbers wave on adventure at norman island!',
    //       user: {
    //         first_name: 'Miracle',
    //         last_name: 'Blade',
    //         username: 'miracle',
    //         avatar: 'https://i.pravatar.cc/300?img=53'
    //       },
    //       replies: [
    //         {
    //           id: '49',
    //           created_at: '2021-03-16 02:16:26',
    //           body: 'Ho-ho-ho! fight of grace.',
    //           user: {
    //             first_name: 'Baktash',
    //             last_name: 'Abtin',
    //             username: 'baktash00',
    //             avatar: 'https://i.pravatar.cc/300?img=60'
    //           }
    //         }
    //       ]
    //
    //     },
    //     {
    //       id: '36',
    //       created_at: '2021-03-16 02:16:26',
    //       body: 'Oh there\'s nothing like the undead life whining on the hornpipe.',
    //       user: {
    //         first_name: 'Generate',
    //         last_name: 'Candy',
    //         username: 'candybar',
    //         avatar: 'https://i.pravatar.cc/300?img=50'
    //       },
    //     }
    //   ]
    // },
    // {
    //   id: '2',
    //   created_at: '2021-03-11 22:19:15',
    //   body: 'One holographic sainthood i give you: avoid each other.',
    //   user: {
    //     first_name: 'Foo',
    //     last_name: 'bar',
    //     username: 'johndoe',
    //     avatar: 'https://i.pravatar.cc/300?img=51'
    //   },
    // }
  ]
}

const mutations = {
  fetchComments(state, payload) {
    console.log(payload)
    state.comments.push(payload)
  }
}

const actions = {
  fetchComments({state, commit}, postId) {
    console.log('Hello')
  }
}

const getters = {
  comments: (state) => {
      return state.comments
  }
}

export default {
  namespaced: true,
  state,
  mutations,
  actions,
  getters
}
