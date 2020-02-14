@extends('layouts.app')
@section('content')
    @include('home.inc.page_bg')
    @include('home.inc.page_border')
    <header class="nk-header nk-header-opaque">
        @include('inc.topNav')
        @include('inc.nav')
    </header>
    @include('inc.rightNav')
    @include('inc.mobileNav')
    <div class="nk-main">
        <div class="nk-gap-4"></div>
        <div class="container" id="team">
            <div class="row">
                <div class="col-lg-8 offset-lg-3">
                    <div class="nk-box-2 bg-dark-1">
                        <h2 class="nk-title h3 text-xs-center">Staff Team</h2>
                        @php Separator(40); @endphp
                        <h3 class="text-xs-center">Developers</h3>
                        <h4>[Dev]Velocity<span class="float-right">Alliance of Light</span></h4>
                        @php Separator(40); @endphp
                        <h3 class="text-xs-center">Owners</h3>
                        <h4>[Dev]Velocity<span class="float-right">Alliance of Light</span></h4>
                        <h4>[ADM]Beno<span class="float-right">Union of Fury</span></h4>
                        @php Separator(40); @endphp
                        <h3 class="text-xs-center">Admins</h3>
                        <h4>[ADM]Methodox<span class="float-right">Alliance of Light</span></h4>
                        <h4>[ADM]Goku<span class="float-right">Union of Fury</span></h4>
                        @php Separator(40); @endphp
                        <h3 class="text-xs-center">Game Masters</h3>
                        <h4>[GM]Kirk<span class="float-right">Alliance of Light</span></h4>
                        <h4>[GM]FapPapier<span class="float-right">Union of Fury</span></h4>
                        @php Separator(40); @endphp
                        <h3 class="text-xs-center">Game Master Assistants</h3>
                        <h4>[GMA]Bash<span class="float-right">Alliance of Light</span></h4>
                        <h4>[GMA]Castle<span class="float-right">Union of Fury</span></h4>
                        @php Separator(40); @endphp
                        <h3 class="text-xs-center">Game Sages</h3>
                        <h4>[GS]Azazel<span class="float-right">Alliance of Light</span></h4>
                        <h4>[GS]Negation<span class="float-right">Union of Fury</span></h4>
                        <h4>[GS]Venom<span class="float-right">Union of Fury</span></h4>
                    </div>
                </div>
            </div>
        </div>
        @php Separator(80); @endphp
    </div>
@endsection