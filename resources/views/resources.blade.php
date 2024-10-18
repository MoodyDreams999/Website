<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('title', 'Declutter Your Mind - Optimizing Life in the Information Age')

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
        .content {
            padding: 20px;
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
        .resource-section {
            margin-bottom: 30px;
        }
        .resource-list {
            list-style: none;
            padding: 0;
        }
        .resource-list li {
            margin-bottom: 10px;
        }
        .resource-list a {
            color: #4FC3F7;
            text-decoration: none;
        }
        .resource-list a:hover {
            text-decoration: underline;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
<main class="main container">
        <h1>Resources for Optimizing Life in the Information Age</h1>
        <section class="resource-section">
            <h2>Books</h2>
            <ul class="resource-list">
                <li><a href="https://www.amazon.com/Atomic-Habits-Proven-Build-Break/dp/0735211299">Atomic Habits by James Clear</a> - Learn how to build good habits and break bad ones.</li>
                <li><a href="https://www.amazon.com/Digital-Minimalism-Choosing-Focused-Noisy/dp/0525536515">Digital Minimalism by Cal Newport</a> - Embrace a focused life in a noisy world.</li>
                <li><a href="https://www.amazon.com/Essentialism-Disciplined-Pursuit-Greg-McKeown/dp/0804137382">Essentialism by Greg McKeown</a> - The disciplined pursuit of less.</li>
            </ul>
        </section>
        <section class="resource-section">
            <h2>Online Tools</h2>
            <ul class="resource-list">
                <li><a href="https://www.evernote.com/">Evernote</a> - Organize your notes and tasks effectively.</li>
                <li><a href="https://www.trello.com/">Trello</a> - Manage your projects and collaborate with others.</li>
                <li><a href="https://www.notion.so/">Notion</a> - All-in-one workspace to write, plan, and organize.</li>
            </ul>
        </section>
        <section class="resource-section">
            <h2>Websites</h2>
            <ul class="resource-list">
                <li><a href="https://www.psychologytoday.com/">Psychology Today</a> - Articles on mental health and well-being.</li>
                <li><a href="https://www.lifehack.org/">Lifehack</a> - Tips and tricks to improve productivity and lifestyle.</li>
                <li><a href="https://www.ted.com/">TED Talks</a> - Inspirational talks and ideas worth spreading.</li>
            </ul>
        </section>
        <section class="resource-section">
            <h2>Videos</h2>
            <ul class="resource-list">
                <li><a href="https://www.youtube.com/watch?v=AdKUJxjn-R8">The Art of Stress-Free Productivity - David Allen</a></li>
                <li><a href="https://www.youtube.com/watch?v=O3U9LOujpQE">How to Gain Control of Your Free Time - Laura Vanderkam</a></li>
                <li><a href="https://www.youtube.com/watch?v=Ks-_Mh1QhMc">The Power of Vulnerability - Brené Brown</a></li>
            </ul>
        </section>
        <section class="resource-section">
            <h2>Notion</h2>
            <p>Notion is an all-in-one workspace where you can write, plan, collaborate, and get organized. It's customizable and can be used for notes, tasks, databases, and much more. Whether you're a student, a professional, or someone looking to manage personal projects, Notion provides the flexibility to design your workflow the way you want.</p>
            <ul class="resource-list">
                <li><a href="https://www.notion.so/">Official Notion Website</a></li>
                <li><a href="https://www.notion.so/templates">Notion Templates</a> - Pre-made templates to get you started quickly.</li>
                <li><a href="https://www.youtube.com/watch?v=oTahLEX3NXo">Notion Tutorial for Beginners</a> - A comprehensive guide to get started with Notion.</li>
            </ul>
        </section>
        <section class="resource-section">
            <h2>Libgen Project</h2>
            <p>The Libgen project (Library Genesis) is a free-to-access digital library containing a vast collection of books, scientific articles, and fiction works. It is an invaluable resource for researchers, students, and book lovers looking for a diverse range of reading materials without cost barriers.</p>
            <ul class="resource-list">
                <li><a href="http://libgen.rs/">Libgen Main Site</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Library_Genesis">Libgen Wikipedia Page</a> - Learn more about the history and impact of Libgen.</li>
                <li><a href="https://www.reddit.com/r/libgen/">Libgen Subreddit</a> - Community discussions, tips, and updates about Libgen.</li>
            </ul>
        </section>
        <section class="resource-section">
            <h2>Simulated Learning Platforms</h2>
            <p>Simulated learning platforms are designed to create realistic learning environments where users can practice skills and apply knowledge in a controlled, risk-free setting. These platforms keep the feedback loop tight by providing immediate feedback and opportunities for iterative learning, enhancing the learning experience and retention.</p>
            <ul class="resource-list">
                <li><a href="https://www.codecademy.com/">Codecademy</a> - Interactive coding lessons and projects with real-time feedback.</li>
                <li><a href="https://www.khanacademy.org/">Khan Academy</a> - Free online courses, lessons, and practice for various subjects.</li>
                <li><a href="https://www.coursera.org/">Coursera</a> - Online courses and degrees from top universities and companies with peer reviews and assessments.</li>
                <li><a href="https://www.duolingo.com/">Duolingo</a> - Language learning platform with gamified lessons and immediate feedback.</li>
            </ul>
        </section>
        <section class="resource-section">
            <h2>Boot.dev</h2>
            <p>Boot.dev is an online platform focused on teaching back-end development through interactive, project-based learning. It provides a structured curriculum with real-world projects and exercises that reinforce key concepts and skills needed for back-end development.</p>
            <ul class="resource-list">
                <li><a href="https://boot.dev/">Boot.dev Official Website</a> - Learn more about the platform and start learning back-end development.</li>
                <li><a href="https://boot.dev/blog/">Boot.dev Blog</a> - Articles, tutorials, and tips on back-end development and related topics.</li>
                <li><a href="https://www.youtube.com/channel/UCu8YylsO8pS8pTizZnQwGWw">Boot.dev YouTube Channel</a> - Video tutorials and insights on back-end development.</li>
            </ul>
        </section>
@endsection

@section('scripts')
    <script>
        console.log("Resources page scripts go here.");
    </script>
@endsection