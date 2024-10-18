<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('title', 'Lifestyle - Optimizing Life in the Information Age')

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
        figcaption {
            font-weight: bold;
            color: #fff;
            font-size: 1.2em;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }
        .container {
            padding: 20px;
            margin: 0 auto;
            max-width: 1000px;
        }
    </style>
@endsection

@section('content')
<section id="lifestyle" class="container">
        <h2>Healthy Lifestyle</h2>
        <article>
            <h3>Maintaining a Healthy Lifestyle</h3>
            <p>Living a healthy lifestyle is essential for optimizing your life. This includes balanced nutrition, regular exercise, and adequate sleep.</p>
            <h4>Balanced Nutrition</h4>
            <p>Consume a variety of foods from all food groups to get the nutrients you need. Focus on whole foods like fruits, vegetables, lean proteins, and whole grains.</p>
            <h4>Regular Exercise</h4>
            <p>Incorporate at least 150 minutes of moderate aerobic activity or 75 minutes of vigorous activity per week, along with muscle-strengthening activities on 2 or more days a week.</p>
            <h4>Adequate Sleep</h4>
            <p>Aim for 7-9 hours of sleep per night to support overall health and well-being.</p>
        </article>
        <article>
            <h3>Recommended Exercises</h3>
            <p>Engage in a mix of cardio, strength training, and flexibility exercises. Here are some recommendations:</p>
            <ul>
                <li>Cardio: Running, cycling, swimming</li>
                <li>Strength Training: Weight lifting, resistance band exercises</li>
                <li>Flexibility: Yoga, stretching routines</li>
            </ul>
        </article>
        <article>
            <h3>Lifestyle Balancer</h3>
            <p>The Lifestyle Balancer is a tool to help you manage different aspects of your life, ensuring you maintain a healthy balance. It involves:</p>
            <ul>
                <li>Time Management: Efficiently organize your day to balance work, leisure, and rest.</li>
                <li>Mental Health: Practice mindfulness and stress management techniques.</li>
                <li>Social Connections: Maintain healthy relationships and engage in community activities.</li>
                <li>Personal Growth: Set and achieve personal goals, pursue hobbies, and continue learning.</li>
            </ul>
        </article>
        <article>
            <h3>Resources for Further Reading</h3>
            <p>Explore these resources to learn more about maintaining a healthy and balanced lifestyle:</p>
            <ul>
                <li><a href="#">Harvard Health - Healthy Living</a></li>
                <li><a href="#">Mayo Clinic - Healthy Lifestyle</a></li>
                <li><a href="#">WHO - Physical Activity</a></li>
            </ul>
        </article>
    </section>
@endsection