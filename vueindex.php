<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ----FONTAWESOME---- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- ---- CSS ---- -->
    <link rel="stylesheet" href="./css/style-vue.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    
    <div id="app">

    <header>
    <i class="fab fa-spotify"></i>
    <div class="filter">
        <span v-for="genre in discsGenres" @click="filteredByGenre(genre)">{{genre}}</span>
    </div>
  </header>

  <main>
    
  <div v-for="disc in discsList" class="disc-cover">
    <div>
      <img :src="disc.poster" />
      <h2>{{disc.title}}</h2>
    </div>
        
    <div>
      <p>{{disc.author}}</p>
      <p>{{disc.year}}</p>
    </div>
  </div>

  </main>


    </div>

    <script src="./js/main.js"></script>
</body>
</html>