export function  ADD_COMMENT(state, payload) {
    state.comments = {}
    Object.assign(state.comments, payload)
  }

