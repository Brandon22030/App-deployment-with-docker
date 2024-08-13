import { defineStore } from 'pinia'

export const useWelcomeStore = defineStore('topic', {
  state: () => ({

    hello: []

  }),

  actions: {

    async welcome() {

        const resp = await fetch("http://127.0.0.2:8000/api/welcome");
        
        const data = await resp.json();

        this.hello = await data[0].welcome

        console.log(this.hello)
        
    }

}

})