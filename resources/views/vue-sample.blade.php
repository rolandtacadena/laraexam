<!doctype html>
<html>
<body>

<subjects :list="subjectsd"></subjects>

<template id="subjects-template">
    <ul>
        <li v-for="subject in list">
            @{{ subject.name }}
            <button @click="deleteSubject(subject)">x</button>
        </li>
    </ul>
</template>

<script src="{{ URL::asset('js/vendor/vue.js') }}"></script>
<script src="{{ URL::asset('js/vendor/vue-resource.js') }}"></script>
<script src="{{ URL::asset('js/vendor/main.js') }}"></script>
</body>
</html>



