<template>
    <header class="header">
        <div class="menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h2 class="title">peopleanswers</h2>
        <div class="search">
            <label for="search"><i class="ri-search-2-line"></i></label>
            <div class="input" id="search">
                <input type="text" placeholder="What is find..." />
            </div>
        </div>
    </header>
    <nav class="navigation">
        <ul class="nav">
            <li :class="`list`">
                <a href="{{ route('home') }}" class="link"> features </a>
            </li>
            <li :class="`list`">
                <a href="{{ route('dashboard.style') }}" class="link">
                    style
                </a>
            </li>
            <li :class="`list`">
                <a href="{{ route('dashboard.travel') }}" class="link">
                    travel
                </a>
            </li>
            <li :class="`list`">
                <a href="{{ route('dashboard.opinion') }}" class="link">
                    opinion
                </a>
            </li>
        </ul>
    </nav>
</template>
