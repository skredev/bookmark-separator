<!--
MIT License

Copyright (c) 2024 Samuel Krebs

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->

<!DOCTYPE html>

<?php

?>

<html lang="en" class="bg-zinc-950">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark Separator</title>
    <?php
        if(isset($_GET['horizontal']) || @$_GET['t'] == 'horizontal'){
            echo '<link rel="icon" href="./assets/images/horizontal.svg" sizes="any" type="image/svg+xml">';
        }else if(isset($_GET['vertical']) || @$_GET['t'] == 'vertical'){
            echo '<link rel="icon" href="./assets/images/vertical.svg" sizes="any" type="image/svg+xml">';
        }else{
            echo '<link rel="icon" type="image/x-icon" href="./assets/icons/favicon.ico">';
        }
    ?>

    <link rel="stylesheet" href="./assets/styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <meta http-equiv="content-Type" content="text/html; utf-8">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta http-equiv="content-Language" content="en">
    <meta name="title" content="SKre.dev">
    <meta name="description" content="Easy-to-use browser bookmark separator">
    <meta name="author" content="Samuel Krebs">
    <meta name="publisher" content="Samuel Krebs">
    <meta name="copyright" content="skre.dev">
    <meta name="page-topic" content="Tool">
    <meta http-equiv="Reply-to" content="hi@skre.dev">
    <meta name="expires" content="">
    <meta name="revisit-after" content="7 days">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://separator.skre.dev">
    <meta property="og:title" content="SKre.dev">
    <meta property="og:description" content="Easy-to-use browser bookmark separator">
    <meta property="og:image" content="https://separator.skre.dev/content/meta-tags.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://separator.skre.dev">
    <meta property="twitter:title" content="SKre.dev">
    <meta property="twitter:description" content="Easy-to-use browser bookmark separator">
    <meta property="twitter:image" content="https://separator.skre.dev/content/meta-tags.png">
</head>
<body class="sm:container mx-auto w-[85vw] h-auto">
    <div class="flex sm:min-h-[91vh] min-h-[88vh] flex-col items-center justify-center text-center px-2 py-8">
        <a href="https://github.com/sprechblase/bookmark-separator" class="text-zinc-50 mb-5 sm:text-lg flex items-center gap-2 underline underline-offset-4">Follow along on GitHub
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-zinc-50 lucide lucide-move-up-right w-4 h-4 font-extrabold"><path d="M13 5H19V11"></path><path d="M19 5L5 19"></path></svg>
        </a>
        <h1 class="text-zinc-50 text-2xl font-bold mb-8 sm:text-6xl">Bookmark Separator</h1>
        <p class="text-zinc-400 mb-4 sm:text-xl max-w-[800px] text-muted-foreground">For a vertical separator <a class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm text-zinc-950 font-bold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-zinc-50 text-zinc-50-foreground hover:bg-zinc-50/90 h-11 rounded-md px-8 px-6" href="/?vertical">DRAG ME</a> into your bookmarks</p>
        <p class="text-zinc-400 mb-4 sm:text-xl max-w-[800px] text-muted-foreground">For a horizontal separator <a class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm text-zinc-950 font-bold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-zinc-50 text-zinc-50-foreground hover:bg-zinc-50/90 h-11 rounded-md px-8 px-6" href="/?horizontal">DRAG ME</a> into your bookmarks</p>
    </div>
</body>
</html>