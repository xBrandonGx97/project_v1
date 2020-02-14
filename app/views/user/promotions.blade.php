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
        <div class="container text-xs-center">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <div class="container">
                <h2 class="display-4">Promotions</h2>
                @if (!$data['User']['LoginStatus']==true)
                    <p>Please login to continue.</p>
                @else
                    <form class="form-inline" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="Promotion Code" class="form-control" name="code"/>
                        </div>
                        <button type="submit" class="nk-btn nk-btn-color-main-1" name="Promo" style="margin-left:10px;">
                            Submit
                        </button>
                    </form>
                    @if (isset($_POST['Promo']))
                        @if(empty($data['promotions']->fet))
                            Code not found.
                        @else
                            @if($data['promotions']->NumOfUses==$data['promotions']->MaxUses || $data['promotions']->NumOfUses>$data['promotions']->MaxUses)
                                Code has reached maximum number of uses.
                            @else
                                @php $data['promotions']->validations(); @endphp
                                Successfully redeemed code: {{$data['promotions']->Code}}
                                for {{$data['promotions']->Points}} Donation Points.
                            @endif
                        @endif
                    @endif
                @endif
            </div>
        </div>
        @php Separator(120); @endphp
    </div>
@endsection