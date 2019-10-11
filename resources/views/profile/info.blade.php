@include('layouts.app')

<h1 align="center" class="mt-4 h1-title">Info</h1>
@if(session('successMsg'))
    <div class="alert alert-success " align="center" role="alert">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <p>{{ session('successMsg') }}</p>
    </div>
@endif
<main>
<div class="container">
    <table class="table table-striped table-dark">
        <tbody>
        <tr>
            <td>Name:</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Last name:</td>
            <td>{{ $user->last_name }}</td>
        </tr>
        <tr>
            <td>Birth day:</td>
            <td>{{ $user->birth }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>{{ $user->phone }}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{ $user->gender }}</td>
        </tr>
        <tr>
            <td>City:</td>
            <td>{{ $user->city }}</td>
        </tr>
        </tbody>
    </table>

    <a href="{{route('edit')}}">
    <button type="submit" class="btn btn-dark edit-btn">
        <i class="fa fa-edit">Edit</i>
    </button>
    </a>

</div>
</main>
@include('layouts.sidebar')