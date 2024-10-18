<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('title', 'About - Optimizing Life in the Information Age')

@section('content')
<section id="about" class="container">
    <h2>About Us</h2>
    <p>Welcome to our website dedicated to optimizing life in the information age. Here, we explore the balance between consuming data and cultivating thoughtful reflection.</p>
    <h3>Philosophical Insights</h3>
    <p>Inspired by Friedrich Nietzsche's philosophy, we delve into the importance of self-overcoming and the pursuit of personal excellence. Nietzsche encourages us to question conventional wisdom and strive for authenticity in our thoughts and actions.</p>
    <h3>Grounded Research</h3>
    <p>Modern research provides valuable insights into optimizing our daily routines and mental frameworks. We explore methods to enhance productivity, mindfulness, and overall well-being by integrating scientific findings with philosophical teachings.</p>
    <h3>Symptoms of Overconsumption</h3>
    <p>In today's digital age, overconsumption of information can lead to mental fatigue, anxiety, and decreased productivity. We address these issues by promoting strategies for mindful consumption and encouraging critical thinking.</p>
    <h3>Call to Action</h3>
    <p>Join us on a journey towards a more thoughtful and optimized life. Embrace the principles of mindful consumption and critical reflection to navigate the complexities of the modern world effectively.</p>
</section>
@endsection

@section('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77b300 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        section#about {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
        }
        section#about h2 {
            color: #333;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
@endsection
