
<?php

$role = Auth::user()->post_role;

?>
@if (isset($search_event) && count($search_event) > 0)



<table class="event-item-table event-item-table-fixed-width">
    <thead>

        <tr>

            <th class="author">
                #
            </th>

            <th class="location">
                IMAGE
            </th>

            <th class="location">
                NAME
            </th>

            <th class="upcoming">
                DESCRIPTION
            </th>

            <th class="description">
                EVENT DATE </th>

            <th class="description">
                ACTION </th>


        </tr>

    </thead>

    <tbody>
        <?php
        $i = 1;

        ?>


        @foreach ($search_event as $events)


            <tr class="">
                <td class="author">
                    {{ $i++ }}
                </td>


                <td class="description event-as" atrr={{ $events->id }}>
                    <img loading="lazy"
                        src="{{ asset('images/') }}/{{ $events->image }}"
                        alt="friend" width="38" height="38">
                </td>

                <td class="location event-as" atrr={{ $events->id }}>
                    {{ $events->name }}

                </td>
                <td class="upcoming event-as" atrr={{ $events->id }}>
                    {{ $events->description }}
                </td>
                <td class="description event-as" atrr={{ $events->id }}>
                    {{ $events->datetimepicker }}

                </td>

                <td class="description event-as" atrr={{ $events->id }}>
                    @if(isset($events->Join))
                    <button class="btn btn-danger"> Joined</button>
                    @else

                    <a href="{{ url("$role/view/join", [$events->id, $events->Event->cluster_id]) }}">
                        <button class="btn btn-primary" style="background: #ff5e3a;border-color: #ff5e3a;">
                            Request to Join
                        </button>


                    </a>
@endif

                </td>


            </tr>
        @endforeach


    </tbody>
</table>
@else



<div class="jumbotron jumbotron-fluid" style="    margin-bottom: 0;background: white;">
    <div class="container">
        <h4 class="text-center">No Data Available</h4>
    </div>
</div>


@endif
