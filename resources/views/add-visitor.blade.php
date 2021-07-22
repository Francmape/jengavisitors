@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        New Visitor
                    </div>
                    <div class="card-body">
                        <form class="contact-form">
                            @csrf
{{--                            Form section--}}
                            <div class="form-section">
                                <div class=" d-flex justify-content-between">
                                    <div>
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" name="firstName" class="form-control" id="firstName" required>
                                    </div>
                                    <div>
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" name="lastName" class="form-control" id="lastName" required>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="phone" class="form-label">Mobile Number</label>
                                    <input type="phone" name="phone" class="form-control" id="phone" required>
                                </div>
                            </div>

                            <div class="form-section">
                                <div class="mt-3">
                                    <label for="office" class="form-label">Visiting Office</label>
                                    <input type="office" name="office" class="form-control" id="phone" required>
                                </div>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-info float-left">Previous</button>
                                <button type="button" class="next btn btn-info float-right">Next</button>
                                <button type="submit" class="btn btn-success float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            var $sections = $('.form-section');

            function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);

                var atTheEnd = index >=  $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd)

                $('.form-navigation [type=submit]').toggle(atTheEnd)
            }

            function currentIndex(){
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function () {
                navigateTo(currentIndex()-1);
            });

            $('.form-navigation .next').click(function () {
                $('.contact-form').parsley().whenValidate({
                    group: 'block-' + currentIndex()
                }).done(function () {
                    navigateTo(currentIndex()+1)
                });
            });

            $sections.each(function (index, section) {
                $(section).find(':input').attr('data-parsley-group','block-'+index)
            });

            navigateTo(0);
        });
    </script>
@endsection
