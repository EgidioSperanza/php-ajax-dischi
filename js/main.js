new Vue({
  el: '#app',
  data: {
    discs: [],
    discsList: [],
    discsGenres: ['All'],
  },
  methods: {
    filteredByGenre(filter) {
      console.log(filter)
      if (filter !== 'All') {
        this.discsList = this.discs.filter((disc) => {
          return disc.genre.includes(filter)
        })
      } else {
        this.discsList = this.discs
      }
    },
  },
  mounted() {
    axios
      .get('http://localhost/php-ajax-dischi/api/apiDiscs.php')
      .then((result) => {
        this.discs = result.data
        this.discsList = this.discs
        this.discs.forEach((disc) => {
          if (!this.discsGenres.includes(disc.genre)) {
            this.discsGenres.push(disc.genre)
          }
        })
      })
  },
})
