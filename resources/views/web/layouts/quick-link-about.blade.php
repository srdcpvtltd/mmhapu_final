<div class="col-sm-3 col-md-3 col-xs-12">
    <div class="single-feature">
        <div class="title MGCUB_bg">
            <h4>Quick Links</h4>
        </div>
        <div class="desc-wrap marquee_text">
            <ul class="custom-list-style">
                {{-- @php
                    // $records = App\Models\Menu::whereNull('menu_id')
                    //     ->whereNull('submenu_id')
                        // ->whereColumn('id', 'menu_id')
                        // ->whereColumn('id', 'submenu_id')
                        // ->get();
                    $titleId = App\Models\QuicklinkTitle::pluck('id');
                    $quicklinks = App\Models\Quicklink::whereIn('title_id', $titleId)->get();
                @endphp --}}
                {{-- @dd($records) --}}

                @foreach (App\Models\QuickLink::all() as $quicklink)
                    <li>
                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        <a href="{{ url($quicklink->url) }}"> {{ $quicklink->title }} </a>
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>
</div>
