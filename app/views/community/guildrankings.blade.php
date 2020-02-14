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
        <div class="nk-box bg-dark-1">
            <div class="container text-xs-center">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <h2 class="nk-title h1 text-center">Guild Rankings</h2>
                <div class="container">
                    @if(count($data['guildrankings']) > 0)
                        <div class="table-responsive">
                            <table class="table table-sm table-dark table-striped tac">
                                <thead>
                                    <tr class="boss-record">
                                        <th class="boss-record">Rank</th>
                                        <th class="boss-record">Guild Name</th>
                                        <th class="boss-record">Guild Leader</th>
                                        <th class="boss-record">Members</th>
                                        <th class="boss-record">Points</th>
                                        <th class="boss-record">Faction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data['guildrankings'] as $guildrankings)
                                    <tr>
                                        <td>{{$guildrankings->Rank}}</td>
                                        <td>{{$guildrankings->GuildName}}</td>
                                        <td>{{$guildrankings->MasterName}}</td>
                                        <td>{{$guildrankings->TotalCount}}</td>
                                        <td>{{$guildrankings->GuildPoint}}</td>
                                        @if($guildrankings->Country == 0)
                                            <td><img src="/resources/themes/core/images/icons/guildranking/aol.png" height="35" width="35"></td>
                                        @endif
                                        @if($guildrankings->Country == 1)
                                            <td><img src="/resources/themes/core/images/icons/guildranking/uof.png" height="35" width="35"></td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h3 class="mb40">Sorry, there are currently no guilds to display.</h3>
                        <h5 class="mb40">Guilds must have at least 1 guild point and active to be displayed here.</h5>
                    @endif
                </div>
            </div>
        @php Separator(120); @endphp
        </div>
    </div>
@endsection