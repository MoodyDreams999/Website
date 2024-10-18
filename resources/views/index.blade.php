<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('title', 'Optimizing Life in the Information Age')

@section('content')
<section id="home" class="intro">
    <h1>Welcome to the Future of Optimization</h1>
    <h2>Balancing Nature and Technology for a Better Tomorrow</h2>
    <p>Explore how you can optimize your life in the information age through smart data management, minimalist living, and embracing future technologies.</p>
</section>
<section class="image-section">
    <img src="{{ asset('images/dlp_migration_-_hero.jpg') }}" alt="Lines representing data and minimalism">
    <figcaption>Connecting the dots in the Information Age.</figcaption>
</section>
<section class="overview">
    <div class="card">
        <h3>Data Management</h3>
        <p>Learn the best practices for managing your digital footprint efficiently.</p>
    </div>
    <div class="card">
        <h3>Minimalist Living</h3>
        <p>Adopt a minimalist lifestyle to declutter your mind and environment.</p>
    </div>
    <div class="card">
        <h3>Future Technologies</h3>
        <p>Stay ahead with the latest advancements in technology and innovation.</p>
		<!DOCTYPE html>
	</div>
	<div>
	</section>
	<section>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Upload and Parse File</title>
	</head>
	<html>
	<body>
		<h1>Upload File to Parse</h1>
		<form action="{{ route('parse.upload') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<label for="fileToParse">Upload File:</label>
			<input type="file" name="fileToParse" id="fileToParse" required>

			<label for="source">Source:</label>
			<input type="text" name="source" id="source" placeholder="Enter source" required>

			<label for="loanType">Loan Type:</label>
			<select name="loanType" id="loanType">
				<option value="DEBT">DEBT</option>
				<option value="VA">VA</option>
				<option value="Mixed">Mixed</option>
			</select>

			<button type="submit">Parse and Download File</button>
		</form>
</body>
</html>
</div>
</section>
    

@endsection
