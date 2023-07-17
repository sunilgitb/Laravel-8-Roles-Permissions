<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Resume</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
            <tr>
                <td>{{ $application->name }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->phone }}</td>
                <td>
                    @php
                        $fileInfo = pathinfo($application->file);
                        $extension = isset($fileInfo['extension']) ? '.' . $fileInfo['extension'] : '';
                        $fileName = 'Resume' . $extension;
                    @endphp
                    <a href="{{ route('resumes.download', $application->id) }}">{{ $fileName }}</a>
                </td>

                </td>
                <td>
                   
                    <a href="{{ route('resumes.download', $application->id) }}">Download Resume</a>
                </td>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
