<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Top 10 Video Games of 2024',
                'content' => 'Discover the most anticipated and best-reviewed video games released in 2024. This year has seen a remarkable lineup of titles across all platforms, from immersive open-world adventures to innovative indie gems. Our list includes games that have pushed the boundaries of storytelling, graphics, and gameplay mechanics. Whether you are a fan of action, RPGs, or puzzle games, there is something for everyone. We dive deep into each game, discussing their unique features, critical reception, and what makes them stand out in a crowded market. Expect detailed breakdowns, developer insights, and community reactions as we count down the very best games you should not miss in 2024.',
                'category_id' => 2,
            ],
            [
                'title' => 'Xbox Series X vs Playstation 5: Which Should You Buy?',
                'content' => 'A detailed comparison between the Xbox Series X and Playstation 5 consoles. In this comprehensive guide, we analyze the hardware specifications, exclusive game libraries, online services, and overall value offered by both next-gen consoles. We also consider factors such as backward compatibility, controller innovations, and ecosystem benefits like Game Pass and PS Plus. Interviews with industry experts and feedback from gamers provide additional perspectives to help you make an informed decision. Whether you prioritize performance, exclusive titles, or multimedia features, our comparison will help you choose the console that best fits your gaming needs in 2024.',
                'category_id' => 3,
            ],
            [
                'title' => 'Playstation Exclusive Games You Can’t Miss',
                'content' => 'A roundup of the best exclusive games available only on Playstation. From cinematic action-adventures to creative platformers, Playstation continues to deliver high-quality experiences that define the platform. We explore the stories, gameplay mechanics, and visual artistry that set these titles apart. Each game is reviewed in-depth, with highlights on what makes them must-plays for any Playstation owner. We also include developer interviews and behind-the-scenes insights to give you a fuller appreciation of these acclaimed exclusives.',
                'category_id' => 4,
            ],
            [
                'title' => 'Nintendo Switch 2 Rumors: What We Know So Far',
                'content' => 'All the latest rumors and leaks about the next Nintendo Switch console. The gaming community is abuzz with speculation about the features, design, and potential release date of the Nintendo Switch 2. We compile information from credible sources, patent filings, and industry insiders to paint a picture of what fans can expect. Topics include possible hardware upgrades, new Joy-Con designs, backward compatibility, and anticipated launch titles. We also discuss how these changes could impact Nintendo’s position in the console market and what it means for current Switch owners.',
                'category_id' => 5,
            ],
            [
                'title' => 'Oscar Winners 2024: Full List',
                'content' => 'See the complete list of winners from the 2024 Academy Awards. This year’s Oscars celebrated a diverse range of films, from big-budget blockbusters to indie darlings. We provide a detailed breakdown of each category, including Best Picture, Best Director, and all major acting awards. Our coverage includes acceptance speeches, red carpet highlights, and reactions from critics and fans alike. We also analyze trends in this year’s nominations and wins, offering insights into the evolving landscape of the film industry.',
                'category_id' => 6,
            ],
            [
                'title' => 'Best Albums Released in 2024',
                'content' => 'A curated list of the best music albums released this year. 2024 has been a standout year for music across genres, with artists pushing creative boundaries and experimenting with new sounds. Our list features albums that have topped charts, received critical acclaim, and resonated with listeners worldwide. Each entry includes a review of standout tracks, production quality, and the artist’s creative journey. We also highlight emerging artists who have made a significant impact with their debut releases.',
                'category_id' => 7,
            ],
            [
                'title' => 'Must-Read Books for Summer 2024',
                'content' => 'Our picks for the best books to read this summer. Whether you’re looking for gripping thrillers, heartwarming romances, or thought-provoking non-fiction, our list has something for every reader. Each recommendation includes a summary, author background, and reasons why it’s a perfect summer read. We also feature interviews with authors and insights into the themes that make these books stand out. Get ready to update your reading list and discover new favorites for the sunny months ahead.',
                'category_id' => 8,
            ],
            [
                'title' => 'Top TV Shows to Binge Watch Right Now',
                'content' => 'A list of the most popular TV shows currently streaming. From gripping dramas to laugh-out-loud comedies, these series have captured the attention of audiences worldwide. We provide in-depth reviews of each show, discussing plotlines, character development, and standout episodes. Our guide also includes recommendations based on your favorite genres and tips for where to watch each series. Whether you’re looking for a new obsession or a quick weekend binge, these shows are sure to keep you entertained.',
                'category_id' => 9,
            ],
            [
                'title' => 'Upcoming Anime Series in 2024',
                'content' => 'A preview of the most anticipated anime series coming this year. Anime fans have a lot to look forward to in 2024, with new adaptations, original stories, and sequels to beloved franchises. We highlight the series generating the most buzz, providing synopses, staff and cast details, and release dates. Our coverage also includes trailers, key visuals, and commentary from creators. Whether you’re a longtime anime enthusiast or new to the genre, our guide will help you keep track of the hottest upcoming releases.',
                'category_id' => 10,
            ],
            [
                'title' => 'Marvel vs DC: Best Comics of the Year',
                'content' => 'A comparison of the best comics released by Marvel and DC. This year has seen both publishers release groundbreaking stories that have thrilled fans and critics alike. We review the top titles from each, analyzing story arcs, artwork, and character development. Our feature also includes interviews with writers and artists, as well as fan reactions from social media. Whether you’re Team Marvel or Team DC, you’ll find plenty to enjoy in this year’s standout comics.',
                'category_id' => 11,
            ],
            [
                'title' => 'Top Mobile Games to Play in 2024',
                'content' => 'The most addictive and fun mobile games you should try. Mobile gaming continues to evolve, offering experiences that rival those on consoles and PC. We showcase the best new releases and updates, covering a range of genres from strategy to puzzle to action. Each game is reviewed for gameplay, graphics, and monetization practices. We also provide tips for getting started and maximizing your enjoyment. Whether you play on iOS or Android, these games are sure to keep you entertained on the go.',
                'category_id' => 12,
            ],
            [
                'title' => 'Latest Tech Gadgets Reviewed',
                'content' => 'Our hands-on reviews of the latest technology gadgets. From smartphones and smartwatches to home automation devices and wearables, we test the newest products to help you make informed buying decisions. Each review covers design, performance, battery life, and unique features. We also compare products within the same category and offer recommendations based on different user needs. Stay ahead of the curve with our expert insights into the tech world’s most exciting innovations.',
                'category_id' => 13,
            ],
            [
                'title' => 'Champions League Final: Match Recap',
                'content' => 'A detailed recap of the Champions League final match. Relive the excitement with our minute-by-minute breakdown, including key plays, goals, and tactical analysis. We highlight standout performances, turning points, and post-match reactions from players and coaches. Our coverage also includes fan celebrations, expert commentary, and a look at what the result means for both teams moving forward. Whether you watched the match live or are catching up, our recap has all the details you need.',
                'category_id' => 14,
            ],
            [
                'title' => 'The Evolution of Video Game Graphics',
                'content' => 'A look at how video game graphics have changed over the years. From pixelated beginnings to photorealistic visuals, we trace the technological advancements that have shaped the gaming industry. Our article covers key milestones, influential games, and the hardware innovations that made them possible. We also discuss the role of art direction and how developers balance realism with creative expression. Interviews with industry veterans provide additional insights into the future of game graphics.',
                'category_id' => 2,
            ],
            [
                'title' => 'Xbox Game Pass: Best Value Games',
                'content' => 'Our picks for the best games available on Xbox Game Pass. With hundreds of titles to choose from, it can be overwhelming to know where to start. We highlight the must-play games across genres, including hidden gems and blockbuster hits. Each recommendation includes a brief review, gameplay tips, and reasons why it’s worth your time. We also discuss the benefits of Game Pass and how it’s changing the way people discover and play games.',
                'category_id' => 3,
            ],
            [
                'title' => 'Playstation VR2: First Impressions',
                'content' => 'A hands-on review of the new Playstation VR2 headset. We test the device’s comfort, visual fidelity, and tracking accuracy across a range of launch titles. Our review covers setup, user interface, and the overall VR experience compared to previous generations. We also interview early adopters and developers to get their take on the hardware’s strengths and areas for improvement. If you’re considering diving into virtual reality, our impressions will help you decide if the PS VR2 is right for you.',
                'category_id' => 4,
            ],
            [
                'title' => 'Nintendo Direct: Biggest Announcements',
                'content' => 'Highlights from the latest Nintendo Direct presentation. Nintendo fans were treated to a host of exciting announcements, including new game reveals, updates on anticipated titles, and surprise releases. We summarize all the major news, provide trailers and gameplay footage, and offer analysis on what these announcements mean for the future of Nintendo. Our coverage also includes community reactions and speculation about what’s next for the company.',
                'category_id' => 5,
            ],
            [
                'title' => 'Best Movies to Watch on Netflix',
                'content' => 'A list of the best movies currently available on Netflix. From critically acclaimed dramas to action-packed blockbusters, Netflix’s library has something for every taste. We review each film, highlighting standout performances, direction, and storytelling. Our guide also includes recommendations for different moods and occasions, as well as tips for discovering hidden gems. Whether you’re planning a movie night or just looking for something new, our list will help you find the perfect film.',
                'category_id' => 6,
            ],
            [
                'title' => 'Music Festivals You Can’t Miss in 2024',
                'content' => 'A guide to the biggest music festivals happening this year. 2024’s festival season promises unforgettable performances, diverse lineups, and unique experiences for music lovers. We profile the top events around the world, including headliners, ticket information, and travel tips. Our guide also features interviews with organizers and artists, as well as advice for making the most of your festival experience. Whether you’re a seasoned festival-goer or attending your first event, you’ll find all the information you need here.',
                'category_id' => 7,
            ],
            [
                'title' => 'Award-Winning Novels of 2024',
                'content' => 'A roundup of novels that have won major literary awards this year. We review each book, discussing themes, writing style, and what sets it apart from the competition. Our feature includes interviews with authors, judges’ comments, and insights into the selection process. Whether you’re looking for your next great read or want to stay up-to-date with the literary world, our guide has you covered.',
                'category_id' => 8,
            ],
            [
                'title' => 'TV Shows Renewed for Another Season',
                'content' => 'Find out which TV shows have been renewed for new seasons. We provide a comprehensive list of returning favorites, along with details on upcoming storylines, cast changes, and production updates. Our coverage also includes fan reactions and speculation about what’s in store for each series. Stay informed about your favorite shows and get ready for more binge-worthy content in the coming year.',
                'category_id' => 9,
            ],
            [
                'title' => 'Anime Movies Premiering This Summer',
                'content' => 'A list of anime movies set to premiere this summer. We highlight the most anticipated releases, providing synopses, staff and cast information, and trailers. Our guide also includes recommendations based on genre and audience, as well as insights from industry insiders. Whether you’re a fan of action, romance, or fantasy, there’s an anime movie for you this summer.',
                'category_id' => 10,
            ],
            [
                'title' => 'Classic Comics Every Fan Should Read',
                'content' => 'Essential comic books that every fan should have in their collection. We explore influential works from both mainstream and independent publishers, discussing their impact on the medium and why they remain relevant today. Each recommendation includes a summary, creative team details, and suggestions for further reading. Whether you’re new to comics or a longtime collector, our list will help you discover timeless stories and unforgettable characters.',
                'category_id' => 11,
            ],
            [
                'title' => 'Mobile Photography: Tips and Tricks',
                'content' => 'Improve your mobile photography with these expert tips. We cover everything from composition and lighting to editing apps and accessories. Our guide includes step-by-step tutorials, before-and-after examples, and advice from professional photographers. Whether you’re shooting for social media or personal memories, these tips will help you take stunning photos with your smartphone.',
                'category_id' => 12,
            ],
            [
                'title' => 'AI in Everyday Technology',
                'content' => 'How artificial intelligence is changing the tech landscape. We explore the ways AI is being integrated into devices and services we use daily, from virtual assistants to smart home gadgets. Our article covers the benefits and challenges of AI adoption, as well as ethical considerations and future trends. Interviews with experts and real-world examples illustrate how AI is making life easier, more efficient, and sometimes more complicated.',
                'category_id' => 13,
            ],
            [
                'title' => 'Premier League Highlights',
                'content' => 'Catch up on the latest highlights from the Premier League. We provide match summaries, standout goals, and key moments from recent fixtures. Our coverage also includes player statistics, team analysis, and expert commentary. Whether you missed the action or want to relive the excitement, our highlights have you covered.',
                'category_id' => 14,
            ],
            [
                'title' => 'Retro Video Games Making a Comeback',
                'content' => 'Old-school games that are popular again in 2024. We look at the resurgence of classic titles, remasters, and retro-inspired releases. Our article explores why these games are finding new audiences, the role of nostalgia, and how modern technology is enhancing the retro experience. Interviews with developers and fans provide additional perspectives on this growing trend.',
                'category_id' => 2,
            ],
            [
                'title' => 'Xbox Cloud Gaming: Is It Worth It?',
                'content' => 'A review of the Xbox Cloud Gaming service. We test the platform’s performance, game selection, and ease of use across different devices. Our review covers the pros and cons of cloud gaming, including latency, graphics quality, and subscription value. We also compare Xbox Cloud Gaming to competing services and offer recommendations for who should consider making the switch.',
                'category_id' => 3,
            ],
            [
                'title' => 'Playstation Store: Best Deals This Month',
                'content' => 'The best discounts and deals on the Playstation Store. We scour the latest sales to bring you the top bargains on games, DLC, and subscriptions. Each deal is reviewed for value, with recommendations based on genre and popularity. Our guide also includes tips for maximizing your savings and alerts for upcoming promotions.',
                'category_id' => 4,
            ],
            [
                'title' => 'Nintendo Indie World: Top Picks',
                'content' => 'Our favorite indie games featured in the latest Nintendo Indie World. We highlight standout titles, providing gameplay impressions, developer backgrounds, and reasons why each game deserves your attention. Our coverage also includes interviews with indie developers and tips for discovering hidden gems on the Nintendo eShop.',
                'category_id' => 5,
            ],
        ];

        foreach ($posts as $key => $post) {
            Post::create([
                'title' => $post['title'],
                'content' => $post['content'],
                'status' => $key % 2 == 0 ? 'published' : 'unpublished',
                'author_id' => rand(1, 20),
                'category_id' => $post['category_id'],
                'published_at' => now()->addMinutes($key),
                'created_at' => now()->addMinutes($key),
            ]);
        }
    }
}
