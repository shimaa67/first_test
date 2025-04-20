<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Image</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contacts as $contact )

    @endforeach
    <tr>
      <td>{{$contact->id}}</td>
      <td>{{$contact->name}}</td>
      <td>{{$contact->phone}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->msg}}</td>
      <td> <img style="width: 100px"src="{{ asset('uploads/'.$contact->image) }}"></td>
      <td>{{$contact->created_at}}</td>
      <td>{{$contact->updated_at}}</td>

    </tr>


  </tbody>
</table>

