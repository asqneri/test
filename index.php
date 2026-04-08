<?php

class Page
{
    protected string $name;
    protected string $template;

    public function __construct()
    {
        $this->name = "page";
        $this->template = "<div><p>It is a default page</p></div>";
    }

    public function render(): void
    {
        echo $this->template;
    }
}

$page = new Page();
$page->render();

?>
