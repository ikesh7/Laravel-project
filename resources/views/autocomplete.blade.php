<x-guest-layout>

    <div class="body search_container">
        <section class="hero hero_autocomplete">
            <div class="container">
                <form method="GET" action="{{ route('search') }}">
                    <div class="hero_section">
                        @include('partials.homepage._search')
                    </div>
                </form>
            </div>


        </section>
        @include('partials.homepage._topdestinations')
        @include('partials.homepage._weoffer')

        @include('partials.homepage._explore')
        </div>

        
        <x-slot name="head">

            <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js">
            </script>
            <link rel="stylesheet" type="text/css"
                href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        </x-slot>

        <x-slot name="tail">
            <script>
                $('input[name="datefilter"]').daterangepicker({
                      autoUpdateInput: false,
                      locale: {
                          cancelLabel: 'Clear'
                      }
                  });

                  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                  });

                  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                      $(this).val('');
                  });

            </script>
        </x-slot>
</x-guest-layout>
<!-- <script>
    $(document).ready(function() {

        $('#city_name').keyup(function() {
            var query = $(this).val();
            if (query != '') {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('autocomplete.fetch') }}",
                    method: "get",
                    data: {
                        query: query,
                        _token: _token
                    },
                    success: function(data) {
                        $('#cityL').fadeIn();
                        $('#cityList').html(data);
                        $("#hotelList").hide();

                    }
                });
            }
        });

        $(document).on('click', 'li', function() {
            $('#city_name').val($(this).text());
            $('#cityL').fadeOut();
            $("#hotelList").show();
        });

    });

</script> -->