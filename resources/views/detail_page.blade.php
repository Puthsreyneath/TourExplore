@extends('layout.master')

@section('title', 'Detail Page')

@section('content')

<section class="md:w-[90%] w-4/5 mx-auto">
    <div class="mt-5">
        <a href="{{url('/explore')}}"
            class="dark:bg-gray-500 dark:hover:bg-gray-800 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-7 rounded-full">
            Back
<<<<<<< HEAD
        </button>
        @foreach($places as $p)
                    @if($loop->index === 1)
        <h1 class="my-10 font-black text-4xl text-green-700 dark:text-white text-center">
                    {{$p->name}}
                     
        </h1>
        @endif   
        @endforeach   
=======
    </a>
        <h1 class="my-10 font-black text-4xl text-green-700 dark:text-white text-center">Koh kong Mangrove Forest</h1>
>>>>>>> 26cab8822e1abedf99df86d836d2024e05eec581
        <img class="rounded-3xl w-full h-full object-fill"
            src="https://angkorfocus.com/backoffice/uploads/attraction-Koh%20Kong%20Introduction%20Mangrove%20Forest%20Koh%20Kong.jpg"
            alt="">
        <div class="my-5 md:text-2xl space-y-4 text-lg dark:text-white flex flex-col md:w-4/5 md:mx-auto">
            <div class="flex space-x-16">
                <p>Rate:</p>
                <div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
            @foreach($places as $p)
                @if($loop->index === 1)
                    <div class="flex space-x-16">
                        <p>Type:</p>
                        <p>
                            {{$p->category}}
                        </p>
                    </div>
                @endif   
            @endforeach
            
            <div class="flex space-x-9">
                <p>Contact:</p>
                <p>0XX XXX XXXX</p>
            </div>
            <div class="flex space-x-9">
                <p>location:</p>
                <p>st10, No56, vill, commune, city</p>
            </div>
        </div>
    </div>

    <div class="w-full my-10">
        <h2 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Detail</h2>
        <p class="text-xl dark:text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but
            also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing.</p>
    </div>

    <div class="w-full my-10">
        <h1 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Souvenirs</h1>
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper mx-auto w-1/5 md:w-[80%] lg:w-[85%]">
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://i.pinimg.com/originals/81/55/96/8155963678ded9d7871a42dbce37d9ec.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn8Wu5ApwKu5TwGP2a2fQT4RJCmv8rDeyYaQ&usqp=CAU" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://previews.123rf.com/images/packshot/packshot1906/packshot190602009/124826397-siem-reap-kingdom-of-cambodia-august-25-2018-souvenir-at-the-picturesque-market.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3zd-o0aPrK5MN0b1H0QKUXu8afuNJPsElHQ&usqp=CAU" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9EOGHlT42bShNYBrznhlud1TCZpzk3EdhCg&usqp=CAU" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://thumbs.dreamstime.com/b/cambodia-tourism-logo-printed-screen-t-shirt-phnom-penh-jul-sale-souvenir-shop-july-phnom-penh-96030672.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_iB9rwiFtv4YK7UEZIvwOKfClhYrxeN5y1Q&usqp=CAU" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2a3NF-VYGVrpyaPDj6qcTxIpZFXvD60FY3w&usqp=CAU" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-24 h-24 object-fill rounded-full border-[4px] border-green-600"
                        src="https://i.pinimg.com/474x/8e/6c/64/8e6c645210296be1c85d9d9b82adef1c.jpg" alt="">

                </div>
            </div>
            <div class="swiper-button-prev text-green-600 dark:text-gray-800"></div>
            <div class="swiper-button-next text-green-600 dark:text-gray-800"></div>
        </div>
    </div>

    <div class="w-full my-10">
        <h1 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Food</h1>
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper mx-auto w-1/5 md:w-[85%]">
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="https://theculturetrip.com/wp-content/uploads/2017/08/shutterstock_397799917.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="https://wander-lush.org/wp-content/uploads/2019/09/Emily-Lush-Khmer-food-Phnom-Penh-4-2.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="https://static.nationalgeographic.co.uk/files/styles/image_3200/public/eatcambodia_gettyimages-525920101_hr.jpg?w=1600&h=900" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="https://www.topasiatour.com/pic/cambodia/guide/spring-roll-01.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="https://ychef.files.bbci.co.uk/976x549/p09mg60j.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="http://www.sagedining.com/intranet/apps/messages/wp-content/uploads/2019/06/Cambodian-cuisine-blog.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="https://english.cambodiadaily.com/wp-content/uploads/2018/10/5bbd044fdb581.image_.jpg" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="https://foodbuzz.site/api/v1/files/DE59F404-D628-4B71-98C4-8A32FE6A1D1F" alt="">

                </div>
                <div class="swiper-slide">
                    <img class="w-32 h-24 object-fill rounded-3xl border-[4px] border-green-600"
                        src="https://siemreaper.com/wp-content/uploads/2017/10/siem-reap-food-adventures-1.jpg" alt="">

                </div>
            </div>
            <div class="swiper-button-prev text-green-600 dark:text-gray-800"></div>
            <div class="swiper-button-next text-green-600 dark:text-gray-800"></div>
        </div>
    </div>

    <div class="w-full my-10">
        <h1 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Review</h1>
        <div class="flex flex-col space-y-4">
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,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"
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Tiara
                        Sam</h5>
                    <div class="flex items-center mb-3">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,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"
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Tiara
                        Sam</h5>
                    <div class="flex items-center mb-3">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,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"
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Tiara
                        Sam</h5>
                    <div class="flex items-center mb-3">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw4PDg0NDQ0ODQ0NDQ0NDQ0NDQ8ODQ0NFhIXFxYSFhYZHSohGRsmHBYWIjIjJiosLy8vGCA1QDguRSkuLywBCgoKDg0OFhAQFi4eHx4sLC4sLi4uLiwsLiwsLCwsLywsLi4sLC8uLiwuLC4sLiwuLCwuLCwuLiwuLi4uLiwsLv/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAAAQIDBQYHBP/EAEkQAAIBAgEECwwIBQQDAQAAAAABAgMEEQUGEiEWMTRBUXF0gbKz0QcTIlJTVGFykZKT0hUXNUKClKHBIyQyorFDYqPhFHPCM//EABoBAAEFAQAAAAAAAAAAAAAAAAIBAwQFBgD/xAA/EQACAQICBQYMBAUFAAAAAAAAAQIDEQQSITFBUcEFE3KBkaEUMjM0NVJhYnGiscIigoPwIyRE0eEGFUJj8f/aAAwDAQACEQMRAD8A3OCLYIhBF0EZFmlkycUWxiRgi6CAZHkxxiWqIRRbGI2MykR0SDiX6JCSEuCpFEkVSRdMpmGh2JTIpkXSKZhofiVSKpFsymQ4iREqkUzLZlEw0PxK5lEi6RVIcQ/EqkQZZIrkSIjqK5EGSkQkSYjkSDISJMjIkxHEQkVskyDJMBxEBgBIiEwAAHLAm/wLolUC+JhmZqRZAugUxLosBkeRei2LKIskpDbGZIuciqTE5EJSOSOUSM2UzZOUimTHEPRRCbKZsskymTDRIiiubKZstmyiTHEPxK5spmyybKZMNEiKK5srZKTK5DkR+JGRXIkyuRJgOIiyuRNlciTAcRFlciciEiTAcRWyEiTIMkxQ4hEiIyRE5iAYDghv8WWxZTFlkWYVmbki+LLkzzRZNSAGmjKZLslUi6k29HFqMU8McNttmR+jKPiv35dpVkPc8fWqdJnruK8acXOb0YxwxeDeGLw3jR4fDUeZg3BPQnpSetFRVqT5xpPaUfRlHxH78u0X0XR8SXvy7SP0zbeV/sqdgfTVt5X+yp2B83hd0OyIn8f3u8f0TQ8R+/LtIvJFDxZe/LtF9NWvlf7KnYL6btfLf21Ow7m8Luj2RC/mPe7yTyNb+JL4k+0i8iW/iS+JPtD6dtPLf8dTsI/T9n5b/jqfKLkw26PYhf5r3+8byDbeTl8SfaR2P2viS+LPtHsgs/L/ANlT5SOyKy8v/wAdX5TsmG3R7EFfGe/8wPNy18nL4tTtIvNm08lL4s+0eyWy84XuVflDZPY+cL4dT5RcmH3R7EFfHe/8xDYxZ+Tl8Wp2i2LWXkn8Wp2k9lFj5wvcqfKLZTYecr3KnyhKFDYo9iCzY/8A7PmI7FbLycvi1O0jsTsfJy+LU7SzZVk/zmPuVPlFsryf5zH3KnyhKNPchc3KO+p8xXsRsfJS+LU7Q2I2HkZfGq/MT2WZP85j7lT5Q2W5O86Xw6nyhZYbhVLlHfU+Yr2H2HkZfGq/MYPOfNCjTt6le20oypLTnBzcoypr+rBvWmlr5jcMnZQo3MHOhPvkFJwclGUfCSTa1pcKKs4txXnJa/QYVkth1DG4uNeKlUlrSabb26mmcYbIEpbb4yI5FG4GAxD8QRAADlhDfIsnFlEWTUjCFBKJ6FIlpFKkPSEsNuJtOQH/AAI+tU6TJZb3NV/B00Qzef8ALQ9ap0mSy7uar+Dpo0cfNV0PtKT+p/NxNa1EXgV6QORnEi7URvArlgDkVSkEOKISwK5YBKRVKQSHYxFLAqlgTlIpnL0hr4j8YNkZYFTJN8XtINjkdI8o21kWVsk2RbJEUGkQZBkmytskRiOJEWQkSbK5MkxQ4kdJ7nO4p8pn0IGYzj3De8luOrZhu5xuKfKZ9CBmM49w3vJbjq2SFqMbivSD6a+qOMPbfGAb742MkxRt3rIjAQ9FAABIBwQ3JSJKRQpElIwjKdxPSpD0jzqQ9ISwGU3LNrc1P1qnSZLODctb8HTiV5sP+Vh61TpMnnE/5St+DrImhXmy6P2mffnf5+JqOkJyKtIi5GesaFRLXIrlIg5E7S3nWmqdJaUpexLfbe8goxbdkFZJXewr1tpJNtvBJLFt8CRnLDNipPCVeXeo+KtdR/sv1M9kjJFO2jjqlVa8Oo1r4lwIxOV87adNunbRVea1Oo3/AAY+zXLm1ektaWChBZqz6thWSxtWtLJho9f/ALoXWZS1yDa0/wDSU3w1fDx5nq/Q9Tlb0tTdGj6PAgc5vcrXVfHvtxPB/cg+9ww4MI7fPiY7vcR1YqlDRCIa5LrVNNWrx+rR1eNW3qalKjU9ClCZ5bnINpU27eEX41KPenjw+Dt85zCVNeg9NnlO5oNd5uKkEvuaWlT914oNYmnPxlxC/wBpq09NKrZ9a70+BsmU8zJrGVtU0/8AZVaUuaW0+fA1K4pTpycKkZQnHbjJYNG4ZJz2Tap3kNB7XfqSeh+KO2uNY8xsGU8mULymtLCWKxp1qbTlHHfi99ejaCeHhJXgLTx+Iw01DFRut+3u0P6nKGyDZkMs5Kq2tXvdRYxeLhNf0zjwr08K3jGtgKFjQ05RnFSi7p6mJsrbG2QbJEIjqR0zub7inymfQgZnOPcN7yW46tmF7m24p8pn1cDNZx7hveS3HVsdMXivSD6fE4vvvjAN/nYEqKNs9YAAx+KAuIAAOzBubSpE1I86kNSMJYr8pepD0ijSHpCWBym9ZqP+Up+tV6bLc5tx1vwdOJTmk/5Sn61Xpsszo3FX4odZEv15uujwM01/O29/7jRtIi5FekJyKGxpspYsW0km22kkttt7SRv2Q8mRtqevB1ZpSqz9Pir0I13M6x75VlXksY0tUPTVw2+Zf5R7s9cpunTjbU3hOum6jW3GjtYfieriTLTCU404OrLq/ftKnHSlWrLDU+v66fgtPx0bDE5y5fddyoUJYW61Sktus/l/yYDaFtF1pZ1qzcaNOVRrW9FalxvaRGnOVaV2W1GjToU7LQlv+rKWyLZZd21SlLQqwlTlt4SWGK4Vwo87Zyg1rJMbNXQNkWwbJ21tUrTVOlTlUm9ejFYvDhfAh+MQ9CTbKJGXzbzhlZzUJ4ztpPw4bcoN/fh+63zH39hXoNKtSnTcv6dJapcTWpnikyTTvFgVKVPEU8srSi/3oZ1zKdjRvbfRxTjOKqUai16MnHwZr286OT3ttOjUqUai0Zwk4yW9jwr0NYNcZuHc9yw8XZVH4OEqlBt7W/Kn/wDS4pE+6PkvGNO7gvCi1Sq4b8Xjoy5niudcBKaT0lPgJTweKeFm7xl4vx2dup+00Jsg2NsiHFGlR07ua7inymfQgZrOPcN7yW46tmF7mu4Z8pn0IGazj3De8luOrZ23rMTivSEunxRxd7b4wB7b4wJqRtXrGIYh6KAYAMBywhnsRqRViSxMLlIti3SDEqxFiJlOynQ80H/J0/XrdZIszr3FccUOnEqzO3FS9ar1kizOzcNxxU+nEu15D8vAyj8//U+455pCciGJGcimUDWKJ0nNe273aUeGou/S9OnrX9uj7DRcvXnfrqvUxxWm4Q4NCPgr24Y850f/APK31f6NDV+GH/RyaLLPErLCMEUnJS52rWrPbxbfBE2zf8yZ03aYRw01Vn31b+ljqb/Do+w562OlcVKctKlUnSlhg5U5yg2uDUNYdqErss8dhfCKWRO2m/8Ag3Tug1KfeqEXh37vrcPGVPRelzY6PsNGbCrUlOTnUnKpN7c5yc5PnZBscqNTldDmCw3MUVTbva/eNs3budTp6FxFYd+04uXC6WisObHS9qNHbFCrOElOnOVOa2pwk4SXE0OUvwu4WMwzxFGVNO17d2/2HSM/alNWM1PDTlOHeU9vTT21+HS9pzJssubqpVlpVqtSrJLBSnUlNpcCx2ihsfelncn4N4ajzbd9N+22rsLrO7lRrUq0P6qU4TS4cHrXOsVznXsp28bm0rU44SVag+9v0uOMH7cGcZbOw5sVdOxs5PeoU4+6tH9hzUiu5ehkVKtHWnbivocbevnxA9OVKWjcXEFtQuK8FxRm1+x5h9I0GbMk1tOndzXcM+Uz6EDNZx7hveS3HQZhe5ruKfKZ9CBms4tw3vJbjoMal43XxMVivSEunxRxfh4xi33xgWMUbN6xgAh6KAAAAOwlzM4gVaQtIxfNsa0F2I8SnSDSEyC2Ok5m7ipetV6yRZnduC59WHWRKsydw0vWq9ORbnfuC59WHTiWaX8LqMi/SH6n3HNcSM3+5HEGyuUTXpWZ1ur/ABLaWH+pQeH4of8AZyRM6fmrdd9sraW/GnGlLjhq/wAJPnOdZbtXQua9LDBRqS0P/W3pR/Rom4iOZRZRcjrJUrUXrXBtPgeRsKUJTkoQjKc5aoxhFyk+JLbINmUzYypG1uYVKixpyi6U5bbhGTT0lxNLmxGoU7tIvKrlCEpQV2loW8xlSLi3GScZReEoyTjJPgae0QbOg5z5vK7SubZxdZxWpNaFeGGp6XDhtPfWBoN5aVaMnGrTnTa3pQlH2cK9KHubsxnBYynioJx8batq/wAFLYoxlJqMYuUnqUYpyk36EtsttLGtXlo0aU6kn4sJNLje0uNnQs2shU7CnK4uZx77oyc5N/w6FPbaTe/wvm43IwFxuNp4WLctMtkdr+O5HNJpptNNNNpprBp8DRFs9+cWUY3N1XrwWjGUlGGKwbiopKT9LwxMaPKFibSblCMpKzaV1ue1dQdp2LNSk42Fonv0YS97wv3ORWtCVWpTpwWMqk4Qh60ngv8AJ2a5qQtLSco4KNtbvRXohDCK/RIKS0FF/qCd4Uqa1tt8O+7OP5YqadzcyW1K4uJLnqSZ4w49bxeLe+xklRL5KyS3HTu5ruGfKZ9CBmc49w3vJbjq2Ybua7inymfQgZnOPcN7yW46tkaXjv48TFYnz+XS4o4y9/jED2+cC1UTZPWAwEOxiAAAA5lOPbpD0irSDSMs6ZHzF2kGkV6QaQPNi3On5jP+QpetW6yRdnj9n3Pq0+siUZifZ9H1q3WSLc8/s664odZEkW/DYyr9Ifqfccw0haRVpBpEbmjYJm6dz7KWE6tpJ6p/xafrpYSXOkn+Fnpz+yW5QhdwWuC73Ww8TF6MuZtrnXAaLRuJ05wqwejOElOEuCSOr5GynSvbZTwXhJ061N69GWGuL4U8dXCmPxjeNmUOPjLCYmOKgrp6/p3rSvacmbItmezpzfnaS75TTlbTb0Z7bg39yX7PfNebAVNl/RqwrQVSDun++1bTN5DznuLPwFhVo4496m34PDoy+7+q9Btdvn5ZTX8WNWm99ShGccfQ0/2OcNkGyRHTrIuI5Jw9eWaSs960f3Ok3Wf1nFfwoVqr3koqEOdt4r2Gm5ezlubx6M2qdFPGNGGKi3vOT22/09BhxBpbgsNyVh8PLNFXe96RgBls3chVbyroxxjSi06tVrVFcC4W95BpW0k2pUjTi5zdktZm+53kdzqu8mvAo4wpY/erPB4riT9svQZTuj5U0KMLWLenWanPDepJ6vbLD3WbFVqULC11+BQoU0orVpSe8lwyb9rZyPKl/Uua9SvU/qnLFRxxUIL+mK9CR1NOUs24zmFUsfjHiJL8ENXVq6/+T9p4xjAlKJojpvc13FPlM+rgZrOPcN7yW46DMJ3Ntwz5TPoQM3nHuG95LcdBkKp5R/ExeK8/l0uJxfffGA998YFykbFvSAgAdjEFjAQB2ELdINIrxHiUPNkTMTxDSIYi0hObFudWzB+z6PrVuskXZ7fZ11xU+siUdz/7Oo+tW6yRdnv9nXXq0+sgN2/Fb2mZ/rv1PuOUaQtIhiLELmzWJk9I9+RcsVbOsqtLXF+DODbUKkOB8D4Hve1GNxI4iqAsoxnFxkrpnZcl5Ttr+i3DRmmtGrQmk5Qx+7OP77TNYy9mK23Usnq1t0KksOaEn/h+00e0vKtGoqlGpKnOO04PB4cD4V6HqN5yN3QI6oXtNxe136isYv0yi9a5seJHOk9hSPCYnBTc8K80Xs19234rSaVe2VWhLQrUp0nvKcJQx4ntPmPPzHaLXKVpdR0adajXTWunpRlJ8cHr9qK62b1jPbs6C9WmodHAG9tDQ/Dl9R0VaTT9n9nZ9rONltva1KstCnTnUk/uwhKUvYjr1HNuxg8VaUW/90FPpYl9W5tbWOEp0LaK2o4wprmjv8wudbELPl+D0U6bb9r4K/YaRkPMWrPCd2+8w1PvUGnVl6HvR/V8RulWpa2Fvr0KFGH9MUsHKWG0ltyk/azXMr5/UYJxtYOtPyk040l6Uv6pfpxmi5SyjXuanfK9Rzlr0U3hCC4Ix2khxUpS8bQhhYXGY+SliHkgtmru3+2Wk9+cucFS+qLU6dCm33qlj/fLhl/ja4W8OAEqMbaEX9KlClBQgrJCEMB1RCudN7mu4p8pn1cDN5x7hveS3HQZhO5ruKfKZ9XAzecW4bzktx0GV1Tyr+JjcT5/Lp8UcY33xiHvvjEXiRr3rAAGOxiCACAcygkMR4lYYlRkIOYniGJHEMQXALMda7nv2bR9at1ki7Pn7NuvVp9bEp7nn2bR9at1si7Pn7Mu+Kn1sCE/K9fEzj89/P8AcchxDEiBMyGoUxkiIHZAs5ICIC5As49HhxZ6aOULiCwhcV4LghXqRX6M84BZTm1LWrnrqZTupapXVxJcErirL/LPIlv4vF7bx2wAVRtqCjljqVhgIBco5mJAIA1ELOMYsQHFE6503ua7inymp1cDN5x7hveS3HQZhO5ruKfKZ9XAzece4b3ktx0GVVXy7+JjsT57LpcUcY33xiHvvjA0CRrm9ICAY4oggAgHMohQAAVuUqM4wEAmULOdb7nn2bQ9ev1sjM5VyfC6oTt6jkoVFFScGlLU09Tae+jSsws5relb/wDiXNRUJQnOVOc9VOcZPSa0t5pt7foNs2SZP8+tfzEO0qa0JxqSdnrKOvGarSkk9ba7bmG+r6x8e59+n8gfV9ZePc+/T+QzOyTJ/n1r+Yh2hskyf59a/mIdometvYvhGJ9aX76jDfV9ZePc+/T+QPq/sfHuffp/IZnZJk/z61/MQ7Q2R5P8+tfjw7RM9bezvCcT60jDfV9ZePc+/T+QPq+svHuffp/IZnZHk/z61/MQ7Q2R5P8APrX8xDtFz1t7F8JxXrSMP9X9l49x79P5A+r+y8e59+n8hmNkeT/PrX8xDtDZHk/z61/MQ7Ts9bexfCcX60jD/V/ZePc+/T+QPq/svHuPfp/IZnZFYefWv5iHaGyKw89tfzEO07PW3s7wnF+tIw/1f2Xj3HxKfyB9X9l49x8Sn8hmNkVh59bfHp9obIbDz61+PT7Recrb2d4VjPWkYfYBZeNcfEp/KGwCy8a49+n8pmdkNj59bfHp9otkNh59a/Hp9p3OV97F8KxnryMPsAsvGuPiU/kDYBZeNce/T+UzOyCx8+tvj0+0NkFj59bfHp9ovOYjfI7wvGevIeRsk0rOk6NFzcXN1G6jTlpNJbyWrUh5x7hveS3HQZHZBY+fW3x6faa/ndnRa/8Ai1aFCtCvVr03T/hvShCEtUpSktW1jq28TqdOpOotDvcClTrVK0W0221d9eltnOuHjECGaVRNjcBAA7FAgAALYQ84xAQspQZwGIYmULOACGJlCUhgIZ1g1MAEAmUPOS5wEAuUPOA9YhnZQs4+cOcQC2DzjGIAsoWceHpHzsiSCsHmYYMAGGkFmAMAANRFzASEA4kFmAAGKFcQDA4U8oxAR8plswwEAlg1ICQgOyhZhgIYmUPMAAI7KHmGMQxMoakACGLYNSGAgFyh5hjEAWUPMMBDCyhZiQESQSiEpAMQBhpjAAODTGIAOHEyQCA4W55QABoyoDADgwAABCQAAHBkgABBwBgBwYhgAoSAAAIMYDAUNAIACQaGAwCDGIAOCQxgBw4gAAODQgADgj//2Q=="
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Tiara
                        Sam</h5>
                    <div class="flex items-center mb-3">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,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"
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Tiara
                        Sam</h5>
                    <div class="flex items-center mb-3">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center pt-7">
            <button type="button"
                class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Load
                more</button>
        </div>
    </div>

    <div class="w-full my-10">
        <h1 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Other</h1>

        <div class="flex flex-row space-x-5">
            <button
                class="dark:bg-gray-500 dark:hover:bg-gray-800 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-7 rounded-full">
                Shop
            </button>

            <button
                class="dark:bg-gray-500 dark:hover:bg-gray-800 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-7 rounded-full">
                Service
            </button>

        </div>

    </div>

    <div class="my-10">
        <h3 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Feedback</h3>
        <div class="space-y-4 text-xl mb-10">
            <div class="my-5 flex flex-row items-center md:justify-center space-x-4">
                <p>Rate Product:</p>
                <div class="flex flex-row items-center space-x-2 text-2xl">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
            <div>
                <form action="" class="flex space-x-3">
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="write any message..." required>
                    <button type="submit">
                        <svg class="w-10 h-10 text-gray-500 origin-center transform rotate-90 hover:text-green-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection