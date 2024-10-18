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
        #playButton {
            display: none;
            margin-top: 20px;
            background-color: #4FC3F7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')
		<section id="declutter" class="container">
            <h1>Proven Ways to Declutter Your Mind</h1>
            <p>Discover effective methods to clear your mind and achieve mental clarity.</p>
            
            <h2>Doing Things You've Been Putting Off</h2>
            <p>Procrastination can lead to mental clutter and stress. Completing tasks you've been putting off can provide a sense of accomplishment and mental relief. According to a study by the American Psychological Association, reducing procrastination can improve mental well-being and productivity. (<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10049005/" target="_blank" style="color: #4FC3F7;">APA Study</a>)</p>
            
            <h2>Writing</h2>
            <p>Journaling or writing down your thoughts helps in organizing your mind and relieving stress. Studies have shown that expressive writing can improve psychological and physical health. It's a way to process emotions and experiences, leading to greater clarity and understanding. (<a href="https://dayoneapp.com/blog/mental-health-journaling/" target="_blank" style="color: #4FC3F7;">Psychology Today</a>)</p>
            
            <h2>Meditation Area</h2>
            <p>Explore guided meditations for clarity and gratitude inspired by Shiva’s 112 Meditation Techniques. Meditation can reduce stress, improve focus, and enhance emotional well-being. Techniques such as mindfulness meditation and gratitude meditation are effective for mental clarity and emotional balance.</p>
            
            <h3>Breath Awareness Meditation</h3>
            <p>Focus on your breath. Inhale deeply and exhale slowly. Pay attention to the sensation of the air entering and leaving your nostrils. This technique helps in grounding yourself and bringing attention to the present moment.</p>
            
            <h3>Trataka (Candle Gazing) Meditation</h3>
            <p>Sit comfortably and place a lit candle at eye level, about a foot away from you. Gaze steadily at the flame without blinking. This technique enhances concentration and calms the mind.</p>
            
            <h3>Sound Meditation</h3>
            <p>Close your eyes and focus on a particular sound, like "AUM" or any natural sound such as birds chirping or waves crashing. Let the sound vibrate through your being, creating a state of inner harmony.</p>
            
            <h2>Ambient Music</h2>
            <p>Listening to ambient music can help soothe your mind and enhance concentration. Research indicates that ambient music can improve focus and relaxation, making it a valuable tool for mental clarity. While ambient music can be stereotyped as meditative or calming, it is a blurring of space and time — bridging the gaps between noise and silence, helping us to find solace. (<a href="https://www.frontiersin.org/journals/psychology/articles/10.3389/fpsyg.2023.1171939/full" target="_blank" style="color: #4FC3F7;">NCBI Study</a>)</p>
            <audio id="ambientAudio" autoplay loop>
                <source src="{{ asset('audio/Structures_From_Silence.mp3') }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <button id="playButton">Play Ambient Music</button>
        </section>
@endsection

@section('scripts')
	<script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('ambientAudio');
            var playButton = document.getElementById('playButton');

            var playPromise = audio.play();

            if (playPromise !== undefined) {
                playPromise.then(_ => {
                    console.log('Audio is playing');
                }).catch(error => {
                    console.log('Autoplay was prevented');
                    playButton.style.display = 'block';
                });

                playButton.addEventListener('click', function () {
                    audio.play();
                    playButton.style.display = 'none';
                });
            }
        });
    </script>
@endsection

