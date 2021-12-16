@extends('layouts.admin_layout')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&family=Poppins:wght@500&display=swap');

</style>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">


                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Name</th>
                                    <th style="text-align: center;">Subject</th>
                                    <th style="text-align: center;">Message</th>

                                </tr>
                            </thead>


                            <tbody>
                                @if (count($contactList)>0)
                                @foreach ($contactList as $contact)
                                <tr>
                                    <td style="font-family: 'Hind Siliguri', sans-serif;
                                    font-family: 'Poppins', sans-serif; font-size:20px;">{{$contact->InputName}}</td>
                                    <td style="font-family: 'Hind Siliguri', sans-serif;
                                    font-family: 'Poppins', sans-serif; font-size:20px;">{{$contact->InputSubject}}</td>
                                    <td style="font-family: 'Hind Siliguri', sans-serif;
                                    font-family: 'Poppins', sans-serif; font-size:20px;">{{$contact->InputMessage}}</td>
                                </tr>

                                @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
