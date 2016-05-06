@extends('layouts.app')

@section('content')

    <div class="row expanded teacher-panel">

        <!-- right column -->
        <div class="medium-9 large-10 medium-push-3 large-push-2 columns">

            <a href="#teacher-menu" class="small secondary expanded button hide-for-medium">Jump to Nav</a>

            <div class="teacher-panel-right-col-header">
                <h2 class="teacher-panel-right-col-header">Exam 103131 - PHP</h2>
            </div>

            <div class="exam-details">

                <ul class="tabs" data-tabs id="example-tabs">
                    <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
                    <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
                    <li class="tabs-title"><a href="#panel3">Tab 2</a></li>
                    <li class="tabs-title"><a href="#panel4">Tab 2</a></li>
                    <li class="tabs-title"><a href="#panel5">Tab 2</a></li>
                    <li class="tabs-title"><a href="#panel6">Tab 2</a></li>
                    <li class="tabs-title"><a href="#panel7">Tab 2</a></li>

                </ul>

                <div class="tabs-content" data-tabs-content="example-tabs">
                    <div class="tabs-panel is-active" id="panel1">
                        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                    </div>
                    <div class="tabs-panel" id="panel2">
                        <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                    </div>
                    <div class="tabs-panel" id="panel3">
                        <p>Suspedsndisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                    </div>
                    <div class="tabs-panel" id="panel4">
                        <p>Suspendsdddisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                    </div>
                    <div class="tabs-panel" id="panel5">
                        <p>rggrgrg dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                    </div>
                    <div class="tabs-panel" id="panel6">
                        <p>Suspendllluluisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                    </div>
                    <div class="tabs-panel" id="panel7">
                        <p>Suspendw4w4wisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
                    </div>
                </div>

            </div>

            <hr/>

        </div>

        <!-- left column -->
        @include('dummy.teacher-actions')

    </div>

@endsection
