<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('title', 'Foreword - Optimizing Life in the Information Age')

@section('styles')
<style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #2c3e50, #34495e);
            color: #e0e0e0;
            line-height: 1.6;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        h1, h2, h3 {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 2em;
            margin-bottom: 15px;
        }
        h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
		.background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('giphy.gif') no-repeat center center;
            background-size: cover;
            z-index: -1;
            opacity: 0.2; /* Adjust this for desired darkness */
        }
        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
    </style>
@endsection

@section('content')
	<main class="container">
        <h1>Foreword</h1>
        <p>As we navigate through the complexities of the information age, it is crucial to understand the impact of data consumption on our perception of reality. The term "foreword" is a play on words, signifying the forward movement and the constant evolution of our understanding.</p>
        <h2>Challenging Perceptions</h2>
        <p>Our perception shapes our reality, and as we grow older, it is essential to continually challenge and adapt our perspectives. The rapid influx of information demands that we critically evaluate and thoughtfully integrate new knowledge into our lives.</p>
        <h2>Striving for Authenticity</h2>
        <p>Embrace the journey of self-discovery and strive for authenticity. By questioning conventional wisdom and fostering a mindset of continuous improvement, we can navigate the complexities of the modern world more effectively.</p>
        <h2>Creating Your Own Reality</h2>
        <p>Ultimately, we have the power to shape our reality through mindful consumption and critical reflection. By actively seeking truth and remaining open to new ideas, we can cultivate a more balanced and fulfilling life.</p>
    </main>
@endsection

@section('scripts')
@endsection