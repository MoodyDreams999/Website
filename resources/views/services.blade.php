<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('title', 'Services - Optimizing Life in the Information Age')

@section('content')
<section id="services" class="container">
        <h2>Our Services</h2>
        <article>
            <h3>Excel Templates</h3>
            <p>We provide customized Excel templates to help you manage your data efficiently. These templates are designed to streamline your workflow and enhance productivity.</p>
            <h4>Available Templates</h4>
            <ul>
                <li>Financial Planning</li>
                <li>Project Management</li>
                <li>Personal Budgeting</li>
                <li>Health and Fitness Tracking</li>
            </ul>
        </article>
        <article>
            <h3>Information Stream Filters</h3>
            <p>Our information stream filters help you manage the influx of data from various sources. We provide tools and techniques to filter out noise and focus on key information.</p>
            <h4>Key Features</h4>
            <ul>
                <li>Customizable Filters</li>
                <li>Real-time Data Analysis</li>
                <li>Contextual Insights</li>
                <li>Personalized Recommendations</li>
            </ul>
        </article>
        <article>
            <h3>Lifestyle Balancer</h3>
            <p>Our Lifestyle Balancer tool helps you maintain a healthy balance between different aspects of your life, including work, leisure, and personal growth.</p>
            <h4>Features</h4>
            <ul>
                <li>Time Management</li>
                <li>Mental Health Support</li>
                <li>Social Connection Strategies</li>
                <li>Personal Development Plans</li>
            </ul>
        </article>
        <article>
            <h3>Developing a More Interconnected System</h3>
            <p>As a developer, I am committed to creating a more interconnected system that aligns with our philosophies of efficiency, integration, and user-centric design. My goal is to develop solutions that seamlessly connect various platforms and tools, providing a unified and cohesive experience for users.</p>
            <h4>Our Philosophies</h4>
            <ul>
                <li>Efficiency: Streamlining processes to save time and reduce redundancy.</li>
                <li>Integration: Ensuring different systems and tools work together seamlessly.</li>
                <li>User-Centric Design: Focusing on the needs and experiences of the end-users.</li>
            </ul>
            <h4>Current Projects</h4>
            <p>Some of the projects I am currently working on to achieve these goals include:</p>
            <ul>
                <li>Developing APIs that allow for smooth data transfer between different applications.</li>
                <li>Creating unified dashboards that integrate data from multiple sources for better insights.</li>
                <li>Designing automation tools that enhance productivity by reducing manual tasks.</li>
            </ul>
            <h4>Future Goals</h4>
            <p>Looking ahead, I aim to continue enhancing our interconnected system by:</p>
            <ul>
                <li>Exploring new technologies and frameworks to improve integration capabilities.</li>
                <li>Gathering user feedback to continually refine and improve our solutions.</li>
                <li>Collaborating with other developers and experts to share knowledge and best practices.</li>
                <li>Here is a link to the developers services. (<a href="devEnv.html" target="_blank" style="color: #4FC3F7;">reference</a>)</li>
            </ul>
        </article>
    </section>
@endsection
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
