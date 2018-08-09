@extends('layouts.app')

@section('content')
    <div>
        @include('layouts.sidebar')

        <div class="page-container">

            @include('layouts.navbar')

            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="full-container">

                    </div>
                </div>
            </main>

            @include('layouts.footer')
        </div>
    </div>
@endsection
