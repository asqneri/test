<?php

class Page
{
    protected string $name;
    protected string $template;

    public function __construct()
    {
        $this->name = "page";
        $this->template = "Сделайте выбор";
    }

    public function render(): void
    {
        echo $this->template;
    }
}

class BlogPage extends Page
{
    public function __construct()
    {
        $this->name = "blog";
        $this->template = "
        <div style='display: flex; justify-content: space-evenly;'>
            <div style='border:1px solid #ccc; width:300px; margin-bottom:20px; padding:10px;'>
                <img src='https://img.championat.com/i/o/u/17588865071944996032.jpg' style='width:100%;'>
                <h3>Лучшие аниме 2026 года</h3>
                <p>Подборка самых ожидаемых и популярных аниме 2026 года.</p>
                <p>Аниме</p>
            </div>

            <div style='border:1px solid #ccc; width:300px; margin-bottom:20px; padding:10px;'>
                <img src='https://static.rustore.ru/imgproxy/-0AZtWxSfoTw9HwQAU2MUzqZV7zSZH-EfFg6Et2lY6k/plain/https://static.rustore.ru/rustore-strapi/9/01_Kak_igrat_v_Genshin_Impact_a44a38bec5.webp@webp' style='width:100%;'>
                <h3>Лучшие сборки Genshin Impact 2026</h3>
                <p>Актуальные билды персонажей и лучшие артефакты.</p>
                <p>Genshin</p>
            </div>
        </div>
        ";
    }
}

class MusicPage extends Page
{
    public function __construct()
    {
        $this->name = "music";
        $this->template = "
        <div>
            <iframe style='border-radius:12px'
                    width='100%'
                    src='https://open.spotify.com/embed/track/4l3z5vr4sgHuY6IMWzsgnN?si=5bd09bb21f404bf1'
                    height='152'
                    frameBorder='0'
                    allowfullscreen=''
                    allow='autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture'>
                    </iframe>
        </div>
        ";
    }
}

echo "<a href='?page=page'>Home</a><br>";
echo "<a href='?page=music'>Music</a><br>";
echo "<a href='?page=blog'>Blog</a><br><br>";

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'page') {
        $page = new Page();
        $page->render();
    }

    if ($_GET['page'] == 'blog') {
        $page = new BlogPage();
        $page->render();
    }

    if ($_GET['page'] == 'music') {
        $page = new MusicPage();
        $page->render();
    }
}

?>
