
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">List of users</h5>
        <p class="card-text">You can find here all the informatins about users in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Email</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('/home/') }}" class="btn btn-primary">SMS or Call</a>


                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
