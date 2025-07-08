<h1>
    A new job has been posted: {{ $job->title }}
</h1>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Job</a>
</p>