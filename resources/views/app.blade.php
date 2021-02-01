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
        @{{ message }}
        <button v-on:click="reverseMessage">Reverse Message</button>
        <input v-model="message">
    </div>
    <div id="bla">
        @{{ blabla }}
        <Komponenta></Komponenta>
        <Teest v-bind:todo="poruka"></Teest>
    </div>
    <script src={{ mix('js/app.js') }} type="text/javascript"></script>
</body>
</html>
