

@foreach ($data as $id=>$soldier )
<h2> {{$soldier->name}}  Data</h2>
<p>Name: {{$soldier->name}}</p>
<p>Age: {{$soldier->age}}</p>
<p>Rank: {{$soldier->rank}}</p>
<p>Contact: {{$soldier->contact}}</p>
<p>Address: {{$soldier->address}}</p>
@endforeach