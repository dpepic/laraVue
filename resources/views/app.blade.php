<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <router-link to="/foo">Go to Foo</router-link>
        <router-link to="/">Go to Home</router-link>
        <router-link to="/sve">Sve osobe</router-link>
        <router-link to="/dodaj">Dodaju osobu</router-link>
        @{{ message }}
        <button v-on:click="reverseMessage">Reverse Message</button>
        <input v-model="message">
        <p><b>Ovo je view:</b></p>
        <router-view></router-view>
    </div>
    <script src={{ mix('js/app.js') }} type="text/javascript"></script>
</body>
</html>
