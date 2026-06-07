<div>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->

    <table>
        <thead>
            <tr>Sr.</tr>
            <tr>Patient ID</tr>
            <tr>Patient name</tr>
            <tr>Patient age</tr>
            <tr>Patient disease</tr>
            <tr>Admission date</tr>
        </thead>
        <tbody>
            @foreach ($patient_data as $p)
            <td>{{ $p->id }}</td>
            <td>{{ $p->patient_id }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->age }}</td>
            <td>{{ $p->disease }}</td>
            <td>{{ $p->admission_date }}</td>
            @endforeach
        </tbody>
    </table>
</div>
