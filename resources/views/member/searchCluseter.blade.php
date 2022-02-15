<?php
$role = Auth::user()->post_role;

?>
@if (isset($viewCluster) && count($viewCluster) > 0)
    @foreach ($viewCluster as $list)
        @if (!isset($list->JoinClust))
            <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                <a style="text-decoration: none;"
                    @if (Auth::user()->role == 'admin') href="{{ url("$role/Join/cluster", $list->id) }}" @else  href="{{ url("$role/view/cluster", $list->id) }}" @endif>

                    <div class="ui-block h-100 mb-0">

                        <div class="friend-item friend-groups">
                            <?php
                            $clus_img2 = explode(',', $list->image);
                            $clus_img1 = array_slice($clus_img2, 0, 1);
                            ?>
                            <div class="friend-item-content">


                                <div class="friend-avatar">
                                    <div class="author-thumb">
                                        <img loading="lazy" src="{{ asset('images') }}/{{ $clus_img1[0] }}" alt=""
                                            width="34" height="34">
                                    </div>
                                    <div class="author-content">

                                        <span class="pppp"
                                            style="    font-size: 20px;      color: black;text-decoration: none;">
                                            {{ $list->name }}</span>
                                        @if (isset($list->joindetail) && count($list->joindetail) > 0)
                                            @php
                                                $manager = 0;
                                            @endphp
                                            @foreach ($list->joindetail as $listss)
                                                @php
                                                    $manager++;
                                                    if ($manager > 1) {
                                                        break;
                                                    }
                                                @endphp
                                                <div style="color: red" class="country">Manager:<span>
                                                        {{ $listss->User->first_name }}
                                                    </span></div>
                                            @endforeach

                                        @else
                                            <div style="color: red" class="country">Manager:<span>
                                                    N\A

                                                </span></div>
                                        @endif
                                        <p class="pppp" style="    color: black;">{{ $list->detail }}</p>



                                    </div>
                                </div>




                                <div class="control-block-button" style="margin-top:-6px">


                                    <a href="{{url("$role/request/joinCluster",[$list->id])}}" style="color: white; ">
                                        <button class="btn btn-primary"
                                            style="background:#ff5e3a; border-color:#ff5e3a">Request For Join</button>
                                    </a>


                                </div>

                            </div>

                        </div>

                    </div>
                </a>

            </div>
        @endif
    @endforeach

@else
    <div class="accordion-item"
        style="    padding-left: 15px !important;padding-right: 15px !important;    padding: unset;margin-bottom: 11px;">
        <div class="jumbotron jumbotron-fluid"
            style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">
            <div class="container">
                <h5 class="text-center">No Cluster Available</h5>
            </div>
        </div>
    </div>


@endif
