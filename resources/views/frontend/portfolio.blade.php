@extends('layouts.index')

@section('content')
    <div class="m_portfolio">
        <div class="m_portfolio_item" animate>
            <div class="m_portfolio_text">
                <div class="m_title">
                    <span>Мария в полях</span>
                </div>
                <div class="m_description">
                    Мария долго гуляла по полям и смотрите что произошло
                </div>
            </div>
            <div class="m_portfolio_image">
                <img width="60%" src="{{ asset('img/photos/1.jpg') }}" alt="">
            </div>
        </div>
        <div class="m_portfolio_item" animate>
            <div class="m_portfolio_text">
                <div class="m_title">
                    <span>Свадебное племя</span>
                </div>
                <div class="m_description">
                    Племя говорит по не русски и тут всякая чепуха
                </div>
            </div>
            <div class="m_portfolio_image">
                <img width="60%" src="{{ asset('img/photos/5.jpg') }}" alt="">
            </div>
        </div>
        <div class="m_portfolio_item" animate>
            <div class="m_portfolio_text">
                <div class="m_title">
                    <span>Другая графа</span>
                </div>
                <div class="m_description">
                    Тут может быть другая графа и тут чекай ее
                </div>
            </div>
            <div class="m_portfolio_image">
                <img width="60%" src="{{ asset('img/photos/6.jpg') }}" alt="">
            </div>
        </div>
        <div class="m_portfolio_item" animate>
            <div class="m_portfolio_text">
                <div class="m_title">
                    <span>Мария в полях</span>
                </div>
                <div class="m_description">
                    Мария долго гуляла по полям и смотрите что произошло
                </div>
            </div>
            <div class="m_portfolio_image">
                <img width="60%" src="{{ asset('img/photos/4.jpg') }}" alt="">
            </div>
        </div>
        <div class="m_portfolio_item" animate>
            <div class="m_portfolio_text">
                <div class="m_title">
                    <span>Свадебное племя</span>
                </div>
                <div class="m_description">
                    Племя говорит по не русски и тут всякая чепуха
                </div>
            </div>
            <div class="m_portfolio_image">
                <img width="60%" src="{{ asset('img/photos/7.jpg') }}" alt="">
            </div>
        </div>
        <div class="m_portfolio_item" animate>
            <div class="m_portfolio_text">
                <div class="m_title">
                    <span>Другая графа</span>
                </div>
                <div class="m_description">
                    Тут может быть другая графа и тут чекай ее
                </div>
            </div>
            <div class="m_portfolio_image">
                <img width="60%" src="{{ asset('img/photos/3.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <script>
        function onEntry (entry) {
            entry.forEach(change => {
                if (change.isIntersecting) {
                    change.target.classList.add('show')
                }
                if (!change.isIntersecting) {
                    change.target.classList.remove('show')
                }
            })
        }

        let options = { threshold: [0.5] }
        let observer = new IntersectionObserver(onEntry, options)
        let elements = document.querySelectorAll('[animate]')
        console.log(elements)
        for (let elm of elements) {
            observer.observe(elm)
        }
    </script>
@endsection


