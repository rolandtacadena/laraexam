
{{--test routes--}}

{{--// vue http--}}
{{--Route::get('api/subjects', function() {--}}
{{--return \App\Subject::all();--}}
{{--});--}}

{{--Route::get('api/subjects2', function() {--}}
{{--return \App\Subject::all();--}}
{{--});--}}

{{--Route::get('/vue-sample', function() {--}}
{{--return view('vue-sample');--}}
{{--});--}}

{{--Route::get('/vue-sample2', function() {--}}
{{--return view('vue-sample2');--}}
{{--});--}}
<!doctype html>
<html>
<body>

<subjects></subjects>

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
<script src="{{ URL::asset('js/vendor/main2.js') }}"></script>
</body>
</html>



