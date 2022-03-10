@extends('layouts.app')

@section('content')

<script>
    $(document).ready(function () {

    });
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm"></table>

                    <script>
                        const obj = { "limit":10 };
                        const dbParam = JSON.stringify(obj);
                        const xmlhttp = new XMLHttpRequest();
                        xmlhttp.onload = function() {
                            myObj = JSON.parse(this.responseText);
                            let text = "<thead><tr><th>ID City</th><th>City</th><th>Population</th><th>Edit/Delete</th></tr></thead><tbody>";
                            console.log(myObj);
                            for (let x in myObj) {
                                text += "<tr><td>"+myObj[x].idCity +"</td><td>"+ myObj[x].city + "</td><td>"+myObj[x].population+"</td><td><button class='editButton' id='"+myObj[x].idCity+"' style='width: 50%;'>Edit</button><button  class='deleteButton' id='"+myObj[x].idCity+"' style='width: 50%;'>Delete</button></td></tr>";
                            }
                            text += "</tbody>";
                            document.getElementById("dtBasicExample").innerHTML = text;
                        };
                        xmlhttp.open("GET", "api/cities/");
                        xmlhttp.send();
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection