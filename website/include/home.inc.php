<style>
    /* CSS styles for the custom-named div */
    .guideshowcase-div {
        color: #333; /* Text color */
        padding: 20px;
        border-radius: 10px;
        margin: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        display: flex; /* Use flexbox to arrange content and image side by side */
        gap: 6%;
        align-items: center; /* Vertically center content and image */
        background-color: #f9f9f9;
    }

    /* CSS styles for the headings and text within the custom div */
    .guideshowcase-div h2 {
        font-size: 24px;
    }

    .guideshowcase-div p {
        font-size: 16px;
    }

    /* CSS styles for the image */
    .guideshowcase-image {
        max-width: 50%;
        height: auto;
        margin-left: 20px; /* Adjust this to control the space between the image and content */
    }

    /* Media query for screens narrower than 768px (typical phone screens) */
    @media (max-width: 850px) {
        .guideshowcase-div {
            flex-direction: column; /* Stack divs on top of each other */
            align-items: flex-start; /* Align content to the left */
        }

        .guideshowcase-image {
            margin-left: 0; /* Remove left margin for the image */
            margin-top: 20px; /* Add top margin to separate the image from content */
            max-width: 100%; /* Make the image full-width */
        }
    }
</style>

<div class="guideshowcase-div">
    <div>
        <h2>Why Try This Guide?</h2>
        <p>Our guide is designed to help you make informed decisions when choosing your first drone. It provides personalized recommendations based on your preferences and needs.</p>

        <h2>Who Should Use It?</h2>
        <p>Our guide is perfect for anyone who is new to the world of drones and is looking for guidance on selecting the right drone for their specific use case. Whether you're a beginner or an experienced pilot, our guide can assist you.</p>

        <h2>Time It Takes</h2>
        <p>Using our guide is quick and easy. Answer a few questions, and you'll receive tailored recommendations in just a few minutes. We understand your time is valuable.</p>
    </div>
    <div>
        <h2>What Kind of Answers You Get</h2>
        <p>Our guide provides you with personalized drone recommendations based on your experience level, budget, flying goals, and more. You'll receive specific drone models and features that match your needs.</p>

        <h2>Simplified Decision-Making for All</h2>
        <p>Our simplified questions and options have extra info build in so you can make better decisions!</p>
        
        <img src="media/your-background-image.png" alt="Your Image Description" class="guideshowcase-image">
    </div>
</div>