
<div>
    <h1> Hospital Details </h1>
    <h2> {{ $hospital->name }} </h2>
    <h3> {{ $hospital->address }} </h3>
    <h3> {{ $hospital->phone }} </h3>
    <h3> {{ $hospital->details }} </h3>

</div>

<div>
    <h1> Appointments </h1>
    @foreach($appointments as $appointment)
        Name: {{ $appointment->patient->name }}, Time: {{ $appointment->time }}, Status: {{ $appointment->status }} <a href="/appointments/{{ $appointment->id }}">Edit</a> <br/>
    @endforeach

</div>

<div>
    <h1> Pregnant Patients </h1>
    @foreach($pregnant_patients as $patient)
        Name: {{ $patient->name }} <br/>
    @endforeach
</div>