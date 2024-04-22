<x-app-layout>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;

        }

        .nav-links {
            display: flex;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 36px;
            color: #333;
            margin: 0;
        }

        .portfolio-items {
            cursor: pointer;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .portfolio-item {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .portfolio-item:hover {
            transform: translateY(-5px);
        }

        .portfolio-item img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #eee;
        }

        .portfolio-item-content {
            padding: 20px;
        }

        .portfolio-item-title {
            font-size: 20px;
            color: #333;
            margin: 0;
        }

        .portfolio-item-description {
            font-size: 16px;
            color: #666;
            margin-top: 10px;
        }

        footer {
            height: 26vh;
            margin: 0 1rem;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div class="container">
        <div class="header">
            <h1>Welcome to My Portfolio</h1>
            <p>Check out some of my latest work below</p>
        </div>
        <div class="portfolio-items">
            <div class="portfolio-item">
                <img src="portfolio_item_1.jpg" alt="Portfolio Item 1">
                <div class="portfolio-item-content">
                    <h2 class="portfolio-item-title">Project 1</h2>
                    <p class="portfolio-item-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus a voluptas voluptates, odio adipisci, non numquam, aut aliquam nam eos dolor ducimus. Nam nobis aut vitae officiis officia reiciendis omnis.</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="portfolio_item_2.jpg" alt="Portfolio Item 2">
                <div class="portfolio-item-content">
                    <h2 class="portfolio-item-title">Project 2</h2>
                    <p class="portfolio-item-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum qui, alias placeat, veniam illo quibusdam, beatae sint corporis dicta asperiores culpa velit! Laborum quos deserunt nam, cum consequatur provident maxime!</p>
                </div>
            </div>
            <!-- Add more portfolio items as needed -->
        </div>
    </div>

</x-app-layout>
<footer>
    <p>Copyright &#169; 2023 Joseph Appenteng. All Rights Reserved.</p>
    <a href="http://"><i class="fa-brands fa-linkedin"></i></a>
</footer>