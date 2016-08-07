<script>

    var baseRoute = '{{ route('index') }}'

    Vue.component('question-list', {
        template: '#question-list-template',
        props: ['list'],
//        created: function () {
//            this.list = JSON.parse(this.list)
//        },
        data: function () {
            return {
                question: {},
                exam: {}
            }
        },
        methods: {
            loadQuestionOnForm: function(question){
                var resource = this.$resource(baseRoute + '/teacher/ajax/question{/question}');
                resource.get({ question: question})
                .then(function(response) {
                    this.question = response.data.question;
                    this.exam = response.data.exam;
                });

                // reflow foundation
                $(document).foundation();

            }
        }
    });
</script>